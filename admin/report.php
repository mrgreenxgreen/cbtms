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
                    <div class="data-box">
                    <button style="padding:5px;border-radius:5px;"><a href="transactions.php" style="text-decoration:none;color:blue;"><i class="fa-solid fa-list-ul"></i> Transaction List</a></button>
                <button style="padding:5px;border-radius:5px;"><a href="forms.php" style="text-decoration:none;color:blue;"><i class="fa-solid fa-file-arrow-down"></i> Download Forms</a></button>
                <button style="padding:5px;border-radius:5px;"><a href="report.php" style="text-decoration:none;color:red;"><i class="fa-solid fa-flag"></i> Report problems</a></button>

                        <div style="margin:auto;text-align:center;gap:2em;display:flex;justify-content:center;flex-direction:column;align-items:center; padding:15px;">
                          <h1> Report </h1>
                          <form style="display:flex;justify-content:center;flex-direction:column;width:500px;align-items:center;gap:10px;">
                                
                                <div>
                                    <label>Subject </label><br/>
                                    <input type="text"  style="width:400px;padding:10px;border-radius:15px;"/>
                                </div>
                                <br/>   
                                <div>
                                <label>Body</label><br/>
                                <textarea style="width:400px;height:400px;border-radius:15px;">
                                 
                                </textarea> 
                                </div>
                                <input type="submit" style="padding:10px;font-size:20px;border-radius:15px;" />
                          </form>
                        </div>
                    </div>
                </div>
        </main>
        <footer>

        </footer>
    </body>
</html>