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

// ----------------------------------------------------
// 1. SAVE CONFIG FILE (your existing logic, unchanged)
// ----------------------------------------------------

$targetDir = __DIR__ . "/installation/configuration/";

if (!is_dir($targetDir)) {
    if (!mkdir($targetDir, 0775, true)) {
        http_response_code(500);
        echo "Failed to create configuration directory.";
        exit;
    }
}

$config = "";
foreach ($data as $key => $value) {
    $safeValue = str_replace(["\n", "\r"], "", $value);
    $config .= "$key=$safeValue\n";
}

$configFile = $targetDir . "config.cfg";

if (file_put_contents($configFile, $config) === false) {
    http_response_code(500);
    echo "Failed to write configuration file.";
    exit;
}

// ----------------------------------------------------
// 2. CREATE LICENSE FILE (new functionality)
// ----------------------------------------------------

// License directory
$licenseDir = __DIR__ . "/installation/license/";

if (!is_dir($licenseDir)) {
    mkdir($licenseDir, 0775, true);
}

// GUID generator
function generate_guid() {
    return strtoupper(
        sprintf(
            '%04X%04X-%04X-%04X-%04X-%04X%04X%04X',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        )
    );
}

$guid = generate_guid();
$today = date("Y-m-d");
$expiration = date("Y-m-d", strtotime("+1 year"));

// Build license content
$licenseContent =
    "id: $guid\n" .
    "users: " . $data['users'] . "\n" .
    "version: 25\n" .
    "date: $today\n" .
    "expiration: $expiration\n";

// Write license file
$licenseFile = $licenseDir . "license.fs25o";

if (file_put_contents($licenseFile, $licenseContent) === false) {
    http_response_code(500);
    echo "Failed to write license file.";
    exit;
}

// ----------------------------------------------------

echo "Configuration and license saved successfully.";
exit;
?>
