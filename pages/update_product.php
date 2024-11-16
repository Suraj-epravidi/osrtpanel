<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: ./sign-up.php");
  exit();
}
?>
<?php
    $conn = new mysqli("192.250.235.20", "epravidi_osrt_data", "UQ!r.gTOz=oo", "epravidi_osrt");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form inputs
        $productId = $_POST['product_id'];
        $productName = $_POST['product_name'];
        $description = $_POST['description'];
        $productCode = $_POST['product_code'];
        $color = $_POST['color'];
        $brand = $_POST['brand'];
        $material = $_POST['material'];
        $dimensions = $_POST['dimensions'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $sqlSelect = "SELECT image FROM products WHERE product_id = ?";
    $stmtSelect = $conn->prepare($sqlSelect);
    $stmtSelect->bind_param("i", $productId); // Assuming productId is an integer
    $stmtSelect->execute();
    $stmtSelect->bind_result($oldImageName);
    $stmtSelect->fetch();
    $stmtSelect->close();

    // If no image is found, set the old image name to an empty string
    if (!$oldImageName) {
        $oldImageName = "";
    }

    $newImageName = $oldImageName; // Default to the old image name

        // Check if a new image is uploaded
        if (!empty($_FILES['new_image']['name'])) {
            $imageDir = './product_image/';
            
            // Delete the old image if it exists
            if (!empty($oldImageName) && file_exists($imageDir . $oldImageName)) {
                unlink($imageDir . $oldImageName);
            }
    
            // Get the uploaded file info
            $imageTmpName = $_FILES['new_image']['tmp_name'];
            $imageExtension = pathinfo($_FILES['new_image']['name'], PATHINFO_EXTENSION);
            $newImageName = $product_code . "_" . $brand . "." . $imageExtension; // Rename the new image
            
            // Move the uploaded file to the server
            move_uploaded_file($imageTmpName, $imageDir . $newImageName);
        }
    
        // Update the product in the database
        $sql = "UPDATE products SET 
                    product_name = ?, 
                    description = ?, 
                    product_code = ?, 
                    color = ?, 
                    brand = ?, 
                    material = ?,  
                    category = ?, 
                    price = ?, 
                    stock=?,
                    image = ?,
                    dimensions = ?
                WHERE product_id = ?";
    
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssssi", 
                          $productName, 
                          $description, 
                          $productCode, 
                          $color, 
                          $brand, 
                          $material,  
                          $category, 
                          $price, 
                          $stock,
                          $newImageName,
                          $dimensions, 
                          $productId);
        
        // Execute the statement
        if ($stmt->execute()) {
        header("Location:./products.php");
        } else {
            echo "Error updating product: " . $conn->error;
        }
    
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
 
    
?>
