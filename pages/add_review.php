<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form inputs
    $product_id = $_POST['product_id'];
    $comments = $_POST['comments'];

    // Connect to the database
    $conn = new mysqli("192.250.235.20", "epravidi_osrt_data", "UQ!r.gTOz=oo", "epravidi_osrt");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the review into the database
    $sql = "INSERT INTO reviews (product_id, comments, created_at) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $product_id, $comments);

    if ($stmt->execute()) {
        echo "Review added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the page
    header("Location: review.php");
    exit();
}
?>
