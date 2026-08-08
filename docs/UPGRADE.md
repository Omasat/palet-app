# ?? Upgrade Guide

This guide details the process of upgrading your Palet application to newer versions of the framework.

Palet follows **Semantic Versioning** (`MAJOR.MINOR.PATCH`):
- **Major versions** (`2.0.0`) may contain breaking changes and require manual code updates.
- **Minor versions** (`1.1.0`) contain new features but are completely backwards compatible.
- **Patch versions** (`1.0.1`) contain only bug fixes.

---

## Upgrading Patch and Minor Versions

Because minor and patch versions are backwards compatible, you can upgrade them safely using Composer.

To pull in the latest minor/patch updates for your current major version, run:

```bash
composer update omasat/palet-framework
```

After updating, it is recommended to clear your application cache:

```bash
php palet cache:clear
```

## Upgrading Major Versions

*Currently, Palet is on version `1.x`. When version `2.x` is released, detailed step-by-step instructions for breaking changes will be provided here.*

When upgrading to a new major release, you will typically need to:

1. Update the version constraint in your `composer.json`:
   ```json
   "require": {
       "omasat/palet-framework": "^2.0"
   }
   ```
2. Run `composer update`.
3. Follow the specific breaking change mitigation steps provided in the release notes.

