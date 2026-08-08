<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palet App - Error</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background-color: #f3f4f6; color: #1f2937; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .container { background-color: white; padding: 2rem; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); width: 100%; max-width: 500px; text-align: center; }
        h1 { margin-top: 0; color: #ef4444; }
        .error { background-color: #fee2e2; border-left: 4px solid #ef4444; color: #b91c1c; padding: 1rem; margin-bottom: 1.5rem; text-align: left; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Access Denied</h1>
        <div class="error">
            <?= htmlspecialchars($message ?? 'An unknown error occurred.') ?>
        </div>
        <a href="/" style="color: #3b82f6; text-decoration: none; font-weight: bold;">&larr; Return to Homepage</a>
    </div>
</body>
</html>
