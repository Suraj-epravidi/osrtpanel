<?php
// Database connection
$servername = "localhost";
$username = "karnalio_admin"; // replace with your database username
$password = "NATRqydFf-EX"; // replace with your database password
$dbname = "karnalio_data"; // replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch form data
$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$description = $_POST['description']; // Fixed variable assignment
$subHeading = $_POST['SubHeading']; // Fixed variable assignment

// Replace spaces with underscores in the name for the filename
$sanitized_name = str_replace(' ', '_', strtolower($name));

// Handle file upload
$target_dir = "../product/images/";
$imageFileType = strtolower(pathinfo($_FILES["thumbnail"]["name"], PATHINFO_EXTENSION));
$target_file = $target_dir . $sanitized_name . "_thumbnail." . $imageFileType;

if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
    // Insert product data into database
    $sql = "INSERT INTO products (name, price, stock, description, thumbnail, subHeading) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisss", $name, $price, $stock, $description, $target_file, $subHeading);

    if ($stmt->execute()) {
        header("Location: ../product/products.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Failed to upload file.";
}

$conn->close();
?>
