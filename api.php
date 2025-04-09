<?php
// db.php - Contains the reusable function to fetch data from a CMS API with predefined headers

function fetchData($pathname) {
    // Predefined headers including the API-key and Content-Type
    $headers = [
        'API-key: API-9d749ad0c2d36f09a6078cf4732f4695688084cc',  // API key header
        'Content-Type: application/json'  // Content-Type header (for JSON data)
    ];

    $baseUrl = 'https://cms.rajinout.co.in/api'; 

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $baseUrl . $pathname);           // Set the API URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    // Return the response as a string
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);    // Follow any redirects
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);    // Set the headers

    // Execute the cURL request and capture the response
    $response = curl_exec($ch);

    // Check if any error occurred during the request
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
        return [];
    }

    // Close the cURL session
    curl_close($ch);

    // Decode the JSON response into an associative array
    $data = json_decode($response, true);

    // Check if decoding was successful
    if ($data === null) {
        echo "Error decoding JSON data.";
        return [];
    }

    return $data;
}

function sendData($pathname, $payload) {
    // Predefined headers including the API-key and Content-Type
    $headers = [
        'API-key: API-9d749ad0c2d36f09a6078cf4732f4695688084cc',  // API key header
        'Content-Type: application/json'  // Content-Type header (for JSON data)
    ];

    $baseUrl = 'https://cms.rajinout.co.in/api'; 

    $jsonPayload = json_encode($payload);
    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $baseUrl . $pathname);           // Set the API URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    // Return the response as a string
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);    // Follow any redirects
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);    // Set the headers

    // Add POST specific options
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
    // Execute the cURL request and capture the response
    $response = curl_exec($ch);

    // Check if any error occurred during the request
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
        return [
            'success' => false,
            'error' => curl_error($ch)
        ];
    }

    // Close the cURL session
    curl_close($ch);

    // Decode the JSON response into an associative array
    $data = json_decode($response, true);

    // Check if decoding was successful
    if ($data === null) {
        echo "Error decoding JSON data.";
        return [
            'success' => false,
            'error' => "Error decoding JSON data."
        ];
    }

    return $data;
}

?>
