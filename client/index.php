<?php
session_start();


?>


<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> CBTMS</title>

<link rel="icon" type="image/x-icon" href="./assets/img/cbtms_logo.png">


        <link rel="stylesheet" href="./assets/css/heading.css" />
        <link rel="stylesheet" href="./assets/css/body.css" />
        <link rel="stylesheet" href="./assets/css/footer.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
                <div>
                  <h1 style="color: #00cc00;"><i class="fa-solid fa-bolt"></i>   <span style="color:#3366cc;">Centralized </span> Barangay Transaction Management System</h1>
                </div>
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
                              <a href="manage-account.php">Manage Account</a>
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
            <!-- main-header -->
            <div class="main-header">
                <div>
                    <h1 id="main-title"><i style="font-size:60px;"> A Centralized Barangay Transaction Management System for the Municipality of Milagros</h1>
                    <i>
                    <br/>
                    <h1>Ensuring an easy, realiable, and fast transaction.</i> </h1></i>
                     <button id="transact-now-btn"><a href="transaction.php" style="text-decoration:none;color:blue;" >TRANSACT NOW </a></button>
                </div>
            </div>
            <!-- main-announcements -->
           
            <div class="main-announcements">
            <h1>Latest Stories of Happenings</h1>  
            <br/>
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="./assets/img/ayuda2.jpg" style="width:100%;  " >
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="./assets/img/ayuda6.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="./assets/img/ayuda.jpeg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="./assets/img/ayuda4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="./assets/img/ayuda5.jpeg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="./assets/img/ayuda3.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">          
      <img class="demo cursor" src="./assets/img/ayuda2.jpg" style="width:100%" onclick="currentSlide(1)" alt="Free Medical Services to our residents in Brgy. Cayabon">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/img/ayuda6.jpg" style="width:100%" onclick="currentSlide(2)" alt="Department of Agrarian Reform - Masbate awards CLOA to landless farmers">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/img/ayuda.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Cash assistance to victims of COVID">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/img/ayuda4.jpg" style="width:100%" onclick="currentSlide(4)" alt="DILG Region 5 visits Municipality of Milagros">
    </div>
    <div class="column">
      <img class="demo cursor" src="./assets/img/ayuda5.jpeg" style="width:100%" onclick="currentSlide(5)" alt="Improving support to our Cattle industry">
    </div>    
    <div class="column">
      <img class="demo cursor" src="./assets/img/ayuda3.jpg" style="width:100%" onclick="currentSlide(6)" alt="LGU-Milagros strengthen ties with DILG">
    </div>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<p>The local government of Milagros Municipality has launched its Centralized Barangay Transaction Management System
  <br/>wherein all transactions may now be done online. It aims to lessen the burden of its residents
  <br/><br/>
 
Many businesses in rapidly changing technological environments have a centralized form of management structure.
<br/> Decentralization on the other hand may be effective in businesses that need individualized customer service,
<br/> usually at the point of contact with customers or who have different business locations.

  ...
</p>
<h3 ><a href="news.php" style="color:white;"> View details >> </a></h3>

            </div>
            <!--end of main announcements -->

            <!-- featured transactions -->
            <div class="main-featured-transactions">
                   
              <div class="x"> 1009 <br/> Users</div> <div class="main-featured-details"> Registrations</div> 
              <div class="x"> 1643<br/> Transactions per month</div> <div class="main-featured-details"> Transactions</div> 
              <div class="x"> 3874 <br/> Inquiries per month</div> <div class="main-featured-details">Inquiries</div> 
              <img src="./assets/img/graphic1.jpg" />
              <p>
                <h2>Benefits of Centralized Barangay Transaction Management System (CBTMS)</h2>
              Centralization refers to the process in which activities involving planning and decision making within an organization
  <br/> are concentrated a specific leader or location. In a centralized organization, the decision-making powers are
  <br/>
   retained in the head office and all other locations are directed from this main office resulting in communication 
  <br/>flowing in a top-down manner. In contrast, a decentralized setup empowers teams or departments to make decisions,
  <br/> promoting communication in all directions.
  <br/>
  <div style="text-align:left;">
  <h2>Top 4 Advantages of CBTMS</h2><br/>
    <h4>1. Increase convenience and time savings for your constituents</h4>
    <br/>
    <p>
    Just by mentioning the scenario above, you can start to see how online payments can make a huge difference for 
    <br/>your constituents.
     Not only do online payments save your constituents time by eliminating the drive to your
     <br/> department, 
     and any wait time
     associated with their paperwork, but it also opens your business hours.
  <br/><br/>
  Unrestricted access to essential services means members of your community don’t have to take long lunches, or 
  <br/>time off work to complete paperwork when it fits your department’s schedule. Giving the power of scheduling 
  <br/>back to your constituents creates a far better customer interaction. 
  <br/>
  <br/>
    </p>
    <h4>2. Decrease stress and increase productivity for your staff  </h4>
    <br/>
    <p>
    The inherent automation of an online payment processing is music to your staff’s ears.
   
    With the right <br/>  technology, your staff can cut out manual calculations and routing of paperwork.

     And, with fewer citizens     <br/>queuing in the office to submit paperwork and payments, your staff
    can breathe   a little easier.
      Less paperwork<br/>  on your team’s desk means more time for other, 
      potentially more exciting projects. 
      <br/>`
    </p>
    <h4>3. Grow your department’s bottomline </h4>
    <br/>
    <p>
      By bringing up online transaction which made it easier for residents to transact, You can easily reach the given quota . <br/>
      Consequently, it increases the overall performance of organization.
      
    </p>
    <br/>
    <h4>4. Put the safety of citizens and staff first</h4>
    <br/>
    <p>
      Travelling increases the risk of catching illness especially in the times of  pandemic such as the COVID-19 Pandemic,<br/> it can also 
      increase the
      risk of accidents met on the road while travelling.
    </p>
    <div style="display:flex;justify-content:center;">
      <img src="./assets/img/transaction-image.jpg" width="600" style="margin:auto;"/>
</div>
<div style="margin:auto;display:flex;justify-content:center;">
<button style="padding:.5em;border-radius:15px;font-size:30px;background-color:yellow;font-weight:bold;"> 
  <a href="transaction.php" style="text-decoration:none;color:blue;">START TRANSACTION</a> 
</button>
</div>
  </div>

</p>
               
            </div>
            <!--testimonials -->
            <div class="main-divider"></div>
            <div class="main-testimonials">
              <img src="./assets/img/testimonial3.jpg" height="350" width="600" />
              <img src="./assets/img/testimonial2.jpg" height="350" width="600" />
              <img src="./assets/img/testimonial1.jpg" height="350" width="600" />
            </div>
            <div class="main-divider"></div>

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
    </body>
</html>
