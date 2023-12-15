<?php
session_start();
if(!isset($_SESSION['sessionAdminUsername'])) {
	header('Location: login.php');
}
include_once("connection.php");

//getting id from url
$id = $_GET['id'];

$Approved = "APPROVED";
$Approved_Message = "";
$request_id = "";
if(isset($_POST["Submit_Approved"])) {
$Approved_Message = $_POST['Approved_Message'];
$request_id = $_POST['request_id'];

$SQL = "UPDATE requests SET  request_status = '$Approved', request_comment='$Approved_Message' WHERE request_id = '$request_id'";
$result = mysqli_query($mysqli, $SQL);
header('location:requests.php');
}








?>



