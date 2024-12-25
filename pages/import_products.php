<?php
if (isset($_POST['import'])) {
    // Database connection
    $servername = "192.250.235.20";
    $username = "epravidi_osrt_data";
    $password = "UQ!r.gTOz=oo";
    $dbname = "epravidi_osrt";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Check if a file is uploaded
    if (isset($_FILES['excel']['tmp_name']) && $_FILES['excel']['tmp_name'] !== '') {
        $file = $_FILES['excel']['tmp_name'];
        
        // Open the file in read mode
        if (($handle = fopen($file, "r")) !== false) {
            // Skip the first row if it contains headers
            $isFirstRow = true;
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                if ($isFirstRow) {
                    $isFirstRow = false;
                    continue; 
                }

                // Extract data from each row (adjust indices based on your CSV format)
                $product_id = $conn->real_escape_string($data[0]);
                $product_name = $conn->real_escape_string($data[1]);
                $description = $conn->real_escape_string($data[2]); 
                $product_code = $conn->real_escape_string($data[3]); 
                $color = $conn->real_escape_string($data[4]); 
                $brand = $conn->real_escape_string($data[5]); 
                $material = $conn->real_escape_string($data[6]); 
                $category = $conn->real_escape_string($data[7]); 
                $price = $conn->real_escape_string($data[8]); 
                $stock = $conn->real_escape_string($data[9]); 
                $dimensions = $conn->real_escape_string($data[10]); 
                

                // Insert data into the database
                $query = "INSERT INTO products (product_id, product_name, description, product_code, color, brand, material, category, price, stock, image, dimensions, created at) VALUES ('$product_id', '$product_name', '$description', '$product_code', '$color', '$brand', '$material', '$category', '$price', '$stock', NULL, '$dimensions', NOW())";


                if (!$conn->query($query)) {
                    echo "Error: " . $conn->error . "<br>";
                }
            }

            fclose($handle);
            echo "<script>alert('File imported successfully!');</script>";
        } else {
            echo "<script>alert('Failed to open the file.');</script>";
        }
    } else {
        echo "<script>alert('Please upload a file.');</script>";
    }
  }
    $conn->close();
?>