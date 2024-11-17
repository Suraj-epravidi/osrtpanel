<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: ./sign-up.php");
  exit();
}
?>

<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the FAQ ID name to delete FAQ
    $faq_id = $_POST['review_id'];

   

        // Database connection function

        $conn = new mysqli("192.250.235.20", "epravidi_osrt_data", "UQ!r.gTOz=oo", "epravidi_osrt");

            // Check connection

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

        // Prepare the SQL statement to delete the FAQ
        $stmt = $conn->prepare("DELETE FROM faqs WHERE id = ?");
        $stmt->bind_param("i", $faq_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Success: redirect back to the FAQ page or show a success message
            header("Location: https://osrtpanel.epravidi.com/pages/faq.php");
        } else {
            // Failure: display an error message
            echo "Error: Could not delete the FAQ.";
        }

        // Close the statement and the connection
        $stmt->close();
        $conn->close();
   
    
} else {
    // If the request method is not POST
    echo "Invalid request method.";
}
?>

