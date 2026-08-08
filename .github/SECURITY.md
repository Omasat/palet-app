# Security Policy

For security issues, please report them responsibly to the repository owner.

## Supported Versions

This starter kit is based on `paletphp/framework` and supports PHP 8.2+.

## Security Best Practices

- Keep `.env` out of source control.
- Do not expose `storage/`, `bootstrap/`, or `vendor/` contents publicly.
- Configure `public/` as the web server document root.
- Use secure cookie settings in production.
- Restrict CORS origins in `config/cors.php`.
