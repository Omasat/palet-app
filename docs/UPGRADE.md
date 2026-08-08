# Upgrade Guide

When upgrading Palet App to a newer version, follow these general steps:

1. **Backup**: Always backup your database and files, particularly the `.env` file and `storage/` directory.
2. **Maintenance Mode**: (If implemented) Put the application into maintenance mode.
3. **Pull Changes**: Download the latest release or run `git pull origin main`.
4. **Update Dependencies**: Run `composer update --no-dev --optimize-autoloader`.
5. **Run Migrations**: Run `php palet migrate` to apply any new database schema changes.
6. **Clear Caches**: Run `php palet cache:clear` and `php palet optimize` to refresh all cached configurations and routes.
7. **Review Changelog**: Check the `CHANGELOG.md` for any manual changes required in your `.env` or config files.
