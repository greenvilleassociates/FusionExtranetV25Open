<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    // Here you can add your logic to verify the username and password.
    // For demonstration purposes, we will just display them.

    echo "Username: " . htmlspecialchars($username) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
}
echo "<BR><BR><BR>";

// Replace these with the actual URL and any required headers for your API
$apiUrl = 'http://gridmanager.590team1.info/api/login';
$headers = [
    'Content-Type: application/json'
];

// Replace these with the username and password you want to check
//$username = 'testUser';
//$password = 'testPass';

// Create the data payload
$data = json_encode([
    'username' => $username,
    'password' => $password
]);

// Initialize cURL session
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the cURL session and fetch the response
$response = curl_exec($ch);

// Check for cURL errors
if(curl_errno($ch)) {
    echo 'Request Error: ' . curl_error($ch);
    exit;
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$responseData = json_decode($response, true);

// Check the response and handle login validation
if($responseData['success'] == true) {
    echo 'Login successful!';
} else {
    echo 'Login failed: ' . $responseData['message'];
}


echo "<BR><BR>Redirecting Now";
function redirectToIndex() 
{
    alert("Welcome to the Terrordome");
    window.open('../index.html','_self');
}


//phpinfo();

redirectToIndex();
?>