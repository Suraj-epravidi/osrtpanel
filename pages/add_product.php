<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: ./sign-up.php");
  exit();
}
$page = isset($_GET['page']) ? (int) $_GET('page') : 1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form inputs
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $product_code = $_POST['product_code'];
    $color = $_POST['color'];
    $brand = $_POST['brand'];
    $material = $_POST['material'];
    $dimensions = $_POST['dimensions'];
    $category = $_POST['category'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    
    // File upload handling
    $target_dir = "./product_image/";
    $imageFileType = strtolower(pathinfo($_FILES["product_image"]["name"], PATHINFO_EXTENSION));
    
    // Create the new file name
    $new_file_name = $product_code . "_" . $brand . "." . $imageFileType;
    $target_file = $target_dir . $new_file_name;
    $uploadOk = 1;
    // Check if the file is an actual image
    $check = getimagesize($_FILES["product_image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (optional: limit to 2MB)
    if ($_FILES["product_image"]["size"] > 2000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is okay, try to upload the file
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
            // Connect to the database
            $conn = new mysqli("192.250.235.20", "epravidi_osrt_data", "UQ!r.gTOz=oo", "epravidi_osrt");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare SQL query to insert the product data
            $sql = "INSERT INTO products (product_name, description, product_code, color, brand, material, dimensions, category, stock, price, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssssdds", $product_name, $description, $product_code, $color, $brand, $material, $dimensions, $category, $stock, $price, $new_file_name);

            if ($stmt->execute()) {
               header("Location: https://osrtpanel.epravidi.com/pages/products.php?page_no".$page);

            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement and connection
            $stmt->close();
            $conn->close();

            // Redirect back to the page
            exit();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
