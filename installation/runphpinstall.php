<?php

// Path to the data directory and SQLite database
$dataDir = __DIR__ . "/data";
$dbFile  = $dataDir . "/fusionshellopen25.db";   // Updated DB name

// Ensure the data directory exists
if (!is_dir($dataDir)) {
    mkdir($dataDir, 0777, true);
}

// Create or open the SQLite database
try {
    $db = new SQLite3($dbFile);
} catch (Exception $e) {
    http_response_code(500);
    echo "Failed to create SQLite database: " . $e->getMessage();
    exit;
}

// Create a simple users table
$tableQuery = "
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL,
    created_at TEXT DEFAULT CURRENT_TIMESTAMP
);
";

if (!$db->exec($tableQuery)) {
    http_response_code(500);
    echo "Failed to create fusion configuration database.";
    exit;
}

$db->close();

echo "SQLite installation complete. Users table created successfully.";
?>
