# Local SEO Setup Checklist

## 🎯 Complete This Checklist to Maximize Your Local SEO

Use this checklist to ensure your local SEO implementation is fully optimized and working correctly.

---

## Phase 1: Verify Business Information (30 minutes)

### ACF Options Page Settings

**Location:** WordPress Admin → Custom Fields → Options → Company Information

- [ ] **Company Name** is set to: "Abbott Gage, Inc."
- [ ] **Street Address** is set to: "40 Industrial Park"
- [ ] **City** is set to: "Childersburg"
- [ ] **State** is set to: "AL"
- [ ] **ZIP Code** is set to: "35044"
- [ ] **Primary Phone** is formatted: "(256) 378-3286"
- [ ] **Toll-Free Phone** is formatted: "1-800-481-4243"
- [ ] **Fax Number** is formatted: "(256) 378-3287"
- [ ] **Email** is set to: "shelby@abbottgageinc.com"
- [ ] **Business Hours** are correct and updated

**Note:** If any ACF fields don't exist, the code uses fallback values.

---

## Phase 2: Test Schema Markup (15 minutes)

### Test All Pages

Visit and test these pages:

#### Homepage
- [ ] Visit: https://yourdomain.com/
- [ ] Test URL in: https://search.google.com/test/rich-results
- [ ] Verify "LocalBusiness" schema appears
- [ ] Verify "Organization" schema appears
- [ ] Check for zero errors

#### Laboratory Calibration Page
- [ ] Visit: https://yourdomain.com/laboratory-calibration/
- [ ] Test in Rich Results Test
- [ ] Verify "Service" schema appears
- [ ] Verify service name and description correct

#### On-Site Calibration Page
- [ ] Visit: https://yourdomain.com/onsite-calibration/
- [ ] Test in Rich Results Test
- [ ] Verify "Service" schema appears

#### Repair Services Page
- [ ] Visit: https://yourdomain.com/repair-services/
- [ ] Test in Rich Results Test
- [ ] Verify "Service" schema appears

#### Sales Page
- [ ] Visit: https://yourdomain.com/sales/
- [ ] Test in Rich Results Test
- [ ] Verify "Service" schema appears

#### Contact Page
- [ ] Visit: https://yourdomain.com/contact/
- [ ] Test in Rich Results Test
- [ ] Verify "ContactPage" schema appears
- [ ] Verify all contact information displays correctly

---

## Phase 3: Validate Schema (15 minutes)

### Schema.org Validation

**URL:** https://validator.schema.org/

Test at least 3 pages:

- [ ] Homepage validated - no errors
- [ ] Contact page validated - no errors
- [ ] One service page validated - no errors

**If errors found:**
- Document error message
- Check ACF options page
- Verify shortcode usage

---

## Phase 4: Google Search Console Setup (30 minutes)

### Submit Your Sitemap

- [ ] Login to Google Search Console
- [ ] Add property if not already added
- [ ] Go to Sitemaps section
- [ ] Submit sitemap: yourdomain.com/sitemap.xml

### Request Indexing

- [ ] Request indexing for homepage
- [ ] Request indexing for contact page
- [ ] Request indexing for main service pages

### Monitor Enhancements

- [ ] Navigate to Enhancements → Local Business
- [ ] Check for any errors or warnings
- [ ] Bookmark this page for weekly monitoring

---

## Phase 5: Google My Business Optimization (1 hour)

### Verify Business Information Matches Website

**GMB Dashboard:** https://business.google.com/

#### Basic Information
- [ ] Business name: "Abbott Gage, Inc." (exact match)
- [ ] Address: 40 Industrial Park, Childersburg, AL 35044 (exact match)
- [ ] Phone: (256) 378-3286 (exact format match)
- [ ] Website URL matches your domain
- [ ] Business hours: Monday-Friday 8:00 AM - 5:00 PM CST

#### Categories
- [ ] Primary category: "Calibration service"
- [ ] Secondary category: "Precision equipment supplier"
- [ ] Additional: "Equipment repair service"
- [ ] Additional: "Laboratory"

#### Business Description
Copy this optimized description:

```
ISO 9001:2015 certified precision measuring equipment calibration and repair services. 
Woman-owned business (WBENC/WOSB certified) providing NIST traceable calibration since 1992. 
Services: Laboratory calibration, on-site calibration, equipment repair, precision tool sales. 
Authorized service center for Mitutoyo, Fowler, Brown & Sharpe. Serving Alabama and nationwide.
```

#### Attributes
- [ ] Woman-owned business: Yes
- [ ] Identifies as woman-owned: Yes
- [ ] Small business: Yes
- [ ] Wheelchair accessible: (your answer)
- [ ] Free Wi-Fi: (your answer)

#### Products & Services
Add these service listings:

1. **Laboratory Calibration**
   - Description: "NIST traceable calibration for dimensional and electronic equipment"
   - Category: Calibration service

2. **On-Site Calibration**
   - Description: "Mobile calibration services at your facility"
   - Category: Calibration service

3. **Equipment Repair**
   - Description: "Factory authorized repair for precision measuring tools"
   - Category: Repair service

4. **Precision Tool Sales**
   - Description: "New and certified pre-owned measuring equipment"
   - Category: Equipment supplier

#### Photos
- [ ] Upload professional photos of:
  - Building exterior
  - Laboratory interior
  - Calibration equipment
  - Team members
  - Certifications (ISO, WBENC, WOSB)

---

## Phase 6: Test NAP Shortcodes (20 minutes)

### Create Test Page

Create a temporary test page in WordPress:

**Page Content:**
```
<h2>Testing NAP Shortcodes</h2>

<h3>Business Name</h3>
[business_name]

<h3>Full Address</h3>
[business_address]

<h3>Inline Address</h3>
[business_address format="inline"]

<h3>Primary Phone</h3>
[business_phone]

<h3>Toll-Free Phone</h3>
[business_phone type="tollfree"]

<h3>Fax</h3>
[business_phone type="fax"]

<h3>Email</h3>
[business_email]

<h3>Business Hours</h3>
[business_hours]
```

### Verify Display

- [ ] All shortcodes render correctly (no [shortcode] text visible)
- [ ] Phone numbers are clickable links
- [ ] Email is clickable link
- [ ] Address formatting looks good
- [ ] Schema markup present in HTML (view source)

### Clean Up
- [ ] Delete test page when done

---

## Phase 7: Update Existing Content (1-2 hours)

### Replace Hard-Coded Information

Find and replace hard-coded business info with shortcodes:

#### Pages to Update:
- [ ] About page
- [ ] Contact page (if has hard-coded info)
- [ ] Footer template (if needed)
- [ ] Any blog posts mentioning contact info
- [ ] Sidebar widgets

#### Example Replacements:
- Replace: "Abbott Gage, Inc." → `[business_name]`
- Replace: "(256) 378-3286" → `[business_phone]`
- Replace: "shelby@abbottgageinc.com" → `[business_email]`
- Replace: Address text → `[business_address format="inline"]`

---

## Phase 8: Configure Google Maps (30 minutes)

### Option A: Get Google Maps API Key (Recommended)

1. [ ] Go to: https://console.cloud.google.com/
2. [ ] Create new project: "Abbott Gage Website"
3. [ ] Enable "Maps Embed API"
4. [ ] Create API key
5. [ ] Restrict API key to your domain
6. [ ] Update shortcode in documentation with your key

### Option B: Use Google Maps Embed Code

1. [ ] Go to: https://www.google.com/maps
2. [ ] Search: "40 Industrial Park, Childersburg, AL 35044"
3. [ ] Click "Share" → "Embed a map"
4. [ ] Copy iframe code
5. [ ] Add to contact page ACF field: `contact_map_embed`

### Test Map Display

- [ ] Visit contact page
- [ ] Verify map displays correctly
- [ ] Test map is interactive (zoom, pan)
- [ ] Check mobile display

---

## Phase 9: Social Media Integration (30 minutes)

### Add Social Profile URLs

**ACF Options:** Add these fields if available

- [ ] Facebook URL (if you have Facebook page)
- [ ] LinkedIn URL (if you have LinkedIn page)
- [ ] Twitter URL (if you have Twitter profile)

**Note:** These URLs automatically add to your schema markup.

### Update Social Profiles

Make sure your social media profiles have:

- [ ] Same business name
- [ ] Same address format
- [ ] Same phone number format
- [ ] Link to your website
- [ ] Same business hours
- [ ] Logo/profile image
- [ ] Cover photo

---

## Phase 10: Review & Citation Building (Ongoing)

### Local Business Citations

Add your business to these directories (NAP must match exactly):

#### Free Citations (Priority)
- [ ] Google My Business (already done)
- [ ] Bing Places for Business
- [ ] Apple Maps Connect
- [ ] Yelp
- [ ] Yellow Pages
- [ ] Manta
- [ ] Hotfrog
- [ ] MapQuest

#### Industry-Specific
- [ ] ThomasNet (manufacturing directory)
- [ ] Alibaba
- [ ] Made-in-America.com
- [ ] WBENC Marketplace (woman-owned)

### Monitor Citations

- [ ] Use Moz Local or BrightLocal to track citations
- [ ] Ensure NAP consistency across all listings
- [ ] Update any outdated listings

---

## Phase 11: Monitor & Maintain (Ongoing)

### Weekly Tasks

- [ ] Check Google Search Console for errors
- [ ] Respond to any Google reviews
- [ ] Monitor local search rankings
- [ ] Update GMB posts weekly

### Monthly Tasks

- [ ] Run schema validation tests
- [ ] Check NAP consistency across web
- [ ] Review analytics for local traffic
- [ ] Update business hours if changed

### Quarterly Tasks

- [ ] Full local SEO audit
- [ ] Update service descriptions
- [ ] Refresh photos on GMB
- [ ] Analyze competitor local SEO

---

## Phase 12: Set Up Review Collection (1 hour)

### Future: Customer Review Strategy

**When ready to collect reviews:**

1. [ ] Create email template requesting Google reviews
2. [ ] Add review request to invoice emails
3. [ ] Create GMB review link shortcut
4. [ ] Train staff to ask for reviews

### Review Link Creation

1. [ ] Go to your GMB dashboard
2. [ ] Click "Get more reviews"
3. [ ] Copy short URL
4. [ ] Save as: yourdomain.com/review (301 redirect)

### Add Review Schema (When You Have 5+ Reviews)

1. [ ] Create ACF repeater field: "google_reviews"
2. [ ] Add sub-fields: author, rating, date, text
3. [ ] Input reviews manually or via API
4. [ ] Schema will automatically generate

---

## Phase 13: Advanced Features (Optional)

### Add Holiday Hours

**Location:** ACF Options → Business Hours

Update for major holidays:
- [ ] Thanksgiving
- [ ] Christmas
- [ ] New Year's Day
- [ ] July 4th
- [ ] Memorial Day
- [ ] Labor Day

### Create Location-Specific Landing Pages

If you expand to multiple locations, create:
- [ ] Service-area pages (e.g., "/calibration-services-birmingham-al/")
- [ ] Location-specific schema for each
- [ ] Unique content for each location

### Track Phone Calls

Set up call tracking:
- [ ] Use CallRail or similar service
- [ ] Track calls from organic search
- [ ] Analyze which pages drive calls
- [ ] Optimize high-performing pages

---

## 🎯 Success Metrics

### Track These KPIs Monthly:

#### Search Visibility
- [ ] Google My Business insights (views, calls, direction requests)
- [ ] Local pack rankings for key terms
- [ ] Organic traffic from local searches
- [ ] Map pack appearances

#### User Engagement
- [ ] Phone call volume from website
- [ ] Contact form submissions
- [ ] Quote requests
- [ ] Email inquiries

#### Technical SEO
- [ ] Schema markup validation (zero errors)
- [ ] Page load speed
- [ ] Mobile usability score
- [ ] Core Web Vitals

---

## 🚀 Launch Day Checklist

**Before announcing your enhanced local SEO:**

- [ ] All Phase 1-8 items completed
- [ ] Zero schema validation errors
- [ ] Google My Business fully optimized
- [ ] Sitemap submitted to Search Console
- [ ] Mobile display tested and working
- [ ] All shortcodes tested and functioning
- [ ] NAP consistency verified across site
- [ ] Contact forms tested and delivering
- [ ] Phone numbers clickable on mobile
- [ ] Email links working correctly

---

## 📊 30-Day Post-Launch Review

**Schedule this 30 days after completion:**

- [ ] Check Search Console for local business enhancements
- [ ] Review GMB insights for improvement
- [ ] Analyze organic traffic increases
- [ ] Check local search rankings for target keywords
- [ ] Verify rich snippets appearing in search results
- [ ] Count number of direction requests from GMB
- [ ] Count phone calls attributed to local search

---

## 🎉 Completion

When all phases are complete, you will have:

✅ **Comprehensive local SEO implementation**
✅ **All Yoast Premium Local SEO features replicated**
✅ **Zero additional plugin costs**
✅ **Full control over your local SEO**
✅ **Consistent NAP across all platforms**
✅ **Rich snippets eligibility**
✅ **Enhanced local search visibility**
✅ **Better Google My Business integration**

---

## 💡 Pro Tips for Success

1. **Consistency is Everything**
   - Use shortcodes consistently
   - Never hard-code business info
   - Match GMB exactly

2. **Fresh Content Matters**
   - Update GMB posts weekly
   - Add new blog content monthly
   - Keep hours current

3. **Reviews are Gold**
   - Respond to every review (good or bad)
   - Make asking for reviews part of your process
   - Showcase reviews on website

4. **Mobile First**
   - Test everything on mobile devices
   - Ensure click-to-call works
   - Optimize page speed

5. **Monitor Regularly**
   - Weekly: Search Console
   - Monthly: Rankings
   - Quarterly: Full audit

---

**Need Help?** Refer to LOCAL-SEO-IMPLEMENTATION.md for detailed guidance.

**Quick Reference?** See LOCAL-SEO-QUICK-REFERENCE.md for shortcode usage.

---

**You've got this! 🚀**

Your local SEO is now on par with (or better than) sites using Yoast Premium Local SEO.

