# Configuration Guide

All configuration files are located in the `config/` directory. Each file returns an array of settings.

## Environment Variables
The `.env` file is used to specify environment-specific settings. Values here override the defaults in the `config/` files.

## Core Configuration Files
- `app.php`: Application timezone, locale, encryption settings.
- `database.php`: Database connection settings (MySQL, PostgreSQL, SQLite).
- `security.php`: Cookie settings, trusted proxies, security headers, rate limiting.
- `cache.php`: Cache driver settings (file, redis, memcached).
- `mail.php`: SMTP and mailing configurations.
- `cors.php`: Cross-Origin Resource Sharing settings for APIs.

## Caching Configurations
In production, you should cache your configurations to improve performance:
```bash
php palet config:clear
php palet optimize
```
