<?php
// save_config.php

header("Content-Type: text/plain");

// Read raw POST body
$json = file_get_contents("php://input");
$data = json_decode($json, true);

// Validate JSON
if (!$data) {
    http_response_code(400);
    echo "Invalid JSON received.";
    exit;
}

// Required fields
$required = [
    "webserver",
    "database",
    "users",
    "license_type",
    "db_ip",
    "db_port",
    "db_user",
    "db_pass"
];

foreach ($required as $field) {
    if (!isset($data[$field]) || $data[$field] === "") {
        http_response_code(400);
        echo "Missing required field: $field";
        exit;
    }
}

// Target directory
$targetDir = __DIR__ . "/installation/configuration/";

// Create directory if missing
if (!is_dir($targetDir)) {
    if (!mkdir($targetDir, 0775, true)) {
        http_response_code(500);
        echo "Failed to create configuration directory.";
        exit;
    }
}

// Build config file content
$config = "";
foreach ($data as $key => $value) {
    $safeValue = str_replace(["\n", "\r"], "", $value); // sanitize
    $config .= "$key=$safeValue\n";
}

// Write file
$configFile = $targetDir . "config.cfg";

if (file_put_contents($configFile, $config) === false) {
    http_response_code(500);
    echo "Failed to write configuration file.";
    exit;
}

echo "Configuration saved successfully.";
exit;
?>
