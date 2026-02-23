# Farhan Kholid - UI/UX & Graphic Designer Portfolio 🎨✨

> A highly curated, single-page landing portfolio showcasing design fidelity, engineering precision, and a strictly enforced **Claymorphism** aesthetic. Built for speed, elegance, and pixel-perfect responsiveness.

<div align="center">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" />
  <img src="https://img.shields.io/badge/Vanilla_JS-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="Vanilla JS" />
</div>

<br />

---

## 🌟 Overview

This repository houses the pure static frontend code for my 2026 professional design portfolio. Moving away from standard flat design and heavy JS frameworks, this project embraces **Claymorphism**—a modern UI trend characterized by soft, fluffy 3D shapes, dual inner shadows, and floating, touch-friendly interfaces.

The architecture is built completely on **HTML5** and **Tailwind CSS (via CDN)**, ensuring that there are zero heavy node_modules dependencies, zero build steps required to fire it up, and lightning-fast deployment capabilities.

---

## ✨ Key Features

- **The Claymorphism Design System**: Custom-written CSS algorithms to extend Tailwind's utility classes. Generating flawless `.clay-card`, `.clay-btn`, and `.clay-inset` shadows specifically calibrated against a `bg-[#F0F5F9]` canvas.
- **Single-Page Flow**: A seamless `scroll-smooth` vertical layout engineered for an unblocked and comfortable reading experience from Hero to Contact.
- **Bento Grid Architecture**: Asymmetric, responsive `grid-cols-12` layouts utilized across the "About Me" and Project Showcase sections for maximum content density and visual hierarchy.
- **Icon-Only Logic**: Removed redundant text lists in favor of a sleek, purely visual Devicon gallery for the Tech Stack and Design Tool sections to elevate the aesthetic.
- **Built-in Lightbox**: A custom Vanilla JS modal logic to scale, examine, and view high-fidelity UI/UX and Graphic Design screenshots dynamically.
- **Zero-Dependency Animations**: Elegant CSS-only micro-interactions, including continuous floating blobs (`@keyframes float`) and gentle scaling hover states.

---

## 🛠️ Built With

- **Markup**: Semantic HTML5
- **Styling Engine**: Tailwind CSS
- **Custom CSS**: Vanilla CSS variables and keyframes exclusively for 3D shadowing algorithms.
- **Interactivity**: Pure Vanilla JavaScript (DOM Manipulation for Lightbox)
- **Typography**: Outfit & Syne (Google Fonts)
- **Assets**: Devicon (SVGs) & SimpleIcons

---

## 🚀 Quick Start / Deployment

Since this project avoids Webpack, Vite, or Next.js build steps, running it is instantaneous.

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/portfolio-farhan-2026.git
   ```
2. **Open locally:**  
   Simply open the `index.html` file in any modern web browser. No local server is strictly required, though you may use an extension like VS Code's _Live Server_ for hot-reloading.

3. **Deploying (e.g., Vercel, Netlify, GitHub Pages):**  
   Drag-and-drop the root folder directly into your hosting provider of choice. The site is production-ready.

---

## 📂 Project Structure

```text
├── index.html          # The Main Single-Page Application Layout
├── assets/             # Local Imagery
│   └── img/
│       ├── cu24/       # CITEUP 2024 Assets
│       ├── cu25/       # CITEUP 2025 Assets
│       ├── fsi/        # FSI Project Assets
│       └── ...         # UI/UX Screenshots
└── README.md
```

---

## 🎨 Design Philosophy: Why Claymorphism?

Claymorphism bridges the gap between the hyper-realistic _Neumorphism_ trends and the standard _Flat Design_. By combining two carefully calculated inner shadows (one dark top-left, one light bottom-right) against a prominent exterior drop-shadow, elements appear as if they are inflated, tangible objects floating slightly above the canvas. It invites interaction, feels incredibly friendly, and proves that high-end design doesn't always require complex WebGL setups.

---

<div align="center">
  <i>Designed and hand-coded by Farhan Kholid</i>
  <br>
  <b>2026</b>
</div>
