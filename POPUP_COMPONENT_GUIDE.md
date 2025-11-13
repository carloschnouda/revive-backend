# Team Member Popup Component Guide

## 🎨 Design Overview

The team member popup is a modern, full-screen modal that displays detailed information about team members. It features smooth animations, a clean layout, and professional styling.

---

## 📐 Structure

```
popup-wrapper (full-screen overlay)
└── modal container (centered white box)
    ├── close-button (top-right red gradient)
    └── content-wrapper (scrollable)
        └── grid layout
            ├── image column (2/5 width)
            │   └── image container (teal gradient bg)
            └── content column (3/5 width)
                ├── name & title section
                └── description section
```

---

## 🎭 Features

### Visual Design:
- ✅ **Dark overlay**: Navy gradient with backdrop blur
- ✅ **White modal**: Rounded corners (3xl), centered
- ✅ **Image container**: Soft teal gradient background
- ✅ **Close button**: Red gradient with rotate animation
- ✅ **Responsive grid**: 1 column mobile, 5 columns desktop
- ✅ **Scrollable content**: Max 90vh height

### Animations:
- ✅ **fadeIn**: Overlay opacity (400ms)
- ✅ **scaleIn**: Modal scale from 0.9 to 1 (500ms)
- ✅ **Close button rotation**: 90° on hover
- ✅ **Smooth exit**: Fade out on close

### Interactions:
- ✅ Click team member card to open
- ✅ Click close button to dismiss
- ✅ Click outside modal to dismiss
- ✅ Body scroll lock when open
- ✅ Smooth transitions

---

## 🎨 Color Scheme

| Element | Color |
|---------|-------|
| Overlay Background | Navy gradient (#1E293B → #334155 → #0F172A) |
| Modal Background | White |
| Image Container | Teal gradient (#CCFBF8 → #A8D0CF) |
| Close Button | Red gradient (#ef4444 → #dc2626) |
| Title Text | Gray-900 |
| Body Text | Gray-700 |
| Accent Line | Teal gradient (#14b8a6 → #87C8C6) |
| Links | Teal (#87C8C6) |

---

## 📱 Responsive Breakpoints

```scss
Mobile (< 768px):
- Single column layout
- 90% width
- Full-height scrollable
- Smaller padding (2rem)

Desktop (≥ 768px):
- 5-column grid (2:3 ratio)
- Max-width: 4xl (56rem)
- Larger padding (3rem)
- Side-by-side image & content
```

---

## 💻 Code Examples

### Opening a Popup (JavaScript):
```javascript
$(".team-card").on("click", function () {
    var id = $(this).data("id");
    var popup = $(".popup-wrapper-" + id);
    popup.removeClass('hidden').css('display', 'flex');
    setTimeout(function() {
        popup.css('opacity', '1');
    }, 10);
    $('html').css('overflow', 'hidden');
});
```

### Closing a Popup (JavaScript):
```javascript
function closePopup() {
    $('.popup-wrapper').css('opacity', '0');
    setTimeout(function() {
        $('.popup-wrapper').css('display', 'none').addClass('hidden');
        $('html').css('overflow', 'auto');
    }, 400);
}
```

### Styling Team Member in Team Section:
```blade
<div class="team-card" data-id="{{ $member->id }}">
    <!-- Team member content -->
</div>
```

---

## 🔧 Customization Options

### Modify Overlay Color:
```blade
<!-- In popup.blade.php -->
<div class="popup-wrapper ... bg-gradient-to-br from-[YOUR-COLOR] ...">
```

### Modify Modal Size:
```blade
<!-- Change max-w-4xl to your preference -->
<div class="... max-w-4xl ...">
```

### Modify Close Button Color:
```blade
<!-- Change from-red-500 to-red-600 -->
<button class="... from-YOUR-COLOR to-YOUR-COLOR ...">
```

### Modify Image Container:
```blade
<!-- Change gradient colors -->
<div class="... from-[YOUR-COLOR] to-[YOUR-COLOR] ...">
```

---

## 🎬 Animation Timings

| Animation | Duration | Easing |
|-----------|----------|--------|
| Overlay fade-in | 400ms | ease-out |
| Modal scale-in | 500ms | cubic-bezier(0.16, 1, 0.3, 1) |
| Close button rotate | 300ms | ease |
| Exit fade-out | 400ms | ease-in |

---

## ✨ Best Practices

### Do's:
- ✅ Keep descriptions concise and readable
- ✅ Use high-quality images
- ✅ Maintain consistent image dimensions
- ✅ Test on mobile devices
- ✅ Ensure close button is always accessible

### Don'ts:
- ❌ Don't use very long descriptions (consider scrolling)
- ❌ Don't use low-resolution images
- ❌ Don't modify z-index without checking overlays
- ❌ Don't remove click-outside-to-close functionality
- ❌ Don't forget to unlock body scroll on close

---

## 🐛 Troubleshooting

### Popup not opening?
- Check if `data-id` attribute is set on team card
- Verify popup-wrapper has matching ID class
- Check JavaScript console for errors

### Animations not smooth?
- Ensure SCSS is compiled
- Check browser supports backdrop-filter
- Verify transition timings in CSS

### Close button not working?
- Check `.close-modal` class is present
- Verify JavaScript event handlers are bound
- Check for conflicting z-index values

### Content overflowing?
- Verify `overflow-y-auto` is on content-wrapper
- Check `max-h-[90vh]` is applied
- Ensure parent has proper height constraints

---

## 📦 Dependencies

- **Tailwind CSS**: For utility classes
- **jQuery**: For DOM manipulation and animations
- **SCSS**: For compiled styles and animations
- **Modern Browser**: For backdrop-filter support

---

## 🚀 Performance Tips

1. **Use `will-change`** for animated properties
2. **Limit backdrop-blur** on older devices
3. **Optimize images** before upload
4. **Lazy load** popup content if many team members
5. **Debounce** click events if needed

---

**Version:** 1.0  
**Last Updated:** November 11, 2025  
**Status:** ✅ Production Ready

