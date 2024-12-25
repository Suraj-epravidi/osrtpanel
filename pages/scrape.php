<?php
// Database connection
$servername = "192.250.235.20";
$username = "epravidi_osrt_data";
$password = "UQ!r.gTOz=oo";
$dbname = "epravidi_osrt";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to call the web scraper
function callWebScraper($endpoint, $data) {
    $url = "http://37.27.0.247:5000" . $endpoint;
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return [
        'http_code' => $httpCode,
        'response' => json_decode($response, true)
    ];
}

// AI Search Image
if (isset($_POST['ai_search_image'])) {
    $query = "SELECT product_name, product_code, brand FROM products WHERE image=\"\" LIMIT 10;";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data = [
                'product_name' => $row['product_name'],
                'product_code' => $row['product_code'],
                'product_brand' => $row['brand']
            ];

            $response = callWebScraper('/scrape-image', $data);

            if ($response['http_code'] == 404) {
                echo "Image not found for product: " . $row['product_name'] . "<br>";
            } elseif ($response['http_code'] == 200) {
                // Update database with the new image URL
                $image_url = $response['response']['image_url'];
                $updateQuery = "UPDATE products SET image = '$image_url' WHERE product_code = '{$row['product_code']}'";
                $conn->query($updateQuery);
                echo "Image successfully fetched for product: " . $row['product_name'] . "<br>";
            } else {
                echo "Error processing product: " . $row['product_name'] . "<br>";
            }
        }
    } else {
        echo "No products found with missing images.";
    }
}

// Generate All Images
if (isset($_POST['generate_all_images'])) {
    $query = "SELECT product_name, product_code, brand FROM products";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $data = [
            'product_name' => $row['product_name'],
            'product_code' => $row['product_code'],
            'product_brand' => $row['brand']
        ];

        $response = callWebScraper('/scrape-image', $data);

        if ($response['http_code'] == 200) {
            // Update database with the new image URL
            $image_url = $response['response']['image_url'];
            $updateQuery = "UPDATE products SET image = '$image_url' WHERE product_code = '{$row['product_code']}'";
            $conn->query($updateQuery);
            echo "Image successfully generated for product: " . $row['product_name'] . "<br>";
        } else {
            echo "Error generating image for product: " . $row['product_name'] . "<br>";
        }
    }
}

// AI Generate Description
if (isset($_POST['ai_generate_description'])) {
    $query = "SELECT product_name, product_code, brand FROM products WHERE description IS NULL";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data = [
                'product_name' => $row['product_name'],
                'product_code' => $row['product_code'],
                'product_brand' => $row['brand']
            ];

            $response = callWebScraper('/get-description', $data);

            if ($response['http_code'] == 404) {
                echo "Description not found for product: " . $row['product_name'] . "<br>";
            } elseif ($response['http_code'] == 200) {
                // Update database with the new description
                $description = $conn->real_escape_string($response['response']['description']);
                $updateQuery = "UPDATE products SET description = '$description' WHERE product_code = '{$row['product_code']}'";
                $conn->query($updateQuery);
                echo "Description successfully fetched for product: " . $row['product_name'] . "<br>";
            } else {
                echo "Error processing product: " . $row['product_name'] . "<br>";
            }
        }
    } else {
        echo "No products found with missing descriptions.";
    }
}

// Generate All Descriptions
if (isset($_POST['generate_all_descriptions'])) {
    $query = "SELECT product_name, product_code, brand FROM products";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $data = [
            'product_name' => $row['product_name'],
            'product_code' => $row['product_code'],
            'product_brand' => $row['brand']
        ];

        $response = callWebScraper('/get-description', $data);

        if ($response['http_code'] == 200) {
            // Update database with the new description
            $description = $conn->real_escape_string($response['response']['description']);
            $updateQuery = "UPDATE products SET description = '$description' WHERE product_code = '{$row['product_code']}'";
            $conn->query($updateQuery);
            echo "Description successfully generated for product: " . $row['product_name'] . "<br>";
        } else {
            echo "Error generating description for product: " . $row['product_name'] . "<br>";
        }
    }
}

$conn->close();
?>
