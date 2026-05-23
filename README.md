# One World Impact WordPress Theme

A custom WordPress theme for One World Impact - transforming visionary community projects into sustainable, accountable, and life-changing realities across the globe.

## Version
1.0.0

## Author
Chigozie Ezeh

## Description
This is a fully functional WordPress theme converted from an HTML mockup, designed specifically for One World Impact. The theme features custom page templates for Homepage and About pages, with extensive customization options through the WordPress Customizer.

## Requirements
- WordPress 6.0 or higher
- PHP 8.0 or higher
- Modern web browser with JavaScript enabled

## Installation

1. **Upload Theme Files**
   - Upload the `oneworldimpact` folder to `/wp-content/themes/` directory
   - Or upload as a ZIP file through WordPress Admin > Appearance > Themes > Add New

2. **Activate Theme**
   - Go to WordPress Admin > Appearance > Themes
   - Find "One World Impact" and click "Activate"

3. **Install Required Images**
   - Upload all image assets to `/assets/images/` folder
   - Required images are listed in the "Image Assets" section below

4. **Create Homepage and About Pages**
   - Create a new page called "Home" or "Homepage"
   - In the page editor, select Template: "Homepage" from the Page Attributes panel
   - Create another page called "About Us"
   - Select Template: "About Us" from the Page Attributes panel
   - Publish both pages

5. **Set Homepage as Static Front Page**
   - Go to Settings > Reading
   - Under "Your homepage displays", select "A static page"
   - Choose your Homepage page as "Homepage"
   - Save changes

6. **Configure Navigation Menus**
   - Go to Appearance > Menus
   - Create a new menu called "Primary Menu"
   - Add pages: Home, About Us, Projects, News, Partnership, Contact
   - Assign to "Primary Menu" location
   - Create another menu called "Footer Menu" with Quick Links
   - Save menus

## Features

### Core Features
- ✅ Fully responsive design (mobile-first approach)
- ✅ Custom page templates (Homepage, About Us)
- ✅ Custom Post Type for News items
- ✅ News carousel with auto-advance and swipe support
- ✅ Sticky navigation header
- ✅ Custom logo support via WordPress Customizer
- ✅ SEO-friendly HTML5 markup
- ✅ Translation-ready with text domain
- ✅ Cross-browser compatible (Chrome, Firefox, Safari, Edge)

### Design Elements
- Custom color scheme with CSS variables
- Google Fonts integration (Poppins: 400, 500, 600, 700)
- Gradient backgrounds and visual effects
- SVG icon integration for partnership pillars
- Card-based content layouts
- Hero section with glass-morphism globe panel
- Metrics dashboard
- Timeline visualization
- Leadership profile cards
- Footer call-to-action section

### Content Management
- All text content editable through WordPress Customizer
- News items managed through custom post type
- Featured images for news posts
- Custom meta fields for news tags
- Leader images uploadable via Customizer
- Button links and text customizable

## File Structure

```
oneworldimpact/
├── assets/
│   ├── css/
│   │   └── main.css              # All theme styles
│   ├── js/
│   │   └── carousel.js           # News carousel functionality
│   └── images/                   # All theme images
│       ├── OWL-logo.png          # Main logo (54x54px)
│       ├── OWI-One-Line.png      # Wordmark logo (horizontal)
│       ├── OWI-Stacked.png       # Stacked wordmark (footer)
│       ├── news-1.jpg            # News card image 1 (600x220px)
│       ├── news-2.jpg            # News card image 2 (600x220px)
│       ├── news-3.jpg            # News card image 3 (600x220px)
│       ├── about-visual.jpg      # About page hero image (800x420px)
│       ├── leader-1.jpg          # Brian Baughman photo (400x320px)
│       ├── leader-2.jpg          # Rabiic Gedi photo (400x320px)
│       └── leader-3.jpg          # Joe Cota photo (400x320px)
├── 404.php                       # Error page template
├── footer.php                    # Footer template
├── functions.php                 # Theme functions and setup
├── header.php                    # Header template
├── index.php                     # Main fallback template
├── page.php                      # Default page template
├── style.css                     # Theme header information
├── template-about.php            # About Us page template
├── template-homepage.php         # Homepage template
├── screenshot.png                # Theme screenshot (1200x900px)
└── README.md                     # This file
```

## Image Assets

### Required Images

All images should be placed in the `/assets/images/` folder. Here's the complete list:

1. **Logo Files**
   - `OWL-logo.png` - Main OWI logo icon (54x54px recommended)
   - `OWI-One-Line.png` - Horizontal wordmark logo (height: 34px)
   - `OWI-Stacked.png` - Stacked wordmark for footer (height: 72px)

2. **News Images** (600x220px recommended)
   - `news-1.jpg` - News article 1 featured image
   - `news-2.jpg` - News article 2 featured image
   - `news-3.jpg` - News article 3 featured image
   - Or upload directly to WordPress Media Library and set as Featured Image for news posts

3. **About Page Images**
   - `about-visual.jpg` - About page hero section visual (800x420px recommended)

4. **Leadership Photos** (400x320px recommended)
   - `leader-1.jpg` - Brian Baughman photo
   - `leader-2.jpg` - Rabiic Gedi photo
   - `leader-3.jpg` - Joe Cota photo
   - Or configure via WordPress Customizer after uploading to Media Library

5. **Theme Screenshot**
   - `screenshot.png` - Theme preview for WordPress admin (1200x900px)

### Creating Placeholder Images

If you don't have images ready, you can create placeholders using online tools:
- **Placeholder.com**: `https://via.placeholder.com/600x220`
- **LoremFlickr**: `https://loremflickr.com/600/220/business`
- **Unsplash**: Free high-quality photos

## Customization

### WordPress Customizer

All content can be edited through the WordPress Customizer. Go to **Appearance > Customize** to access:

#### Homepage Sections
- **Hero Section**: Heading, text, button labels and URLs
- **Metrics**: 4 metric numbers and labels
- **Mission & Vision**: Section heading, intro text, and card content
- **Services**: 3 service cards with titles and descriptions
- **Partnership Pillars**: 4 pillar titles and descriptions
- **News Section**: Section heading and intro text

#### About Page Sections
- **About Hero**: Heading and body text
- **Focus Areas**: 4 focus area cards (Mining, Fishing & Farming, 3D Housing, Renewable Energy)
- **Timeline**: 4 partnership framework steps
- **Leadership**: 3 leader profiles (name, role, bio, photo)

#### Global Elements
- **Footer CTA**: Heading, text, button label and URL
- **Footer**: Description text, contact email
- **Navigation**: Manage via Appearance > Menus

### Custom Post Type: News

To add news items:

1. Go to **News** in WordPress admin sidebar
2. Click **Add New**
3. Enter news title and content
4. Set a Featured Image (600x220px recommended)
5. Add custom field `news_tag` with value like "ANNOUNCEMENT", "PROJECT UPDATE", or "INSIGHT"
6. Publish

The homepage will automatically display the 3 most recent news items.

### CSS Customization

All styles are in `/assets/css/main.css`. Key CSS variables in `:root`:

```css
:root {
  --navy: #0b1f3a;
  --royal: #286aae;
  --sky: #59a3c0;
  --green: #88ad8e;
  --gold: #e1bb58;
  --bg: #f7f8fa;
  --mist: #eef4f1;
  --cloud: #f4f7fb;
  --ink: #244b78;
}
```

Modify these variables to change the entire color scheme.

### JavaScript Customization

News carousel settings can be adjusted in `/assets/js/carousel.js`:
- Auto-advance interval (default: 5000ms = 5 seconds)
- Swipe threshold (default: 50px)
- Animation timing

## Responsive Breakpoints

The theme uses a single major breakpoint at **1100px**:

- **Desktop (> 1100px)**: Full multi-column layout with all features
- **Mobile (≤ 1100px)**: Single-column stacked layout, hidden desktop menu

### Mobile Considerations
- Navigation menu is hidden on mobile (hamburger menu implementation can be added)
- All grid layouts collapse to single column
- News carousel arrows hidden (swipe-enabled)
- Typography scales down for readability

## Browser Support

Tested and compatible with:
- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ✅ Mobile Safari (iOS 14+)
- ✅ Chrome Mobile (Android 10+)

## WordPress Standards Compliance

This theme follows WordPress Coding Standards and best practices:

- ✅ Proper theme header in style.css
- ✅ Enqueued scripts and styles (no hardcoded links)
- ✅ Translation-ready with text domain
- ✅ Proper escaping (`esc_html()`, `esc_url()`, `esc_attr()`)
- ✅ Sanitization for all inputs
- ✅ wp_head() and wp_footer() hooks
- ✅ wp_body_open() hook
- ✅ Theme support declarations
- ✅ Navigation menu registration
- ✅ Custom post type registration
- ✅ Custom image sizes

Run **Theme Check** plugin to verify compliance.

## Performance Optimization

### Recommendations
1. **Optimize Images**: Compress all images before uploading (use TinyPNG or similar)
2. **Use CDN**: Consider using a CDN for Google Fonts if needed
3. **Caching**: Install a caching plugin like WP Super Cache or W3 Total Cache
4. **Minification**: Consider minifying CSS and JS for production

### Image Optimization
- News images: 600x220px, optimized to < 50KB each
- Leader photos: 400x320px, optimized to < 40KB each
- Logo files: PNG with transparency, optimized
- Use WebP format for better compression (with fallback)

## Troubleshooting

### Theme Not Displaying Correctly
1. Clear browser cache and WordPress cache
2. Verify all CSS/JS files are loaded (check browser console)
3. Ensure Google Fonts are loading (check network tab)
4. Deactivate other plugins that might conflict

### Images Not Showing
1. Verify images are in `/assets/images/` folder
2. Check file names match exactly (case-sensitive)
3. Verify image paths in template files
4. Check file permissions (should be 644 for files, 755 for folders)

### Menu Not Working
1. Go to Appearance > Menus
2. Create menu and assign to "Primary Menu" location
3. Verify menu items are published pages
4. Check active menu item class is applied correctly

### News Carousel Not Working
1. Verify jQuery is loaded (check browser console)
2. Check for JavaScript errors in console
3. Ensure carousel.js is enqueued properly
4. Test with at least 3 news posts

### Responsive Layout Issues
1. Test at exactly 1100px width breakpoint
2. Check for custom CSS overriding media queries
3. Verify viewport meta tag in header.php
4. Clear browser cache after CSS changes

## Support & Documentation

### Additional Resources
- WordPress Codex: https://codex.wordpress.org/
- WordPress Theme Handbook: https://developer.wordpress.org/themes/
- CSS Variables Guide: https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties

### Development Tools
- **Theme Check Plugin**: Validates WordPress theme standards
- **Query Monitor**: Debug WordPress queries and performance
- **Debug Bar**: WordPress debugging toolbar

## License

This theme is licensed under the MIT License. See LICENSE file for details.

Copyright 2026 Chigozie Ezeh

## Changelog

### Version 1.0.0 (April 16, 2026)
- Initial release
- Homepage template with hero, metrics, mission/vision, services, pillars, and news carousel
- About Us template with hero, focus areas, timeline, and leadership sections
- Custom post type for news items
- News carousel with auto-advance and swipe support
- Fully responsive design with mobile optimization
- WordPress Customizer integration for all content
- Translation-ready with text domain
- Cross-browser compatibility

## Credits

- **Design**: Based on OWI-MockUp-2.html mockup
- **Development**: WordPress theme conversion by Chigozie Ezeh
- **Fonts**: Google Fonts - Poppins family
- **Icons**: Custom SVG icons (partnership pillars)

## Future Enhancements

Potential features for future versions:
- [ ] Advanced Custom Fields (ACF) integration for easier content management
- [ ] Mobile hamburger menu implementation
- [ ] Projects, Partnership, and Contact page templates
- [ ] News archive and single post templates
- [ ] Search functionality
- [ ] Blog post templates and categories
- [ ] Widget areas for sidebar/footer
- [ ] Theme customizer color picker for brand colors
- [ ] Gutenberg block editor compatibility
- [ ] Dark mode toggle
- [ ] Multi-language support (WPML/Polylang)
- [ ] Performance optimization with lazy loading
- [ ] Accessibility improvements (WCAG 2.1 AA compliance)

---

**Need Help?** For theme support, please contact: [Your contact information]

**Found a Bug?** Please report issues to: [Your issue tracker or email]
