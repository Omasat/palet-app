# Palet App Installation Guide

Palet App provides two convenient ways to install the application: via Command Line Interface (CLI) or through the Web Installer.

## Requirements
- PHP >= 8.2
- Extensions: `pdo`, `mbstring`, `openssl`, `curl`
- Composer (for dependency management)
- A web server (Apache, Nginx, or Laragon)

## Option 1: CLI Installation (Recommended)
1. Run `composer install` to install dependencies.
2. Run `php palet install`. The interactive wizard will:
   - Check system requirements
   - Verify directory permissions
   - Create and configure your `.env` file
   - Generate an application key
   - Create storage directories
   - Run database migrations (if configured)
3. Start the development server: `php palet serve`.

## Option 2: Web Installation
1. Run `composer install` (or upload the pre-built release zip if you don't have Composer on your server).
2. Point your web server's document root to the `public/` directory.
3. Access your domain in a browser: `http://your-domain.com/install`.
4. Follow the on-screen instructions to set up your database and admin credentials.
5. Upon successful installation, an `install.lock` file is created to secure the installer.
