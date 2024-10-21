<?php
$conn = new mysqli("192.250.235.20", "epravidi_osrt_data", "UQ!r.gTOz=oo", "epravidi_osrt");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON input
$data = json_decode(file_get_contents("php://input"), true);
$productId = $data['product_id'];

// First, retrieve the image name from the database
$sql = "SELECT image FROM products WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $productId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageName = $row['image'];

    // Construct the full path to the image
    $imagePath = './product_image/' . $imageName;

    // Now, delete the product from the database
    $deleteSql = "DELETE FROM products WHERE product_id = ?";
    $deleteStmt = $conn->prepare($deleteSql);
    $deleteStmt->bind_param("i", $productId);

    // Execute the deletion statement
    if ($deleteStmt->execute()) {
        // If the product is deleted, check and delete the image file from the server
        if (file_exists($imagePath)) {
            unlink($imagePath); // Delete the image file
        }
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => $deleteStmt->error]);
    }

    // Close the delete statement
    $deleteStmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Product not found."]);
}

// Close the statements and connection
$stmt->close();
$conn->close();
?>
