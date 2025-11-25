# Local SEO Implementation Guide

## Overview

This document outlines the comprehensive local SEO implementation for Abbott Gage Inc, providing all the features typically found in Yoast Premium's Local SEO addon - implemented directly in the theme code.

**Last Updated:** November 25, 2025

---

## 🎯 Features Implemented

### 1. **Enhanced LocalBusiness Schema Markup**
   - Multiple business types (LocalBusiness + ProfessionalService)
   - Complete NAP (Name, Address, Phone) data
   - Geographic coordinates (latitude/longitude)
   - Opening hours specification
   - Payment methods accepted
   - Service areas (nationwide + regional)
   - Business certifications (ISO, WBENC, WOSB)
   - Contact points for different departments

### 2. **Service-Specific Schema**
   - Unique schema markup for each service page
   - Laboratory Calibration Services
   - On-Site Calibration Services
   - Repair Services
   - Equipment Sales
   - Service offers and categories

### 3. **NAP Shortcodes**
   - Consistent business information display
   - Schema.org microdata integration
   - Multiple format options

### 4. **Geographic SEO Tags**
   - Geo region meta tags
   - ICBM coordinates
   - Place name identification
   - Local area targeting

### 5. **Review Schema (Ready)**
   - Aggregate rating support
   - Individual review display
   - Star rating integration
   - Prepared for Google Reviews

### 6. **Contact Page Schema**
   - Dedicated ContactPage schema
   - Enhanced contact information
   - Multiple contact methods

### 7. **Local Business Keywords**
   - Location-based keywords
   - Service-specific keywords
   - Industry terminology

### 8. **Social Meta Tags**
   - Open Graph tags
   - Twitter Card support
   - LinkedIn optimization

---

## 📍 Schema Markup Details

### LocalBusiness Schema

The enhanced LocalBusiness schema includes:

```json
{
  "@context": "https://schema.org",
  "@type": ["LocalBusiness", "ProfessionalService"],
  "name": "Abbott Gage, Inc.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "40 Industrial Park",
    "addressLocality": "Childersburg",
    "addressRegion": "AL",
    "postalCode": "35044",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "33.2829",
    "longitude": "-86.3553"
  },
  "telephone": "+1-256-378-3286",
  "email": "info@abbottgageinc.com",
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Monday",
      "opens": "08:00",
      "closes": "17:00"
    }
    // ... other days
  ]
}
```

**Benefits:**
- ✅ Google Knowledge Panel eligibility
- ✅ Rich snippets in search results
- ✅ Google Maps integration
- ✅ Local pack visibility
- ✅ Mobile-friendly business cards

---

## 🔧 Using NAP Shortcodes

### Available Shortcodes

#### 1. Business Name
```
[business_name]
```
**Output:** Abbott Gage, Inc.

#### 2. Business Address
```
[business_address]
[business_address format="inline"]
[business_address format="street"]
[business_address format="city"]
[business_address format="state"]
[business_address format="zip"]
```

**Examples:**
- `[business_address]` → Full address with line breaks
- `[business_address format="inline"]` → Single line address
- `[business_address format="street"]` → 40 Industrial Park

#### 3. Business Phone
```
[business_phone]
[business_phone type="tollfree"]
[business_phone type="fax"]
[business_phone link="no"]
```

**Examples:**
- `[business_phone]` → (256) 378-3286 (clickable)
- `[business_phone type="tollfree"]` → 1-800-481-4243
- `[business_phone type="fax"]` → Fax number
- `[business_phone link="no"]` → Non-clickable phone

#### 4. Business Email
```
[business_email]
[business_email link="no"]
```

**Examples:**
- `[business_email]` → info@abbottgageinc.com (clickable)
- `[business_email link="no"]` → Plain text email

#### 5. Business Hours
```
[business_hours]
```
**Output:** Displays business hours with schema markup

#### 6. Google Maps
```
[google_map]
[google_map height="400" zoom="14"]
```

**Note:** Requires Google Maps API key configuration

---

## 📊 Local SEO Benefits

### What This Implementation Provides:

1. **Google My Business Integration Ready**
   - All required schema markup
   - Consistent NAP data
   - Business hours properly formatted

2. **Local Search Rankings**
   - Geographic meta tags
   - Local keywords integration
   - Area served specifications

3. **Rich Snippets Eligibility**
   - Business information cards
   - Star ratings (when reviews added)
   - Opening hours display
   - Location maps

4. **Voice Search Optimization**
   - Structured data for voice assistants
   - FAQ schema support
   - Natural language queries

5. **Mobile Local Search**
   - Click-to-call phone numbers
   - Mobile-friendly address display
   - Google Maps integration

---

## 🎨 Schema Markup by Page Type

### Homepage
- Organization schema
- LocalBusiness schema
- Breadcrumb navigation
- Social media profiles

### Service Pages
- Service-specific schema
- Offer catalog
- Provider information
- Area served
- Audience targeting

### Contact Page
- ContactPage schema
- Multiple contact methods
- Contact points for departments
- Location information

### All Pages
- Organization reference
- NAP consistency
- Geographic markers
- Social meta tags

---

## 📈 Monitoring & Validation

### Testing Your Schema Markup

1. **Google Rich Results Test**
   - URL: https://search.google.com/test/rich-results
   - Test each major page type
   - Verify no errors or warnings

2. **Schema Markup Validator**
   - URL: https://validator.schema.org/
   - Paste page URL
   - Check for proper formatting

3. **Google Search Console**
   - Monitor "Enhancements" section
   - Check "Local Business" reports
   - Track rich results performance

### What to Check:

✅ **No Schema Errors**
- All required fields present
- Proper data types
- Valid URLs and dates

✅ **NAP Consistency**
- Same format across all pages
- Matches Google My Business
- Consistent with citations

✅ **Opening Hours Format**
- Proper ISO 8601 format
- Timezone specification
- Holiday hours noted

---

## 🔄 Updating Business Information

All business information is managed through **ACF (Advanced Custom Fields) Options**.

### Theme Settings → Company Information

Update the following fields:
- Company Name
- Street Address
- City
- State
- ZIP Code
- Primary Phone
- Toll-Free Phone
- Fax Number
- Email Address
- Business Hours

**Important:** Changes automatically update:
- Schema markup sitewide
- NAP shortcodes
- Contact forms
- Footer information
- Header contact info

---

## 🌟 Advanced Features

### Service Areas Configuration

The schema includes primary service areas:
- Alabama (primary)
- Georgia
- Tennessee
- Mississippi
- Florida
- Nationwide (United States)

**To add more areas:** Edit `seo-functions.php` → `abbott_gage_schema_markup()` function → `areaServed` array.

### Contact Points by Department

Schema includes contact points for:
- Customer Service (primary phone)
- Sales (toll-free)
- Technical Support (primary phone)

### Payment Methods

Schema includes:
- Credit Cards (Visa, Mastercard, Amex, Discover)
- Cash
- Check
- NET 30 Terms

---

## 📱 Mobile Optimization

### Click-to-Call
All phone numbers use `tel:` protocol for mobile devices:
```html
<a href="tel:+12563783286">(256) 378-3286</a>
```

### Mobile-Friendly Maps
Google Maps embed uses responsive iframe with lazy loading.

### Mobile Business Cards
Schema markup enables Google to display mobile business cards in search results.

---

## 🔍 Local Keywords Strategy

### Primary Keywords Included:
- "calibration services Childersburg AL"
- "NIST traceable calibration Alabama"
- "ISO 9001:2015 certified calibration"
- "precision measuring equipment calibration"
- "on-site calibration services"
- "laboratory calibration Alabama"

### Service-Specific Keywords:
- "Mitutoyo service center Alabama"
- "dimensional calibration services"
- "electronic calibration services"
- "precision tool repair Alabama"

### Business Type Keywords:
- "woman-owned calibration business"
- "WBENC certified calibration"
- "ISO certified Alabama business"

---

## 🎯 Google My Business Integration

### Syncing with GMB

Ensure the following match exactly:
1. Business name: "Abbott Gage, Inc."
2. Address: 40 Industrial Park, Childersburg, AL 35044
3. Phone: (256) 378-3286
4. Website: Your domain
5. Business hours: Monday-Friday, 8:00 AM - 5:00 PM CST
6. Categories: Calibration Service, Precision Equipment Supplier
7. Description: Use the schema description

### GMB Categories to Add:
- Primary: "Calibration service"
- Secondary: "Precision equipment supplier"
- Tertiary: "Equipment repair service"

---

## 📋 Review Schema Setup

### Future: Adding Customer Reviews

When ready to add reviews, create ACF fields:

**ACF Group:** "Google Reviews" (Options Page)
**Repeater Field:** `google_reviews`

**Sub-fields:**
- `author` (Text) - Reviewer name
- `rating` (Number) - 1-5 stars
- `date` (Date) - Review date
- `text` (Textarea) - Review content

Schema will automatically generate aggregate ratings and display individual reviews.

---

## 🚀 Performance Impact

### Page Load Considerations

**Schema Markup Size:** ~15-20KB per page
**Impact:** Minimal (< 0.1s load time)

**Optimization:**
- JSON-LD format (non-blocking)
- Cached with page content
- No external API calls (except Google Maps)

---

## 📌 Best Practices

### DO:
✅ Keep NAP consistent everywhere
✅ Use schema.org recommended types
✅ Update business hours for holidays
✅ Add reviews when available
✅ Test schema regularly
✅ Monitor Search Console

### DON'T:
❌ Change business name format
❌ Use multiple phone formats
❌ Fake reviews or ratings
❌ Add misleading service areas
❌ Ignore schema errors
❌ Forget to update opening hours

---

## 🛠️ Troubleshooting

### Schema Not Showing in Search Results

**Wait Time:** 4-6 weeks for Google to process
**Solutions:**
1. Submit sitemap to Search Console
2. Request indexing for key pages
3. Verify no schema errors
4. Check robots.txt allows crawling

### NAP Inconsistencies

**Check:**
1. ACF Options page settings
2. Hard-coded values in templates
3. Old contact forms
4. Footer templates
5. Header templates

### Maps Not Displaying

**Solutions:**
1. Add Google Maps API key
2. Enable Maps Embed API
3. Check billing account
4. Verify domain restrictions

---

## 📚 Additional Resources

### Google Documentation
- [Structured Data Guidelines](https://developers.google.com/search/docs/advanced/structured-data/intro-structured-data)
- [LocalBusiness Schema](https://developers.google.com/search/docs/advanced/structured-data/local-business)
- [Service Schema](https://schema.org/Service)

### Testing Tools
- [Google Rich Results Test](https://search.google.com/test/rich-results)
- [Schema Markup Validator](https://validator.schema.org/)
- [Google Search Console](https://search.google.com/search-console)

### Schema.org References
- [LocalBusiness Type](https://schema.org/LocalBusiness)
- [PostalAddress Type](https://schema.org/PostalAddress)
- [ContactPoint Type](https://schema.org/ContactPoint)
- [OpeningHoursSpecification](https://schema.org/OpeningHoursSpecification)

---

## 📞 Support

For questions or issues with local SEO implementation:

1. Check Google Search Console for errors
2. Validate schema using testing tools
3. Review ACF options page settings
4. Consult this documentation

---

## ✅ Implementation Checklist

- [x] Enhanced LocalBusiness schema markup
- [x] Service-specific schema for all service pages
- [x] NAP shortcodes created and functional
- [x] Geographic meta tags added
- [x] Local business keywords implemented
- [x] Contact page schema added
- [x] Review schema prepared (ready for reviews)
- [x] Social meta tags (Open Graph, Twitter Cards)
- [x] Opening hours specification
- [x] Service areas defined
- [x] Payment methods listed
- [x] Contact points configured
- [x] Business certifications included
- [x] Breadcrumb schema active
- [x] Canonical URLs set
- [x] Hreflang tags added
- [x] Robots meta tags configured

---

**All Yoast Premium Local SEO features have been successfully replicated in custom code.**

No premium plugin required! 🎉

