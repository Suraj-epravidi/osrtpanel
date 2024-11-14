<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: ./sign-up.php");
  exit();
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form inputs
    $questions = $_POST['question'];
    $answers= $_POST['answer'];

    // Connect to the database
    $conn = new mysqli("192.250.235.20", "epravidi_osrt_data", "UQ!r.gTOz=oo", "epravidi_osrt");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query to insert the FAQs
    $sql = "INSERT INTO faqs (questions, answers) VALUES (?, ?)";
    
    // Assuming product_id is an integer in the database
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $questions, $answers); // "i" for integer product_id, "s" for strings comments and image_name

    if ($stmt->execute()) {
        header("Location: https://osrtpanel.epravidi.com/pages/faq.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close(); 

    // Redirect back to the page
    header("Location: faq.php");
    exit();
}
?>
