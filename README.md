<p align="center">
  <h1 align="center">?? Palet Application Skeleton</h1>
  <p align="center">The official, enterprise-ready starter application for the Palet PHP Framework.</p>
</p>

<p align="center">
  <a href="https://packagist.org/packages/omasat/palet-skeleton"><img src="https://img.shields.io/packagist/v/omasat/palet-skeleton.svg?style=flat-square" alt="Latest Version on Packagist"></a>
  <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-%3E%3D%208.3-blue.svg?style=flat-square" alt="PHP Version"></a>
  <a href="https://github.com/Omasat/palet-app/actions"><img src="https://img.shields.io/github/actions/workflow/status/Omasat/palet-app/tests.yml?branch=main&style=flat-square" alt="Build Status"></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-success.svg?style=flat-square" alt="License"></a>
</p>

---

## ?? Introduction

**Palet Skeleton** is the official starting point for building powerful web applications with the Palet Framework. It provides a meticulously structured, modern MVC architecture right out of the box, featuring Tailwind CSS styling, advanced routing, robust error handling, and a dedicated CLI tool.

*Note: This repository contains the application skeleton. The core framework logic lives in the [palet-framework](https://github.com/Omasat/palet-framework) repository.*

## ?? Installation

To create a new Palet project, make sure you have PHP 8.3+ and [Composer](https://getcomposer.org/) installed, then run the following command in your terminal:

```bash
composer create-project omasat/palet-skeleton my-app
```

The installation wizard will automatically:
1. Download the latest stable version of the framework.
2. Generate your `.env` configuration file.
3. Automatically run `php palet install` to guide you through database setup and generate your secure `APP_KEY`.

## ??? Getting Started

Once your project is created, simply navigate to the directory and start the built-in development server:

```bash
cd my-app
php palet serve
```

Your application will now be accessible at `http://localhost:8000`.

## ?? Directory Structure

Palet embraces a clean and intuitive directory structure:

- `app/`: Your application core logic (Controllers, Models, Middleware, Providers).
- `bootstrap/`: Application bootstrapping and IoC Container initialization.
- `config/`: Centralized configuration files (Database, Mail, Cache, Security, etc.).
- `database/`: Database migrations, seeders, and model factories.
- `docs/`: In-depth documentation regarding deployment and architecture.
- `public/`: The web server document root (contains `index.php` and static assets like CSS/JS).
- `resources/`: Your view templates (`.php` files) and raw frontend assets.
- `routes/`: Route definitions for your application (`web.php`, `api.php`).
- `storage/`: Application generated files like cache, session data, and compiled views.
- `tests/`: Automated feature and integration tests powered by PHPUnit.

## ? Key Features

- **Built-in CLI (`palet`)**: Automate tasks like serving, migrating databases, and clearing caches.
- **Auto-CSRF Protection**: Form submissions are automatically protected against CSRF without manual token injection.
- **Whoops Error Handling**: Beautiful, modern error pages for a superior developer experience.
- **IoC Container**: Powerful dependency injection container out of the box.
- **RESTful Routing**: Intuitive and fast routing engine.
- **Cache-based Rate Limiting**: High-performance throttling for your APIs.

## ?? Documentation

For detailed deployment guides, configuration instructions, and security best practices, please explore the markdown files inside the `docs/` directory.

- [Configuration Guide](docs/CONFIGURATION.md)
- [Shared Hosting Deployment](docs/SHARED_HOSTING.md)
- [Directory Structure Overview](docs/DIRECTORY_STRUCTURE.md)

## ?? License

The Palet Framework and this application skeleton are open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
