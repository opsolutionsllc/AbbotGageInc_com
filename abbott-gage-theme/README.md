# Abbott Gage Inc - WordPress Theme

A modern, professional WordPress theme designed specifically for Abbott Gage Inc., featuring comprehensive solutions for precision measuring tools, calibration, certification, and repair services.

---

## Theme Information

- **Theme Name:** Abbott Gage Inc
- **Version:** 1.0.0
- **Author:** Abbott Gage Development Team
- **Requires WordPress:** 5.8+
- **Requires PHP:** 7.4+
- **License:** GNU General Public License v2 or later
- **Text Domain:** abbott-gage

---

## Features

### Design & User Experience
- Modern, clean, and professional design
- Fully responsive (mobile, tablet, desktop)
- Smooth animations and transitions
- Intuitive navigation with dropdown menus
- Sticky header with scroll effects
- Back-to-top button
- Custom 404 error page

### Business Features
- Service showcase with cards
- Certification display section
- Manufacturer logo grid
- Hero section with clear call-to-actions
- Contact forms integration (Contact Form 7)
- Multiple page templates
- Footer widget areas

### SEO Optimized
- Schema.org markup for LocalBusiness
- Open Graph meta tags
- Semantic HTML5 structure
- Optimized heading hierarchy
- Fast loading performance
- Image lazy loading ready

### Technical Features
- Custom post types ready
- Widget areas (Footer x3, Sidebar)
- Custom navigation menus (Primary, Footer)
- Custom logo support
- Translation ready (i18n)
- WordPress coding standards compliant
- Security best practices
- Child theme compatible

---

## Installation

1. Upload the theme folder to `/wp-content/themes/`
2. Activate the theme in WordPress Admin → Appearance → Themes
3. Follow the setup wizard or refer to `docs/INSTALLATION-GUIDE.md`

For detailed installation instructions, see: **docs/INSTALLATION-GUIDE.md**

---

## Required Plugins

### Essential
- **Contact Form 7** - For contact forms
- **Yoast SEO** or **Rank Math** - For enhanced SEO

### Recommended
- **WP Mail SMTP** - Reliable email delivery
- **Wordfence Security** - Website security
- **WP Super Cache** - Performance optimization
- **UpdraftPlus** - Automated backups

---

## Documentation

Comprehensive documentation is available in the `docs/` folder:

1. **INSTALLATION-GUIDE.md** - Complete installation instructions
2. **CONTACT-FORM-7-SETUP.md** - Form configuration guide
3. **CONTENT-GUIDE.md** - Content population recommendations

---

## Theme Structure

```
abbott-gage-theme/
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── js/
│   │   ├── main.js
│   │   ├── navigation.js
│   │   └── customizer.js
│   ├── images/
│   │   ├── manufacturers/
│   │   ├── certifications/
│   │   └── equipment/
│   └── documents/
├── docs/
│   ├── INSTALLATION-GUIDE.md
│   ├── CONTACT-FORM-7-SETUP.md
│   └── CONTENT-GUIDE.md
├── inc/
│   ├── customizer.php
│   └── template-tags.php
├── template-parts/
│   ├── hero-section.php
│   ├── services-cards.php
│   ├── certifications-section.php
│   ├── manufacturers-section.php
│   └── cta-section.php
├── style.css
├── functions.php
├── index.php
├── header.php
├── footer.php
├── sidebar.php
├── front-page.php
├── page.php
├── single.php
├── archive.php
├── 404.php
├── searchform.php
├── page-services.php
├── page-laboratory.php
├── page-onsite.php
├── page-contact.php
└── README.md
```

---

## Page Templates

### Available Templates

1. **Homepage** (`front-page.php`)
   - Hero section with CTAs
   - Services overview
   - Certifications showcase
   - Manufacturer logos
   - About section
   - Why Choose Us
   - Call-to-action

2. **Services Overview** (`page-services.php`)
   - Service cards
   - Service areas breakdown
   - Process steps
   - CTA section

3. **Laboratory Calibration** (`page-laboratory.php`)
   - Service details
   - Equipment list
   - Benefits
   - Contact sidebar

4. **Onsite Calibration** (`page-onsite.php`)
   - Service advantages
   - Equipment coverage
   - Scheduling information

5. **Contact Us** (`page-contact.php`)
   - Contact form integration
   - Contact information
   - Business hours
   - Location (map ready)

6. **Default Page** (`page.php`)
   - Standard page layout
   - Full-width content area

---

## Customization

### Via WordPress Customizer

Access: **Appearance → Customize**

- Site Identity (Logo, Title)
- Company Information (Phone, Email, Address)
- Menus
- Widgets
- Colors
- Additional CSS

### Custom CSS

Add custom styling in:
- **Appearance → Customize → Additional CSS**
- Or create a child theme

### Child Theme

To create a child theme:

1. Create folder: `abbott-gage-child/`
2. Create `style.css`:
```css
/*
Theme Name: Abbott Gage Child
Template: abbott-gage-theme
*/
```
3. Create `functions.php`:
```php
<?php
add_action( 'wp_enqueue_scripts', 'abbott_gage_child_enqueue_styles' );
function abbott_gage_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
```

---

## Color Scheme

### Brand Colors

```css
Primary Gold: #8E774D
Primary Dark: #6B5A39
Primary Light: #A89368
Secondary Blue: #0066CC
Accent Red: #CC0000
Dark: #1A1A1A
Gray: #6B7280
Light Gray: #F3F4F6
White: #FFFFFF
```

---

## Typography

- **Headings:** Poppins (Google Fonts)
- **Body Text:** Open Sans (Google Fonts)
- **Font Sizes:** Responsive using clamp()

---

## Browser Support

- Chrome (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Edge (latest 2 versions)
- Mobile browsers (iOS Safari, Chrome Mobile)

---

## Performance

### Optimization Features

- Minified CSS/JS (via plugins)
- Lazy loading ready
- Optimized database queries
- Minimal external dependencies
- Efficient code structure

### Recommended Optimizations

1. Use a caching plugin
2. Optimize images (compress, WebP format)
3. Enable gzip compression
4. Use a CDN for assets
5. Minimize plugins

---

## Security

### Built-in Security Features

- Sanitized outputs
- Escaped data
- Nonce verification for forms
- WordPress coding standards
- No hardcoded credentials

### Recommended Security Measures

1. Use strong passwords
2. Keep WordPress, theme, and plugins updated
3. Install security plugin (Wordfence)
4. Use SSL certificate (HTTPS)
5. Regular backups

---

## Support & Updates

### Getting Help

- Review documentation in `docs/` folder
- Check WordPress Codex: https://codex.wordpress.org/
- Contact development team for theme-specific questions

### Theme Updates

- Check for updates regularly
- Backup before updating
- Test on staging site first
- Review changelog for breaking changes

---

## Credits

### Technologies Used

- WordPress CMS
- PHP 7.4+
- HTML5
- CSS3 (CSS Custom Properties)
- JavaScript (ES6)
- jQuery
- Font Awesome Icons
- Google Fonts (Poppins, Open Sans)

### Developed For

Abbott Gage, Inc.
Childersburg, Alabama
https://abbottgageinc.com

---

## Changelog

### Version 1.0.0 - 2025-11-15

**Initial Release**
- Complete theme structure
- Homepage template with sections
- Service page templates
- Contact page with form integration
- Responsive design
- SEO optimization
- Schema.org markup
- Documentation

---

## License

This theme is licensed under the GNU General Public License v2 or later.

License URI: http://www.gnu.org/licenses/gpl-2.0.html

---

## Contact

For support or inquiries about this theme:
- **Company:** Abbott Gage, Inc.
- **Email:** info@abbottgageinc.com
- **Phone:** (256) 378-3286
- **Toll Free:** 1-800-481-4243

---

**Thank you for using the Abbott Gage Inc WordPress Theme!**

