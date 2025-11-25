# SEO Quick Reference Guide

## 📋 What Was Done

### ✅ Automated SEO Features (Already Working)
- **Schema Markup:** Organization, LocalBusiness, Services, FAQ, Breadcrumbs
- **Open Graph Tags:** Facebook, LinkedIn sharing optimization
- **Twitter Cards:** Twitter sharing optimization
- **Meta Descriptions:** Fallback descriptions for all pages
- **Image Alt Text:** SEO-optimized descriptions for all images
- **FAQ Sections:** Laboratory and Services pages with schema
- **Canonical URLs:** Prevents duplicate content issues
- **Business Info:** Phone, address, email in schema

### 📁 Files Created/Modified

**New Files:**
- `inc/seo-functions.php` - All SEO automation code
- `template-parts/faq-section.php` - Reusable FAQ component
- `docs/SEO-IMPLEMENTATION-GUIDE.md` - Complete documentation
- `docs/SEO-QUICK-REFERENCE.md` - This file

**Modified Files:**
- `functions.php` - Loads SEO functions
- `front-page.php` - Added SEO comments & improved alt text
- `page-about.php` - Added SEO comments & improved alt text
- `page-laboratory.php` - Added SEO comments & FAQ section
- `page-onsite.php` - Added SEO comments
- `page-repairs.php` - Added SEO comments
- `page-sales.php` - Added SEO comments
- `page-services.php` - Added SEO comments & FAQ section
- `page-manufacturers.php` - Added SEO comments
- `page-contact.php` - Added SEO comments
- `page-privacy-policy.php` - Added SEO comments
- `page-terms-of-service.php` - Added SEO comments
- `template-parts/certifications-section.php` - Improved alt text
- `assets/css/main.css` - Added FAQ section styling

---

## 🎯 Focus Keyphrases by Page

| Page | Focus Keyphrase |
|------|-----------------|
| Homepage | `precision measuring equipment calibration` |
| About | `woman owned calibration company` |
| Laboratory | `laboratory calibration services` |
| On-Site | `on-site calibration services` |
| Repairs | `precision measuring equipment repair` |
| Sales | `precision measuring tools for sale` |
| Services | `precision measurement services` |
| Manufacturers | `precision tool manufacturers` |
| Contact | `calibration services quote` |

---

## 📝 Next Steps (Manual Tasks)

### 1. Install Yoast SEO Plugin
```
WordPress Admin → Plugins → Add New → Search "Yoast SEO" → Install & Activate
```

### 2. Configure Each Page in Yoast
For each page, the SEO settings are in the template file header comments. Just copy them into Yoast:
- Focus Keyphrase
- SEO Title
- Meta Description

**Example for Homepage:**
1. Edit the homepage in WordPress
2. Scroll to Yoast SEO section
3. Enter the focus keyphrase: `precision measuring equipment calibration`
4. Enter the SEO title and meta description from the template comments

### 3. Set Up Google Search Console
1. Go to https://search.google.com/search-console
2. Add property
3. Verify ownership
4. Submit sitemap: `https://abbottgageinc.com/sitemap_index.xml`

### 4. Set Up Google Business Profile
1. Go to https://www.google.com/business/
2. Create/claim listing
3. Fill in all information
4. Add photos of lab, equipment, certifications

---

## 🔍 SEO Keyphrases to Use in Content

**Primary Keywords:**
- Precision measuring equipment
- Calibration services
- NIST traceable calibration
- ISO 9001:2015 certified
- Woman-owned business
- Factory authorized repair
- Metrology services

**Long-Tail Keywords:**
- "How often should measuring equipment be calibrated"
- "NIST traceable calibration near me"
- "ISO certified calibration laboratory"
- "Mitutoyo authorized repair center"
- "Woman-owned calibration company government contracts"

**Location Keywords (Add Your City):**
- "precision calibration services Childersburg AL"
- "calibration lab Alabama"
- "measuring equipment repair near me"

---

## 📊 Monitoring Tools

**Free Tools You Should Use:**
- Google Search Console: Monitor search performance
- Google Analytics: Track traffic and conversions
- Google PageSpeed Insights: Check site speed
- Schema Markup Validator: Verify structured data
- Yoast SEO: On-page optimization

---

## 📈 Expected Timeline

**1-2 Weeks:**
- Schema markup visible in search results
- Better social sharing appearance

**1-3 Months:**
- Improved rankings for focus keyphrases
- Increased organic traffic
- Featured snippets for FAQ content

**6-12 Months:**
- Established rankings for competitive keywords
- Strong local search presence
- Consistent organic traffic growth

---

## ⚡ Quick Wins

**Do These First:**
1. Install Yoast SEO
2. Configure homepage SEO settings
3. Set up Google Search Console
4. Submit sitemap
5. Create Google Business Profile

**Do These Next:**
1. Configure all page SEO settings
2. Set up Google Analytics
3. Add social media links to schema
4. Optimize any remaining images
5. Create content calendar (optional blog)

---

## 🛟 Troubleshooting

**Schema Not Showing:**
- Allow 2-4 weeks for Google to index
- Validate at validator.schema.org
- Check Search Console for errors

**Low Rankings:**
- Verify unique meta descriptions on all pages
- Build quality backlinks
- Improve page speed
- Add more quality content

**Pages Not Indexed:**
- Submit sitemap to Search Console
- Check robots.txt
- Verify noindex not set
- Add internal links

---

## 📞 Quick Contact Info

**Your Business Details (in schema):**
- Phone: +1-256-378-3286
- Email: info@abbottgageinc.com
- Address: 40 Industrial Park, Childersburg, AL 35044

**Certifications Highlighted:**
- ISO 9001:2015
- WBENC (Woman-Owned Business)
- WOSB (Woman-Owned Small Business)
- NIST Traceable Standards

---

## ✅ Checklist

### Week 1
- [ ] Install Yoast SEO
- [ ] Configure homepage settings
- [ ] Set up Google Search Console
- [ ] Submit sitemap

### Week 2-3
- [ ] Configure all page SEO settings
- [ ] Set up Google Analytics
- [ ] Create Google Business Profile
- [ ] Verify schema markup working

### Month 2
- [ ] Monitor Search Console weekly
- [ ] Review initial rankings
- [ ] Start building backlinks
- [ ] Consider starting a blog

### Ongoing
- [ ] Monitor Google Search Console weekly
- [ ] Review Analytics monthly
- [ ] Update content quarterly
- [ ] Build quality backlinks
- [ ] Monitor competitor rankings

---

## 📚 Full Documentation

For complete details, see: `docs/SEO-IMPLEMENTATION-GUIDE.md`

That file includes:
- Detailed setup instructions
- All focus keyphrases and meta descriptions
- Schema markup explanation
- Content optimization guidelines
- Image optimization tips
- Tracking and analytics setup
- Troubleshooting guide
- Backlink opportunities
- Monitoring schedule

---

**Questions?** Review the full implementation guide or search online for "Yoast SEO setup" for video tutorials.

