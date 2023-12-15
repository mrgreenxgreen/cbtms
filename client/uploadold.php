<?php

if (isset($_FILES['image'])) {
  $errors = array();

  $fileName = $_FILES['image']['name'];
  $fileTmpName = $_FILES['image']['tmp_name'];
  $fileSize = $_FILES['image']['size'];
  $fileError = $_FILES['image']['error'];
  $fileType = $_FILES['image']['type'];

  $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  $allowedExts = array('jpg', 'jpeg', 'png');

  if ($fileError !== 0) {
    $errors[] = 'An error occurred during file upload.';
  }

  if (!in_array($fileExt, $allowedExts)) {
    $errors[] = 'Invalid file format. Only JPG, JPEG, and PNG files are allowed.';
  }

  if ($fileSize > 5242880) {
    $errors[] = 'File size exceeds the maximum limit of 5MB.';
  }

  if (empty($errors)) {
    // Generate a unique file name to avoid conflicts
    $newFileName = uniqid() . '.' . $fileExt;

    // Convert the image file to LONGBLOB format
    $imageContent = file_get_contents($fileTmpName);
    $imageContentBLOB = base64_encode($imageContent);

    // Connect to the database
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "cbt";

    // Create connection
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Insert image file data into the database
    $sql = "INSERT INTO images (filename, filedata) VALUES ('$fileName', '$imageContentBLOB')";

    if ($conn->query($sql) === TRUE) {
      echo 'Image uploaded and saved in the database successfully.';
    } else {
      echo 'Error saving image file data to the database: ' . $conn->error;
    }

    $conn->close();
  } else {
    foreach ($errors as $error) {
      echo $error . '<br>';
    }
  }
}

