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
                            <div><a href="transactions.php"><i class="fa-solid fa-business-time"></i>Transactions</a> </div>
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
                 <button style="padding:5px;border-radius:5px;color:darkblue;"><i class="fa-solid fa-file-pdf"></i> <a href="users.php" style="color:darkblue;text-decoration:none;">Client Information</a></button>

<button style="padding:5px;border-radius:5px;color:darkgreen;"><i class="fa-solid fa-file-csv"></i> <a href="users_credentials.php" style="color:darkgreen;text-decoration:none;">Client Verification</a></button>
<button style="padding:5px;border-radius:5px;color:#990100;"><i class="fa-solid fa-flag"></i><a href="#" style="color:#990100;text-decoration:none;"> Report problems</a></button>


               
                <!-- TABLE -->
                <p><br/></p>
                
                <table   style="width:100%;text-align:left;">
                
                    <tr>
                        <th>No.</th> 
                        <th>Status </th>
                        <th>User ID </th>
                        <th>Picture</th>
                      
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                       
                       
                        <th>Birthdate</th>
                        <th>Barangay</th>
                        <th>Attached ID</th>
                        <th>Contact No.</th>
                        <th>Email</th>
                        <th>Created</th>
                         <th>Last modified</th> 
                        <th>Options </th>
                    </tr>
                
                    <?php
                    //Requests
                    //
                    if ($adminBrgy != "MILAGROS"){
                        $request_result = mysqli_query($mysqli, "SELECT * FROM client_users WHERE client_brgy = '$adminBrgy' ORDER BY client_status ");                        
                    }else{
                        $request_result = mysqli_query($mysqli, "SELECT * FROM client_users     ORDER BY client_status ");                        
                    }
                    //DISPLAY REQUESTS
                    $_number = 1;
                    while($r_result = mysqli_fetch_array($request_result)){
                            

                            echo "<tr>
                                   <td>".$_number."</td>";

                            //color coding of status
                            if($r_result['client_status'] == 'UNVERIFIED'){
                                echo   "<td style=\"color:orange;\"><b>".$r_result['client_status']."</b></td>";

                            }else if($r_result['client_status'] == 'BLOCKED'){
                                echo   "<td style=\"color:#990000;\"><b>".$r_result['client_status']."</b></td>";
                            }else if($r_result['client_status'] == 'APPROVED'){
                                echo   "<td style=\"color:blue;\"><b>".$r_result['client_status']."</b></td>";
                            }else if($r_result['client_status'] == 'VERIFIED'){
                                echo   "<td style=\"color:#00cc00;\"><b>".$r_result['client_status']."</b></td>";
                            }
                            //id
                            echo    "<td>".$r_result['client_user_id']." </td>";
                            //picture
                            echo    "<td>
                                        <div style=\"width:150px; height:150px;background-color:#888;border-radius:50%;overflow:hidden;\">";
                            
                                  
                                            $imageData = $r_result['client_image'];

                                            // Decode the image data from base64 format
                                            $imageContent = base64_decode($imageData);

                                            $imageSrc = $imageContent;
                                            $imageType = "";
                                            // Convert the image data to a format that can be displayed in an HTML tag
                                            //   $imageType = mime_content_type($imageContent);
                                            $imageSrc = 'data:' . $imageType . ';base64,' . base64_encode($imageContent);
                                            
                            echo '      <img src="' . $imageSrc . '" style="width:100%;height:100%;">';

                            echo "      </div>
                                    </td>";
                          
                            //last name
                            echo    "<td>".$r_result['client_last_name']." </td>";
                            //first name
                            echo "<td>".$r_result['client_first_name']." </td>";
                            //middle name
                            echo "<td>".$r_result['client_middle_name']." </td>";
                            //birthdate                            
                            echo   "<td>".$r_result['client_birthdate']." </td>";
                          
                             //barangay    
                             echo    "<td><small>".$r_result['client_brgy']."</small></td>";    
                            //Attached ID
                             echo   "<td>
                                        <div style=\"width:300px;height:200px;border:1px solid red;padding:10px;color:white;background-color:#888;\">";

                                       $imageData = $r_result['client_attached_id'];

                                        // Decode the image data from base64 format
                                        $imageContent = base64_decode($imageData);

                                        $imageSrc = $imageContent;
                                        $imageType = "";
                                        // Convert the image data to a format that can be displayed in an HTML tag
                                        //   $imageType = mime_content_type($imageContent);
                                        $imageSrc = 'data:' . $imageType . ';base64,' . base64_encode($imageContent);
                                        
                          echo '     <img src="' . $imageSrc . '" style="width:100%;height:100%;">';

                                        "</div>
                                    </td>";
                            //contact no
                            echo "<td>".$r_result['client_phone_number']." </td>";
                            //email
                            echo "<td>wfsd@gmail.com</td>";
                            
                            echo    "<td><small>".$r_result['client_created']."</small></td>
                                    
                                    <td><small>".$r_result['client_last_modified']."</small></td>
                                    <td>
                                    <a 
                                    href=\"user_verify.php?id=".$r_result['client_user_id']."\" 
                                    style=\"text-decoration:none;color:green;\">
                                    <span style=\"text-align:center;display:flex;justify-content:center;\">
                                    <b>
                                   
                                   &#10004  <br/>Verify
                               
                                   </b>
                                   </span>
                                </a> 
                                <br/>
                                        <br/>
                                        <a 
                                            href=\"user_blocked.php?id=".$r_result['client_user_id']."\" 
                                            style=\"text-decoration:none;color:#990000\"
                                            onClick=\"return confirm('Are you sure you want to cancel?')\">
                                            <span style=\"display:flex;flex-direction:column;justify-content:center;text-align:center;\">
                                            <b>
                                            &#9940  <br/>Block  
                                            </b>
                                            </span>
                                        </a>
                                        <br/><br/>
                                        
                                        <a 
                                            href=\"user_delete.php?id=".$r_result['client_user_id']."\" 
                                            style=\"text-decoration:none;color:darkblue;\">
                                            <span style=\"display:flex;flex-direction:column;justify-content:center;text-align:center;\">

                                            <b>
                                            <i class=\"fa-solid fa-trash\"></i>                                          
                                              <br/>
                                            Delete 
                                           </b>
                                           </span>

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

<script>
    const password = document.querySelector('#password');
    const toggle = document.querySelector('.fa-eye');
    toggle.addEventListener('click', function() {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    });
  </script>