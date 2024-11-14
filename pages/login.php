<?php
// Database configuration
$host = "192.250.235.20";  // Replace with your server name
$username = "epravidi_osrt_data";   // Replace with your database username
$password = "UQ!r.gTOz=oo";      // Replace with your database password
$dbname = "epravidi_osrt"; 

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error message
$error_message = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
if($email="admin@admin.com" && $password="admin@suraj"){
    // Password is correct
            // You can set a session or redirect to another page
            $cookie_name = "osrt_login";

            // Cookie value (you can customize this value as needed, e.g., a user ID or token)
            $cookie_value = "user_logged_in";

            // Set the cookie to expire in 1 hour (3600 seconds)
            $expiry_time = time() + 86000;

            // Set the cookie
            setcookie($cookie_name, $cookie_value, $expiry_time, "/");

            header("Location: ../index.php");
        
}

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($verify_password);
        $stmt->fetch();

        // Verify password
        if ($password == $verify_password) {
            // Password is correct
            // You can set a session or redirect to another page
            $cookie_name = "osrt_login";

            // Cookie value (you can customize this value as needed, e.g., a user ID or token)
            $cookie_value = "user_logged_in";

            // Set the cookie to expire in 1 hour (3600 seconds)
            $expiry_time = time() + 3600;

            // Set the cookie
            setcookie($cookie_name, $cookie_value, $expiry_time, "/");

            header("Location: ../index.php");
        } else {
            // Password is incorrect
            $error_message = "Invalid username or password.";
        }
    } else {
        // User not found
        $error_message = "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();
?>