<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: ./sign-up.php");
  exit();
}
?>
<?php
// Check if the review_id was passed via POST
if (isset($_POST['review_id'])) {
    $review_id = $_POST['review_id'];

    // Database connection
    function connectToDatabase() {
        $servername = "192.250.235.20";
        $username = "epravidi_osrt_data";
        $password = "UQ!r.gTOz=oo";
        $dbname = "epravidi_osrt";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    // Function to delete a review from the database
    function deleteReview($conn, $review_id) {
        $sql = "DELETE FROM reviews WHERE product_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $review_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Main logic to delete the review
    $conn = connectToDatabase();
    if (deleteReview($conn, $review_id)) {
        // If deletion is successful, redirect to the reviews page
        header("Location: review.php?message=Review+deleted+successfully");
    } else {
        // If deletion fails, redirect with an error message
        header("Location: review.php?message=Failed+to+delete+review");
    }

    $conn->close();
} else {
    // If review_id is not set, redirect back to reviews page
    header("Location: review.php?message=No+review+ID+provided");
}
