# Iftin — WordPress Block Theme for Web3

![WordPress](https://img.shields.io/badge/WordPress-6.7%2B-blue)
![PHP](https://img.shields.io/badge/PHP-8.0%2B-purple)
![License](https://img.shields.io/badge/License-GPL%20v2-green)

---

## What is Iftin?

Iftin is a free, lightweight WordPress Block Theme built for Web3 startups 
and decentralized organizations (DAOs).

It is built entirely on WordPress Full Site Editing (FSE) and WordPress core — 
no page builders, no bloated plugins, no unnecessary dependencies. Everything 
is file-based: templates, template parts, patterns, and global design settings 
live in your theme directory, version-controllable and deployable like any 
other codebase.

Iftin is designed for teams that care about performance, ownership, and 
infrastructure that behaves predictably over time.

---

## Requirements

- WordPress 6.7 or higher
- Tested up to WordPress 7.0
- PHP 8.0 or higher
- A modern browser

---

## Installation

### From WordPress Dashboard

1. Go to **Appearance → Themes → Add New**
2. Search for **"Iftin"**
3. Click **Install** then **Activate**

### Manual Installation

1. Download the latest release from 
   [WordPress.org](https://wordpress.org/themes/iftin) or
   [GitHub](https://github.com/amiinmaalik/iftin)
2. Go to **Appearance → Themes → Add New → Upload Theme**
3. Upload the `iftin.zip` file
4. Click **Install Now** then **Activate**

### Via WP-CLI

```bash
wp theme install iftin --activate

After activation, go to Appearance → Editor to start customizing your site using Full Site Editing.

Theme Structure
iftin/
├── assets/
│   ├── fonts/          ← Self-hosted fonts (Inter, Plus Jakarta Sans)
│   └── images/         ← Theme images
├── parts/
│   ├── header.html     ← Site header with navigation
│   ├── footer.html     ← Site footer
│   └── post-meta.html  ← Post date, author, categories
├── patterns/
│   ├── template-page.php        ← Default page layout
│   ├── web3-crypto-hero.php     ← Hero sections
│   ├── crypto-features.php      ← Features sections
│   └── ...                      ← More patterns
├── templates/
│   ├── index.html      ← Fallback for all pages
│   ├── home.html       ← Blog / Posts page
│   ├── page.html       ← Static pages (including Homepage)
│   ├── single.html     ← Single blog post
│   ├── search.html     ← Search results
│   └── 404.html        ← Not found page
├── functions.php       ← Theme setup and registration
├── index.php           ← Required WordPress fallback
├── readme.txt          ← WordPress.org documentation
├── screenshot.png      ← Theme preview image
├── style.css           ← Theme metadata
└── theme.json          ← Global design settings

Note: Iftin uses home.html for the blog posts page. For a static homepage, go to Settings → Reading and select A static page — WordPress will use page.html as the homepage template.

Customization
Iftin is built on WordPress Full Site Editing (FSE). All customization is done through Appearance → Editor — no page builder or additional plugins required.
Colors — Defined in theme.json, editable via Styles → Colors
Typography — Self-hosted Inter and Plus Jakarta Sans, editable via Styles → Typography
Layout — Content width 50rem, Wide width 80rem
Style Variations — Multiple color schemes available via Styles
For detailed customization guides, visit amiinmaalik.com/docs

Templates
Iftin includes the following templates:
Template
Description
index.html
Fallback for all pages
home.html
Blog / Posts page
page.html
Static pages (including Homepage)
single.html
Single blog post
search.html
Search results
404.html
Not found page
For detailed documentation, visit amiinmaalik.com/docs

Template Parts
Part
Description
header.html
Site header with navigation
footer.html
Site footer
post-meta.html
Post date, author, categories

Styles
Iftin includes style variations that change the color palette and typography across the entire site in one click.
Go to Appearance → Editor → Styles to switch variations.
Variation
Description
Default
Deep black with Crimson accent
Cyberpunk Neon
Dark violet with Neon Pink
Emerald Dark
Forest black with Emerald Green
Ocean Trust
Midnight blue with Sky Blue

theme.json
theme.json is the global design system file. It defines:
Color palette — Brand colors available across the editor
Typography — Font families and font sizes
Layout — Content width 50rem, Wide width 80rem
Spacing — Global spacing scale

Assets
assets/
├── fonts/
│   ├── inter-v20-latin-regular.woff2
│   ├── inter-v20-latin-500.woff2
│   └── plus-jakarta-sans-v12-latin-700.woff2
└── images/
    └── ...

All fonts are self-hosted — no external requests to Google Fonts or any third-party service.

Patterns
Iftin includes a library of pre-built block patterns for Web3 startups and DAOs. Patterns are available in the block editor via the Patterns tab.
Available Categories
Category
Description
Blog
Blog grids and post listings
Call To Action
Call to action sections
FAQ
FAQ and accordion sections
Features
Feature grids and highlight sections
Footers
Site footer layouts
Headers
Site headers and navigation layouts
Heroes
Hero sections for landing pages
Logos
Logo grids and partner sections
Pricing
Pricing tables and plan comparisons
Stats
Statistics and metrics sections
Team
Team member grids
Testimonials
Testimonial and review sections
Using Patterns
Open any page in the block editor
Click + to add a new block
Select the Patterns tab
Browse by category and insert

Features
Full Site Editing (FSE) — Built entirely on WordPress core with no page builders or additional plugins required
Zero Plugin Dependencies — No third-party plugins needed. Everything runs on WordPress core and FSE
Self-Hosted Fonts — Inter and Plus Jakarta Sans loaded locally from assets/fonts/ with no external requests
Lightweight & Fast — Minimal CSS output, no JavaScript framework, clean HTML — optimized for performance out of the box
Style Variations — Multiple color schemes switchable in one click via Appearance → Editor → Styles
Pattern Library — Pre-built block patterns organized by category for rapid page building
Version Control Ready — Entire theme design lives in files — templates, parts, patterns, and styles are all trackable with Git
Dark Mode First — Designed with a dark interface as the default, aligned with Web3 design conventions
GPL Licensed — Free and open source

FAQ
Does Iftin require any plugins? No. Iftin is built entirely on WordPress Full Site Editing and WordPress core. No plugins are required.
Is Iftin compatible with WooCommerce? Iftin is not designed or tested for WooCommerce. It is built for Web3 startups and DAOs that do not require e-commerce functionality.
Can I use Iftin with a page builder like Elementor? Iftin is a block theme built for the WordPress block editor. It is not compatible with classic page builders like Elementor or WPBakery.
What WordPress version does Iftin require? Iftin requires WordPress 6.7 or higher.
Where can I get support? Open an issue on GitHub or visit amiinmaalik.com for documentation.
Is there a Pro version? Yes. Iftin Pro includes additional templates, patterns, style variations, custom blocks, and a license management system.

License
Iftin is licensed under the GNU General Public License v2 or later.Iftin Pro
This means you are free to:
Use — Use Iftin for any purpose
Study — Read and learn from the source code
Modify — Change the theme to suit your needs
Distribute — Share the original or modified version
All bundled fonts are licensed under the SIL Open Font License (OFL).
Inter — License
Plus Jakarta Sans — License

Credits
Iftin is built by Amiin Maalik.
Bundled Resources
Resource
Author
License
Inter
Rasmus Andersson
SIL OFL
Plus Jakarta Sans
Tokotype
SIL OFL
Inspired By
Ollie by Mike McAlister
WordPress Twenty Twenty-Five
