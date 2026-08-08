<?php

declare(strict_types=1);

if (!function_exists('env')) {
    /**
     * Get an environment variable or return default.
     */
    function env(string $key, mixed $default = null): mixed
    {
        $value = getenv($key);

        if ($value === false) {
            return $default;
        }

        // Normalize boolean/empty values
        $lower = strtolower($value);
        if ($lower === 'true' || $lower === '(true)') {
            return true;
        }

        if ($lower === 'false' || $lower === '(false)') {
            return false;
        }

        if ($value === 'null' || $value === '(null)') {
            return null;
        }

        return $value;
    }
}
