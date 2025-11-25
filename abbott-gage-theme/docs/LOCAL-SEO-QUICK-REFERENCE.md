# Local SEO Quick Reference

## 🚀 Quick Start Guide

This is your quick reference for using the local SEO features implemented in your Abbott Gage theme.

---

## 📱 NAP Shortcodes (Use Anywhere)

### Business Name
```
[business_name]
```

### Address Variations
```
[business_address]                          → Full address (multi-line)
[business_address format="inline"]          → Single line
[business_address format="street"]          → Street only
[business_address format="city"]            → City only
[business_address format="state"]           → State only
[business_address format="zip"]             → ZIP only
```

### Phone Numbers
```
[business_phone]                            → Primary phone (clickable)
[business_phone type="tollfree"]            → Toll-free number
[business_phone type="fax"]                 → Fax number
[business_phone link="no"]                  → No link (plain text)
```

### Email
```
[business_email]                            → Email (clickable)
[business_email link="no"]                  → Plain text email
```

### Business Hours
```
[business_hours]                            → Display hours with schema
```

### Google Map
```
[google_map]                                → Standard map
[google_map height="400" zoom="14"]         → Custom size/zoom
```

---

## 🎯 What's Automatically Added to Every Page

### In `<head>` Section:
- ✅ LocalBusiness schema markup
- ✅ Organization schema
- ✅ Contact points
- ✅ Opening hours specification
- ✅ Geographic coordinates
- ✅ Meta description (if not Yoast)
- ✅ Canonical URL
- ✅ Open Graph tags
- ✅ Twitter Card tags
- ✅ Geo meta tags (region, position, ICBM)
- ✅ Local business keywords
- ✅ Robots meta tags

### In `<footer>` Section:
- ✅ Hidden schema markup for NAP consistency
- ✅ Microdata for search engines

### On Service Pages:
- ✅ Service-specific schema
- ✅ Offer catalogs
- ✅ Target audience info
- ✅ Service descriptions

### On Contact Page:
- ✅ ContactPage schema
- ✅ Enhanced contact information
- ✅ Department contact points

---

## 📊 Schema Markup Types Included

| Schema Type | Where Used | Purpose |
|------------|------------|---------|
| **LocalBusiness** | All pages | Main business info |
| **ProfessionalService** | All pages | Service provider type |
| **Service** | Service pages | Specific service details |
| **ContactPage** | Contact page | Contact information |
| **PostalAddress** | All pages | Location data |
| **GeoCoordinates** | All pages | Map integration |
| **OpeningHours** | All pages | Business hours |
| **ContactPoint** | All pages | Phone/email |
| **BreadcrumbList** | All pages (except home) | Navigation |
| **Organization** | All pages | Company identity |
| **AggregateRating** | When reviews added | Star ratings |

---

## 🔧 Managing Business Information

### Update Location: WordPress Admin

**Appearance → Customize → Theme Settings**

Or

**Custom Fields → Options → Company Information**

### Fields to Maintain:
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
- Social Media URLs (optional)

**Important:** All changes automatically update sitewide.

---

## 🎨 Using Shortcodes in Content

### Example: Contact Page Sidebar

```html
<div class="contact-info-box">
    <h3>Visit Us</h3>
    [business_address]
    
    <h3>Call Us</h3>
    <p>Local: [business_phone]</p>
    <p>Toll-Free: [business_phone type="tollfree"]</p>
    
    <h3>Email Us</h3>
    [business_email]
    
    <h3>Business Hours</h3>
    [business_hours]
</div>
```

### Example: Footer Widget

```html
<div class="footer-contact">
    <h4>[business_name]</h4>
    [business_address format="inline"]
    <p>[business_phone] | [business_email]</p>
</div>
```

### Example: Blog Post

```
Contact our calibration experts at [business_phone type="tollfree"] 
or visit us at [business_address format="inline"].
```

---

## 📍 Geographic Targeting

### Automatic Meta Tags Added:

```html
<meta name="geo.region" content="US-AL">
<meta name="geo.placename" content="Childersburg">
<meta name="geo.position" content="33.2829;-86.3553">
<meta name="ICBM" content="33.2829, -86.3553">
```

### Service Areas Included:
- 🎯 Primary: Alabama
- 🎯 Regional: Georgia, Tennessee, Mississippi, Florida
- 🎯 National: United States

---

## 🔍 Testing Your Schema

### 1. Google Rich Results Test
**URL:** https://search.google.com/test/rich-results

**Steps:**
1. Enter your website URL
2. Click "Test URL"
3. Check for errors/warnings
4. Verify LocalBusiness schema appears

### 2. Schema.org Validator
**URL:** https://validator.schema.org/

**Steps:**
1. Select "Fetch URL" tab
2. Enter page URL
3. Review validation results
4. Fix any errors

### 3. Google Search Console
**URL:** https://search.google.com/search-console

**Monitor:**
- Enhancements → Local Business
- Rich Results reports
- Index coverage
- Performance metrics

---

## 📈 Expected SEO Benefits

### Local Search Rankings
- 🎯 Improved local pack visibility
- 🎯 Better "near me" search results
- 🎯 Enhanced mobile local search

### Rich Snippets
- ⭐ Business information cards
- ⭐ Star ratings (when reviews added)
- ⭐ Opening hours display
- ⭐ Click-to-call buttons

### Voice Search
- 🗣️ Better voice assistant integration
- 🗣️ Accurate business information
- 🗣️ Natural language query support

### Google My Business
- 📱 Knowledge panel eligibility
- 📱 Map integration
- 📱 Business photos display
- 📱 Review integration

---

## 🚨 Common Issues & Solutions

### Issue: Schema not showing in search

**Solution:**
- Wait 4-6 weeks for Google processing
- Submit sitemap to Search Console
- Request indexing for key pages

### Issue: NAP inconsistencies

**Solution:**
- Update ACF Options page
- Use shortcodes everywhere
- Check footer/header templates

### Issue: Wrong phone number displaying

**Solution:**
- Check ACF Options → Company Information
- Clear site cache
- Verify shortcode usage

### Issue: Map not displaying

**Solution:**
- Add Google Maps API key
- Enable Maps Embed API
- Check billing settings

---

## 📞 Contact Points Schema

Automatically includes contact points for:

| Department | Phone | Purpose |
|-----------|-------|---------|
| Customer Service | Primary | General inquiries |
| Sales | Toll-Free | Quote requests |
| Technical Support | Primary | Technical help |

---

## 💳 Payment Methods Schema

Automatically includes:
- 💳 Credit Cards (Visa, MC, Amex, Discover)
- 💵 Cash
- 📝 Check
- 📅 NET 30 Terms

---

## ⏰ Business Hours Format

### Current Settings:
- Monday-Friday: 8:00 AM - 5:00 PM CST
- Saturday-Sunday: Closed

### Schema Format:
```json
{
  "openingHoursSpecification": [
    {
      "dayOfWeek": "Monday",
      "opens": "08:00",
      "closes": "17:00"
    }
    // ... other days
  ]
}
```

---

## 🌟 Pro Tips

### 1. Consistency is Key
Use shortcodes everywhere to maintain NAP consistency across:
- Website pages
- Contact forms
- Email signatures
- Social media profiles
- Business directories

### 2. Update Regularly
Keep the following updated:
- ✅ Business hours (especially holidays)
- ✅ Phone numbers
- ✅ Email addresses
- ✅ Service areas

### 3. Monitor Performance
Check monthly:
- ✅ Search Console reports
- ✅ Schema validation
- ✅ Local search rankings
- ✅ Google My Business insights

### 4. Leverage Reviews
When you get customer reviews:
- ✅ Add to Google My Business
- ✅ Set up review schema (see main guide)
- ✅ Display on website
- ✅ Respond to all reviews

---

## 📚 Documentation Files

- **LOCAL-SEO-IMPLEMENTATION.md** - Complete implementation guide
- **LOCAL-SEO-QUICK-REFERENCE.md** - This file (quick reference)
- **SEO-IMPLEMENTATION-GUIDE.md** - General SEO guide

---

## ✅ Daily/Weekly Checklist

### Daily:
- [ ] Monitor contact form submissions
- [ ] Check phone lines working
- [ ] Verify email deliverability

### Weekly:
- [ ] Check Google My Business posts
- [ ] Review Search Console for errors
- [ ] Monitor local search rankings
- [ ] Respond to customer reviews

### Monthly:
- [ ] Validate schema markup
- [ ] Update business hours if changed
- [ ] Review analytics for local traffic
- [ ] Check NAP consistency across web

### Quarterly:
- [ ] Full SEO audit
- [ ] Update service offerings
- [ ] Add new customer reviews
- [ ] Refresh content with local keywords

---

## 🎉 You're All Set!

All Yoast Premium Local SEO features are now implemented in your custom code. No plugin needed!

**Key Takeaway:** Use the shortcodes consistently, keep business info updated, and monitor Search Console regularly.

---

**Questions?** Refer to LOCAL-SEO-IMPLEMENTATION.md for detailed information.

