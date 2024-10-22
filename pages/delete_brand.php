<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: ./sign-up.php");
  exit();
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the brand name to delete
    $brand_name = $_POST['brand_name'];

    // Database connection
    $conn = new mysqli("192.250.235.20", "epravidi_osrt_data", "UQ!r.gTOz=oo", "epravidi_osrt");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL delete query
    $stmt = $conn->prepare("DELETE FROM brands WHERE brand_name = ?");
    $stmt->bind_param("s", $brand_name);

    if ($stmt->execute()) {
        // Redirect back to the page after deletion
        header("Location: brands.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
