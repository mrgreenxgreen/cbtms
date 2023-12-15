<?php

session_start();
if (!isset($_SESSION['sessionId'])){
    header("Location:index.php");
}

include_once("connection.php");

//if(isset($_POST['SubmitCheckout'])){
    // $trans_name = $_POST['tName'];
    // $trans_price = $_POST['tPrice'];
    // $client_id = $_POST['tId'];
    

   // $trans_result = mysqli_query($mysqli, "INSERT INTO transaction_checkout(transaction_name,transaction_price, client_id) VALUES('$trans_name','$trans_price','$client_id')");

   //
    // $_POST["max_name"];
    // $_POST["max_price"];
    // $index ="";
    // $ctr= 0;
    // $ctr2 =0;

    // for ($ctr = 1000;$ctr <= $_POST["max_name"];$ctr++  ){
       
    //     echo "<h1> TRANSACTION TYPE: ".$_POST[$ctr]."</h1><br>";

    // }

    // for ($ctr2 = 100;$ctr2 <= $_POST["max_price"];$ctr2++  ){
       
    //     echo "<h1> PRICE: ".$_POST[$ctr2]."</h1>";

    // }

    // echo "<br><h1> TOTAL COST:".$_POST["total_cost"];
    // echo "<br>CLIENT NAME:".$_POST["client_name"]."</h1>";
    
    // echo "<button> <h1> CONFIRM </h1> </button> <br>
    //         <button> <h1> CANCEL </h1>";

//}
?>



<!DOCTYPE html>
<html>
    <head>
    <title> CBTMS</title>

<link rel="icon" type="image/x-icon" href="./assets/img/cbtms_logo.png">

        <link rel="stylesheet" href="./assets/css/heading.css" />
        <link rel="stylesheet" href="./assets/css/body.css" />
        <link rel="stylesheet" href="./assets/css/footer.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/all.min.css" />

        <script src="./assets/js/heading.js" ></script>

    </head>
    <body>
        <header>
           <!-- <div class="top">
                <div>
                    =
                </div>
                <div>
          
               </div>
            -->
            </div>
            <div class="hero">
         <h1 style="color: #00cc00;"><i class="fa-solid fa-bolt"></i> <span style="color:#3366cc;">Centralized </span> Barangay Transaction Management System</h1>
            <div style="display:flex;flex-direction:column;">
                  <div><i class="fa-brands fa-square-facebook" style="color:blue;"></i>facebook</div>
                  <div><i class="fa-brands fa-square-twitter" style="color:#3366cc;"></i>Twitter</div>
                  <div><i class="fa-brands fa-square-instagram"style="color:purple;"></i>Instagram</div>
                </div>
            </div>
            <nav>
                <div>
                    <a href="index.php">CBTMS</a>
                </div>  
                <div class="nav-menu">
                    <div>
                    <i class="fa-solid fa-house"></i>
                        <a href="index.php">Home</a>
                    </div>
                    <div>
                    <i class="fa-solid fa-book"></i>
                        <a href="about.php">About</a>
                    </div>
                   
                    <div>
                    <i class="fa-solid fa-cart-plus"></i>
                        <a href="transaction.php">Transaction</a>
                    </div>
                    <div>
                    <i class="fa-solid fa-book"></i>
                        <a href="brgy.php">Barangays</a>
                    </div>
                    <div>
                      <i class="fa-regular fa-newspaper"></i>
                       <a href="news.php"> News  </a>
                    </div>
                   
                    <div>
                    <i class="fa-solid fa-question"></i>
                        <a href="inquiry.php" >Inquiry </a>
                    </div>

                </div>
                <div class="nav-account">
                    
                 
                <?php
               
               if(isset($_SESSION['sessionUsername'])){
                echo '<div>
                               
                            <div class="dropdown">
                            <button 
                                onclick="myFunction()" 
                                class="dropbtn"
                                style=" background-color: white;
                                color: #333;
                                border-radius:2px;
                                padding: 5px;
                                font-size: 15px;
                                border: none;
                                cursor: pointer;
                                "
                            >'.$_SESSION['sessionUsername'].'  <i class="fa-solid fa-user"></i></button>
                            <div id="myDropdown" class="dropdown-content">
                            <a href="myaccount.php">View Profile</a>
                            <a href="#about">Manage Account</a>
                              <a href="#about">Help</a>
                              <a href="logout.php   ">Logout</a>
                            </div>
                            
                          </div>
                       
                         
                       
                </div>';
            }
          
          else{
              echo "<div><a href=\"register.php\"> Sign Up </a> <a href=\"#\">| </a><a href=\"login.php\">Sign In </a></div>
          ";
        
          }
          echo "  <i class=\"fa-solid fa-user\"></i>";

              
                ?>
                </div>
            </nav>
          
        </header>
        <main>
            <div style="color:white;"><h1>`</h1><h1>`</h1><h1>`</h1><h1>`</h1></div>
            <div class="checking-out-container">
                <div class="checking-out">
                    <div class="checking-out-title">
                        <h1>REVIEW REQUEST DETAILS </h1>
                    </div>
                    <div class="checking-out-body">
                        <form method="post" action="checkout-confirm.php">
                       
                              
                                <?php
                                    if(isset($_POST['SubmitCheckout'])){
                                        // $trans_name = $_POST['tName'];
                                        // $trans_price = $_POST['tPrice'];
                                        // $client_id = $_POST['tId'];
                                        

                                    // $trans_result = mysqli_query($mysqli, "INSERT INTO transaction_checkout(transaction_name,transaction_price, client_id) VALUES('$trans_name','$trans_price','$client_id')");

                                    //
                                        // $_POST["max_name"];
                                        // $_POST["max_price"];
                                        // $index ="";
                                        // $ctr= 0;
                                        // $ctr2 =0;
                                        echo "<small> <i>*Please double check your personal details below:*</i></small><br>";
                                        echo "<br><h2> Personal Details: </h2> <br>";
                                      
                                        $checkout_brgy = $_SESSION['client_brgy'];
                                        echo "<br><label>BARANGAY:</label>";
                                        echo "<input type=\" text\" name=\"CheckoutConfirmBrgy\"   value=\"".$checkout_brgy."\" readonly required> <br>";
                                        echo "<label>RESIDENT NAME:</label>";
                                        echo "<input type=\"text\" name=\"ConfirmClientName\" value=\"".$_POST["client_name"]."\" required/> <br>";
                                        echo "<label> MOBILE NUMBER </label>";
                                        echo "<input type=\"text\" name=\"ConfirmClientNumber\" value=\"".$_POST["client_number"]."\"  required/>";
                                  
                                        

                                        //REQUEST TYPE LOOP
                                        //storing the value of number of max requests from form where 1000 is the beginning
                                        $maxRequests = $_POST["max_name"];
                                        echo "<input type=\"hidden\" name=\"ConfirmMaxRequests\" value=\"".$maxRequests."\"  />" ;
                                       
                                       //TABLE FOR TRANSACTION AND FEE:
                                       echo "<br><br>";
                                        echo "<br><h2>Request/s: </h2>";
                               

                                        echo "<table> 
                                                <tr> 
                                                    <th> TRANSACTION</th>
                                                    <th> FEE </th>
                                                </tr>";
                                            //loop for transaction type
                                            //PRICE LOOP
                                        //storing the value of number of prices from form where 100 is the beginning
                                        $maxPrices = $_POST["max_price"];
                                        echo  "<input type=\"hidden\" name=\"ConfirmMaxPrices\" value=\"".$maxPrices."\" />";
                                        echo "<br><br>";
                                        $ctr2 = 100;
                                        for ($ctr = 1000;$ctr <= $_POST["max_name"];$ctr++  ){
                                        
                                            echo "
                                                <tr>
                                                    <td><input type=\"text\" name=\"".$ctr."\"value=\"".$_POST[$ctr]."\"  readonly/> </td>
                                               
                                                ";
                                    

                                        
                                        //for ($ctr2 = 100;$ctr2 <= $_POST["max_price"];$ctr2++  ){

                                            echo "
                                                    <td><input type=\"text\" name=\"".$ctr2."\" value=\" ".$_POST[$ctr2]."\"  readonly/>
                                                    
                                                    </td>
                                                    </tr>";
                                            $ctr2++;
                                        }
                                        echo "</table>";

                                        echo "<br> <label>PAYMENT METHOD: </label>";
                                        echo "<input type=\"text\" name=\"ConfirmPaymentMethod\" value=\"".$_POST["payment_method"]."\" readonly/>";
                                        echo "<br><h2> Total Amount: ";
                                        echo "<input type=\"text\" name=\"ConfirmTotalCost\" value=\"".$_POST["total_cost"]."\" readonly/> </h2>";
                                        echo "<div class=\"checking-out-options\"> 
                                                    <input type=\"submit\" name=\"SubmitCheckoutConfirm\" value=\"CONFIRM\" class=\"check-out-btn\" id=\"check-out-btn-confirm\" > 
                                                    <br>
                                                    <button class=\"check-out-btn\"> 
                                                        <a href=\"transaction.php\" style=\"text-decoration:none;color:black;\"> 
                                                            CANCEL 
                                                        </a>  
                                                </div>";

                                    }
                                ?>
                        
                        </form>
                    </div>  
                    
                    </div>
                </div> 
            </div>  
            <div style="color:white;"><h1>`</h1></div>

        </main>
        <footer>
        <div style="text-align:left;">
          Republic of the Philippines <br/>
          Region V - Bicol  <br/>
          Province of Masbate <br/>
           Municipality of Milagros <br/><br/>
           Contact:<br/><br/>
           +639458201903  <br/>
          milagrosmasbate@government.ph
        
        </div>
        
       
       
        <table style="text-align:left;">
          <tr>
            <td>Brgy. Bacolod</td>
            <td>Brgy. Bangad</td>
            <td>Brgy. Bara</td>
            <td>Brgy. Bonbon</td>
            <td>Brgy. Calasuche</td>
            <td>Brgy. Calumpang</td>
            <td>
          </tr>
          <tr>
            <td>Brgy. Capaculan</td>
            <td>Brgy. Cayabon</td>
            <td>Brgy. Guinluthangan</td>
            <td>Brgy. Jamorawon</td>
            <td>Brgy. Magsalangi</td>
            <td>Brgy. Matagbac</td>
            <td>
          </tr>
          <tr>
            <td>Brgy. Matanglad</td>
            <td>Brgy. Matiporon</td>
            <td>Brgy. Moise R. Espinosa</td>
            <td>Brgy. Narangasan</td>
            <td>Brgy. Pamangpangon</td>
            <td>Brgy. Poblacion East</td>
            <td>
          </tr>
          <tr>
            <td>Brgy. Poblacion West</td>
            <td>Brgy. Paraiso(Potot)</td>
            <td>Brgy. San Antonio</td>
            <td>Brgy. San Carlos</td>
            <td>Brgy. Sawmill</td>
            <td>Brgy. Tagbon</td>
            <td>
          </tr>
        
         

        </table>

        <div style="text-align:left;">
        
          Copyright ©2023<br/> 
          All rights reserved<br/><br/>
          Developed by: <br/>Remuel & Marc

        </div>
       
        </footer>
<body>
</html>
