<?php

session_start();
include_once('connection.php');

if(isset($_POST['SubmitAdminLogin'])){

    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
 
    if(empty($username) || empty($password)){

        echo "empty username or password";

    } else {

        $result = mysqli_query($mysqli, "SELECT * FROM admin_users WHERE admin_username='$username' and admin_password='$password'")
        or die("Could not execute the select query.");

        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
            
            echo $row['admin_username'];  
            $sessionUsername = $row['admin_username'];
            $sessionPassword = $row['admin_password'];
            $sessionUserId = $row['admin_id'];
            $sessionRole = $row['admin_role'];
            $sessionBrgy = $row['admin_brgy'];
            $_SESSION['sessionAdminUsername']  = $sessionUsername;
            $_SESSION['sessionAdminId'] = $sessionUserId;
            $_SESSION['sessionAdminRole'] = $sessionRole;
            $_SESSION['sessionAdminBrgy'] = $sessionBrgy;
            $_SESSION['sessionAdminPassword'] = $sessionPassword;
            header('Location:index.php');

        } else{

            echo "invalid user or password";

        }


        if(isset($_SESSION['sessionUsername']) ){
          
            }
    }
}
?>

   