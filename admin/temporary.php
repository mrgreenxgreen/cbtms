<?php
session_start();
if(!isset($_SESSION['sessionAdminUsername'])) {
	header('Location: login.php');
}
include_once("connection.php");

//getting id from url
$id = $_GET['id'];

$Approved = "APPROVED";
$SQL = "UPDATE requests SET  request_status = '$Approved' WHERE request_id = '$id'";

$result = mysqli_query($mysqli, $SQL);

header('location:requests.php');


?>



