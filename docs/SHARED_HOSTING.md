# Shared Hosting Guide

## Required directories

- `public/` must be the only publicly accessible folder.
- `storage/` should be writable and kept outside the web root.
- `bootstrap/cache/` should be writable.

## Deployment Steps

1. Upload the repository to the server.
2. Set the web root to the `public/` folder.
3. Copy `.env.example` to `.env` on the server.
4. Ensure the following permissions are set:
   - `storage/` writable
   - `bootstrap/cache/` writable
   - `public/` readable

## Notes

- If Composer is unavailable on the server, upload the pre-installed `vendor/` directory from a local machine.
- Do not expose `bootstrap/`, `storage/`, or `vendor/` through the web server.
