<?php

require __DIR__ . '/vendor/autoload.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=palet', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage() . "\n");
}

echo "Creating users table...\n";

$sql = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
";

$pdo->exec($sql);
echo "Users table created successfully.\n";

echo "Creating default user...\n";

// Use framework's hasher
$hashedPassword = password_hash('password', PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
try {
    $stmt->execute([
        'name' => 'Admin User',
        'email' => 'admin@palet.test',
        'password' => $hashedPassword,
    ]);
    echo "Default user 'admin@palet.test' (password: 'password') created successfully.\n";
} catch (PDOException $e) {
    if ($e->getCode() == 23000) {
        // Integrity constraint violation (usually duplicate email)
        echo "Default user already exists.\n";
    } else {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

echo "Done.\n";
