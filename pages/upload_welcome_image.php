<?php
// Initialize a message variable
$message = '';

// Check if a file has been uploaded
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['product_image'])) {
    // Define the uploads directory
    $uploadDir = '../../osrt.epravidi.com/uploads/';

    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true); // Create the directory if it doesn't exist
    }

    // Set the desired filename for the uploaded image
    $uploadFile = $uploadDir . 'welcome-image.jpg';

    // Check for upload errors
    if ($_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
        // Restrict the file type to only JPG
        $fileType = pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);
        if (strtolower($fileType) !== 'jpg') {
            $message = "Only JPG files are allowed.";
        } else {
            // Move the uploaded file to the uploads directory with the specified name
            if (move_uploaded_file($_FILES['product_image']['tmp_name'], $uploadFile)) {
                $message = "The image has been successfully uploaded!";
            } else {
                $message = "Failed to upload the image.";
            }
        }
    } else {
        // Handle specific file upload errors
        switch ($_FILES['product_image']['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $message = "The uploaded file exceeds the maximum size limit.";
                break;
            case UPLOAD_ERR_PARTIAL:
                $message = "The file was only partially uploaded.";
                break;
            case UPLOAD_ERR_NO_FILE:
                $message = "No file was uploaded.";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $message = "Missing temporary folder.";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $message = "Failed to write file to disk.";
                break;
            case UPLOAD_ERR_EXTENSION:
                $message = "File upload stopped by a PHP extension.";
                break;
            default:
                $message = "Unknown upload error.";
                break;
        }
    }
} else {
    $message = "No image file was submitted.";
}

// Redirect back to index.php with the message in the query string
header("Location: ../index.php?message=" . urlencode($message));
exit();
?>
