<?php
// Database connection
$servername = "192.250.235.20";
$username = "epravidi_osrt_data";
$password = "UQ!r.gTOz=oo";
$dbname = "epravidi_osrt";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set headers to indicate file download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=contact_export.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Specify the table you want to export
$table = "contact_form";
$sql = "SELECT * FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Print table headers
    $columns = $result->fetch_fields();
    foreach ($columns as $col) {
        echo $col->name . "\t";
    }
    echo "\n";

    // Print each row
    while ($row = $result->fetch_assoc()) {
        echo implode("\t", $row) . "\n";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>
