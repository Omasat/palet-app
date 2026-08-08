# Deployment Guide

Follow these steps for deploying Palet App to a production environment (VPS, Dedicated Server, etc.).

## 1. Get the Code
Clone the repository or download the release archive.
```bash
git clone https://github.com/your-repo/palet-app.git
cd palet-app
```

## 2. Install Dependencies
```bash
composer install --optimize-autoloader --no-dev
```

## 3. Environment Configuration
```bash
cp .env.example .env
php palet key:generate
```
Edit the `.env` file and set `APP_ENV=production` and `APP_DEBUG=false`. Fill in your database details.

## 4. Run Migrations
```bash
php palet migrate
```

## 5. Optimize for Production
Run the Palet optimization command to cache configurations and routes:
```bash
php palet optimize
```

## 6. Permissions
Ensure your web server (e.g., `www-data`) has write access to the `storage/` and `bootstrap/cache/` directories.
```bash
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache
```
