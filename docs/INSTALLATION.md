# ?? Installation Guide

This guide covers the process of installing the Palet Framework Application Skeleton.

## ??? Requirements

Before you begin, ensure your server meets the following requirements:
- **PHP** `>= 8.3`
- **Composer** (Latest version)
- **Database** (MySQL 8+, PostgreSQL 12+, or SQLite 3)
- **Web Server** (Apache, Nginx, or Laragon) with `public/` as the document root

---

## ?? Creating a New Project

The official and recommended way to install a new Palet application is via Composer. This ensures you get the latest stable skeleton and framework dependencies.

Run the following command in your terminal:

```bash
composer create-project omasat/palet-skeleton my-app
```

### What happens behind the scenes?
1. Composer downloads the `palet-skeleton` into the `my-app` directory.
2. It fetches the latest stable release of `omasat/palet-framework` (`v1.0.0+`).
3. The `.env` file is automatically created from `.env.example`.
4. The `php palet install` command runs automatically to guide you through database configuration and generate a secure `APP_KEY`.

---

## ?? Local Development

Once the installation is complete, navigate to your project directory:

```bash
cd my-app
```

Start the built-in development server:

```bash
php palet serve
```

You can now access your application at: **http://localhost:8000**

> **Note:** If you are using Laragon, XAMPP, or Valet, you can skip `php palet serve` and access your project via your local domain (e.g., `http://my-app.test`).

---

## ?? Manual Installation (Advanced)

If you prefer to clone the repository manually instead of using `create-project`:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Omasat/palet-app.git my-app
   cd my-app
   ```
2. **Install dependencies:**
   ```bash
   composer install
   ```
3. **Run the installer:**
   ```bash
   php palet install
   ```

*(The installer will copy the `.env` file and generate the encryption key for you).*

