# IBTPP Website Modernization - 2025

## Overview

The Infant Botulism Treatment and Prevention Program website has been modernized from legacy PHP/HTML 4.01 to modern HTML5, CSS3, and ES6 JavaScript.

## What Changed

### 1. **PHP Removed - Now Static HTML**
- All 45+ PHP pages have been converted to static HTML5 files
- `.php` file extensions changed to `.html`
- No server-side processing required
- Site can now be hosted on any static web server (Apache, Nginx, GitHub Pages, Netlify, etc.)

### 2. **Modern HTML5**
- Updated from HTML 4.01 Transitional to HTML5
- Proper semantic HTML tags (`<header>`, `<nav>`, `<main>`, `<footer>`)
- Improved accessibility with ARIA attributes
- Mobile-responsive meta tags

### 3. **Modern CSS**
- **New file:** `/css/modern-styles.css` - Replaces all legacy stylesheets
- **Removed:** `scripts/common.css`, `css/winxp.blue.css`, `css/tabs.css`
- CSS Grid and Flexbox layouts
- Fully responsive design for mobile, tablet, and desktop
- CSS custom properties (variables) for easy theme customization
- Print-friendly styles

### 4. **Modern Navigation**
- **New file:** `/js/navigation.js` - Modern dropdown navigation
- **Removed:** Legacy Tigra Menu system (`menu.js`, `menu_items.js`, `menu_tpl2.js`)
- Pure CSS dropdowns with JavaScript enhancement
- Mobile hamburger menu
- Keyboard accessible navigation

### 5. **Files Removed**
- `index-frame.php` - Legacy frameset
- `phpinfo.php` - PHP info page
- `scripts/template-start.php`, `scripts/template-end.php` - PHP templates
- `scripts/menu.js`, `scripts/menu_items.js`, `scripts/menu_tpl2.js` - Old menu system
- `scripts/common.css` - Replaced by modern-styles.css
- `css/winxp.blue.css`, `css/tabs.css` - Legacy styles

### 6. **Legacy Components Kept (Not Used)**
The following legacy components are still in the repository but not linked from the modern site:
- `/fm/` - File manager (2000s era)
- `/plugins/Webalizers/` - Old analytics
- `/admin/` - Admin panel (needs updating for static site)

## Important Notes

### Emergency Banner

The emergency banner previously loaded from `/contact/emergency` via PHP. Now it loads via JavaScript in `/js/navigation.js`.

**To update the emergency banner:**
1. Edit the file `/contact/emergency` with your emergency message
2. The message will automatically display if the file contains more than 3 characters
3. To disable: make the file empty or remove it

**Note:** Since this is now a static site, you'll need direct file system access to update the emergency banner. For a more dynamic solution, consider:
- Using a simple CMS or headless CMS
- Creating a serverless function (AWS Lambda, Netlify Functions, etc.)
- Using a GitHub Actions workflow to update the file

### Google Analytics

The site includes Google Analytics 4 (GA4) placeholder code. **You must update the tracking ID:**

1. Get your GA4 Measurement ID from Google Analytics
2. Find and replace `G-XXXXXXXXXX` in all HTML files with your actual tracking ID
3. Or run this command:

```bash
find . -name "*.html" -type f -exec sed -i 's/G-XXXXXXXXXX/G-YOUR-ACTUAL-ID/g' {} +
```

The old Universal Analytics ID `UA-89371152-1` is deprecated and has been removed.

### Admin Panel

The `/admin/` directory contains a PHP-based admin panel for emergency banner updates. Since PHP has been removed, this no longer functions. Options:

1. **Direct file editing** - Edit `/contact/emergency` directly
2. **Simple backend** - Keep a minimal PHP installation just for `/admin/`
3. **Static site CMS** - Use tools like Netlify CMS, Forestry, or Tina CMS
4. **Git-based workflow** - Edit files via GitHub and use CI/CD to deploy

## File Structure

```
/ibtpp/
├── index.html                      # Homepage
├── css/
│   ├── modern-styles.css           # NEW: All modern styles
│   └── style.css                   # Kept: Additional legacy styles
├── js/
│   └── navigation.js               # NEW: Modern navigation system
├── general/                        # General information pages (HTML)
├── physician/                      # Physician resources (HTML)
├── pharmacist/                     # Pharmacist information (HTML)
├── laboratorian/                   # Laboratory resources (HTML)
├── parent/                         # Parent resources (HTML)
├── contact/                        # Contact pages (HTML)
│   └── emergency                   # Emergency banner text file
├── readings/                       # Medical literature (HTML)
├── images/                         # Site images
├── tribute/                        # Dr. Arnon memorial photos
└── [PDFs]                          # Medical documents

Legacy/Not Used:
├── /fm/                            # Old file manager
├── /plugins/Webalizers/            # Old analytics
├── /admin/                         # Admin panel (needs updating)
├── /vdsbackup/                     # Backup directory
└── *.php files                     # Original PHP files (kept for reference)
```

## Multilingual Support

The site maintains support for 3 languages:
- **English:** Standard files (e.g., `babybig.html`)
- **Spanish:** Files ending in `-espanol.html`
- **Chinese (中文):** Files ending in `-zh.html`

All language variants have been converted and maintain the same structure.

## Browser Compatibility

The modernized site supports:
- Chrome/Edge (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Mobile browsers (iOS Safari, Chrome Mobile)

**Legacy browser support:**
- The CSS uses modern features that work in all browsers from 2020+
- For older browser support, consider adding polyfills

## Responsive Breakpoints

- **Mobile:** < 480px
- **Tablet:** 481px - 768px
- **Desktop:** 769px - 1024px
- **Large Desktop:** > 1024px

## Development

### Local Testing

Since this is now a static site, you can test locally with any web server:

**Python:**
```bash
python3 -m http.server 8000
# Visit http://localhost:8000
```

**Node.js:**
```bash
npx serve .
```

**PHP (if you still have it):**
```bash
php -S localhost:8000
```

### Making Changes

1. Edit HTML files directly for content changes
2. Edit `/css/modern-styles.css` for styling
3. Edit `/js/navigation.js` for navigation changes
4. All internal links use `.html` extension
5. Images and PDFs referenced with relative or absolute paths

## Deployment

This site can now be deployed to:
- Traditional web servers (Apache, Nginx)
- Static hosting (Netlify, Vercel, GitHub Pages, Cloudflare Pages)
- CDN (AWS CloudFront, Cloudflare)
- Object storage with web hosting (S3, Google Cloud Storage)

**No server-side requirements!**

## Testing Checklist

- [ ] All internal links work (`.php` → `.html`)
- [ ] Images load correctly
- [ ] PDFs open correctly
- [ ] Navigation menu works on desktop
- [ ] Mobile hamburger menu works
- [ ] Emergency banner loads (if configured)
- [ ] All pages display correctly on mobile
- [ ] Print layouts work
- [ ] Google Analytics tracking (if configured)
- [ ] Multilingual pages work

## Support

For questions about the modernization or issues with the site:
- Email: ibtpp@infantbotulism.org
- Review original PHP files (still in repository for reference)
- Check browser console for JavaScript errors

## Credits

- **Original Site:** California Department of Public Health
- **Modernization:** 2025
- **Technologies:** HTML5, CSS3, ES6 JavaScript
- **No frameworks:** Vanilla web technologies for maximum compatibility

---

Last Updated: November 2025
