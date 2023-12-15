<?php session_start(); ?>

<?php
    if(!isset($_SESSION['valid'])) {
        header('Location: login.php');
    }
?>

<?php
    //including the database connection file
    include("connection.php");

    $id = $_GET['id'];
    $cid = $_SESSION['sessionId'];

    //deleting the row from table
    $result=mysqli_query($mysqli, "DELETE FROM transaction_checkout WHERE transaction_checkout_id=$id and client_id = $cid");


    //redirecting to the display page (view.php in our case)
    header("Location:transaction.php");
?>

