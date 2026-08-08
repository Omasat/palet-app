# Shared Hosting Deployment Guide

Deploying Palet App on shared hosting environments (like cPanel, DirectAdmin, Plesk) requires specific `.htaccess` configurations because you typically cannot modify the server's Document Root.

## Using the Root `.htaccess` (Automated)
The provided `.htaccess` file in the root directory automatically directs all incoming traffic to the `public/index.php` file, while securing sensitive directories.

1. Upload the entire project to your `public_html` or `www` folder.
2. The root `.htaccess` will handle routing.
3. Ensure the `.env` file is present in the root.

## Manual Document Root Configuration
If your hosting provider allows you to change the Document Root (often an option in "Addon Domains" or "Subdomains"):
1. Upload the project to a folder outside `public_html` (e.g., `/home/user/palet-app`).
2. Point the Document Root of your domain to `/home/user/palet-app/public`.
3. This is the most secure method.

## Security Considerations
- Never remove the `public/.htaccess` file.
- The root `.htaccess` ensures `config/`, `storage/`, and `.env` are blocked from direct browser access.
