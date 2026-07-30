window.virtualInput = { up: false, down: false, left: false, right: false, action: false, actionJustPressed: false };

class MainScene extends Phaser.Scene {
    constructor() {
        super({ key: 'MainScene' });
    }

    preload() {
        // Player spritesheet
        this.load.spritesheet('abigail', 'assets/stardewAssets/Abigail.png', { frameWidth: 16, frameHeight: 32 });
        
        // Background texture
        this.load.image('farm-map', 'assets/stardewAssets/farm-map.png');
        
        // NPCs
        this.load.spritesheet('george', 'assets/stardewAssets/George.png', { frameWidth: 16, frameHeight: 32 });
        this.load.spritesheet('gil', 'assets/stardewAssets/Gil.png', { frameWidth: 16, frameHeight: 32 });
        this.load.spritesheet('governor', 'assets/stardewAssets/Governor.png', { frameWidth: 16, frameHeight: 32 });
    }

    create() {
        // Add the massive farm map background
        const bg = this.add.image(0, 0, 'farm-map').setOrigin(0, 0);
        bg.setScale(1.5);

        // Set physics world bounds to match the scaled image dimensions
        this.physics.world.setBounds(0, 0, bg.width * bg.scaleX, bg.height * bg.scaleY);

        // Add player and configure physics
        this.player = this.physics.add.sprite(bg.width * bg.scaleX * 0.72, bg.height * bg.scaleY * 0.25, 'abigail');
        this.player.setScale(1.5);
        this.player.setCollideWorldBounds(true);

        // Player animations
        this.anims.create({
            key: 'walk-down',
            frames: this.anims.generateFrameNumbers('abigail', { start: 0, end: 3 }),
            frameRate: 8,
            repeat: -1
        });

        this.anims.create({
            key: 'walk-right',
            frames: this.anims.generateFrameNumbers('abigail', { start: 4, end: 7 }),
            frameRate: 8,
            repeat: -1
        });

        this.anims.create({
            key: 'walk-up',
            frames: this.anims.generateFrameNumbers('abigail', { start: 8, end: 11 }),
            frameRate: 8,
            repeat: -1
        });

        this.anims.create({
            key: 'walk-left',
            frames: this.anims.generateFrameNumbers('abigail', { start: 12, end: 15 }),
            frameRate: 8,
            repeat: -1
        });

        // Initialize keyboard cursors and WASD support
        this.cursors = this.input.keyboard.createCursorKeys();
        this.wasd = this.input.keyboard.addKeys({
            up: Phaser.Input.Keyboard.KeyCodes.W,
            down: Phaser.Input.Keyboard.KeyCodes.S,
            left: Phaser.Input.Keyboard.KeyCodes.A,
            right: Phaser.Input.Keyboard.KeyCodes.D
        });
        
        // Track the last direction for idle frames
        this.lastDirection = 'down';

        // Camera setup
        this.cameras.main.setBounds(0, 0, bg.width * bg.scaleX, bg.height * bg.scaleY);
        this.cameras.main.startFollow(this.player, true, 0.05, 0.05);
        this.cameras.main.setZoom(1.8); // Can be tweaked between 1.5 and 2.5

        // NPC Placement & Collisions
        this.npcs = this.physics.add.staticGroup();
        
        const george = this.npcs.create(bg.width * bg.scaleX * 0.5, bg.height * bg.scaleY * 0.5, 'george'); 
        george.setScale(1.5); 
        george.refreshBody();
        
        const gil = this.npcs.create(bg.width * bg.scaleX * 0.2, bg.height * bg.scaleY * 0.8, 'gil'); 
        gil.setScale(1.5); 
        gil.refreshBody();
        
        const gov = this.npcs.create(bg.width * bg.scaleX * 0.35, bg.height * bg.scaleY * 0.2, 'governor'); 
        gov.setScale(1.5); 
        gov.refreshBody();

        // Add collision between player and NPCs
        this.physics.add.collider(this.player, this.npcs);

        // Dialog interactions setup
        this.spaceKey = this.input.keyboard.addKey(Phaser.Input.Keyboard.KeyCodes.SPACE);
        this.isDialogActive = false;

        this.npcDialogs = {
            'george': { name: 'George (About Me)', text: 'Halo! Saya Farhan, seorang web developer yang sangat passionate dalam membangun <b>HTML5 web apps</b> dan <b>games</b>.<br><br>Senang bertemu dengan Anda!' },
            'gil': { name: 'Gil (Projects)', text: 'Silakan lihat proyek-proyek yang sudah saya selesaikan!<br><br>&#x2022; <a href="case-study-booking.html" target="_blank">Booking App</a><br>&#x2022; <a href="case-study-dashboard.html" target="_blank">Admin Dashboard</a><br>&#x2022; <a href="case-study-lumina.html" target="_blank">Lumina Case Study</a>' },
            'governor': { name: 'Governor (Contact)', text: 'Ingin berkolaborasi? Mari buat sesuatu yang luar biasa bersama!<br><br><a href="https://github.com/farhan" target="_blank">GitHub</a> | <a href="https://linkedin.com/in/farhan" target="_blank">LinkedIn</a>' }
        };

        george.name = 'george';
        gil.name = 'gil';
        gov.name = 'governor';

        // Store world dimensions and NPCs
        this.worldWidth = bg.width * bg.scaleX;
        this.worldHeight = bg.height * bg.scaleY;
        this.npcPositions = { george: george, gil: gil, gov: gov };
        this.startPos = { x: this.worldWidth * 0.72, y: this.worldHeight * 0.25 };

        // Bind Navbar Buttons
        document.getElementById('nav-home').onclick = () => this.player.setPosition(this.startPos.x, this.startPos.y);
        document.getElementById('nav-about').onclick = () => this.player.setPosition(this.npcPositions.george.x, this.npcPositions.george.y + 60);
        document.getElementById('nav-projects').onclick = () => this.player.setPosition(this.npcPositions.gil.x, this.npcPositions.gil.y + 60);
        document.getElementById('nav-contact').onclick = () => this.player.setPosition(this.npcPositions.gov.x, this.npcPositions.gov.y + 60);
        
        // Map Toggle
        const mapOverlay = document.getElementById('map-overlay');
        document.getElementById('nav-map').onclick = () => mapOverlay.classList.remove('hidden');
        document.getElementById('close-map').onclick = () => mapOverlay.classList.add('hidden');
    }

    update() {
        // Live Map Marker tracking
        const mapOverlay = document.getElementById('map-overlay');
        if (!mapOverlay.classList.contains('hidden')) {
            const percentX = (this.player.x / this.worldWidth) * 100;
            const percentY = (this.player.y / this.worldHeight) * 100;
            const marker = document.getElementById('player-marker');
            marker.style.left = percentX + '%';
            marker.style.top = percentY + '%';
        }

        if (Phaser.Input.Keyboard.JustDown(this.spaceKey) || window.virtualInput.actionJustPressed) {
            window.virtualInput.actionJustPressed = false;
            if (this.isDialogActive) {
                this.closeDialog();
            } else {
                this.checkNPCInteraction();
            }
        }

        if (this.isDialogActive) {
            this.player.setVelocity(0);
            this.player.anims.stop();
            return;
        }

        // Reset velocity every frame
        this.player.setVelocity(0);

        let speed = 150;
        let isMoving = false;

        // Listen for Up, Down, Left, Right (and WASD) keys
        if (this.cursors.left.isDown || this.wasd.left.isDown || window.virtualInput.left) {
            this.player.setVelocityX(-speed);
            this.player.anims.play('walk-left', true);
            this.lastDirection = 'left';
            isMoving = true;
        } else if (this.cursors.right.isDown || this.wasd.right.isDown || window.virtualInput.right) {
            this.player.setVelocityX(speed);
            this.player.anims.play('walk-right', true);
            this.lastDirection = 'right';
            isMoving = true;
        } else if (this.cursors.up.isDown || this.wasd.up.isDown || window.virtualInput.up) {
            this.player.setVelocityY(-speed);
            this.player.anims.play('walk-up', true);
            this.lastDirection = 'up';
            isMoving = true;
        } else if (this.cursors.down.isDown || this.wasd.down.isDown || window.virtualInput.down) {
            this.player.setVelocityY(speed);
            this.player.anims.play('walk-down', true);
            this.lastDirection = 'down';
            isMoving = true;
        }

        // If no keys are pressed, stop animation and set idle frame
        if (!isMoving) {
            this.player.anims.stop();
            if (this.lastDirection === 'down') {
                this.player.setFrame(0);
            } else if (this.lastDirection === 'right') {
                this.player.setFrame(4);
            } else if (this.lastDirection === 'up') {
                this.player.setFrame(8);
            } else if (this.lastDirection === 'left') {
                this.player.setFrame(12);
            }
        }
    }

    checkNPCInteraction() {
        const interactionRange = 100;
        let closestNPC = null;
        let closestDist = interactionRange;

        this.npcs.getChildren().forEach(npc => {
            const dist = Phaser.Math.Distance.Between(this.player.x, this.player.y, npc.x, npc.y);
            if (dist < closestDist) {
                closestDist = dist;
                closestNPC = npc;
            }
        });

        if (closestNPC) {
            this.showDialog(this.npcDialogs[closestNPC.name]);
        }
    }

    showDialog(dialogData) {
        if (!dialogData) return;
        
        this.isDialogActive = true;
        
        document.getElementById('dialog-name').innerText = dialogData.name;
        document.getElementById('dialog-content').innerHTML = dialogData.text;
        document.getElementById('ui-layer').classList.remove('hidden');
    }

    closeDialog() {
        this.isDialogActive = false;
        document.getElementById('ui-layer').classList.add('hidden');
    }
}

// Phaser 3 Game Configuration
const config = {
    type: Phaser.AUTO,
    scale: {
        mode: Phaser.Scale.RESIZE,
        parent: 'game-container',
        width: '100%',
        height: '100%'
    },
    pixelArt: true,
    physics: {
        default: 'arcade',
        arcade: {
            debug: false
        }
    },
    scene: [MainScene]
};

// Initialize Game
const game = new Phaser.Game(config);

function setupMobileControls() {
    const bindBtn = (id, key) => {
        const btn = document.getElementById(id);
        if (!btn) return;
        const press = (e) => { e.preventDefault(); window.virtualInput[key] = true; if(key === 'action') window.virtualInput.actionJustPressed = true; };
        const release = (e) => { e.preventDefault(); window.virtualInput[key] = false; };
        
        btn.addEventListener('touchstart', press, {passive: false});
        btn.addEventListener('mousedown', press, {passive: false});
        btn.addEventListener('touchend', release, {passive: false});
        btn.addEventListener('mouseup', release, {passive: false});
        btn.addEventListener('mouseleave', release, {passive: false});
    };

    bindBtn('btn-up', 'up');
    bindBtn('btn-down', 'down');
    bindBtn('btn-left', 'left');
    bindBtn('btn-right', 'right');
    bindBtn('btn-action', 'action');
}

setupMobileControls();
