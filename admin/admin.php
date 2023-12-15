<?php
session_start();

if(!isset($_SESSION['sessionAdminRole'])){
    header("Location:login.php");
}
$adminRole = $_SESSION['sessionAdminRole'];
$adminBrgy =  $_SESSION['sessionAdminBrgy'];
include_once("connection.php");
//echo $_SESSION['sessionAdmin'];







?>

<!DOCTYPE html>
<html>
    <head>

    <title> CBTMS</title>

<link rel="icon" type="image/x-icon" href="./assets/img/cbtms_logo.png">
        <link rel="stylesheet" href="./assets/css/body.css" />
        <link rel="stylesheet" href="./assets/css/heading.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/all.min.css" />
        <!-- pagination -->
      <!-- <link rel="stylesheet" href="./assets/css/demo.css"> -->
     
      <script src="./assets/js/heading.js" ></script>



      <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"?>

      
      
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
                                          <a href="#home">View Account</a>
                                          <a href="#about">Subscription</a>
                                          <a href="#about">Help</a>
                                          <a href="logout.php   ">Logout</a>
                                        </div>
                                        
                                      </div>
                                   
                                     
                                   
                            </div>';
                        }
                    ?>
            </nav>
        </header>
        
   
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
                <h1><i class="fa-solid fa-signs-post"></i> Client Management</h1>
                <br/>
                 <!--ADD NEW -->
                <button style="padding:5px;border-radius:5px;"><i class="fa-solid fa-file-csv"></i> Download CSV</button>
                <button style="padding:5px;border-radius:5px;"><i class="fa-solid fa-file-pdf"></i> Generate PDF</button>
                <button style="padding:5px;border-radius:5px;"><i class="fa-solid fa-flag"></i> Report problems</button>


               
                <!-- TABLE -->
                <p><br/></p>
                
                <table   style="width:100%;text-align:left;">
                
                    <tr>
                        <th>No.</th> 
                        <th>Status </th>
                        <th>User ID </th>
                       
                        <th>Name</th>
                        <th>Specific Address</th>
                        <th>Barangay</th>
                        <th>Created</th>
                         <th>Last modified</th> 
                        <th>Options </th>
                    </tr>
                
                    <?php
                    //Requests
                    //
                    if ($adminBrgy != "MILAGROS"){
                        $request_result = mysqli_query($mysqli, "SELECT * FROM requests  WHERE request_brgy = '$adminBrgy' ORDER BY request_status DESC  ");                        
                    }else{
                        $request_result = mysqli_query($mysqli, "SELECT * FROM requests ORDER BY request_status DESC");                        
                    }
                    //DISPLAY REQUESTS
                    $_number = 1;
                    while($r_result = mysqli_fetch_array($request_result)){
                            

                            echo "<tr>
                                   <td>".$_number."</td>";

                            //color coding of status
                            if($r_result['request_status'] == 'PENDING'){
                                echo   "<td style=\"color:orange;\"><b>".$r_result['request_status']."</b></td>";

                            }else if($r_result['request_status'] == 'CANCELLED'){
                                echo   "<td style=\"color:#990000;\"><b>".$r_result['request_status']."</b></td>";
                            }else if($r_result['request_status'] == 'APPROVED'){
                                echo   "<td style=\"color:blue;\"><b>".$r_result['request_status']."</b></td>";
                            }else if($r_result['request_status'] == 'COMPLETED'){
                                echo   "<td style=\"color:#00cc00;\"><b>".$r_result['request_status']."</b></td>";
                            }
                                   
                            echo    "<td>".$r_result['request_id']." </td>
                                    <td>".$r_result['request_type']." </td>
                                    <td>".$r_result['request_fee']." </td>
                                    <td>".$r_result['request_by']."</td>";
                            

                             echo   "<td><small>".$r_result['request_comment']."</small></td>
                                   
                                    <td>".$r_result['request_brgy']."</td>
                                    <td>".$r_result['request_date']."</td>
                                    
                                    <td>".$r_result['request_last_modified']."</td>
                                    <td>
                                        <a 
                                            href=\"approve.php?id=".$r_result['request_id']."\" 
                                            style=\"text-decoration:none;color:darkblue;\">
                                            <b>
                                            <i class=\"fa-solid fa-truck\"></i> Approve
                                           </b>
                                        </a> 
                                        <a 
                                            href=\"reject.php?id=".$r_result['request_id']."\" 
                                            style=\"text-decoration:none;color:#990000\"
                                            onClick=\"return confirm('Are you sure you want to cancel?')\">
                                            <b>
                                            &#10008	 Cancel
                                            </b>
                                        </a>
                                        <a 
                                        href=\"complete.php?id=".$r_result['request_id']."\" 
                                        style=\"text-decoration:none;color:green;\">
                                        <b>
                                       &#10004 Complete
                                       </b>
                                    </a> 
                                    </td>	

                                    </tr>" ;
                        
                            //increment
                            $_number = $_number + 1;
                    }
                    ?>
                
                </table>
                <!-- <script>
            new DataTable('#example');
           </script> -->
            </div>

        </div>

    </body>
</html>