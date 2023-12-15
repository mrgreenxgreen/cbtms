<?php
session_start();

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
            <h1 style="color: #00cc00;"> <span style="color:#3366cc;">Centralized </span> Barangay Transaction Management System</h1>
            <div style="display:flex;flex-direction:column;">
                  <div><i class="fa-brands fa-square-facebook" style="color:blue;"></i>facebook</div>
                  <div><i class="fa-brands fa-square-twitter" style="color:#3366cc;"></i>Twitter</div>
                  <div><i class="fa-brands fa-square-instagram"style="color:purple;"></i>Instagram</div>
                </div>            </div>
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
            <div style="color:white;">
                <h1>`</h1>
                <h1>`</h1>
                <h1>`</h1>
                <h1>`</h1>
            </div>
            <h1> Account Profile </h1>
            <!-- profile div -->
            <?php
             if(isset($_SESSION['sessionUsername'])){
                echo "<p onclick=\"alert()\" >".$_SESSION['sessionUsername']." = </p>";
           
                            echo"<div class=\"profile\">
                                <div class=\"profile-heading\" >
                                    
                                    <div style=\"display:flex;gap:2em;\">
                                      <div class=\"profile-avatar\">";
                              
                                    $active_user_id = $_SESSION['sessionId'] ;

                                    $dbHost = "localhost";
                                    $dbUsername = "root";
                                    $dbPassword = "";
                                    $dbName = "cbt";
                                    
                                    // Connect to the database
                                    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
                                    
                                    // Check connection
                                    // if ($conn->connect_error) {
                                    //   die("Connection failed: " . $conn->connect_error);
                                    // }
                                    
                                    // Get the image data from the database
                                    $sql = "SELECT client_image FROM client_users WHERE  client_user_id = $active_user_id"; // Replace 1 with the ID of the image you want to display
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                      $row = $result->fetch_assoc();
                                      $imageData = $row['client_image'];
                                    
                                      // Decode the image data from base64 format
                                      $imageContent = base64_decode($imageData);
                                    
                                      $imageSrc = $imageContent;
                                      $imageType = "";
                                      // Convert the image data to a format that can be displayed in an HTML tag
                                    //   $imageType = mime_content_type($imageContent);
                                      $imageSrc = 'data:' . $imageType . ';base64,' . base64_encode($imageContent);
                                    
                                      // Display the image in an HTML tag
                                      echo '<img src="' . $imageSrc . '" style="width:100%;height:100%;">';
                                    } else {
                                      echo 'Image not found.';
                                    }

                                    
                            echo"   </div>
                                    <div>
                                    <h3> Last Name : </h3>
                                    <h3> First Name : </h3>
                                    <h3> Middle Name : </h3>
                                    <h3> Barangay: </h3>
                                    <h3> Purok / Sitio : </h3>
                                    </div>
                                </div>";
                            //2nd div inside profile heading
                            echo "<div style=\"border:1px solid red;\">";
                            //upload photo button
                                echo '<form action="upload.php" method="post" enctype="multipart/form-data">
                                    <label for="image">Select Image:</label>
                                    <input type="file" id="image" name="image" required>
                                    <br>
                                    <button type="submit">Upload</button>
                                </form>' ; 
                                    //upload attached ID
                                echo '<h2> Attached ID </h2><br/>
                                    <form action="uploadattachedid.php" method="post" enctype="multipart/form-data">
                                    <label for="image">Select Image:</label>
                                    <input type="file" id="attached_image" name="attached_image" required>
                                    <br>
                                    <button type="submit">Upload</button>
                                </form>
                                </div>' ; 

                          




                            echo "  
                                    <h1> JoJo Cruz </h1>
                                </div>

                                    <table style=\"text-align:left;width:900px;\">
                                        <tr>
                                            <td> SURNAME: </td>
                                            <th> Cruz </th>                          
                                        </tr>
                                        <tr>
                                            <td> FIRST NAME: </td>
                                            <th> John John</th>
                                            <tD> NAME EXTENSION: </td>
                                            <th> N/A </th>
                                        </tr>
                                        <tr>
                                            <td> MIDDLE NAME: </td>
                                            <th> Jaworski</th>
                                        </tr>
                                    </table>
                                    <!-- Second Section/Table -->
                                    <div class=\"profile-second-table\">
                                    <table style=\"text-align:left;\">
                                        <tr>
                                            <td> DATE OF BIRTH:<p>(mm/dd/yyyy) </p> </td>
                                            <th> 09/01/1990 </th>
                                        </tr>
                                        <tr>
                                            <td> PLACE OF BIRTH :</td>
                                            <th> MASBATE CITY, MASBATE </th>
                                        </tr>
                                        <tr>
                                            <td> SEX: </td>
                                            <th> <input type=\"checkbox\" > Male <input type=\"checkbox\" > Female </th>
                                        </tr>
                                        <tr>
                                            <td> CIVIL STATUS </td>
                                            <th> <p><input type= \"checkbox\"> Single   </p>
                                                <p> <input type=\"checkbox\"> Married </p>
                                                <p><input type=\"checkbox\">Separated</p>
                                                <p><input type=\"checkbox\">Widowed </p>
                                                <p><input type=\"checkbox\">Other/s :</p>
                                        </tr>
                                        <tr>
                                            <td>HEIGHT:</td>
                                            <th> 190cm </th>
                                        </tr>
                                        <tr> 
                                            <td>WEIGHT:</td>
                                            <th> 70kg </th>
                                        </tr>
                                        <tr>
                                            <td>BLOOD TYPE:</td>
                                            <th> A </th>
                                        </tr>
                                        <tr>
                                            <td> GSIS ID NO.: </td>
                                            <th> N/A </th>
                                        </tr>
                                        <tr>
                                            <td> PAG-IBIG ID NO.:</td>
                                            <th> N/A </th>
                                        </tr>
                                        <tr> 
                                            <td> PHILHEALTH ID NO.: </td>
                                            <th> N/A</th>
                                        </tr>
                                        <tr>
                                            <td>SSS NO.:</td>
                                            <th> N/A </th>
                                        </tr>
                                        <tr>
                                            <td> TIN NO.: </td>
                                            <th> N/A </th>
                                        </tr>
                                        <tr>
                                            <td> EMPLOYEE NO.: </td>
                                            <th> N/A </th>
                                        </tr>
                                        
                                    </table>
                                    <table>
                                        <tr>
                                            <td>CITIZENSHIP:</td>
                                            <th> <div style=\"display:flex;\">
                                                    <div >
                                                        <input type=\"checkbox\" /> Filipino 
                                                    </div>
                                                    <div style=\"display:flex;flex-direction:column; text-align:left;margin-left: 10px;\">
                                                        <div><input type=\"checkbox\" /> Dual Citizen</div>
                                                        <div><input type=\"checkbox\"/> By birth <input type=\"checkbox\" /> By Naturalization</div>
                                                        <div> Country: </div>
                                                        <div> 
                                                            <select style=\"width:200px;padding:10px;\">
                                                                <option>Philippines</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                        </tr>
                                        <tr>
                                            <td>RESIDENTIAL ADDRESS:</td>
                                            <th> </th>
                                        </tr>
                                        <tr>
                                            <td>PERMANENT ADDRESS:</td>
                                            <th> </th>
                                        </tr>
                                        <tr>
                                            <td>TELEPHONE NO:</td>
                                            <th> </th>
                                        </tr>
                                        <tr>
                                            <td>MOBILE NO.:</td>
                                            <th> </th>
                                        </tr>
                                        <tr>
                                            <td>E-MAIL ADDRESS(if any):</td>
                                            <th> </th>
                                        </tr>
                                    </table>
                                    </div>
                            </div>";
                        }
                        else{
                            echo "Please login to view profile";
                        
                        }  
            ?>
            <!--end of table -->
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