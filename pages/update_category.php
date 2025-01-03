<?php
if (!isset($_COOKIE['osrt_login'])) {
  header("Location: ./sign-up.php");
  exit();
}
?>
<?php
    $conn = new mysqli("localhost", "osrtraders_epravidi", "UQ!r.gTOz=oo", "osrtraders_epravidi_osrt");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form inputs
        $productId = $_POST['category_id'];
        $productName = $_POST['category_name'];
        $sqlSelect = "SELECT category_image FROM categories WHERE ID = ?";
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
            $imageDir = '../pages/category/';
            
            // Delete the old image if it exists
            if (!empty($oldImageName) && file_exists($imageDir . $oldImageName)) {
                unlink($imageDir . $oldImageName);
            }
    
            // Get the uploaded file info
            $imageTmpName = $_FILES['new_image']['tmp_name'];
            $imageExtension = pathinfo($_FILES['new_image']['name'], PATHINFO_EXTENSION);
            $newImageName =  $productName . '.' . $imageExtension; // Rename the new image
            
            // Move the uploaded file to the server
            move_uploaded_file($imageTmpName, $imageDir . $newImageName);
        }
    
        // Update the product in the database
        $sql = "UPDATE categories SET 
                    category_name = ?, 
                    category_image = ? 
                WHERE ID = ?";
    
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", 
                          $productName, 
                          $newImageName, 
                          $productId);
        
        // Execute the statement
        if ($stmt->execute()) {
        header("Location:./category.php");
        } else {
            echo "Error updating product: " . $conn->error;
        }
    
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
 
    
?>
