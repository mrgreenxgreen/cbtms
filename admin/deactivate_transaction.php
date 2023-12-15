<?php

include_once("connection.php");

//getting id from url
$id = $_GET['id'];

// $Approved = "APPROVED";
$SQL = "UPDATE transactions SET active = 0 WHERE transaction_id = '$id'";

$result = mysqli_query($mysqli, $SQL);

header('location:transactions.php');


?>


