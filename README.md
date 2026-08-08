# Palet Application Skeleton

Official starter application skeleton for Palet Framework.

This repository is not the framework itself. It is a minimal, shared hosting-friendly starter kit built on `paletphp/framework` and intended as the base for new enterprise applications.

## Requirements

- PHP 8.2+
- Composer
- Web server with `public/` as document root

## Installation

1. `composer install`
2. `php palet install`
3. `php palet serve`

## Deployment

- Set `public/` as the web server document root.
- Ensure `storage/` and `bootstrap/cache/` are writable.
- Copy `.env.example` to `.env` if not already created.

## Project structure

- `app/` — application source code: controllers, models, middleware, providers.
- `bootstrap/` — bootstrapping and application initialization.
- `config/` — runtime configuration files.
- `public/` — public web entrypoint and web assets.
- `resources/` — views and static resources.
- `routes/` — route definitions for web and API.
- `storage/` — logs, cache, session storage.
- `tests/` — application tests (starter kit placeholder).

## Notes

- This skeleton is intentionally minimal, clean, and easy to extend.
- Framework internals live in `vendor/paletphp/framework` and must not be modified here.
- For shared hosting, keep `public/` as the only exposed directory.

## Docs

See `docs/` for installation and hosting guidance.
