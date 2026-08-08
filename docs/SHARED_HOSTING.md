# ??? Shared Hosting Deployment

Deploying a Palet application on a shared hosting environment (where you don't have full SSH access or cannot change the document root) requires a slightly different approach.

Palet is designed to be highly secure, which means the core framework files should never be publicly accessible.

---

## The Secure Approach (Recommended)

If your shared host gives you access to a directory *above* your `public_html` (or `www`), follow these steps:

1. **Upload the Application:** Upload your entire Palet project folder into the directory *above* `public_html`. (e.g., `/home/username/palet-app`).
2. **Move the Public Folder:** Move all the contents of your `public/` folder into the `public_html` directory of your hosting provider.
3. **Update Paths:** Open the `index.php` file that is now in your `public_html` folder and update the paths to point to the application folder.

```php
// public_html/index.php

// Change this:
require __DIR__ . '/../bootstrap/app.php';

// To this:
require __DIR__ . '/../palet-app/bootstrap/app.php';
```

4. **Permissions:** Ensure the `storage/` and `bootstrap/cache/` folders inside `/home/username/palet-app` have write permissions (755 or 775).

## The .htaccess Approach (Not Recommended)

If you have absolutely no choice and must upload the entire project *inside* the `public_html` folder, you must use an `.htaccess` file to protect your sensitive files and redirect traffic to the `public/` directory.

Create an `.htaccess` file in your root directory (`public_html/.htaccess`) with the following rules:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

> **Warning:** This method is highly discouraged because a misconfiguration in your Apache server could expose your `.env` file and database credentials to the entire internet!

