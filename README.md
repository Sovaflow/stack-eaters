# Stack Eaters - Analytics & MarTech Website

**Student group project · WordPress theme · PHP · CSS · JavaScript · Google Tag Manager / GA4 concepts**

Stack Eaters is a Swedish-language **demonstration website** for a fictional data and marketing-technology consultancy. Our group used it to bring several analytics and digital marketing topics together in one site: web analytics, tag management, CRM, reporting, and AI-themed services.

This repository preserves the team's collaborative WordPress work while making its structure easier to understand as a portfolio project. **It is a prototype, not a live agency or a validated production analytics implementation.**

## Project goals

- Build a coherent site from contributions developed by different team members.
- Present data analytics and marketing-technology services in an accessible way.
- Explore how GA4, Google Tag Manager, marketing events and customer interactions fit into a website.
- Practice collaborative development, integration, and project coordination.

## Technology

| Area | Tools |
| --- | --- |
| CMS and templates | WordPress, PHP |
| Frontend | HTML, CSS, vanilla JavaScript |
| Analytics prototype | Google Tag Manager / GA4 event and configuration concepts |
| Collaboration | GitHub |

## Repository structure

```text
stack-eaters/
├── README.md                       # Project overview
├── style.css                       # WordPress theme metadata and shared styles
├── functions.php                   # Theme setup, asset loading and admin settings
├── header.php                      # Shared header and analytics prototype
├── index.php                       # Main landing page
├── footer.php                      # Shared footer and modal interactions
├── template-parts/
│   └── service-modals.php          # Detailed service content
├── assets/
│   └── js/
│       └── gtm-config.js          # Example GTM / event-tracking helpers
├── DEPLOYMENT_GUIDE.md            # Original deployment notes (historical)
└── GTM_SETUP_GUIDE.md             # Original analytics configuration notes
```

The small number of files at the theme root is **intentional**: WordPress expects `style.css`, `functions.php` and template PHP files in specific locations. Moving them to nested folders would break theme discovery or require additional template changes.

## What the prototype demonstrates

The landing page includes Swedish copy, navigation, service cards, detailed service modals and a contact-form **UI**. The WordPress theme provides customization options and example tracking code for page activity, form interactions and service-related events.

**Important limitations:**

- The contact form is a **front-end demonstration**; no reliable delivery/backend is supplied in this repository.
- Event tracking and so-called “AI predictions” in the code are **heuristics and prototype logic**, **not** a trained or validated machine-learning model.
- Google Tag Manager / GA4 require separate accounts and configuration. Do not interpret code snippets as proof of a working tracking setup.
- Analytics, consent flows, accessibility and security have **not been audited for production**. In particular, configure consent-aware activation before using third-party tracking on a real site.
- Numerical business claims, “case studies”, testimonials, performance statements and consultancy copy displayed in the demo are illustrative marketing content, **not verified results**.

## Local setup

1. Install a local WordPress instance (for example using Local WP or a comparable WordPress development environment).
2. Put this repository in `wp-content/themes/stack-eaters/`.
3. In WordPress Admin → Appearance → Themes, activate **Stack Eaters**.
4. Open the site and check navigation, modals, responsive behavior and contact form UI.
5. If exploring tracking, configure a **test** GTM container in the theme's analytics settings and validate events in a test environment. **Do not load production tracking before consent handling is implemented.**

No frontend package manager or build step is required.

## Group collaboration

The website was created as a **group assignment**: different contributors worked on separate parts of the design, content and functionality, and the project owner brought their work together in a shared repository with collaborative edit access.

This cleanup aims to improve documentation and resolve a few integration issues while preserving the original contributions and commit history. Individual authorship should be assessed from the commit history; the repository is **not presented as a solo implementation**.

## Maintenance notes

The project has been tidied as a portfolio demonstration, not rebuilt from scratch:

- Fixed the WordPress stylesheet header so the theme can be recognized.
- Removed a reference to a JavaScript file not present in the repository.
- Avoided loading a placeholder GTM container when no valid container is configured.
- Added verification of the admin form's existing WordPress nonce.
- Kept original deployment and GTM notes as historical reference; their production-readiness claims must be read with the limitations above.

## Further work before real deployment

Add a genuine contact-form backend (with server-side validation and spam protection); implement consent-aware analytics; test on a supported WordPress/PHP environment; and audit copy, accessibility, security and analytics event behavior.

---

**Portfolio context:** Collaborative student work, presented for learning and demonstration. All contributors retain credit for their work.
