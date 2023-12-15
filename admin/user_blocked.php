<?php

include_once("connection.php");

//getting id from url
$id = $_GET['id'];

// $Approved = "APPROVED";
$SQL = "UPDATE client_users SET client_status = 'BLOCKED' WHERE client_user_id = '$id'";

$result = mysqli_query($mysqli, $SQL);

header('location:users_credentials.php');


?>
