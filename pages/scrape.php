<?php
// Database connection
$servername = "localhost";
$username = "osrtraders_epravidi";
$password = "UQ!r.gTOz=oo";
$dbname = "osrtraders_epravidi_osrt";

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

// Function to save the image locally
function saveImageLocally($image_url, $local_directory) {
    $image_data = file_get_contents($image_url);
    $file_name = basename($image_url); // Only the filename

    if ($image_data !== false) {
        file_put_contents($local_directory . $file_name, $image_data);
        return $file_name; // Return the file name instead of path
    }
    return false;
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
                // Save the image locally
                $image_url = "http://37.27.0.247:5000" . $response['response']['image_url'];
                $local_image_filename = saveImageLocally($image_url, '../pages/product_image/');

                if ($local_image_filename) {
                    // Update database with the local image filename
                    $updateQuery = "UPDATE products SET image = '$local_image_filename' WHERE product_code = '{$row['product_code']}'";
                    $conn->query($updateQuery);
                    echo "Image successfully fetched and saved for product: " . $row['product_name'] . "<br>";
                } else {
                    echo "Error saving image for product: " . $row['product_name'] . "<br>";
                }
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
            // Save the image locally
            $image_url = "http://37.27.0.247:5000" . $response['response']['image_url'];
            $local_image_filename = saveImageLocally($image_url, '../pages/product_image/');

            if ($local_image_filename) {
                // Update database with the local image filename
                $updateQuery = "UPDATE products SET image = '$local_image_filename' WHERE product_code = '{$row['product_code']}'";
                $conn->query($updateQuery);
                echo "Image successfully generated and saved for product: " . $row['product_name'] . "<br>";
            } else {
                echo "Error saving image for product: " . $row['product_name'] . "<br>";
            }
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
    $query = "SELECT product_name, product_code, brand FROM products LIMIT 10";
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

// Redirect to products.php after completion
$conn->close();
header("Location: products.php");
exit;

?>
