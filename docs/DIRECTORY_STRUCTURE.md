# Directory Structure

An overview of the Palet App directory structure:

- `app/`: Contains the core application code (Controllers, Models, Middleware).
- `bootstrap/`: Contains the application bootstrap scripts and cached files (`bootstrap/cache/`).
- `config/`: Application configuration files.
- `database/`: Database migrations, factories, and seeders.
- `public/`: The document root. Contains `index.php` and front-end assets (CSS, JS, images).
- `resources/`: Uncompiled assets, views (HTML/PHP templates), and language files.
- `routes/`: Contains all route definitions (`web.php`, `api.php`).
- `storage/`: Contains compiled views, logs, file caches, and user-uploaded files (`storage/app/public/`).
- `tests/`: Automated tests (Unit, Feature, Integration).
- `vendor/`: Composer dependencies (Do not edit these files).
