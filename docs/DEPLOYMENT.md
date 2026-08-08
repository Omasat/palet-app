# ?? Deployment Guide

Deploying a Palet application is straightforward, but there are a few critical steps to ensure your application runs securely and efficiently in a production environment.

---

## 1. Server Requirements

Ensure your production server meets the framework requirements:
- PHP >= 8.3
- Composer
- Web Server (Nginx or Apache)
- Database Server (MySQL, PostgreSQL, etc.)

## 2. Directory Permissions

The web server needs write access to certain directories to store cache files, logs, and sessions. Ensure the following directories are writable by your web server user (e.g., `www-data` or `nginx`):

```bash
chmod -R 775 storage/
chmod -R 775 bootstrap/cache/
```

## 3. Environment Configuration

Copy your `.env.example` to `.env` on your production server. **Do not** copy your local `.env` file!

### Crucial Production Settings:
- `APP_ENV=production` (Enables caching and optimizations)
- `APP_DEBUG=false` (Hides sensitive error details from users)
- `APP_URL=https://yourdomain.com` (Used for generating absolute URLs)

## 4. Install Dependencies

Install your Composer dependencies without development packages:

```bash
composer install --optimize-autoloader --no-dev
```

## 5. Web Server Configuration

You must configure your web server to route all requests through the `public/index.php` file. 

### Nginx Example:
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/your/app/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Never expose the root directory of your Palet application to the web. Always point the document root strictly to the `public/` directory!

