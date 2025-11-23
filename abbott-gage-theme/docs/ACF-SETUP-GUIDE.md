# ACF Pro 6.6.2 Setup Guide

## Overview
Your Abbott Gage theme is now fully integrated with Advanced Custom Fields (ACF) Pro 6.6.2. All content across your website is now editable through the WordPress admin interface without touching code.

## What's Been Implemented

### 1. Global Settings (Options Page)
**Location:** WordPress Admin > Global Settings

**Fields Available:**
- **Contact Information Tab:**
  - Company Name
  - Primary Phone
  - Toll Free Phone
  - Fax Number
  - Email Address
  - Street Address, City, State, ZIP
  - Business Hours

- **Social Media Tab:**
  - Facebook URL
  - LinkedIn URL
  - Twitter URL

**Usage:** These fields are used site-wide, especially on the Contact page and CTA sections.

---

### 2. Homepage (Front Page)

#### Hero Section
Edit your hero banner with:
- Hero Title
- Hero Subtitle
- Hero Features (repeater) - add/remove features with icons
- Hero Buttons (repeater) - customize call-to-action buttons

#### Services Section
- Section Title & Description
- Services Items (repeater):
  - Icon, Title, Description
  - Features List (nested repeater)
  - Service Link
  - Featured Badge option

#### Certifications Section
- Section Title & Description
- Certifications (repeater):
  - Image or Icon
  - Title & Description
  - PDF Certificate upload

#### Manufacturers Section
- Section Title & Description
- Manufacturers (repeater):
  - Logo image
  - Name
  - Factory Authorized badge toggle
- View All Button link

#### About Section (Homepage)
- Section Title
- Lead Text
- WYSIWYG Content Editor
- Features (repeater)
- Button Link
- About Image

#### Why Choose Us Section
- Section Title & Description
- Reasons (repeater):
  - Icon, Title, Description

#### CTA Section
- CTA Title & Description
- CTA Buttons (repeater)
- Show/Hide Business Hours toggle

---

### 3. About Page

**Fields Available:**
- Introduction Image
- **Company Story Tab:**
  - History Title & Content (WYSIWYG)
  - Commitment Title & Content (WYSIWYG)
- **Certifications Tab:**
  - Section Title
  - Highlights (repeater): Icon, Title, Description
- **Team Section Tab:**
  - Team Title & Description
  - Team Content (WYSIWYG)
  - Team Features (repeater)

---

### 4. Contact Page

**Fields Available:**
- Form Title & Description
- Contact Form 7 Shortcode
- Contact Info Title
- Certifications Title & Badges (repeater)
- Map Section Title
- Google Maps Embed Code

**Note:** Contact information pulls from Global Settings (Options Page).

---

## How to Edit Content

### Step 1: Access Field Groups
1. Log in to WordPress Admin
2. Navigate to **Custom Fields > Field Groups**
3. You'll see all available field groups for different pages

### Step 2: Edit Page Content
1. Go to **Pages** in WordPress Admin
2. Select the page you want to edit (Homepage, About, Contact)
3. Scroll down below the main content editor
4. You'll see ACF field groups specific to that page
5. Edit the fields as needed
6. Click **Update** to save

### Step 3: Edit Global Settings
1. Go to **Global Settings** in WordPress Admin (left sidebar)
2. Edit contact information, social media links, etc.
3. These changes will reflect across the entire site
4. Click **Save Changes**

---

## ACF Pro 6.6.2 Features Used

### Repeater Fields
Used extensively for dynamic content like:
- Services cards
- Certifications
- Manufacturers
- Features lists

**To use:**
- Click "Add Row" to add new items
- Drag rows to reorder
- Click "Remove" to delete items

### Conditional Logic
Smart fields that show/hide based on your selections:
- **Certifications**: Icon field only appears when no image is uploaded
- **Services**: Featured badge text field only shows when "Featured" is toggled on
- Keeps the interface clean and prevents errors

### Select Fields with Search
All icon fields use searchable dropdowns:
- Type to search for an icon
- Visual emoji previews
- Organized by category
- No technical knowledge required

### WYSIWYG Editor
Rich text editor for formatted content with:
- Text formatting
- Links and images
- Lists and headings

### Image Fields
Upload and manage images with:
- Image preview
- Alt text support
- Size selection

### Link Fields
Create links with:
- URL
- Link text
- Target (open in new tab)

### True/False Fields
Toggle switches for:
- Featured items
- Show/hide sections
- Factory authorized badges

### File Upload
For PDF certificates and documents

---

## Default Values

All fields have sensible default values. If you don't fill in a field, the original hardcoded content will display. This ensures your site never breaks.

## Best Practices

1. **Always fill in required fields** (marked with red asterisk)
2. **Icon Selection Made Easy**:
   - Use the dropdown menus with visual previews
   - No need to know Font Awesome class names
   - Icons are organized by category
3. **Certifications Section**:
   - Upload an image OR select an icon (not both)
   - Icon field automatically hides when you upload an image
4. **Optimize images** before uploading for better performance
5. **Keep descriptions concise** for better readability
6. **Test changes** on a staging site first if available

## Icon Selection

**All icon fields now use easy dropdown menus!** No need to memorize icon class names.

When you see an icon field, simply:
1. Click the dropdown
2. Search or scroll through the visual list
3. Each icon shows an emoji preview and descriptive name
4. Select your icon

**Icon Categories Available:**
- 🏅 Certifications & Quality (certificates, awards, checks)
- 🔧 Tools & Equipment (wrenches, hammers, gears)
- 🧪 Science & Lab (microscope, flask, atom)
- 🤝 Business & Service (handshake, team, training)
- 🕐 Time & History (clock, calendar, history)
- 🚚 Service & Delivery (truck, shipping, packages)
- 📞 Communication (phone, email, comments)
- 📍 Location (map pins, buildings, warehouses)
- 🛒 Shopping & Sales (cart, bag, cash register)
- 📄 Documents (PDFs, files, clipboards)
- → Actions (arrows, chevrons)
- ⭐ Miscellaneous (stars, hearts, lightbulbs)

**Smart Conditional Logic:**
- In Certifications: Icon field only shows when no image is uploaded
- This keeps the interface clean and prevents confusion

## Template Files Updated

All template files now use ACF fields:
- `template-parts/hero-section.php`
- `template-parts/services-cards.php`
- `template-parts/certifications-section.php`
- `template-parts/manufacturers-section.php`
- `template-parts/cta-section.php`
- `front-page.php`
- `page-about.php`
- `page-contact.php`

## Field Registration

Fields are registered programmatically in:
- `inc/acf-fields.php`

This ensures fields are version-controlled and easy to deploy.

---

## Troubleshooting

### Fields Not Showing?
1. Ensure ACF Pro 6.6.2+ is installed and activated
2. Check that you're editing the correct page template
3. Verify the page template is assigned correctly

### Content Not Displaying?
1. Check if ACF field names match in template files
2. Ensure field groups are assigned to correct locations
3. Clear any caching plugins

### Need to Add New Fields?
Edit `inc/acf-fields.php` and add new fields to the appropriate field group using ACF's `acf_add_local_field_group()` function.

---

## Support

For ACF Pro documentation: [https://www.advancedcustomfields.com/resources/](https://www.advancedcustomfields.com/resources/)

For theme-specific questions, refer to the theme documentation.

---

## Version Information

- **ACF Pro Version:** 6.6.2+
- **Theme Version:** 1.0.0
- **WordPress Version:** 5.8+
- **PHP Version:** 7.4+

---

**Last Updated:** November 2025

