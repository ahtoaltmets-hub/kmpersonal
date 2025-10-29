# KM Personal Theme - Quick Setup Guide

## Quick Start (5 Minutes)

### Step 1: Install Theme
1. Upload theme folder to `/wp-content/themes/kmpersonal/`
2. Activate theme in WordPress admin

### Step 2: Install ACF Plugin
1. Go to Plugins > Add New
2. Search "Advanced Custom Fields"
3. Install and activate

### Step 3: Create Homepage
1. Pages > Add New > Create "Homepage"
2. Settings > Reading > Set as static homepage
3. Fill in ACF fields
4. Add images

### Step 4: Done!
Visit your site to see the homepage in action.

---

## Deployment Checklist

### Before Launch

**Content:**
- [ ] Upload hero background image (1920x1080px+)
- [ ] Set hero title and subtitle
- [ ] Configure free consultation badge
- [ ] Write mission text
- [ ] Set up 3 company values
- [ ] Upload trust section image
- [ ] Add 4 services with icons
- [ ] Add testimonials (minimum 2)
- [ ] Set CTA buttons and contact info

**Images:**
- [ ] Hero background (< 200KB, optimized)
- [ ] Trust section image (800x600px)
- [ ] Logo uploaded in Customizer
- [ ] All images have alt text

**Settings:**
- [ ] Set static homepage
- [ ] Create primary navigation menu
- [ ] Update site title and tagline
- [ ] Set timezone to Europe/Tallinn
- [ ] Configure permalink structure (Post name)

**Contact Info:**
- [ ] Update email in CTA section
- [ ] Update phone number
- [ ] Test contact links work

**Testing:**
- [ ] Test on mobile (375px width)
- [ ] Test on tablet (768px width)
- [ ] Test on desktop (1920px width)
- [ ] Test testimonials slider
- [ ] Test all button links
- [ ] Test smooth scrolling
- [ ] Check all images load
- [ ] Verify Font Awesome icons display

**Performance:**
- [ ] Install caching plugin (WP Super Cache)
- [ ] Optimize images (TinyPNG/WebP)
- [ ] Test page load speed (< 3 seconds)
- [ ] Enable GZIP compression
- [ ] Minify CSS/JS if needed

**SEO:**
- [ ] Install Yoast SEO or Rank Math
- [ ] Set meta description for homepage
- [ ] Add site to Google Search Console
- [ ] Submit sitemap to Google
- [ ] Add Google Analytics (optional)

**Security:**
- [ ] Update WordPress to latest version
- [ ] Update all plugins
- [ ] Install security plugin (Wordfence)
- [ ] Set strong admin password
- [ ] Limit login attempts
- [ ] Enable SSL certificate (HTTPS)

---

## Required Credentials

### WordPress Admin
- URL: `https://yourdomain.ee/wp-admin/`
- Username: `_____________`
- Password: `_____________`

### Hosting/FTP
- Host: `_____________`
- Username: `_____________`
- Password: `_____________`
- Port: `21` or `22` (SFTP)

### Email
- SMTP Host: `_____________`
- SMTP Port: `_____________`
- Email: `info@kmpersonal.ee`
- Password: `_____________`

---

## Post-Launch

### Week 1
- [ ] Monitor site performance
- [ ] Check Google Analytics data
- [ ] Review contact form submissions
- [ ] Check for broken links
- [ ] Monitor uptime

### Monthly
- [ ] Update WordPress core
- [ ] Update all plugins
- [ ] Update theme if modified
- [ ] Backup database
- [ ] Backup files
- [ ] Review site security

---

## Common Tasks

### Adding a New Testimonial

1. Edit homepage in WordPress
2. Scroll to "Testimonials Section"
3. Click "Add Testimonial"
4. Fill in:
   - Testimonial text
   - Client name
   - Client position/company
   - Photo (optional)
5. Update page

### Changing Hero Image

1. Edit homepage
2. Scroll to "Hero Section"
3. Click "Hero Background Image"
4. Upload new image (1920x1080px recommended)
5. Update page

### Updating Services

1. Edit homepage
2. Scroll to "Services Section"
3. Click on service to edit
4. Modify title, description, or link
5. Update page

### Changing Contact Info

1. Edit homepage
2. Scroll to "CTA Section"
3. Update email and phone fields
4. Update page

---

## Troubleshooting

### Issue: ACF Fields Not Visible
**Solution:**
- Verify ACF plugin is active
- Check you're editing the front page
- Refresh page editor

### Issue: Slider Not Working
**Solution:**
- Add at least 2 testimonials
- Clear browser cache
- Check JavaScript console for errors

### Issue: Images Not Loading
**Solution:**
- Re-upload images through ACF
- Check file permissions (755 for folders, 644 for files)
- Verify image URLs in page source

### Issue: Slow Page Load
**Solution:**
- Optimize images (compress to < 200KB)
- Install caching plugin
- Enable GZIP compression
- Consider CDN for static assets

---

## Support Contacts

**Theme Issues:**
- Developer: [Your contact]
- Email: [Your email]

**WordPress Help:**
- WordPress.org Forums: https://wordpress.org/support/
- WordPress Codex: https://codex.wordpress.org/

**Hosting Support:**
- [Your hosting provider]
- Support URL: [Hosting support URL]

---

## Backup Instructions

### Manual Backup

**Database:**
1. Go to phpMyAdmin
2. Select WordPress database
3. Click "Export"
4. Download SQL file

**Files:**
1. Connect via FTP
2. Download `/wp-content/` folder
3. Store in safe location

### Automatic Backup

**Recommended Plugins:**
- UpdraftPlus (Free)
- BackupBuddy (Premium)
- VaultPress (Premium)

**Setup:**
1. Install backup plugin
2. Configure backup schedule (daily/weekly)
3. Set backup destination (Dropbox, Google Drive, etc.)
4. Test restore once

---

## Performance Targets

- **Page Load Time:** < 3 seconds
- **First Contentful Paint:** < 1.5 seconds
- **Time to Interactive:** < 3.5 seconds
- **PageSpeed Score:** > 85/100
- **Mobile Score:** > 80/100

**Tools:**
- [Google PageSpeed Insights](https://pagespeed.web.dev/)
- [GTmetrix](https://gtmetrix.com/)
- [WebPageTest](https://www.webpagetest.org/)

---

## Additional Resources

- **WordPress.org:** https://wordpress.org/
- **ACF Documentation:** https://www.advancedcustomfields.com/resources/
- **Font Awesome Icons:** https://fontawesome.com/icons
- **Google Fonts:** https://fonts.google.com/
- **TinyPNG:** https://tinypng.com/ (image optimization)

---

**Last Updated:** 2024
**Theme Version:** 1.0.0
