<?php
session_start();
include_once('connection.php');

if(isset($_POST['RegisterSubmit'])){
    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $phoneNumber = mysqli_real_escape_string($mysqli,$_POST['phoneNumber']);
    $client_brgy = mysqli_real_escape_string($mysqli,$_POST['brgy']);
    $last_name  = mysqli_real_escape_string($mysqli,$_POST['lastname']);
    $first_name = mysqli_real_escape_string($mysqli,$_POST['firstname']);
    $middle_name = mysqli_real_escape_string($mysqli,$_POST['middlename']);
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);




    if(empty($username) || empty($password) || empty($phoneNumber)){
        echo "empty username or password or phone number";
    } else {
        $result = mysqli_query($mysqli, "INSERT INTO client_users(client_user_id,client_status,client_user_name, 
        client_user_password,client_phone_number,client_last_name, client_first_name, client_middle_name, client_brgy,  client_email,
        client_user_active )VALUES('','UNVERIFIED','$username','$password','$phoneNumber','$last_name','$first_name', '$middle_name','$client_brgy','$email',1)");
        
        echo "success!";
        echo "<a href=\"login.php\"> Proceed to login </a>";
    }
}
?>

