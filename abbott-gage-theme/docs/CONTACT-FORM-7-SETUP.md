# Contact Form 7 Setup Guide
## Abbott Gage Inc WordPress Theme

This guide will walk you through setting up Contact Form 7 for the Abbott Gage Inc theme.

---

## Installation

1. **Install Contact Form 7 Plugin:**
   - Go to WordPress Admin → Plugins → Add New
   - Search for "Contact Form 7"
   - Click "Install Now" and then "Activate"

---

## Form Configurations

### 1. General Contact Form

**Form Code:**
```
<div class="form-row">
    <div class="form-group">
        <label> Your Name (required)
            [text* your-name class:form-control placeholder "John Doe"]
        </label>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label> Company Name
            [text company-name class:form-control placeholder "Company Inc."]
        </label>
    </div>
</div>

<div class="form-row form-row-2col">
    <div class="form-group">
        <label> Your Email (required)
            [email* your-email class:form-control placeholder "email@example.com"]
        </label>
    </div>
    <div class="form-group">
        <label> Phone Number
            [tel phone-number class:form-control placeholder "(256) 378-3286"]
        </label>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label> Message (required)
            [textarea* your-message class:form-control rows:6 placeholder "Tell us about your calibration needs..."]
        </label>
    </div>
</div>

<div class="form-row">
    [submit class:btn class:btn-primary "Send Message"]
</div>
```

**Mail Settings:**
- **To:** `info@abbottgageinc.com`
- **From:** `[your-name] <wordpress@yourdomain.com>`
- **Subject:** `Website Contact Form - [your-name]`
- **Message Body:**
```
From: [your-name]
Company: [company-name]
Email: [your-email]
Phone: [phone-number]

Message:
[your-message]

--
This email was sent from the contact form on Abbott Gage Inc (https://abbottgageinc.com)
```

---

### 2. Quote Request Form

**Form Code:**
```
<div class="form-row form-row-2col">
    <div class="form-group">
        <label> Your Name (required)
            [text* your-name class:form-control placeholder "John Doe"]
        </label>
    </div>
    <div class="form-group">
        <label> Company Name (required)
            [text* company-name class:form-control placeholder "Company Inc."]
        </label>
    </div>
</div>

<div class="form-row form-row-2col">
    <div class="form-group">
        <label> Your Email (required)
            [email* your-email class:form-control placeholder "email@example.com"]
        </label>
    </div>
    <div class="form-group">
        <label> Phone Number (required)
            [tel* phone-number class:form-control placeholder "(256) 378-3286"]
        </label>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label> Service Type (required)
            [select* service-type class:form-control "Laboratory Calibration" "Onsite Calibration" "Repair Services" "Tool Sales" "Other"]
        </label>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label> Equipment/Tool Description
            [textarea equipment-description class:form-control rows:4 placeholder "Describe the equipment that needs calibration/repair..."]
        </label>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label> Additional Information
            [textarea additional-info class:form-control rows:4 placeholder "Any additional details, quantity, urgency, etc..."]
        </label>
    </div>
</div>

<div class="form-row">
    [submit class:btn class:btn-primary "Request Quote"]
</div>
```

**Mail Settings:**
- **To:** `info@abbottgageinc.com`
- **From:** `[your-name] <wordpress@yourdomain.com>`
- **Subject:** `Quote Request - [service-type] - [company-name]`
- **Message Body:**
```
Quote Request Form Submission

Name: [your-name]
Company: [company-name]
Email: [your-email]
Phone: [phone-number]

Service Type: [service-type]

Equipment/Tool Description:
[equipment-description]

Additional Information:
[additional-info]

--
This email was sent from the quote request form on Abbott Gage Inc (https://abbottgageinc.com)
```

---

### 3. Catalog Request Form

**Form Code:**
```
<div class="form-row form-row-2col">
    <div class="form-group">
        <label> Your Name (required)
            [text* your-name class:form-control placeholder "John Doe"]
        </label>
    </div>
    <div class="form-group">
        <label> Company Name
            [text company-name class:form-control placeholder "Company Inc."]
        </label>
    </div>
</div>

<div class="form-row form-row-2col">
    <div class="form-group">
        <label> Your Email (required)
            [email* your-email class:form-control placeholder "email@example.com"]
        </label>
    </div>
    <div class="form-group">
        <label> Phone Number
            [tel phone-number class:form-control placeholder "(256) 378-3286"]
        </label>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label> Manufacturer Interest (select all that apply)
            [checkbox manufacturer-interest "Mitutoyo" "Brown & Sharpe" "Fowler" "Snap-On" "Starrett" "Hioki" "Other"]
        </label>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label> Additional Comments
            [textarea comments class:form-control rows:4 placeholder "Any specific tools or categories you're interested in..."]
        </label>
    </div>
</div>

<div class="form-row">
    [submit class:btn class:btn-primary "Request Catalog"]
</div>
```

---

## Custom CSS for Contact Form 7

Add this CSS to **Appearance → Customize → Additional CSS** or to your theme's custom CSS file:

```css
/* Contact Form 7 Styling */
.wpcf7-form {
    max-width: 100%;
}

.form-row {
    margin-bottom: 1.5rem;
}

.form-row-2col {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--color-dark);
}

.form-control,
.wpcf7-form-control.wpcf7-text,
.wpcf7-form-control.wpcf7-email,
.wpcf7-form-control.wpcf7-tel,
.wpcf7-form-control.wpcf7-textarea,
.wpcf7-form-control.wpcf7-select {
    width: 100%;
    padding: 0.875rem 1rem;
    border: 2px solid var(--color-border);
    border-radius: var(--radius-md);
    font-size: 1rem;
    font-family: var(--font-body);
    transition: border-color 0.3s ease;
}

.wpcf7-form-control:focus {
    outline: none;
    border-color: var(--color-primary);
}

.wpcf7-form-control.wpcf7-not-valid {
    border-color: var(--color-accent);
}

.wpcf7-not-valid-tip {
    color: var(--color-accent);
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

.wpcf7-response-output {
    border: 2px solid;
    padding: 1rem;
    margin: 1.5rem 0 0;
    border-radius: var(--radius-md);
}

.wpcf7-mail-sent-ok {
    border-color: #4caf50;
    background-color: #e8f5e9;
    color: #2e7d32;
}

.wpcf7-validation-errors,
.wpcf7-acceptance-missing {
    border-color: var(--color-accent);
    background-color: #ffebee;
    color: #c62828;
}

/* Checkbox & Radio Styling */
.wpcf7-list-item {
    margin: 0 0 0.5rem 0;
}

.wpcf7-list-item-label {
    margin-left: 0.5rem;
}

/* Submit Button */
.wpcf7-submit {
    cursor: pointer;
}

/* Responsive */
@media (max-width: 768px) {
    .form-row-2col {
        grid-template-columns: 1fr;
    }
}
```

---

## Adding Forms to Pages

### Contact Page
1. Edit the Contact page template (`page-contact.php`)
2. Replace the placeholder div with:
```php
<?php echo do_shortcode( '[contact-form-7 id="YOUR_FORM_ID" title="Contact Form"]' ); ?>
```

### Other Pages
You can add forms anywhere using the shortcode:
```
[contact-form-7 id="YOUR_FORM_ID" title="Form Title"]
```

---

## Email Configuration

### Recommended Email Settings
1. **Install WP Mail SMTP Plugin** (recommended for reliable email delivery)
2. Configure with your email provider (Gmail, SendGrid, etc.)
3. Test emails using the plugin's test email feature

### Alternative: Use Default WordPress Mail
If using default WordPress mail, ensure your server's mail function is working properly.

---

## Form Notifications

To receive notifications for specific team members:

1. Edit form in Contact Form 7
2. Go to "Mail" tab
3. Add multiple recipients:
   ```
   info@abbottgageinc.com, sales@abbottgageinc.com
   ```

---

## Spam Protection

### reCAPTCHA Integration
1. Install "reCAPTCHA for Contact Form 7" plugin (or use built-in feature)
2. Get API keys from Google reCAPTCHA
3. Add keys in Contact Form 7 → Integration
4. Add reCAPTCHA to your forms:
   ```
   [recaptcha]
   ```

---

## Troubleshooting

### Emails Not Sending
1. Check WP Mail SMTP configuration
2. Verify "From" email matches your domain
3. Check spam folder
4. Test with WP Mail SMTP test email feature

### Form Not Displaying
1. Verify plugin is activated
2. Check shortcode ID matches your form
3. Clear cache if using caching plugin

### Styling Issues
1. Clear browser cache
2. Check CSS is properly enqueued
3. Inspect with browser developer tools

---

## Support

For additional help:
- Contact Form 7 Documentation: https://contactform7.com/docs/
- WP Mail SMTP Documentation: https://wpmailsmtp.com/docs/
- Theme Support: Contact your development team

