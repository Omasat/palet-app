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

if (!function_exists('view')) {
    /**
     * Get the evaluated view contents for the given view.
     */
    function view(?string $view = null, array $data = [])
    {
        $app = \Palet\Framework\Foundation\Application::getInstance();
        
        $factory = $app->make(\Palet\Framework\Contracts\View\ViewFactoryInterface::class);

        if (func_num_args() === 0) {
            return $factory;
        }

        return $factory->make($view, $data);
    }
}
