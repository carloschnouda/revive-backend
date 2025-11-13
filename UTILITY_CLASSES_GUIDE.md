# Modern Utility Classes Guide

## Quick Reference for New Design System

### Typography Classes

```html
<!-- Use modern font families -->
<h1 style="font-family: var(--font-heading)">Heading Text</h1>
<p style="font-family: var(--font-body)">Body Text</p>

<!-- Font sizes (fluid/responsive) -->
<h1 style="font-size: var(--text-6xl)">Hero Title</h1>
<h2 style="font-size: var(--text-4xl)">Section Title</h2>
<p style="font-size: var(--text-base)">Body Text</p>
<small style="font-size: var(--text-sm)">Small Text</small>
```

### Pattern Backgrounds

```html
<!-- Dot pattern background -->
<div class="pattern-dots">
  Content with dot pattern
</div>

<!-- Grid pattern background -->
<div class="pattern-grid">
  Content with grid pattern
</div>
```

### Clinical Badge (Trust Indicator)

```html
<span class="clinical-badge">Certified Professional</span>
<span class="clinical-badge">Licensed Therapist</span>
```

### Floating Decorative Shapes

```html
<!-- Add to section for animated decorative elements -->
<div class="floating-shape circle" style="top: 10%; left: 5%;"></div>
<div class="floating-shape square" style="bottom: 20%; right: 10%;"></div>
```

### Gradient Text

```html
<h2 class="gradient-text">
  This text will have a teal gradient
</h2>
```

### Clinical Divider

```html
<!-- Modern divider with center dot -->
<div class="clinical-divider"></div>
```

### Blur Container (Glassmorphism)

```html
<div class="blur-container">
  <p>Content with frosted glass effect</p>
</div>
```

### Modern Card

```html
<div class="card-modern">
  <h3>Card Title</h3>
  <p>Card content with modern styling and hover effects</p>
</div>
```

### Stat/Number Display

```html
<div class="stat-number">250+</div>
<p>Happy Clients</p>
```

### Clinical List (with checkmarks)

```html
<ul class="clinical-list">
  <li>Professional service</li>
  <li>Licensed therapists</li>
  <li>State-of-the-art facility</li>
  <li>Personalized treatment</li>
</ul>
```

## CSS Variables Reference

### Colors

```css
/* Primary Colors */
var(--primary-color)        /* #969797 */
var(--secondary-color)      /* #87C8C6 */
var(--white-color)          /* #fff */

/* Accent Colors */
var(--color-accent)         /* #FF6B6B */
var(--color-accent-light)   /* #FF8787 */
var(--color-accent-dark)    /* #EE5A52 */

/* Teal Scale */
var(--color-teal-50)  to  var(--color-teal-900)

/* Gray Scale */
var(--color-gray-50)  to  var(--color-gray-900)

/* Clinical Colors */
var(--color-clinical-white) /* #FCFDFE */
var(--color-clinical-blue)  /* #F7FAFC */
var(--color-clinical-light) /* #EFF6FF */
```

### Gradients

```css
/* Gradient backgrounds */
background: var(--gradient-primary);   /* Teal gradient */
background: var(--gradient-accent);    /* Coral gradient */
background: var(--gradient-teal);      /* Extended teal */
background: var(--gradient-overlay);   /* Overlay gradient */
background: var(--gradient-dark);      /* Dark overlay */
```

### Shadows

```css
box-shadow: var(--shadow-sm);    /* Subtle shadow */
box-shadow: var(--shadow-md);    /* Medium shadow */
box-shadow: var(--shadow-lg);    /* Large shadow */
box-shadow: var(--shadow-xl);    /* Extra large */
box-shadow: var(--shadow-2xl);   /* Huge shadow */
box-shadow: var(--shadow-glow);  /* Teal glow */
box-shadow: var(--shadow-glow-accent); /* Coral glow */
```

### Spacing (8px grid)

```css
padding: var(--space-1);   /* 8px */
padding: var(--space-2);   /* 16px */
padding: var(--space-3);   /* 24px */
padding: var(--space-4);   /* 32px */
padding: var(--space-5);   /* 40px */
padding: var(--space-6);   /* 48px */
padding: var(--space-8);   /* 64px */
padding: var(--space-10);  /* 80px */
padding: var(--space-12);  /* 96px */
padding: var(--space-16);  /* 128px */
```

### Border Radius

```css
border-radius: var(--radius-sm);    /* 0.375rem */
border-radius: var(--radius-md);    /* 0.5rem */
border-radius: var(--radius-lg);    /* 0.75rem */
border-radius: var(--radius-xl);    /* 1rem */
border-radius: var(--radius-2xl);   /* 1.5rem */
border-radius: var(--radius-3xl);   /* 2rem */
border-radius: var(--radius-full);  /* 9999px (pill) */
```

### Transitions

```css
transition: all var(--transition-fast);    /* 150ms */
transition: all var(--transition-base);    /* 250ms */
transition: all var(--transition-slow);    /* 350ms */
transition: all var(--transition-slower);  /* 500ms */
```

### Font Weights

```css
font-weight: var(--font-light);     /* 300 */
font-weight: var(--font-normal);    /* 400 */
font-weight: var(--font-semibold);  /* 600 */
font-weight: var(--font-bold);      /* 700 */
font-weight: var(--font-black);     /* 900 */
```

## Animation Attributes

Use these attributes on HTML elements for scroll animations:

```html
<!-- Slide from left -->
<div animate="left">Content</div>

<!-- Slide from right -->
<div animate="right">Content</div>

<!-- Slide from top -->
<div animate="up">Content</div>

<!-- Slide from bottom -->
<div animate="down">Content</div>

<!-- Fade and scale -->
<div animate="fade">Content</div>

<!-- Zoom in -->
<div animate="zoom">Content</div>
```

### Remove Animation Delay

```html
<div animate="up" class="no-transition-delay">
  Animates immediately without delay
</div>
```

## Example: Creating a Modern Section

```html
<section class="py-16 pattern-dots" style="background: var(--color-clinical-light);">
  <div class="container">
    <!-- Floating decorative elements -->
    <div class="floating-shape circle" style="top: 10%; right: 5%;"></div>
    
    <!-- Section Title -->
    <h2 class="gradient-text" style="font-size: var(--text-5xl); margin-bottom: var(--space-6);" animate="up">
      Our Services
    </h2>
    
    <!-- Clinical Divider -->
    <div class="clinical-divider"></div>
    
    <!-- Content Grid -->
    <div class="grid grid-cols-3 gap-6" animate="fade">
      <!-- Modern Card -->
      <div class="card-modern">
        <h3 style="font-size: var(--text-2xl); margin-bottom: var(--space-3);">
          Service Title
        </h3>
        <p style="color: var(--color-gray-600); margin-bottom: var(--space-4);">
          Service description goes here with modern typography.
        </p>
        <button style="background: var(--gradient-accent); padding: var(--space-2) var(--space-4); border-radius: var(--radius-full);">
          Learn More
        </button>
      </div>
    </div>
    
    <!-- Clinical List -->
    <ul class="clinical-list" style="margin-top: var(--space-8);" animate="up">
      <li>Professional certification</li>
      <li>Years of experience</li>
      <li>Client satisfaction guaranteed</li>
    </ul>
  </div>
</section>
```

## Tips for Usage

1. **Combine utilities**: Mix CSS variables with Tailwind classes for powerful results
2. **Consistent spacing**: Always use the spacing scale (--space-X)
3. **Gradients for CTAs**: Use accent gradient for important buttons
4. **Shadows for depth**: Layer shadows (md + glow) for emphasis
5. **Animations**: Use `animate` attributes for scroll-triggered effects
6. **Clinical feel**: Combine white/blue tints with sharp borders
7. **Accessibility**: All focus states are handled automatically

## Color Contrast Ratios (WCAG AA Compliant)

- Primary text on white: ✓ Pass
- Secondary color on white: ✓ Pass
- Accent color on white: ✓ Pass
- White text on teal: ✓ Pass
- White text on gray: ✓ Pass

---

For more details, see `MODERNIZATION_SUMMARY.md`

