<?php
session_start();
if(!isset($_SESSION['sessionAdminUsername'])) {
	header('Location: login.php');
}
include_once("connection.php");



$Completed = "COMPLETED";
$Completed_Message = "";
$request_id = "";
if(isset($_POST["Submit_Completed"])) {
echo $_POST['Complete_Message'];
$Completed_Message = $_POST['Complete_Message'];
$request_id = $_POST['request_id'];

// $SQL = "UPDATE requests SET  request_status = '$Cancelled' WHERE request_id = '$id'";
$SQL = "UPDATE requests SET  request_status = '$Completed', request_comment='$Completed_Message' WHERE request_id = '$request_id'";

$result = mysqli_query($mysqli, $SQL);
//header('location:requests.php');
}



?>


