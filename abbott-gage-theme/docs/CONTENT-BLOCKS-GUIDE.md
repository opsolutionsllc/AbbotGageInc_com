# Content Blocks Guide for Abbott Gage Pages

This guide shows you which WordPress blocks to use for the Introduction sections on various pages to create consistent, professional-looking content.

## Manufacturers Page - Introduction Section

The Introduction section appears immediately after the blue header and before "Featured Manufacturing Partners".

### Recommended Block Structure:

```
Paragraph Block (centered)
├─ 2-3 paragraphs of introductory text
└─ Use "Align text center" option

Columns Block (2 columns)
├─ Column 1: List
│   └─ Unordered list with checkmarks/icons
└─ Column 2: List
    └─ Unordered list with checkmarks/icons
```

### Example Content:

**Paragraph Block 1:**
```
As an authorized distributor and service center for the industry's leading precision tool manufacturers, Abbott Gage Inc. offers you direct access to quality measuring equipment backed by factory support and warranties.
```

**Paragraph Block 2:**
```
Our partnerships with these manufacturers enable us to provide you with genuine products, expert technical support, competitive pricing, and factory-authorized repair services all under one roof.
```

**Columns Block (50/50):**

*Left Column - List:*
- Genuine OEM products
- Factory-authorized repairs
- Full manufacturer warranties
- Competitive pricing

*Right Column - List:*
- Expert technical support
- Large inventory selection
- Fast shipping & delivery
- NIST-traceable calibration

### Block Settings:

- **Paragraph Blocks:**
  - Alignment: Center
  - Font size: Default (or Medium if available)
  - Line height: 1.6

- **Columns Block:**
  - Columns: 2 (equal width)
  - Vertical alignment: Top
  
- **List Blocks:**
  - Use the "List" block (not custom HTML)
  - **IMPORTANT:** In the Block sidebar → Advanced → Additional CSS class(es), add: `checkmark-list`
  - This will automatically add green checkmarks to all list items
  - Don't manually type "✓" - the CSS handles it automatically

---

## Sales Page - Introduction Section

The Introduction section appears immediately after the blue "Precision Tool Sales" header.

### Recommended Block Structure:

```
Paragraph Block (centered)
├─ 2-3 paragraphs highlighting value proposition
└─ Use "Align text center" option

Separator Block (optional)
└─ Adds visual break

Columns Block (3 columns)
├─ Column 1: Heading + Paragraph
│   └─ Key benefit with icon/emoji
├─ Column 2: Heading + Paragraph
│   └─ Key benefit with icon/emoji
└─ Column 3: Heading + Paragraph
    └─ Key benefit with icon/emoji
```

### Example Content:

**Paragraph Block 1:**
```
As an authorized distributor for all major precision tool manufacturers, Abbott Gage Inc. can supply the tools and equipment you need for your measuring applications.
```

**Paragraph Block 2:**
```
Whether you need a single micrometer or outfitting an entire quality control department, we offer competitive pricing and expert advice to help you make the right tools for your needs.
```

**Columns Block (33/33/33):**

*Column 1:*
- **Heading:** 🎯 Expert Selection Help
- **Paragraph:** Our experienced team helps you choose the right precision tools for your specific measuring requirements and budget.

*Column 2:*
- **Heading:** 💰 Competitive Prices
- **Paragraph:** Best pricing on quality precision measuring equipment from all major manufacturers with NET 30 terms available.

*Column 3:*
- **Heading:** 🚚 Fast Delivery
- **Paragraph:** Quick shipping to your location or convenient local pickup options available at our facility.

### Block Settings:

- **Paragraph Blocks:**
  - Alignment: Center
  - Font size: Default or Medium
  - Max width: Content width (not full width)

- **Heading Blocks in Columns:**
  - Level: H3 or H4
  - Alignment: Center
  - Font size: Medium

- **Columns Block:**
  - Columns: 3 (equal width)
  - Stack on mobile: Yes (automatic)

---

## General Best Practices

### Typography
- Keep paragraphs to 2-4 sentences for readability
- Use consistent heading levels (don't skip levels)
- Center-align introductory content for visual impact

### Spacing
- Add space between major sections (1-2 line breaks)
- Use the Spacer block if you need precise vertical spacing
- Keep column content roughly equal in length

### Icons & Visual Elements
- Use emojis (🎯💰🚚✓) for quick visual cues
- Alternatively, use Font Awesome icons if your theme supports them
- Keep icon usage consistent across similar content

### Mobile Responsiveness
- Columns automatically stack on mobile
- Center-aligned text works well on all screen sizes
- Lists are easier to scan than dense paragraphs

### Content Guidelines
- Focus on benefits, not just features
- Use active voice ("We provide..." not "Tools are provided...")
- Include specific details (manufacturers, certifications, services)
- End with a clear next step or value proposition

### How to Add Checkmark Lists

To get the green checkmark styling on any list:

1. Add a **List** block in WordPress
2. Type your list items (without checkmarks)
3. Select the List block
4. In the right sidebar, scroll to **Advanced**
5. In the **Additional CSS class(es)** field, type: `checkmark-list`
6. The checkmarks will appear automatically in green!

**Example:**
- Before CSS class: Plain bullet list
- After adding `checkmark-list` class: ✓ Green checkmark list

---

## Step-by-Step: Adding Checkmark Lists in WordPress

### Visual Guide:

```
1. Click the "+" button to add a new block
2. Search for "List" and select it
3. Type your list items:
   - Genuine OEM products
   - Factory-authorized repairs
   - Full manufacturer warranties

4. Click on the List block to select it
5. Look at the RIGHT sidebar (Block settings panel)
6. Scroll down to the "Advanced" section
7. Click to expand it
8. Find the field labeled "Additional CSS class(es)"
9. Type in the box: checkmark-list
10. Press Enter or click away

✓ Your list now has green checkmarks!
```

### What the CSS Class Does:

- Removes default bullet points
- Adds green checkmarks (✓) using Font Awesome
- Styles the checkmarks with the theme's accent color
- Properly aligns text with icons
- Works on mobile automatically

### Common Mistakes to Avoid:

❌ **DON'T** type "✓" manually in your list items  
✅ **DO** add the CSS class and let it handle the checkmarks

❌ **DON'T** use "Custom HTML" block for lists  
✅ **DO** use the standard "List" block with the CSS class

❌ **DON'T** add extra spaces before list items  
✅ **DO** just type normal list items

## Quick Reference

### Common WordPress Blocks to Use:

1. **Paragraph** - Main body text
2. **Heading** - Section titles (H2-H4)
3. **List** - Bulleted or numbered lists (add `checkmark-list` class for styling)
4. **Columns** - Multi-column layouts
5. **Separator** - Visual dividers (use sparingly)
6. **Spacer** - Control vertical spacing
7. **Buttons** - Call-to-action buttons (if needed in content)

### Blocks to Avoid in These Sections:

- Image blocks (unless specifically needed)
- Media & Text (handled by template sections)
- Tables (too formal for intro content)
- Custom HTML (makes it harder to maintain)

---

## Need Help?

If the content doesn't look right after adding blocks:
1. Check that blocks are aligned properly (center for intro sections)
2. Preview the page on mobile to ensure columns stack correctly
3. Clear any custom CSS or spacing that might conflict
4. Make sure paragraph text isn't too long (aim for 150-200 characters per line)

