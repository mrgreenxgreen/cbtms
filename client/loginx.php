<?php
session_start();
include_once('connection.php');

if(isset($_POST['Submit'])){
    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);

    if(empty($username) || empty($password)){
        echo "empty username or password";
    } else {
       
        $result = mysqli_query($mysqli, "SELECT * FROM client_users WHERE client_user_name='$username' and client_user_password='$password'")
        or die("Could not execute the select query.");

        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
            echo $row['client_user_name'];  
            $sessionUsername = $row['client_user_name'];
            $sessionUserId = $row['client_user_id'];
            $sessionBrgy = $row['client_brgy'];
            $sessionNumber = $row['client_phone_number'];
            $sessionStatus = $row['client_status'];
            $_SESSION['sessionUsername']  = $sessionUsername;
            $_SESSION['sessionId'] = $sessionUserId;
            $_SESSION['client_brgy'] = $sessionBrgy;
            $_SESSION['sessionNumber'] = $sessionNumber;
            $_SESSION['account_status'] = $sessionStatus;
            header('Location:transaction.php');
        } else{
            echo "invalid user or password";
                    
        }

        if(isset($_SESSION['sessionUsername']) ){
          
            }
    }
}
?>