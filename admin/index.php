<?php
session_start();

if(!isset($_SESSION['sessionAdminRole'])){
    header("Location:login.php");
}
include_once("connection.php");
//echo $_SESSION['sessionAdmin'];
?>

<!DOCTYPE html>
<html>
    <head>
    <title> CBTMS</title>

<link rel="icon" type="image/x-icon" href="./assets/img/cbtms_logo.png">
        <link href="./assets/css/body.css" rel="stylesheet" />
        <link href="./assets/css/heading.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link  rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/all.min.css" />

        <script src="./assets/js/heading.js" ></script>

        <style>
            .dashboard-box-container{
                display:flex;
                width:100vw;
                border:1px solid red;
                gap:2em;
            }
            .dashboard-box{
                height:300px;
                width:300px;
                background-color:#00cc00;
                color:white;
                border-radius:15px;
                display:flex;
                flex-direction:column;
                padding:20px;
               
            }
            .dashboard-datatables-container
            {
                border:1px solid blue;
                border-radius:25px;
                padding: 15px;
                height:450px;
                width:80vw;
                display:flex;
                gap:2em;
                justify-content: space-evenly;
                
            }

            .dashboard-datable1
            {
                height:400px;
                width:700px;
                background-color: red;
            }
            .dashboard-datable1 img
            {
                height:100%;
                width:100%;
            }
            .dashboard-datable2
            {
                height:400px;
                width:700px;
                background-color: red;
              
            }
    
        </style>
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
                                          <a href="#about">Manage Account</a>
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
                    <div class="data-box" style="border:1px solid green;height:100vh;display:flex;flex-direction:column;">
                                <!-- top boxes -->
                                <div class="dashboard-box-container">
                                    <div class="dashboard-box"> <h1>Requests</h1> <p style="font-size:100px;color:yellowgreen;"><i class="fa-solid fa-arrow-down-up-across-line"></i></p><br/>
                                      <?php
                                           $sql_transaction = "SELECT COUNT(request_id) FROM requests";
                                           $result =mysqli_query($mysqli, $sql_transaction);
                                           while($t_result = mysqli_fetch_array($result)){
                                           echo '<p style="font-size:100px;">'.$t_result[0].'</p>';
                                           }
                                      ?>
                                    </p>
                                </div>
                                    <div class="dashboard-box"><h1>Registrations</h1> <p style="font-size:100px;color:yellowgreen;"><i class="fa-solid fa-users"></i></p> 
                                        <?php
                                              $sql_transaction = "SELECT COUNT(client_user_id) FROM client_users";
                                              $result =mysqli_query($mysqli, $sql_transaction);
                                              while($t_result = mysqli_fetch_array($result)){
                                              echo '<p style="font-size:100px;">'.$t_result[0].'</p>';
                                              }

                                        ?>
                                    </div>
                                    <div class="dashboard-box"><h1>Transactions</h1> <p style="font-size:100px;color:yellowgreen;"><i class="fa-solid fa-briefcase"></i></p>
                                        <?php
                                             $sql_transaction = "SELECT COUNT(transaction_id) FROM transactions WHERE isDeleted =0";
                                             $result =mysqli_query($mysqli, $sql_transaction);
                                             while($t_result = mysqli_fetch_array($result)){
                                             echo '<p style="font-size:100px;">'.$t_result[0].'</p>';
                                             }
                                        ?>
                                    </div>
                                    <div class="dashboard-box"><h1>Page Visits</h1> <p style="font-size:100px;color:yellowgreen;"><i class="fa-solid fa-eye"></i></p><p style="font-size:100px;">3119</p></div>
                                
                                </div>
                               
                                <!-- data tables  -->
                                <br/>
                                <div class="dashboard-datatables-container">
                                    <div class="dashboard-datable1">
                                           <img src="./assets/img/chart.webp" />
                                        </div> 
                                    <div class="dashboard-datable2">table2</div>
                                </div>
                </div>
        </main>
        <footer>

        </footer>
    </body>
</html>