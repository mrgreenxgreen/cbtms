<?php session_start();

include_once("connection.php");

$t_id = $_SESSION['sessionId'];





if(isset($_POST['TransactionSubmit'])){
    $trans_name = $_POST['tName'];
    $trans_price = $_POST['tPrice'];
    $client_id = $_POST['tId'];
    $transaction_max = 1;

    echo $trans_name;
    echo $client_id;

    $igwaNa = "wara";
   
    $result_added_trans = mysqli_query($mysqli, "SELECT * FROM transaction_checkout WHERE client_id = $t_id");
    while ($t_check = mysqli_fetch_array($result_added_trans)){

        if($client_id == $t_check['client_id'] && $trans_name == $t_check['transaction_name'] ){
            echo "May ugwa na";
            $igwaNa = "igwa";
        }
     
    }

    if($igwaNa == "igwa"){
        echo "<h1>igwa na gani </h1>";
    }
    else{
        echo "insert na";
  
            $trans_result = mysqli_query($mysqli, "INSERT INTO transaction_checkout(transaction_name,transaction_price,transaction_max, client_id, active) VALUES('$trans_name','$trans_price',$transaction_max,'$client_id',1)");
        
    }




    header("Location:transaction.php");


  
}