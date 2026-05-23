# Image Assets Directory

This folder contains all image assets for the One World Impact WordPress theme.

## Required Images

Please add the following images to this directory:

### Logo Files
- **OWL-logo.png** - Main OWI logo icon (recommended: 54x54px, PNG with transparency)
- **OWI-One-Line.png** - Horizontal wordmark logo (recommended: height 34px, PNG with transparency)
- **OWI-Stacked.png** - Stacked wordmark for footer (recommended: height 72px, PNG with transparency)

### News Images (Optional - can be uploaded via WordPress Media Library)
- **news-1.jpg** - News article 1 featured image (recommended: 600x220px)
- **news-2.jpg** - News article 2 featured image (recommended: 600x220px)
- **news-3.jpg** - News article 3 featured image (recommended: 600x220px)

### About Page Images
- **about-visual.jpg** - About page hero section background (recommended: 800x420px)

### Leadership Photos (Optional - can be configured via WordPress Customizer)
- **leader-1.jpg** - Brian Baughman photo (recommended: 400x320px)
- **leader-2.jpg** - Rabiic Gedi photo (recommended: 400x320px)
- **leader-3.jpg** - Joe Cota photo (recommended: 400x320px)

## Image Guidelines

### Format Recommendations
- **Logos**: PNG format with transparency
- **Photos**: JPG format for smaller file sizes
- **Graphics**: PNG for crisp edges, JPG for photos

### Size Optimization
- Compress all images before uploading
- Target file sizes:
  - Logos: < 20KB each
  - News images: < 50KB each
  - Leader photos: < 40KB each
  - About visual: < 100KB

### Tools for Optimization
- TinyPNG (https://tinypng.com/)
- ImageOptim (Mac)
- RIOT (Windows)
- Squoosh (https://squoosh.app/)

## Alternative: Using Placeholders

If you don't have all images ready, you can use placeholder images:

### Online Placeholder Services
- Placeholder.com: `https://via.placeholder.com/[width]x[height]`
- Lorem Picsum: `https://picsum.photos/[width]/[height]`
- Unsplash Source: `https://source.unsplash.com/[width]x[height]/?[keyword]`

### Download Placeholders
```bash
# Example using curl (in this directory)
curl https://via.placeholder.com/54x54 -o OWL-logo.png
curl https://via.placeholder.com/600x220 -o news-1.jpg
curl https://via.placeholder.com/600x220 -o news-2.jpg
curl https://via.placeholder.com/600x220 -o news-3.jpg
curl https://via.placeholder.com/800x420 -o about-visual.jpg
curl https://via.placeholder.com/400x320 -o leader-1.jpg
curl https://via.placeholder.com/400x320 -o leader-2.jpg
curl https://via.placeholder.com/400x320 -o leader-3.jpg
```

## WordPress Upload Alternative

Instead of placing images in this folder, you can:
1. Upload images to WordPress Media Library
2. Set Featured Images for News posts
3. Configure leader images via WordPress Customizer
4. Upload logo via Appearance > Customize > Site Identity > Logo

## File Naming Convention

- Use lowercase letters
- Use hyphens (-) instead of spaces
- Be descriptive but concise
- Include size suffix if multiple versions: `logo-small.png`, `logo-large.png`

## Current Status

**Missing Images**: All images need to be added before theme is fully functional.

Check the main README.md file for complete image specifications and setup instructions.
