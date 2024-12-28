<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: ./sign-up.php");
  exit();
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form inputs
    $product_id = $_POST['brandName'];
    $comments = $_POST['brandWebsite'];

    // Image upload handling
    $target_dir = "../pages/brands/";
    $image_name = null;
    
    if (isset($_FILES['review_image']) && $_FILES['review_image']['error'] == 0) {
        $image_name = basename($_FILES["review_image"]["name"]);
        $image_type = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $target_file = $target_dir . $image_name;
        
        // Check if the file is an actual image
        $check = getimagesize($_FILES["review_image"]["tmp_name"]);
        if ($check === false) {
            die("The uploaded file is not an image.");
        }

        // Check file size (e.g., limit to 5MB)
        if ($_FILES["review_image"]["size"] > 5000000) {
            die("Sorry, your file is too large.");
        }

        // Allow certain file formats
        $allowed_types = ["jpg", "jpeg", "png", "gif"];
        if (!in_array($image_type, $allowed_types)) {
            die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        }

        // Move the uploaded file to the target directory
        if (!move_uploaded_file($_FILES["review_image"]["tmp_name"], $target_file)) {
            die("Sorry, there was an error uploading your file.");
        }
    }

    // Connect to the database
    $conn = new mysqli("localhost", "osrtraders_epravidi", "UQ!r.gTOz=oo", "osrtraders_epravidi_osrt");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query to insert the review
    $sql = "INSERT INTO brands (brand_name, brand_website, brand_logo) VALUES (?, ?, ?)";
    
    // Assuming product_id is an integer in the database
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $product_id, $comments, $image_name); // "i" for integer product_id, "s" for strings comments and image_name

    if ($stmt->execute()) {
        header("Location: https://osrtpanel.epravidi.com/pages/brands.php");
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