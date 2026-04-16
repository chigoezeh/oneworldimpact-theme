# One World Impact Theme - Quick Setup Guide

Welcome! This guide will help you get the One World Impact WordPress theme up and running quickly.

## ⚡ Quick Start (5 Minutes)

### Step 1: Activate the Theme
1. Log in to your WordPress admin panel
2. Go to **Appearance** > **Themes**
3. Find "One World Impact" and click **Activate**

### Step 2: Upload Images
1. Open the `/assets/images/` folder in the theme
2. Add the following essential images:
   - `OWL-logo.png` (your OWI logo)
   - `OWI-One-Line.png` (horizontal wordmark)
   - `OWI-Stacked.png` (stacked wordmark for footer)

**Don't have images?** Use placeholders temporarily:
```
Copy the image URLs from the original mockup or use placeholder services like:
- https://via.placeholder.com/54x54 (for logos)
- https://via.placeholder.com/600x220 (for news images)
```

### Step 3: Create Homepage
1. Go to **Pages** > **Add New**
2. Title: "Home" or "Homepage"
3. **Important**: In the right sidebar under "Page Attributes", select Template: **Homepage**
4. Click **Publish** (don't add content - it's all in the template)

### Step 4: Create About Page
1. Go to **Pages** > **Add New**
2. Title: "About Us"
3. Select Template: **About Us**
4. Click **Publish**

### Step 5: Set Homepage as Front Page
1. Go to **Settings** > **Reading**
2. Under "Your homepage displays", select **A static page**
3. Choose your "Home" page as **Homepage**
4. Click **Save Changes**

### Step 6: Create Navigation Menu
1. Go to **Appearance** > **Menus**
2. Create a new menu called "Primary Menu"
3. Add these pages:
   - Home
   - About Us
   - (Create placeholder pages for Projects, News, Partnership, Contact)
4. Check "Primary Menu" under "Display location"
5. Click **Save Menu**

**🎉 Done! Visit your site to see the theme in action.**

---

## 🎨 Customizing Content

### Edit Text Content
1. Go to **Appearance** > **Customize**
2. You'll see all content sections you can edit:
   - Hero text and buttons
   - Metrics (4 stat numbers)
   - Mission & Vision cards
   - Service descriptions
   - And much more!

### Add News Items
1. Go to **News** in the WordPress sidebar
2. Click **Add New**
3. Enter title and content
4. Upload a **Featured Image** (600x220px recommended)
5. Add custom field: `news_tag` = "ANNOUNCEMENT" (or "PROJECT UPDATE", "INSIGHT")
6. Click **Publish**

The homepage automatically displays your 3 latest news items.

---

## 📸 Adding Images

### Method 1: Direct Upload (Simple)
1. Copy your images to: `/wp-content/themes/oneworldimpact/assets/images/`
2. Use exact filenames:
   - `OWL-logo.png`
   - `OWI-One-Line.png`
   - `OWI-Stacked.png`
   - `news-1.jpg`, `news-2.jpg`, `news-3.jpg` (optional)
   - `about-visual.jpg`
   - `leader-1.jpg`, `leader-2.jpg`, `leader-3.jpg` (optional)

### Method 2: WordPress Media Library (Recommended)
1. **For Logo**: Go to Appearance > Customize > Site Identity > Upload logo
2. **For News**: When creating news posts, set Featured Image
3. **For Leaders**: Upload to Media Library, then set in Customizer

---

## 🔧 Troubleshooting

### Theme doesn't look right?
- **Clear cache**: Browser cache + WordPress cache (if using a caching plugin)
- **Check images**: Make sure all logo files are uploaded
- **Verify template**: Ensure you selected "Homepage" template for the homepage

### Menu not showing?
- Go to Appearance > Menus
- Create menu and assign to "Primary Menu" location
- Make sure pages are published

### News carousel not working?
- Make sure you have at least 3 news posts
- Check browser console for JavaScript errors (F12 > Console tab)
- Verify jQuery is loading (it should load automatically)

---

## 📋 Checklist

Use this checklist to make sure everything is set up:

- [ ] Theme activated
- [ ] Logo images uploaded (`OWL-logo.png`, `OWI-One-Line.png`, `OWI-Stacked.png`)
- [ ] Homepage created with "Homepage" template
- [ ] About page created with "About Us" template
- [ ] Homepage set as static front page in Settings > Reading
- [ ] Primary menu created and assigned
- [ ] At least 3 news posts created (optional)
- [ ] All images optimized and uploaded
- [ ] Tested on mobile and desktop
- [ ] Customizer content reviewed and updated

---

## 🚀 Next Steps

Once basic setup is complete:

1. **Customize All Content**
   - Go through each section in Appearance > Customize
   - Update all text to match your organization's messaging

2. **Add Real Images**
   - Replace placeholder images with professional photos
   - Optimize all images for web (< 100KB each)

3. **Create Additional Pages**
   - Projects page
   - News archive page
   - Partnership page
   - Contact page with form

4. **Test Everything**
   - Test on multiple browsers (Chrome, Firefox, Safari, Edge)
   - Test on mobile devices
   - Test all links and buttons
   - Verify news carousel functionality

5. **Performance Optimization**
   - Install a caching plugin (WP Super Cache or W3 Total Cache)
   - Optimize images further if needed
   - Consider using a CDN

---

## 📚 Full Documentation

For complete documentation, see **README.md** in the theme folder.

For WordPress help: https://wordpress.org/documentation/

---

## 💬 Need Help?

- Check the main README.md file for detailed documentation
- Search WordPress.org forums
- Contact theme support: [Your contact info]

**Happy building! 🎉**
