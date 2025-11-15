# Abbott Gage Theme - Content Editing Guide

## Table of Contents
1. [Getting Started](#getting-started)
2. [Installing ACF Plugin](#installing-acf-plugin)
3. [Theme Settings Location](#theme-settings-location)
4. [Editing Different Sections](#editing-different-sections)
5. [Troubleshooting](#troubleshooting)

---

## Getting Started

This theme uses **Advanced Custom Fields (ACF)** to allow you to easily edit all content on your website through the WordPress admin panel. No coding knowledge required!

### What Can You Edit?

- Header contact information
- Hero section (homepage banner)
- Services (all 4 service cards)
- About section
- Why Choose Us reasons (6 cards)
- Certifications (4 certifications)
- Manufacturers section
- Call-to-action sections
- Footer content
- Business information (for SEO & Google)

---

## Installing ACF Plugin

If you see an admin notice saying "ACF is required", follow these steps:

1. **Log into WordPress Admin** (yoursite.com/wp-admin)
2. **Go to: Plugins → Add New**
3. **Search for:** "Advanced Custom Fields"
4. **Install** the plugin by Delicious Brains (it's free!)
5. **Click "Activate"**
6. The admin notice will disappear, and you'll see a new menu item: **Theme Settings**

---

## Theme Settings Location

Once ACF is installed, you'll find most content editing options in two places:

### 1. Theme Settings (Most Common)
**Location:** WordPress Admin → **Theme Settings**

This is where you'll edit:
- Header & footer settings
- Services section
- Call-to-action sections
- Manufacturers section
- Certifications section
- Business information

### 2. Homepage Specific Fields
**Location:** Pages → **Homepage** → Edit

This is where you'll edit:
- Hero section
- About section
- Why Choose Us section

---

## Editing Different Sections

### Header Settings

**Location:** Theme Settings → Header Settings

**Available Fields:**
- **Primary Phone Number** - Main phone displayed in header
- **Toll Free Phone Number** - Secondary phone number
- **Email Address** - Contact email
- **Header CTA Button Text** - Text for the button (e.g., "Get a Quote")
- **Header CTA Button Link** - Link destination for the button

**Example:**
```
Primary Phone: (256) 378-3286
Toll Free: 1-800-481-4243
Email: info@abbottgageinc.com
Button Text: Get a Quote
Button Link: /contact
```

---

### Hero Section (Homepage Banner)

**Location:** Pages → Homepage → Hero Section

**Available Fields:**
- **Hero Title** - Main headline (e.g., "Precision Measuring Tools & Calibration Services")
- **Hero Subtitle** - Supporting text below the title
- **Hero Background Image** - Large background image (optional)
- **Hero Feature 1, 2, 3** - Three bullet points with checkmarks
- **Primary CTA Button Text & Link** - First button (e.g., "Request a Quote")
- **Secondary CTA Button Text & Link** - Second button (e.g., "Our Services")

**Tips:**
- Keep the title short and impactful (under 10 words)
- Features should be brief phrases (3-5 words each)
- Background image should be at least 1920x800px

---

### Services Section

**Location:** Theme Settings → Services Section

**Available Fields:**
- **Section Title** - Main heading (e.g., "Our Services")
- **Section Description** - Subtitle text
- **Service 1-4** - Each service has:
  - Title
  - Description (2-3 sentences)
  - Icon Class (Font Awesome icon)
  - Link (page to link to)
  - 3 Features (bullet points)
  - Featured checkbox (Service 2 only)

**Icon Examples:**
- Laboratory: `fas fa-flask`
- Onsite: `fas fa-truck`
- Repair: `fas fa-wrench`
- Sales: `fas fa-shopping-cart`

Find more icons at: https://fontawesome.com/v6/search?m=free

---

### About Section

**Location:** Pages → Homepage → About Section

**Available Fields:**
- **About Title** - Main heading
- **About Lead Text** - Short introductory paragraph
- **About Content** - Full WYSIWYG editor for detailed content
- **About Image** - Image displayed on the right
- **3 Features** - Each has:
  - Icon class
  - Title
  - Text description
- **CTA Button Text & Link** - "Learn More" button

**Tips:**
- Image should be at least 800x600px
- Keep features concise (1-2 lines each)

---

### Why Choose Us Section

**Location:** Pages → Homepage → Why Choose Us Section

**Available Fields:**
- **Section Title** - Main heading
- **Section Description** - Subtitle
- **6 Reasons** - Each reason has:
  - Icon class (Font Awesome)
  - Title (2-5 words)
  - Text (1-2 sentences)

**Example:**
```
Reason 1:
  Icon: fas fa-history
  Title: 30+ Years Experience
  Text: Decades of expertise in precision measuring tools.
```

---

### Certifications Section

**Location:** Theme Settings → Certifications Section

**Available Fields:**
- **Section Title & Description**
- **4 Certifications** - Each has:
  - Title
  - Description
  - Image (certification logo/badge)
  - PDF Document (certificate file)
  - Icon Class (if no image provided)

**Tips:**
- Upload certificate images as PNG or JPG
- PDF files should be under 5MB
- Use descriptive alt text for images

**Default Certifications:**
1. ISO 9001:2015
2. WBENC Certified
3. WOSB Certified
4. NIST Traceable

---

### Manufacturers Section

**Location:** Theme Settings → Manufacturers Section

**Available Fields:**
- **Section Title** - Main heading
- **Section Description** - Subtitle
- **Show Manufacturer Logos** - Toggle to display/hide logos
- **CTA Button Text & Link** - Bottom button

**Note:** Manufacturer logos are automatically displayed from the theme's image folder. To add/change logos:
1. Upload images to: `wp-content/themes/abbott-gage-theme/assets/images/manufacturers/`
2. Images should be 200x100px, transparent background
3. Supported formats: GIF, PNG, JPG

---

### Call-to-Action (CTA) Section

**Location:** Theme Settings → Call-to-Action Section

**Available Fields:**
- **CTA Title** - Main headline
- **CTA Description** - Supporting text
- **Button 1 Text & Link** - Primary button
- **Button 2 Text & Phone** - Phone call button
- **Business Hours Text** - Hours displayed below buttons

**Example:**
```
Title: Ready to Get Started?
Description: Contact us today for a free quote.
Button 1: Contact Us → /contact
Button 2: Call 1-800-481-4243 → +18004814243
Hours: Monday - Friday: 8:00 AM - 5:00 PM CST
```

---

### Footer Settings

**Location:** Theme Settings → Footer Settings

**Available Fields:**
- **Company Description** - Short text about your business
- **Street Address** - Physical address line 1
- **City, State, Zip** - Address line 2
- **Fax Number** - Fax number (optional)
- **Payment Methods Image** - Logo/image of accepted payment methods

**Tips:**
- Keep description under 100 characters
- Payment image should be 300x50px

---

### Business Information (SEO)

**Location:** Theme Settings → Business Information

**Available Fields:**
- **Business Name** - Official company name
- **Business Description** - For Google/Schema markup
- **Latitude** - GPS coordinate
- **Longitude** - GPS coordinate
- **Business Hours** - Schema format (Mo-Fr 08:00-17:00)

**Finding Your GPS Coordinates:**
1. Go to Google Maps
2. Right-click on your business location
3. Select "What's here?"
4. Copy the coordinates

**Tips:**
- This information helps with local SEO
- Business hours format: Day range, 24-hour time
- Examples: `Mo-Fr 08:00-17:00`, `Mo-Sa 09:00-18:00`

---

## Saving Your Changes

After editing any fields:

1. **Click "Update"** or **"Publish"** button (top right)
2. **View your site** - Click "View Page" or visit your homepage
3. **Clear cache** if using a caching plugin
4. **Refresh browser** - Use Ctrl+F5 (Windows) or Cmd+Shift+R (Mac)

---

## Tips for Best Results

### Images
- **Hero Background:** 1920x1080px minimum
- **About Image:** 800x600px minimum
- **Certification Images:** 400x400px
- **Always use high-quality images**
- **Compress images** before uploading (use TinyPNG.com)

### Text Content
- **Be concise** - Shorter is often better
- **Use action words** - "Get", "Contact", "Discover"
- **Check spelling** - Review before publishing
- **Mobile friendly** - Keep headlines short for mobile screens

### Links
- **Use relative URLs** when linking internally: `/contact` not `https://yoursite.com/contact`
- **Test all links** after making changes
- **Use descriptive link text** - Not "Click here"

### Icons
- Browse Font Awesome icons: https://fontawesome.com/v6/search?m=free
- Only use **free** icons (not Pro)
- Icon format: `fas fa-icon-name` or `far fa-icon-name`
- Common prefixes:
  - `fas` - Solid icons (most common)
  - `far` - Regular icons (outlined)
  - `fab` - Brand icons (social media)

---

## Troubleshooting

### "Fields not showing up"
- **Solution:** Make sure ACF plugin is activated
- Go to: Plugins → Installed Plugins → Find "Advanced Custom Fields"
- If deactivated, click "Activate"

### "Changes not appearing on site"
- **Clear your cache** (if using caching plugin)
- **Hard refresh browser:** Ctrl+F5 (Windows) or Cmd+Shift+R (Mac)
- **Check you're editing the right page** - Homepage vs other pages

### "Image not displaying"
- **Check image is uploaded** - Look in Media Library
- **Try re-uploading** the image
- **Check image size** - Should be under 5MB
- **Verify correct format** - JPG, PNG, or GIF only

### "Link not working"
- **Use full URL** - Include https:// for external links
- **Use relative URL** - Start with / for internal links
- **Test the link** - Click to verify it works

### "Icon not displaying"
- **Check icon class spelling** - Must be exact
- **Use Font Awesome 6 icons** - Older versions may not work
- **Format:** `fas fa-icon-name` (include prefix)

---

## Need More Help?

### Documentation
- **ACF Plugin Docs:** https://www.advancedcustomfields.com/resources/
- **Font Awesome Icons:** https://fontawesome.com/v6/search?m=free
- **WordPress Codex:** https://wordpress.org/support/

### Support
- Contact your website developer
- Check theme documentation in `/docs` folder
- WordPress Support Forums: https://wordpress.org/support/

---

## Quick Reference - All Field Locations

| Content Area | Location |
|-------------|----------|
| Header Contact Info | Theme Settings → Header Settings |
| Hero Banner | Pages → Homepage → Hero Section |
| Services Cards | Theme Settings → Services Section |
| About Section | Pages → Homepage → About Section |
| Why Choose Us | Pages → Homepage → Why Choose Us |
| Certifications | Theme Settings → Certifications Section |
| Manufacturers | Theme Settings → Manufacturers Section |
| CTA Sections | Theme Settings → Call-to-Action Section |
| Footer Info | Theme Settings → Footer Settings |
| Business/SEO Info | Theme Settings → Business Information |

---

**Last Updated:** November 2025  
**Theme Version:** 1.0.0  
**ACF Version Required:** 6.0+ (Free)

