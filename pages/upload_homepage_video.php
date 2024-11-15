<?php
// Check if a file has been uploaded
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['product_image'])) {
    // Define the uploads directory
    $uploadDir = 'uploads/';
    
    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true); // Create the directory with proper permissions if it doesn't exist
    }

    // Set the desired filename for the uploaded video
    $uploadFile = $uploadDir . 'default-video.mp4';

    // Check for upload errors
    if ($_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
        // Restrict the file type to only MP4
        $fileType = pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);
        if (strtolower($fileType) !== 'mp4') {
            echo "Only MP4 files are allowed.";
            exit;
        }

        // Move the uploaded file to the uploads directory with the specified name
        if (move_uploaded_file($_FILES['product_image']['tmp_name'], $uploadFile)) {
            echo "The video has been successfully uploaded as default-video.mp4!";
        } else {
            echo "Failed to upload the video.";
        }
    } else {
        // Handle specific file upload errors
        switch ($_FILES['product_image']['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo "The uploaded file exceeds the maximum size limit.";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "The file was only partially uploaded.";
                break;
            case UPLOAD_ERR_NO_FILE:
                echo "No file was uploaded.";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo "Missing temporary folder.";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo "Failed to write file to disk.";
                break;
            case UPLOAD_ERR_EXTENSION:
                echo "File upload stopped by a PHP extension.";
                break;
            default:
                echo "Unknown upload error.";
                break;
        }
    }
} else {
    echo "No video file was submitted.";
}
?>
