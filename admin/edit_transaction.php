<?php
session_start();

if(!isset($_SESSION['sessionAdminRole'])){
    header("Location:login.php");
}
include_once("connection.php");
//echo $_SESSION['sessionAdmin'];

//getting id from url
$id = $_GET['id'];
//error message
$_message = "";
//query
$SQL = "SELECT * FROM transactions WHERE transaction_id = '$id'";

$result = mysqli_query($mysqli, $SQL);

//SAVE / INSERT EDITED DATA TO DATABASE
if(isset($_POST['T_SUBMIT'])){
    $t_name = $_POST['t_name'];
    $t_price = $_POST['t_price'];
    $t_description = $_POST['t_description'];

    // $SQL = "INSERT INTO transactions(trasanction_name,transaction_price,transaction_description) VALUES('$t_name', '$t_price', '$t_description') WHERE transaction_id = '$id'";
    $SQL = "UPDATE transactions SET transaction_name = '$t_name', transaction_price = '$t_price', transaction_description = '$t_description' WHERE transaction_id = $id";

    $update_result = mysqli_query($mysqli, $SQL);
    header('Location:transactions.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
    <title> CBTMS</title>

<link rel="icon" type="image/x-icon" href="./assets/img/cbtms_logo.png">
        <link href="./assets/css/edit_transaction.css" rel="stylesheet" />

        <link href="./assets/css/body.css" rel="stylesheet" />
        <link href="./assets/css/heading.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link  rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/all.min.css" />
    </head>
    <body>
        <header>
            <nav>
                    <div style="color: #00cc00;font-weight:bold;font-size:20px;">
                        <i class="fa-solid fa-bolt"></i>
                        <span style="color:#3366cc;">C</span><span>BTMS</span>
                    </div>
                    <div>  
                        <input type="text" name="SearchBar" placeholder="   Search" style="width:450px;" /> 
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <?php
                        if(isset($_SESSION['sessionAdminRole'])){
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
                                        >'.$_SESSION['sessionAdminUsername'].'  <i class="fa-solid fa-user"></i></button>
                                        <div id="myDropdown" class="dropdown-content">
                                          <a href="#home">View Profile</a>
                                          <a href="#about">Profile Settings</a>
                                          <a href="#about">Help</a>
                                          <a href="logout.php   ">Logout</a>
                                        </div>
                                        
                                      </div>
                                   
                                     
                                   
                            </div>';
                        }
                       
                    ?>
            </nav>
        </header>
        <main>
            <!-- login form -->
                
                <!-- data table -->
             
                <div class="admin-container">
                    
                    <!-- side nav -->
                    <div class="admin-sideNav">
                        <div>
                            <hr/>
                            <div><a href="index.php"> <i class="fa-solid fa-gauge-high"></i>Dashboard</a></div>
                            <div><a href="inquiries.php"><i class="fa-solid fa-bullhorn"></i> Announcements</a></div>
                            <div><a href="inquiries.php"><i class="fa-solid fa-message"></i>Inquiries</a></div>

                            <hr/>
                            <div><a href="transactions.php"><i class="fa-solid fa-business-time"></i>Transactions </a> </div>
                            <div><a href="requests.php"><i class="fa-solid fa-signs-post"></i>Requests </a> </div>
                            <div><a href="users.php"><i class="fa-solid fa-users"></i>Clientele</a></div>
                            <hr/>

                            <?php 
                                if(isset($_SESSION['sessionAdminRole']) && $_SESSION['sessionAdminRole']=="LGU-ADMIN"){
                                    echo "
                                    <div><a href=\"admin.php\"> <i class=\"fa-solid fa-users-gear\"></i>Administrators </a></div>
                                    <div><a href=\"analytics.php\"><i class=\"fa-solid fa-chart-simple\"></i>Analytics</a></div>
                                    <div><a href=\"brgy.php\"><i class=\"fa-solid fa-sitemap\"></i> Barangay</a></div>
                                    ";
                                }
                                
                            ?>
                       
                        
                        </div>
                      
                        <div>
                        <hr/>   
                            <div><a href="#"><i class="fa-solid fa-moon"></i>Dark Mode</a></div>
                            <div><a href="#"><i class="fa-solid fa-lightbulb"></i>Light Mode</a></div>
                            <div><a href="settings.php"><i class="fa-solid fa-gear"></i>Settings</a></div>

                        </div>
                    </div>
                    <!-- DATA BOX -->
                    <!-- This div / "BOX" contains the main content of each page -->
                    <div class="data-box">
                   
                        <div class="edit-transaction">
                        <?php
                        while($_r = mysqli_fetch_array($result)){
                            $transactionName = trim($_r['transaction_name']);
                            echo    "<form method=post style=\"display:flex;flex-direction:column;width:500px;\">
                                        <div style=\"text-align:center;\" >
                                        <h1 style=\"text-align:center;font-size:50px;\">&#9851 </h1><h2>Edit Transaction</h2>
                                        </div>
                                        <br/>
                                        <label>Transaction Name </label>
                                        <input type=\"text\" name=\"t_name\" value=".$transactionName." max=\"1000\" width=\"500\" />
                                      
                                        ";
                                echo    '
                                        <label>Transaction Fee </label>
                                        <input type="text" name="t_price" value='.$_r['transaction_price'].' />';
                                echo    '
                                            <label> Description </label>
                                            <textarea name="t_description">'.$_r['transaction_description'].' </textarea>
                                            <div style="text-align:center;">
                                            <input 
                                                type="submit" 
                                                value="Save" 
                                                id="transaction-save"
                                                name="T_SUBMIT" 
                                                
                                                " />
                                            <button 
                                            id="transaction-cancel"
                                            >
                                                <a 
                                                    href="transactions.php" 
                                                    
                                                "> 
                                                    Cancel
                                                </a>
                                            </button>
                                            
                                        </div>
                                        <p style="text-align:center;color:red;font-size:18px;">'.$_message.'</p>

                                        </form>';

                            }
                            ?>
                        </div>
                    </div>
                </div>
        </main>
        <footer>

        </footer>
    </body>
</html>