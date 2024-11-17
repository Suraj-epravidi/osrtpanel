<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: ./sign-up.php");
  exit();
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form inputs
    $category_name = $_POST['category_name'];

    // Image upload handling
 
    
    if (isset($_FILES['review_image']) && $_FILES['review_image']['error'] == 0) {
        $imageDir = '../pages/category/';

        // Get the uploaded file info
        $imageTmpName = $_FILES['new_image']['tmp_name'];
        $imageExtension = pathinfo($_FILES['new_image']['name'], PATHINFO_EXTENSION);
        $newImageName =  $category_name . '.' . $imageExtension; // Rename the new image
        
        // Move the uploaded file to the server
        // Move the uploaded file to the target directory
        if ( move_uploaded_file($imageTmpName, $imageDir . $newImageName)) {
            die("Sorry, there was an error uploading your file.");
        }
    }

    // Connect to the database
    $conn = new mysqli("192.250.235.20", "epravidi_osrt_data", "UQ!r.gTOz=oo", "epravidi_osrt");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query to insert the review
    $sql = "INSERT INTO categories (category_name, category_image) VALUES (?, ?)";
    
    // Assuming product_id is an integer in the database
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $category_name,$image_name); 

    if ($stmt->execute()) {
        header("Location: https://osrtpanel.epravidi.com/pages/category.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Redirect back to the page
    exit();
}
?>
