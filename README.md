# Farhan Kholid - UI/UX & Graphic Designer Portfolio (2026)

> A high-contrast, unapologetic, single-page landing portfolio engineered with a pure **Neo-Brutalism** design system. Built for speed, sharp information architecture, tactile micro-interactions, and WCAG AA accessibility.

<div align="center">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" />
  <img src="https://img.shields.io/badge/Vanilla_JS-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="Vanilla JS" />
  <img src="https://img.shields.io/badge/Design_System-Neo--Brutalist-FFE600?style=for-the-badge&logoColor=black" alt="Neo-Brutalist" />
</div>

<br />

---

## ⚡ Design System & Visual Tokens

The user interface follows pure **Neo-Brutalism** principles, completely discarding soft claymorphism and blur drop shadows in favor of tangible physical depth:

- **Borders & Outlines**: Solid `2.5px` to `3px` pure black (`#000000`) borders across all containers, cards, buttons, badges, and modals.
- **Corners**: Strictly sharp (`rounded-none`) or subtle micro-radii (`rounded-sm`).
- **Hard Offset Shadows**:
  - Buttons / Badges: `4px 4px 0px #000000`
  - Cards: `5px 5px 0px #000000` (expands to `8px 8px 0px #000000` on hover)
  - Modals / Large Containers: `6px 6px 0px #000000` / `8px 8px 0px #000000`
  - Zero blur radius (`blur: 0px`).
  - Responsively scaled down on mobile viewports (<768px).
- **High-Contrast Color Palette**:
  - Main Canvas: `#F4F0EA` (warm newsprint off-white)
  - Card Surfaces: `#FFFFFF`
  - Borders & Typography: `#000000`
  - Primary Accent: Electric Yellow (`#FFE600`)
  - Secondary Accent: Acid Green (`#00F076`)
  - Alert / Punch: Vivid Orange (`#FF5E3A`)
  - Tech Accent: Electric Cyan (`#00E5FF`)
  - Purple Accent: Vivid Lavender (`#B57CFF`)
  - Dark Mode: `#121214` obsidian canvas with stark `#FFFFFF` borders and neon accents.
- **Typography Matrix**:
  - Headings: `Space Grotesk` & `Syne` (Black/Bold, tight tracking, all-caps headers).
  - Body: `Inter` (high legibility, 16px/18px base).
  - Monospace / Metadata: `JetBrains Mono` (technical indexing, live clocks, system specs).

---

## 🕹️ Micro-Interactions & Physical States

- **Tactile Physical Buttons**:
  - Default: Solid black border with `4px 4px 0px #000000` hard shadow.
  - Hover: Hover lift (`translate(-2px, -2px)`) with expanded shadow.
  - Active/Click: Down-right physical button sink (`translate(2px, 2px)`) with reduced shadow (`1px 1px 0px #000000`), accurately simulating physical mechanical switches.
- **Project Index Cards**:
  - Smooth hover elevation (`translate(-3px, -3px)`) and shadow expansion to `8px 8px 0px #000000`.
- **Infinite Marquee Ticker**:
  - High-visibility ribbon continuously cycling operational announcements, accessibility badges, and core capabilities.

---

## 🏛️ Page Architecture

1. **Sticky Brutalist Topbar**:
   - Monospaced brand identifier `[FK_2026.SYS // UX+GFX]` with pulsing live status.
   - Infinite horizontal ticker ribbon.
   - Quick navigation jump buttons (`[01. WORK]`, `[02. SKILLS]`, `[03. ARCHITECTURE]`, `[04. MOTION]`, `[05. CONNECT]`).
   - Dark/Light Neo-Brutalist theme toggle.
2. **Hero Section**:
   - Giant display typography: `FARHAN KHOLID`.
   - Floating utility badges (`[LOC: JAKARTA, ID]`, `[STATUS: AVAILABLE]`, `[CS @ PERTAMINA UNIV]`).
   - Architectural Blueprint Box with quantitative metrics (06+ Works, 100% Token Driven, WCAG AA Contrast, Computer Science foundation).
   - Solid-framed portrait with technical crop marks and crosshairs (`[+]`).
3. **Selected Works (Modular Index System)**:
   - Interactive category tabs (`ALL [06]`, `UI/UX APPS [04]`, `GRAPHIC & BRAND [02]`).
   - Six featured projects:
     - `CITEUP Event Branding` (Brand Identity & Print Collateral)
     - `PT Farhan Surya Indah` (Corporate Identity & Umrah Travel Branding)
     - `LuminaVisa Platform` (Guided Visa Micro-Step UI/UX)
     - `Pilgrim's Tracker Enterprise` (Real-Time Operations & Manifest B2B SaaS)
     - `Kalcer.ID Platform` (Indonesian Cultural Event & Heritage Hub)
     - `Mono Stock Terminal` (Monochromatic Low-Fatigue Fintech Terminal)
4. **Interactive Case Study Modal**:
   - Dynamic modal drawer with strict 4-pillar narrative:
     - `01. Problem Statement`
     - `02. Architecture & Stepwise Flow`
     - `03. Key Usability & Architectural Decisions`
     - `04. Final Interface & Technical Specifications`
   - Full keyboard accessibility (`ESC` to close) and direct links to standalone case study documents.
5. **Two-Pillar Capabilities Matrix**:
   - Explicitly distinguishes between **Pillar 01 (UI/UX & Product Systems)** and **Pillar 02 (Graphic & Visual Craft)**.
6. **Convergence Dossier**:
   - Details Farhan's background merging Computer Science engineering with graphic and typography mastery.
7. **Motion & Video Tape Archive**:
   - Retro brutalist cassette block linking directly to Google Drive promotional reel repository.
8. **Contact Terminal**:
   - High-contrast form and one-click email clipboard copy (`farhankholid20@gmail.com`).
9. **Archival Terminal Footer**:
   - Live Jakarta (WIB) time clock, system status ribbon, and smooth return-to-top trigger.

---

## 🚀 Local Development & Preview

Zero build tools or heavy node dependencies required. Open `index.html` directly in any modern browser or run with any static HTTP server (e.g. Laragon, Python HTTP server, VS Code Live Server).

```bash
# Python 3 static server
python -m http.server 8000
```

---

<div align="center">
  <i>Designed & Developed by Farhan Kholid // 2026</i>
</div>
