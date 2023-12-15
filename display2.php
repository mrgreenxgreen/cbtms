<?php
session_start();
$active_user_id = $_SESSION['sessionId'] ;

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cbt";

// Connect to the database
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// Get the image data from the database
$sql = "SELECT filedata FROM images WHERE  client_user_id = $active_user_id AND isActive = 1"; // Replace 1 with the ID of the image you want to display
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();

  
  $imageData = $row['filedata'];

  // Decode the image data from base64 format
  $imageContent = base64_decode($imageData);

  $imageSrc = $imageContent;
  $imageType = "";
  // Convert the image data to a format that can be displayed in an HTML tag
//   $imageType = mime_content_type($imageContent);
  $imageSrc = 'data:' . $imageType . ';base64,' . base64_encode($imageContent);

  // Display the image in an HTML tag
  echo '<img src="' . $imageSrc . '">';
} else {
  echo 'Image not found.';
}

$conn->close();

?>
