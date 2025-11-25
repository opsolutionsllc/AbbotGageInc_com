# Legal Pages Setup Guide

This guide will help you add content to your Privacy Policy and Terms of Service pages.

## What's Been Created

Two new page templates have been added to your theme:
- **Privacy Policy** (`page-privacy-policy.php`)
- **Terms of Service** (`page-terms-of-service.php`)

Both templates are designed to display content you manage directly through the WordPress editor.

## How to Set Up the Pages

### Step 1: Create the Pages in WordPress

1. Log in to your WordPress admin panel
2. Go to **Pages → Add New**
3. Create a new page called "Privacy Policy"
4. On the right sidebar, under **Page Attributes**, select **Privacy Policy** from the Template dropdown
5. Leave the content area empty for now (you'll add content later)
6. Click **Publish**
7. Repeat steps 2-6 for "Terms of Service" (selecting the **Terms of Service** template)

### Step 2: Add Your Content

#### For Privacy Policy:
1. Go to **Pages** and click **Edit** on your Privacy Policy page
2. In the WordPress editor, add your privacy policy content
3. Use headings (H2, H3) to organize sections like:
   - Information We Collect
   - How We Use Your Information
   - How We Protect Your Information
   - Third-Party Services
   - Cookies and Tracking
   - Your Rights
   - Contact Information

#### For Terms of Service:
1. Go to **Pages** and click **Edit** on your Terms of Service page
2. In the WordPress editor, add your terms of service content
3. Use headings (H2, H3) to organize sections like:
   - Acceptance of Terms
   - Services Description
   - User Responsibilities
   - Payment Terms
   - Warranties and Disclaimers
   - Limitation of Liability
   - Termination
   - Governing Law
   - Contact Information

### Step 3: Content Tips

- **Use Headings**: Structure your content with H2 and H3 headings for better readability
- **Be Clear**: Use plain language when possible
- **Lists**: Use bullet points or numbered lists for easy scanning
- **Links**: Add links to contact pages or other relevant pages
- **Update Date**: The template automatically displays the last modified date

### Step 4: Add to Footer Menu (Optional)

You may want to link to these pages from your footer:

1. Go to **Appearance → Menus**
2. Find or create your footer menu
3. Add the Privacy Policy and Terms of Service pages to the menu
4. Save the menu

## Example Content Sections

### Privacy Policy Example Structure:
```
[H2] Information We Collect
[paragraph] We collect information you provide directly to us when you...

[H2] How We Use Your Information
[paragraph] We use the information we collect to...

[H2] Contact Information
[paragraph] If you have questions about this Privacy Policy, please contact us at:
Email: info@abbottgageinc.com
Phone: [your phone number]
Address: [your address]
```

### Terms of Service Example Structure:
```
[H2] Acceptance of Terms
[paragraph] By accessing and using the services of Abbott Gage, Inc., you agree to...

[H2] Services Description
[paragraph] Abbott Gage, Inc. provides precision measuring equipment...

[H2] Payment Terms
[paragraph] Payment is due upon receipt of invoice unless...

[H2] Contact Information
[paragraph] For questions about these Terms of Service, please contact us at:
Email: info@abbottgageinc.com
Phone: [your phone number]
```

## Need Help with Content?

If you need assistance writing your Privacy Policy or Terms of Service, consider:
1. Using a legal document generator service
2. Consulting with a business attorney
3. Adapting templates from similar businesses in your industry

## Technical Notes

- The pages use the standard WordPress editor (no ACF fields required)
- Content is styled automatically by the template
- The "Last Updated" date updates automatically when you save changes
- The pages are mobile-responsive
- A CTA section is included at the bottom of each page

## Customization

If you need to modify the page layout or styling:
- Template files: `page-privacy-policy.php` and `page-terms-of-service.php`
- CSS styling: `assets/css/main.css` (search for "Legal Pages")

