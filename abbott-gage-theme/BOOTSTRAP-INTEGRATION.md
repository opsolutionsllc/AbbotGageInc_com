# Bootstrap 5.3.2 Integration Guide

## Overview
Bootstrap 5.3.2 has been successfully integrated into the Abbott Gage theme while preserving all existing custom styles and UI.

## What's Available Now

### 1. Responsive Grid System
You can now use Bootstrap's powerful grid system:

```html
<div class="container">
  <div class="row">
    <div class="col-md-6">Column 1</div>
    <div class="col-md-6">Column 2</div>
  </div>
</div>
```

**Breakpoints:**
- `col-` - Extra small (<576px)
- `col-sm-` - Small (≥576px)
- `col-md-` - Medium (≥768px)
- `col-lg-` - Large (≥992px)
- `col-xl-` - Extra large (≥1200px)
- `col-xxl-` - Extra extra large (≥1400px)

### 2. Utility Classes
Bootstrap utilities are now available:

**Spacing:**
- `m-*` / `p-*` - Margin/Padding (0-5)
- `mt-*`, `mb-*`, `ms-*`, `me-*` - Top, Bottom, Start, End
- `mx-auto` - Center horizontally

**Display:**
- `d-none`, `d-block`, `d-flex`, `d-grid`
- `d-md-none` - Responsive display utilities

**Flexbox:**
- `d-flex`, `justify-content-*`, `align-items-*`
- `flex-row`, `flex-column`, `flex-wrap`

**Text:**
- `text-start`, `text-center`, `text-end`
- `fw-bold`, `fw-normal`, `fw-light`
- `fs-1` through `fs-6` - Font sizes

**Colors:**
- `text-primary`, `text-secondary`, `text-success`, etc.
- `bg-primary`, `bg-light`, `bg-dark`, etc.

### 3. Components Available

**Cards:**
```html
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Card content</p>
  </div>
</div>
```

**Buttons:**
```html
<button class="btn btn-primary">Primary</button>
<button class="btn btn-secondary">Secondary</button>
<button class="btn btn-outline-primary">Outline</button>
```

**Alerts:**
```html
<div class="alert alert-success">Success message</div>
<div class="alert alert-info">Info message</div>
```

**Forms:**
```html
<div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" class="form-control">
</div>
```

**Modal, Accordion, Dropdown, Navbar, Tabs, etc.**
All Bootstrap 5.3.2 components are available.

## What's Protected

### Your Custom Styles Override Bootstrap
The integration ensures your custom design remains intact:

1. **Typography** - Your custom fonts (Open Sans, Poppins) are preserved
2. **Colors** - Your brand colors remain unchanged
3. **Containers** - Your custom `.container` (1200px max-width) overrides Bootstrap
4. **Buttons** - Your custom button styles take precedence
5. **Links** - Your custom link colors are maintained

### Loading Order
```
1. Bootstrap CSS (base framework)
2. style.css (your custom container/base styles)
3. main.css (all your component styles + overrides)
```

This ensures your styles always win when there's a conflict.

## Best Practices

### When to Use Bootstrap
✅ **Use Bootstrap for:**
- Responsive grid layouts (`row`, `col-*`)
- Spacing utilities (`m-*`, `p-*`)
- Responsive utilities (`d-md-none`, `d-lg-block`)
- Quick prototyping with utility classes
- Standard components (modals, accordions, dropdowns)

### When to Use Custom CSS
✅ **Keep Custom CSS for:**
- Brand-specific styling
- Complex component designs
- Unique animations and effects
- Header, footer, and navigation (already custom)

### Combining Both
You can mix Bootstrap utilities with custom classes:

```html
<div class="custom-card mb-4 shadow-sm">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="custom-heading mb-3">Title</h3>
        <p class="text-muted">Content</p>
      </div>
    </div>
  </div>
</div>
```

## Migration Tips

### Replace Custom Responsive Code
**Before:**
```css
.my-section {
  display: flex;
}
@media (max-width: 768px) {
  .my-section {
    display: block;
  }
}
```

**After:**
```html
<div class="my-section d-md-flex d-block"></div>
```

### Simplify Spacing
**Before:**
```css
.spacing-example {
  margin-bottom: 2rem;
  padding: 1rem;
}
```

**After:**
```html
<div class="spacing-example mb-4 p-3"></div>
```

### Use Grid Instead of Flexbox
**Before:**
```css
.three-columns {
  display: flex;
  gap: 1rem;
}
.three-columns > div {
  flex: 1;
}
```

**After:**
```html
<div class="row g-3">
  <div class="col-md-4">Column 1</div>
  <div class="col-md-4">Column 2</div>
  <div class="col-md-4">Column 3</div>
</div>
```

## Resources

- [Bootstrap 5.3 Documentation](https://getbootstrap.com/docs/5.3/)
- [Bootstrap Grid System](https://getbootstrap.com/docs/5.3/layout/grid/)
- [Bootstrap Utilities](https://getbootstrap.com/docs/5.3/utilities/spacing/)
- [Bootstrap Components](https://getbootstrap.com/docs/5.3/components/)

## Testing Checklist

After integration, verify:
- ✅ Header and navigation display correctly
- ✅ Footer layout is intact
- ✅ All pages maintain their design
- ✅ Custom buttons still have your brand colors
- ✅ Typography matches your design system
- ✅ Forms display properly (especially Contact Form 7)
- ✅ Mobile responsiveness works as expected

## Version
- **Bootstrap:** 5.3.2
- **Theme Version:** 1.0.1
- **Integration Date:** November 23, 2025

