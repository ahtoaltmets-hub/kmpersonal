# KM Personal WordPress Theme

A professional WordPress theme for KM Personal - an HR consulting company in Estonia. This theme features a beautiful homepage with 6 customizable sections, all fully editable through the WordPress admin panel using Advanced Custom Fields (ACF).

## Features

- **Fully Responsive Design** - Mobile-first approach
- **Open Sans Typography** - Professional and clean font family
- **Custom Color Palette** - Beige, dark green, and purple brand colors
- **6 Homepage Sections:**
  1. Hero Section with full-screen background
  2. Mission Section with company values
  3. Trust Section with image and text
  4. Services Overview with service cards
  5. Testimonials Slider with autoplay
  6. Call-to-Action Section
- **Advanced Custom Fields (ACF)** - All content editable via WordPress admin
- **Font Awesome Icons** - Beautiful vector icons throughout
- **Smooth Animations** - CSS transitions and scroll animations
- **Testimonials Slider** - Auto-play with manual controls and swipe support
- **SEO Friendly** - Semantic HTML5 markup

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- Advanced Custom Fields (ACF) plugin (Free or Pro version)

## Installation

### 1. Upload Theme

**Via WordPress Admin:**
1. Go to `Appearance` > `Themes` > `Add New`
2. Click `Upload Theme`
3. Choose the theme ZIP file
4. Click `Install Now`
5. Activate the theme

**Via FTP:**
1. Upload the theme folder to `/wp-content/themes/`
2. Go to `Appearance` > `Themes`
3. Activate "KM Personal" theme

### 2. Install Required Plugins

**Advanced Custom Fields (ACF):**
1. Go to `Plugins` > `Add New`
2. Search for "Advanced Custom Fields"
3. Install and activate the plugin

The theme will automatically create all necessary ACF field groups on activation.

### 3. Set Homepage

1. Go to `Pages` > `Add New`
2. Create a new page called "Homepage" (or any name)
3. Publish the page
4. Go to `Settings` > `Reading`
5. Select "A static page" under "Your homepage displays"
6. Choose your newly created page as the "Homepage"
7. Save changes

### 4. Configure Homepage Content

1. Go to `Pages` and edit your homepage
2. You'll see 6 ACF field groups below the editor:
   - **Hero Section**
   - **Mission Section**
   - **Trust Section**
   - **Services Section**
   - **Testimonials Section**
   - **CTA Section**
3. Fill in the fields with your content
4. Upload images where required
5. Update the page

## Section Configuration

### Hero Section

**Fields:**
- Background Image (recommended: 1920x1080px or larger)
- Show Free Consultation Badge (toggle)
- Badge Text
- Hero Title
- Hero Subtitle
- Primary Button Text & Link
- Secondary Button Text & Link

**Recommended Image:** Teamwork photo, hands holding, warm tones

### Mission Section

**Fields:**
- Mission Heading
- Mission Text
- Values (3 cards):
  - Icon Class (Font Awesome)
  - Title
  - Description

**Default Values:**
- Paindlikkus (Flexibility)
- Inimlikkus (Humanity)
- Strateegia (Strategy)

### Trust Section

**Fields:**
- Heading
- Text
- Image (lighthouse in stormy sea or similar)
- Button Text & Link

### Services Section

**Fields:**
- Services Heading
- Services Subtitle
- Services (repeater, 2-6 items):
  - Icon Class (Font Awesome)
  - Title
  - Short Description
  - Link URL

**Default Services:**
1. Töösuhtega seotud nõustamine
2. Personalijuhtimise süsteemid
3. Värbamine ja tööle võtmine
4. Koolitused

### Testimonials Section

**Fields:**
- Testimonials Heading
- Testimonials (repeater, 1-10 items):
  - Testimonial Text
  - Client Name
  - Client Position/Company
  - Client Photo (optional)

**Slider Features:**
- Auto-play (5 seconds)
- Previous/Next buttons
- Dot navigation
- Keyboard navigation (arrow keys)
- Swipe support for mobile
- Pause on hover

### CTA Section

**Fields:**
- CTA Heading
- CTA Text
- Primary Button Text & Link
- Secondary Button Text & Link
- Email Address
- Phone Number

## Font Awesome Icons

The theme uses Font Awesome 6 for icons. When entering icon classes in ACF fields:

**Format:** Use only the icon name (e.g., `fa-heart`, `fa-users`, `fa-cogs`)

**Popular Icons:**
- `fa-heart` - Heart
- `fa-users` - People
- `fa-handshake` - Handshake
- `fa-cogs` - Gears/Settings
- `fa-graduation-cap` - Education
- `fa-chart-line` - Growth/Strategy
- `fa-arrows-alt` - Flexibility
- `fa-chess` - Strategy

[Browse all Font Awesome icons](https://fontawesome.com/icons)

## Color Palette

```css
Beige Background: #FCF7F0
Dark Green: #214945
Darker Green: #002926
Light Purple: #B695B3
Dark Purple: #724A69
White: #FFFFFF
Text Dark: #002926
Text Body: #333333
```

## Typography

**Font Family:** Open Sans (Google Fonts)

**Font Weights:**
- Light (300) - Subtle text
- Regular (400) - Body text
- Semi-Bold (600) - Headings
- Bold (700) - Main headings

**Font Sizes:**
- H1: 56px (desktop) / 32px (mobile)
- H2: 42px (desktop) / 28px (mobile)
- H3: 28px (desktop) / 22px (mobile)
- Body: 16px
- Subtitle: 18px

## Responsive Breakpoints

- **Mobile:** < 768px
- **Tablet:** 768px - 1023px
- **Desktop:** ≥ 1024px

## File Structure

```
kmpersonal-theme/
├── style.css                    # Main stylesheet with global styles
├── functions.php                # Theme functions and ACF fields
├── header.php                   # Site header
├── footer.php                   # Site footer
├── front-page.php              # Homepage template
├── index.php                    # Fallback template
├── README.md                    # This file
├── assets/
│   ├── css/
│   │   └── homepage.css        # Homepage-specific styles
│   └── js/
│       └── homepage.js         # Testimonials slider & animations
└── template-parts/
    ├── hero.php                # Hero section
    ├── mission.php             # Mission section
    ├── trust.php               # Trust section
    ├── services-overview.php   # Services section
    ├── testimonials.php        # Testimonials slider
    └── cta.php                 # CTA section
```

## Customization

### Changing Colors

Edit the CSS variables in `style.css`:

```css
:root {
  --beige-bg: #FCF7F0;
  --dark-green: #214945;
  --light-purple: #B695B3;
  /* ... */
}
```

### Adding New Sections

1. Create a new template part in `template-parts/`
2. Add the template part to `front-page.php`:
   ```php
   get_template_part('template-parts/your-section');
   ```
3. Create ACF fields in `functions.php`
4. Add CSS styles to `assets/css/homepage.css`

### Modifying Slider Speed

Edit `assets/js/homepage.js`:

```javascript
// Change 5000 to desired milliseconds
autoplayInterval = setInterval(nextSlide, 5000);
```

## Menu Setup

1. Go to `Appearance` > `Menus`
2. Create a new menu called "Primary Menu"
3. Add pages/links to the menu
4. Assign to "Primary Menu" location
5. (Optional) Create "Footer Menu" for footer links

## Performance Optimization

### Image Optimization

**Recommended formats:**
- WebP for modern browsers
- JPG for photos
- PNG for graphics with transparency

**Recommended sizes:**
- Hero background: 1920x1080px (max 200KB)
- Trust section image: 800x600px
- Service icons: Use Font Awesome (vector)
- Testimonial photos: 200x200px

**Tools:**
- [TinyPNG](https://tinypng.com/) - Image compression
- [Squoosh](https://squoosh.app/) - WebP conversion

### Caching

Install a caching plugin:
- WP Super Cache
- W3 Total Cache
- WP Rocket (premium)

### Lazy Loading

Images use native lazy loading (`loading="lazy"`)

## Browser Support

- Chrome (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Edge (latest 2 versions)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Troubleshooting

### ACF Fields Not Showing

1. Make sure ACF plugin is activated
2. Check if you're editing the front page (not a regular page)
3. Go to `Custom Fields` in WordPress admin to verify field groups exist

### Slider Not Working

1. Check browser console for JavaScript errors
2. Verify `homepage.js` is loading (View Page Source)
3. Make sure you have at least 2 testimonials

### Images Not Displaying

1. Check file paths in ACF fields
2. Verify images are uploaded correctly
3. Check file permissions on `/wp-content/uploads/`

### Styling Issues

1. Clear browser cache (Ctrl+Shift+R / Cmd+Shift+R)
2. Clear WordPress cache if using a caching plugin
3. Check if CSS files are loading (View Page Source)

## Support

For theme support and customization requests:
- Email: info@kmpersonal.ee
- Website: https://kmpersonal.ee

## Credits

- **Design & Development:** KM Personal
- **Font:** [Open Sans](https://fonts.google.com/specimen/Open+Sans) by Google Fonts
- **Icons:** [Font Awesome](https://fontawesome.com/)
- **WordPress:** [WordPress.org](https://wordpress.org/)

## Changelog

### Version 1.0.0 (2024)
- Initial release
- 6 homepage sections
- ACF integration
- Testimonials slider
- Fully responsive design
- Font Awesome icons
- Smooth animations

## License

This theme is proprietary software created for KM Personal.
All rights reserved.

---

**Made with ❤️ for KM Personal**
