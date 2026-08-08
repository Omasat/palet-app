# ?? Configuration Guide

All configuration files for the Palet Framework are stored in the `config/` directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.

---

## ?? Environment Configuration

It is often helpful to have different configuration values based on the environment where the application is running. For example, you may wish to use a different database locally than you do on your production server.

To make this a breeze, Palet utilizes the `.env` file at the root of your project.

### The `.env` File
When you install Palet, a `.env.example` file is automatically copied to `.env`. This file contains the most common configuration options:

```ini
APP_NAME="Palet Application"
APP_ENV=local
APP_KEY=base64:YOUR_SECRET_KEY_HERE
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=palet
DB_USERNAME=root
DB_PASSWORD=
```

> **Security Warning:** Your `.env` file should **never** be committed to your application's source control, since each developer / server using your application could require a different environment configuration.

---

## ?? Application Key (`APP_KEY`)

The next thing you should do after installing Palet is set your application key to a random string. If you used `composer create-project` or `php palet install`, this key has already been set for you!

This key is used by the encrypter and cookie security. If the application key is not set, your user sessions and other encrypted data will not be secure!

---

## ?? Debug Mode (`APP_DEBUG`)

The `APP_DEBUG` option in your `.env` file determines how much information about an error is actually displayed to the user.

- **Local Environment:** Set to `true` (You will see beautiful Whoops error pages).
- **Production Environment:** Set to `false` (Users will see a generic "500 Server Error" page).

> **Critical:** Always set `APP_DEBUG=false` in your production environment to prevent sensitive configuration details from being exposed to end users.

