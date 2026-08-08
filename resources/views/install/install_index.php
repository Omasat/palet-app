<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palet App - Installer</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background-color: #f3f4f6; color: #1f2937; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .container { background-color: white; padding: 2rem; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); width: 100%; max-width: 500px; }
        h1 { margin-top: 0; color: #111827; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; font-weight: bold; margin-bottom: 0.5rem; }
        input[type="text"], input[type="password"] { width: 100%; padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.25rem; box-sizing: border-box; }
        button { background-color: #3b82f6; color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 0.25rem; font-size: 1rem; cursor: pointer; width: 100%; }
        button:hover { background-color: #2563eb; }
        .error { background-color: #fee2e2; border-left: 4px solid #ef4444; color: #b91c1c; padding: 1rem; margin-bottom: 1rem; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Palet App Setup</h1>
        
        <?php if (isset($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST" action="/install">
            <div class="form-group">
                <label for="db_host">Database Host</label>
                <input type="text" id="db_host" name="db_host" value="127.0.0.1" required>
            </div>
            <div class="form-group">
                <label for="db_port">Database Port</label>
                <input type="text" id="db_port" name="db_port" value="3306" required>
            </div>
            <div class="form-group">
                <label for="db_name">Database Name</label>
                <input type="text" id="db_name" name="db_name" value="palet" required>
            </div>
            <div class="form-group">
                <label for="db_user">Database User</label>
                <input type="text" id="db_user" name="db_user" value="root" required>
            </div>
            <div class="form-group">
                <label for="db_pass">Database Password</label>
                <input type="password" id="db_pass" name="db_pass">
            </div>
            <button type="submit">Install Application</button>
        </form>
    </div>
</body>
</html>
