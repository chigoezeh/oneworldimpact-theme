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

**Recommended Logo Sizes:**
- Main logo (OWL): 200x200px or smaller
- Horizontal wordmark: 300x100px (max height 100px)
- Stacked wordmark: 200x300px (max height 300px)

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

### Step 5: Create Contact Page
1. Go to **Pages** > **Add New**
2. Title: "Contact Us"
3. Select Template: **Contact Us**
4. Click **Publish**
5. *(You'll setup the contact form in Step 8)*

### Step 6: Set Homepage as Front Page
1. Go to **Settings** > **Reading**
2. Under "Your homepage displays", select **A static page**
3. Choose your "Home" page as **Homepage**
4. Click **Save Changes**

### Step 7: Create Navigation Menu
1. Go to **Appearance** > **Menus**
2. Create a new menu called "Primary Menu"
3. Add these pages:
   - Home
   - About Us
   - Contact Us
   - (Create placeholder pages for Projects, News, Partnership)
4. Check "Primary Menu" under "Display location"
5. Click **Save Menu**

### Step 8: Setup Contact Form
1. Install **Contact Form 7** plugin:
   - Go to **Plugins** > **Add New**
   - Search for "Contact Form 7"
   - Click **Install Now**, then **Activate**
2. Go to **Contact** > **Contact Forms**
3. Click **Add New** to create a form or use the default one
4. Copy the shortcode (looks like `[contact-form-7 id="123" title="Contact form 1"]`)
5. Go to **Appearance** > **Customize** > **Contact Page**
6. Paste the shortcode in the **Contact Form Shortcode** field
7. Update your contact email, phone, and location
8. Click **Publish**

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

## � Setting Up Contact Page

### Quick Setup with Contact Form 7 (Recommended)

**Step 1: Install Contact Form 7**
1. Go to **Plugins** > **Add New**
2. Search for "Contact Form 7"
3. Click **Install Now**, then **Activate**

**Step 2: Create/Edit Contact Form**
1. Go to **Contact** > **Contact Forms** in WordPress admin
2. You can use the default form or create a new one
3. **Recommended form fields** (edit the Form tab):
   ```
   <div class="form-row">
   <label> First Name
       [text* first-name] </label>
   <label> Last Name
       [text* last-name] </label>
   </div>

   <label> Email Address
       [email* your-email] </label>

   <label> Company / Organization (Optional)
       [text company] </label>

   <label> Message
       [textarea* your-message placeholder "Tell us about your project or inquiry..."] </label>

   [submit "Submit Inquiry"]
   ```
4. In the **Mail** tab, set your email address where form submissions will be sent
5. Copy the shortcode at the top (e.g., `[contact-form-7 id="123"]`)

**Step 3: Add Shortcode to Theme**
1. Go to **Appearance** > **Customize**
2. Click **Contact Page**
3. Paste the shortcode in **Contact Form Shortcode** field
4. Update contact information:
   - **Email Address**: Your public contact email
   - **Phone Number**: Optional, leave blank to hide
   - **Location**: e.g., "Global / Remote" or your office location
5. Click **Publish**

### Alternative: Use Another Form Plugin
The contact page template supports any plugin that uses shortcodes:
- **WPForms** - Drag & drop form builder
- **Gravity Forms** - Advanced form builder
- **Ninja Forms** - Flexible form solution

Just paste the form's shortcode in **Appearance > Customize > Contact Page > Contact Form Shortcode**.

### Custom HTML Form
If you prefer a custom HTML form, edit `template-contact.php` and replace the shortcode area with your form code.

---

## �📸 Adding Images
### Upload Logos (Recommended Method)
**Via WordPress Customizer:**
1. Go to **Appearance** > **Customize**
2. Navigate to **Site Images & Logos**
3. Upload your logos:
   - **Main Logo (OWL Icon)** - The circular OWI logo (recommended: 200x200px)
   - **Wordmark Logo (Horizontal)** - Used next to main logo in header (recommended: max 300x100px)
   - **Stacked Logo** - Used in footer (recommended: max 200x300px)
4. Click **Publish**

**Note:** Upload logos through **Customizer > Site Images & Logos** instead of WordPress's built-in Site Identity logo uploader for proper sizing.
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

### Logo too large?
- **Recommended**: Upload logos via **Appearance > Customize > Site Images & Logos** instead of WordPress's Site Identity logo uploader
- Logo should be optimized before upload (recommended 200x200px for main logo)
- The theme automatically constrains logos to proper sizes (54px height for header)
- If using WordPress's custom logo uploader, the theme CSS will still constrain it, but using the Customizer method is preferred

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
- [ ] Contact page created with "Contact Us" template
- [ ] Contact Form 7 plugin installed and configured
- [ ] Contact form shortcode added to Customizer
- [ ] Contact information updated (email, phone, location)
- [ ] Homepage set as static front page in Settings > Reading
- [ ] Primary menu created and assigned (including Contact page)
- [ ] At least 3 news posts created (optional)
- [ ] All images optimized and uploaded
- [ ] Tested on mobile and desktop
- [ ] Contact form tested and working
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
