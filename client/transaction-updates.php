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
            <!-- sliding side nav -->
            <div class="side-nav">
                <div> aaaa </div>
                <div> bbbb </div>
                <div> ccc </div>
                <div> <a href="logout.php"> Log out </a> </div>

            </div>
        </header>
        <main>
            <h1> TRANSACTIONS UPDATES</h1>
           
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