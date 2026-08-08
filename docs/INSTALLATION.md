# Installation Guide

## Requirements

- PHP 8.2 or higher
- Composer
- Web server with `public/` as document root

## Setup

1. Clone the repository.
2. Run `composer install`.
3. Copy or generate `.env`:
   - `cp .env.example .env`
4. Run `php palet install`.
5. Start local server:
   - `php palet serve`

## Shared Hosting

- Upload all files except `.env` and `vendor/` can be uploaded after Composer install.
- Point the web root to the `public/` directory.
- Ensure `storage/` and `bootstrap/cache/` are writable by the web server.
