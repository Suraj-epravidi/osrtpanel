<?php
// Database connection
$servername = "localhost";
$username = "karnalio_admin"; 
$password = "NATRqydFf-EX"; 
$dbname = "karnalio_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id = $_POST['id'];

// Get the thumbnail path from the database
$sql = "SELECT thumbnail FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$thumbnail = $row['thumbnail'];
$stmt->close();

// Delete product record from database
$sql = "DELETE FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    // Delete image file from server
    if (file_exists($thumbnail)) {
        unlink($thumbnail);
    }
    echo "Product deleted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
