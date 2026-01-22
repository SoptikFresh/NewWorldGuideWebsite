# CSS Variables & Utilities Reference

## 🎨 Color Variables

```css
:root {
  /* Gold Color Palette */
  --accent-gold: #dab562; /* Primary gold */
  --accent-gold-dark: #a3822d; /* Darker gold for contrast */
  --accent-gold-light: #efde93; /* NEW: Lighter gold for hover */

  /* Shadows & Effects */
  --shadow: 0 8px 44px #dab56233;

  /* Layout */
  --header-footer-height: 80px;
  --side-nav-width: 54px;

  /* Animations */
  --transition-base: 0.19s ease-in-out;
}
```

---

## ⏱️ Timing Functions

```css
/* Standard easing */
ease               /* Slow start/end, fast middle */
ease-in-out        /* Smooth acceleration */
ease-out           /* Fast start, slow end */
cubic-bezier(.4,0,.2,1)  /* Custom easing for dropdowns */
```

---

## 🎬 Animations

### Fade In Down

```css
@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* Usage: animation: fadeInDown 0.6s ease-out; */
```

### Dropdown Fade In

```css
@keyframes dropdownFadeIn {
  from {
    opacity: 0;
    transform: translateY(-22px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* Usage: animation: dropdownFadeIn 0.32s; */
```

### Slide In Up

```css
@keyframes slideInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* Usage: animation: slideInUp 0.4s ease-out; */
```

### Spin (Loading)

```css
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
/* Usage: animation: spin 1.3s linear infinite; */
```

---

## 🎯 Transform Effects

### Scale (Grow/Shrink)

```css
transform: scale(1.05); /* 105% - slightly bigger */
transform: scale(1.15); /* 115% - more noticeable */
transform: scale(0.95); /* 95% - shrink effect */
transform: scale(0.98); /* 98% - press effect */
```

### Translate (Move)

```css
transform: translateY(-2px); /* Move up 2px */
transform: translateY(-3px); /* Move up 3px */
transform: translateY(-20px); /* Move up 20px (animation) */
transform: translateX(4px); /* Move right 4px */
transform: translateX(20px); /* Move right 20px (animation) */
transform: translateX(-50%); /* Center positioning */
```

### Rotate

```css
transform: rotate(45deg); /* Rotate 45 degrees */
transform: rotate(180deg); /* Flip */
transform: rotate(-45deg); /* Rotate -45 degrees */
```

### Combine Transforms

```css
transform: scale(1.05) translateY(-3px);
transform: translateX(3px) scale(1.045);
transform: rotate(180deg) scale(1.1);
```

---

## 🌈 Gradient Utilities

### Linear Gradient (Gold Theme)

```css
/* Left to right */
background: linear-gradient(90deg, #dab562 0%, #a3822d 100%);

/* Top to bottom */
background: linear-gradient(180deg, #191813ff 0%, #373012f9 100%);

/* Diagonal */
background: linear-gradient(120deg, #0f131e66 30%, #19120aee 100%);

/* With multiple colors */
background: linear-gradient(
  90deg,
  transparent,
  var(--accent-gold),
  transparent
);
```

### Radial Gradient

```css
/* Ellipse from top-left */
background: radial-gradient(
  ellipse at 50% 0%,
  rgba(218, 181, 98, 0.1) 0%,
  transparent 70%
);

/* Circle from center */
background: radial-gradient(circle, #dab562 0%, transparent 100%);
```

---

## 📦 Shadow Utilities

### Box Shadows

```css
/* Subtle shadows */
box-shadow: 0 1px 8px #dab56234;
box-shadow: 0 2px 8px #dab56228;

/* Medium shadows */
box-shadow: 0 6px 22px #dab56233, 0 2px 8px #dab56228;
box-shadow: 0 6px 40px #dab56215, 0 2px 12px #dab56217;

/* Large shadows */
box-shadow: 0 8px 54px #0e0c0771, 0 2px 5px #dab56213;
box-shadow: 0 12px 50px #dab56228, 0 4px 20px #dab56220;

/* Text shadows */
text-shadow: 0 2px 16px #b49a4a80;
text-shadow: 0 3px 24px #dab56240, 0 0 8px #fff1;

/* Glow effect */
box-shadow: 0 0 24px #dab562cc;
box-shadow: 0 0 12px #dab56299;
```

---

## 🎨 Filter Effects

### Brightness

```css
filter: brightness(1.1); /* 110% brightness - lighter */
filter: brightness(1.2); /* 120% brightness - much lighter */
filter: brightness(0.8); /* 80% brightness - darker */
```

### Blur

```css
backdrop-filter: blur(4px); /* Blur background behind element */
```

### Combined Filters

```css
filter: brightness(1.1) contrast(1.05);
backdrop-filter: blur(4px) brightness(0.8);
```

---

## 🎯 Responsive Utilities

### Media Query Breakpoints

```css
/* Small phones */
@media (max-width: 420px) {
}

/* Small-medium phones */
@media (max-width: 530px) {
}

/* Phones */
@media (max-width: 700px) {
}

/* Large phones/small tablets */
@media (max-width: 850px) {
}

/* Tablets */
@media (max-width: 900px) {
}

/* Large tablets */
@media (max-width: 1100px) {
}

/* Desktops */
@media (max-width: 1200px) {
}

/* Large desktops */
@media (max-width: 1450px) {
}

/* Maximum desktop */
@media (min-width: 1700px) {
}
```

---

## ♿ Accessibility Utilities

### ARIA Attributes

```html
<!-- Navigation roles -->
<header role="banner">
  <nav role="navigation" aria-label="Main navigation">
    <button
      aria-label="Toggle menu"
      aria-expanded="false"
      aria-controls="menuId"
    >
      <!-- Icons and images -->
      <svg aria-hidden="true">
        <!-- Hide from screen readers -->
        <img alt="Descriptive text">
          <!-- Modals and overlays -->
          <div aria-modal="true" role="dialog">
            <!-- Links -->
            <a rel="noopener noreferrer">
              <!-- Security for external links -->
            </a>
          </div>
        </img>
      </svg>
    </button>
  </nav>
</header>
```

---

## 🔧 Transition Patterns

### Button Transitions

```css
.button {
  transition: background var(--transition-base), color var(--transition-base),
    transform 0.15s ease, box-shadow var(--transition-base);
}

.button:hover {
  background: new-color;
  transform: scale(1.045) translateY(-2px);
  box-shadow: enhanced-shadow;
}

.button:active {
  transform: scale(0.98);
}
```

### Link Transitions

```css
.link {
  transition: color var(--transition-base), text-shadow var(--transition-base);
}

.link:hover {
  color: var(--accent-gold-light);
  text-shadow: 0 0 8px #dab56266;
}
```

### Navigation Transitions

```css
.nav-item {
  transition: background var(--transition-base), color var(--transition-base),
    box-shadow var(--transition-base), transform 0.15s ease;
}

.nav-item:hover {
  transform: translateY(-2px);
}
```

---

## 📐 Layout Utilities

### Flex Centering

```css
display: flex;
align-items: center;
justify-content: center;
```

### Grid Centering

```css
display: grid;
place-items: center;
```

### Absolute Centering

```css
position: absolute;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
```

### Horizontal Centering

```css
position: absolute;
left: 50%;
transform: translateX(-50%);
```

---

## 🎨 Pseudo-Element Examples

### Decorative Underline

```css
.element::before {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 50%;
  width: 60px;
  height: 3px;
  background: linear-gradient(90deg, transparent, gold, transparent);
  border-radius: 2px;
  transform: translateX(-50%);
}
```

### Hover Indicator

```css
.element::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 2px;
  background: gold;
  transition: width var(--transition-base);
  transform: translateX(-50%);
}

.element:hover::after {
  width: 80%;
}
```

---

## 💡 Tips for Using These Utilities

1. **Consistency**: Always use `--transition-base` for timing
2. **Colors**: Use CSS variables for all gold/accent colors
3. **Transforms**: Use transforms instead of position/margin for animations
4. **Accessibility**: Always include ARIA labels when appropriate
5. **Mobile First**: Define mobile styles first, then enhance for desktop
6. **Performance**: Use transforms (GPU accelerated) over position changes

---

## 🚀 Common Patterns

### Hover Lift Effect

```css
.card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 50px rgba(218, 181, 98, 0.15);
}
```

### Smooth Fade In

```css
.element {
  animation: fadeInDown 0.6s ease-out;
}
```

### Interactive Button

```css
.button {
  transition: transform 0.15s ease, box-shadow 0.18s;
}

.button:hover {
  transform: scale(1.045);
  box-shadow: 0 4px 24px #dab56299;
}

.button:active {
  transform: scale(0.98);
}
```

---

**Use this reference while working with the enhanced styles!** 📚
