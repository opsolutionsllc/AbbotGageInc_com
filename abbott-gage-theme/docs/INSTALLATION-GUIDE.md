# Abbott Gage Inc Theme - Installation Guide

Complete guide for installing and activating the Abbott Gage Inc WordPress theme.

---

## Prerequisites

Before installing the theme, ensure you have:

- **WordPress Version:** 5.8 or higher
- **PHP Version:** 7.4 or higher
- **WordPress Admin Access:** Administrator level
- **FTP/File Manager Access:** For uploading theme files

---

## Installation Methods

### Method 1: Upload via WordPress Admin (Recommended)

1. **Create Theme ZIP File:**
   - Compress the `abbott-gage-theme` folder into a `.zip` file
   - Ensure the folder structure is: `abbott-gage-theme.zip` → `abbott-gage-theme/` → `style.css`, `functions.php`, etc.

2. **Upload Theme:**
   - Log in to WordPress Admin
   - Navigate to **Appearance → Themes**
   - Click **Add New**
   - Click **Upload Theme**
   - Click **Choose File** and select `abbott-gage-theme.zip`
   - Click **Install Now**

3. **Activate Theme:**
   - After installation completes, click **Activate**
   - Your theme is now active!

### Method 2: FTP Upload

1. **Connect via FTP:**
   - Use an FTP client (FileZilla, Cyberduck, etc.)
   - Connect to your server

2. **Upload Theme:**
   - Navigate to `/wp-content/themes/`
   - Upload the `abbott-gage-theme` folder
   - Ensure all files and folders are intact

3. **Activate via WordPress:**
   - Log in to WordPress Admin
   - Go to **Appearance → Themes**
   - Find "Abbott Gage Inc" theme
   - Click **Activate**

---

## Required Plugins

Install and activate these recommended plugins:

### Essential Plugins

1. **Contact Form 7**
   - Purpose: Contact forms on contact page
   - Installation: Plugins → Add New → Search "Contact Form 7"

2. **Yoast SEO** or **Rank Math**
   - Purpose: Enhanced SEO features
   - Installation: Plugins → Add New → Search "Yoast SEO"

### Recommended Plugins

3. **WP Mail SMTP**
   - Purpose: Reliable email delivery
   - Installation: Plugins → Add New → Search "WP Mail SMTP"

4. **Wordfence Security** or **Sucuri**
   - Purpose: Website security
   - Installation: Plugins → Add New → Search "Wordfence"

5. **WP Super Cache** or **W3 Total Cache**
   - Purpose: Performance optimization
   - Installation: Plugins → Add New → Search "WP Super Cache"

6. **UpdraftPlus**
   - Purpose: Automated backups
   - Installation: Plugins → Add New → Search "UpdraftPlus"

---

## Initial Configuration

### 1. Set Permalink Structure

1. Go to **Settings → Permalinks**
2. Select **Post name** structure
3. Click **Save Changes**

### 2. Configure Reading Settings

1. Go to **Settings → Reading**
2. Set "Your homepage displays" to **A static page**
3. Select your homepage for "Homepage"
4. Select a blog page for "Posts page" (if using blog)
5. Click **Save Changes**

### 3. Configure Menus

1. Go to **Appearance → Menus**
2. Create a new menu called "Primary Menu"
3. Add pages in this order:
   - Home
   - About
   - Services (with sub-items: Laboratory, Onsite, Repairs)
   - Sales
   - Manufacturers
   - Contact
4. Assign to "Primary Menu" location
5. Click **Save Menu**

6. Create "Footer Menu" with same pages
7. Assign to "Footer Menu" location

### 4. Set Up Widgets

1. Go to **Appearance → Widgets**
2. Configure Footer Widget Areas:
   - **Footer Widget 1:** About/Company info
   - **Footer Widget 2:** Quick links
   - **Footer Widget 3:** Contact information

### 5. Upload Logo

1. Go to **Appearance → Customize**
2. Click **Site Identity**
3. Click **Select Logo**
4. Upload your company logo
5. Adjust logo size if needed
6. Click **Publish**

### 6. Customize Company Information

1. In Customizer, go to **Company Information**
2. Update:
   - Phone Number
   - Toll Free Number
   - Email Address
   - Physical Address
3. Click **Publish**

---

## Creating Pages

### Required Pages

Create these pages with the specified templates:

1. **Home Page**
   - Template: Homepage (front-page.php)
   - Set as homepage in Reading Settings

2. **About Page**
   - Template: Default Template
   - Add company history, team info, certifications

3. **Services Page**
   - Template: Services Overview
   - Content will be auto-generated from template

4. **Laboratory Calibration**
   - Template: Laboratory Calibration
   - Content will be auto-generated from template

5. **Onsite Calibration**
   - Template: Onsite Calibration
   - Content will be auto-generated from template

6. **Repair Services**
   - Template: Default Template
   - Add repair service information

7. **Sales**
   - Template: Default Template
   - Add sales information, pricing, ordering process

8. **Manufacturers**
   - Template: Default Template
   - Add detailed manufacturer partnership information

9. **Contact**
   - Template: Contact Us
   - Add Contact Form 7 shortcode (see Contact Form 7 setup guide)

10. **Privacy Policy** (required)
    - Template: Default Template
    - Add your privacy policy

---

## Uploading Assets

### Upload Certification Documents

1. Go to **Media → Add New**
2. Upload PDF certificates:
   - ISO 9001:2015 Certificate
   - WBENC Certificate
   - WOSB Certificate
3. Note the file URLs for linking

### Upload Equipment Photos

1. Upload high-quality photos of:
   - Laboratory equipment
   - Calibration tools
   - Facility photos
2. Use as featured images for blog posts or in page content

---

## Theme Customization

### Via WordPress Customizer

Access: **Appearance → Customize**

Available Options:
- **Site Identity:** Logo, site title, tagline
- **Colors:** Background color
- **Menus:** Assign menus to locations
- **Widgets:** Configure widget areas
- **Homepage Settings:** Set static front page
- **Additional CSS:** Add custom styling
- **Company Information:** Update contact details

---

## Performance Optimization

### 1. Enable Caching

1. Install caching plugin (WP Super Cache or W3 Total Cache)
2. Enable page caching
3. Enable browser caching
4. Enable gzip compression

### 2. Optimize Images

1. Install image optimization plugin (Smush or EWWW Image Optimizer)
2. Compress existing images
3. Enable lazy loading

### 3. Minify CSS/JS

1. Use W3 Total Cache or Autoptimize plugin
2. Enable CSS minification
3. Enable JavaScript minification
4. Combine files when possible

---

## Security Configuration

### 1. Security Plugin Setup

1. Install Wordfence or Sucuri
2. Run security scan
3. Enable firewall
4. Set up login security
5. Enable two-factor authentication

### 2. Basic Security Measures

1. Use strong admin password
2. Change default admin username
3. Keep WordPress, theme, and plugins updated
4. Regularly backup your site
5. Use SSL certificate (HTTPS)

---

## Testing Checklist

After installation, test:

- [ ] Homepage displays correctly
- [ ] All menu links work
- [ ] Contact forms submit successfully
- [ ] Mobile responsiveness
- [ ] Page load speed
- [ ] Cross-browser compatibility (Chrome, Firefox, Safari, Edge)
- [ ] Contact information displays correctly
- [ ] Footer links work
- [ ] Search functionality works
- [ ] 404 page displays correctly

---

## Troubleshooting

### Theme Not Activating

**Issue:** Error message when activating theme

**Solutions:**
1. Check PHP version (minimum 7.4)
2. Verify all theme files uploaded correctly
3. Check error logs in wp-content/debug.log
4. Deactivate all plugins and try again

### White Screen After Activation

**Issue:** Blank page after theme activation

**Solutions:**
1. Increase PHP memory limit in wp-config.php:
   ```php
   define('WP_MEMORY_LIMIT', '256M');
   ```
2. Check for plugin conflicts
3. Enable WordPress debugging:
   ```php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   ```

### Styling Issues

**Issue:** Theme not displaying correctly

**Solutions:**
1. Clear browser cache
2. Clear WordPress cache
3. Regenerate CSS in Customizer
4. Check if parent theme CSS is loading

### Menu Not Displaying

**Issue:** Navigation menu not showing

**Solutions:**
1. Verify menu created and assigned to location
2. Check if pages added to menu
3. Clear cache
4. Check theme location matches menu assignment

---

## Support Resources

- **WordPress Codex:** https://codex.wordpress.org/
- **Theme Support:** Contact your development team
- **WordPress Forums:** https://wordpress.org/support/
- **Stack Overflow:** https://stackoverflow.com/questions/tagged/wordpress

---

## Next Steps

After successful installation:

1. **Review Contact Form 7 Setup Guide**
2. **Populate content using Content Guide**
3. **Set up Google Analytics**
4. **Submit sitemap to Google Search Console**
5. **Test website on multiple devices**
6. **Launch and monitor performance**

---

**Installation Complete!** Your Abbott Gage Inc theme is now ready to use.

