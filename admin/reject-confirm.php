<?php
session_start();
if(!isset($_SESSION['sessionAdminUsername'])) {
	header('Location: login.php');
}
include_once("connection.php");





$Cancelled = "CANCELLED";
$Cancelled_Message = "";
$request_id = "";
if(isset($_POST["Submit_Cancelled"])) {
$Cancelled_Message = $_POST['Cancel_Message'];
$request_id = $_POST['request_id'];

// $SQL = "UPDATE requests SET  request_status = '$Cancelled' WHERE request_id = '$id'";
$SQL = "UPDATE requests SET  request_status = '$Cancelled', request_comment='$Cancelled_Message' WHERE request_id = '$request_id'";

$result = mysqli_query($mysqli, $SQL);
header('location:requests.php');
}



?>
