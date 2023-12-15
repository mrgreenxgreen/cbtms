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
        <link rel="stylesheet" href="./assets/css/news.css" />
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
        
            <!-- NEWS -->
            <div style="color:white;text-align:right;">
                    <h1>.</h1>  <h1>.</h1>  
                    </div>
            <div class="main-announcements">
            <h1>Latest News in Milagros Municipality </h1>  
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

            </div>
            <div class="news">
                <h1>LGU-Strengthen ties with DILG </h1>
                <br/>
                <img src="./assets/img/ayuda3.jpg" style="width:100%;" />
                <br/><br/>
                            Three (3) Locally Funded Projects (LFPs) were formally opened for public use and were turned-over to the Local Government Unit (LGU) of Milagros, Masbate through the inaugural rites conducted on October 19, 2022.

                These LFPs aim to provide the residents of Milagros, Masbate safer communities and scale up efforts on Disaster Risk Reduction (DRR) through strengthened emergency response.

                These projects include the ₱7.5-million worth solar-powered wireless video security system and communication facilities installed at several barangays in Milagros, Masbate, as well as the ₱2.5-million DRR Rescue Vehicle, both of which are procured and funded under FY 2020 Assistance to Municipalities (AM) Program.

                Meanwhile, LGU Milagros was also granted with one (1) unit Ambulance worth ₱5 million under the FY 2021 Local Government Support Fund-Financial Assistance to Local Government Units (LGSF-FALGU).

                Rev. Fr. Manolo Martinez officiated the blessing of the newly installed solar-powered security and communication facilities and newly procured vehicles, which was shortly followed by the ceremonial ribbon-cutting activities and symbolic turn-over of key led by DILG 5 Regional Director Atty. Arnaldo E. Escober Jr., CESO V and Assistant Regional Director Jhoaden G. Lucero CESO V to LGU Milagros Mayor Natividad Isabel R. Magbalon, MD.
                            <br/><br/>
                                <!--NEWS2 -->
                                The additional P368 million was included after President Rodrigo Duterte on Aug. 12 approved the P3.78 billion allocation for the cash aid of residents in ECQ-hit Laguna and Bataan provinces and Metro Manila.
                                <br/><br/>
                When did the LGUs begin distributing cash aid?
                The distribution of cash aid to qualified beneficiaries started on August 11.
                <br/><br/>
                <div class="main-divider"></div>  
                <h1> Cash Assistance 'Ayuda' to Qualified Residents </h1>
                <br/><br/>
                <img src="./assets/img/ayuda.jpeg" style="width:100%;" /><br/><br/>
                Masbate Province ECQ ‘ayuda’ distribution starts on August 11 — MMC
                Who are the recipients?
                According to an earlier statement by Metro Manila Council (MMC) Chairman and Parañaque City Mayor Edwin Olivarez, residents qualified for previous Social Amelioration Programs (SAP) are qualified, too, for the new round of aid.
                <br/><br/>
                Those who are not on the list of SAP and the current ayuda beneficiaries were required to fill out forms at grievance committees in their villages.
                <br/><br/>
                How much will each recipient get?
                Under the Department of Interior and Local Government’s (DILG) Joint Memorandum Circular No.3 series of 2021, P1,000 will be given to each low-income individual or a maximum of P4,000 for each household affected by the new ECQ.
                <br/><br/>
                Ayuda: What’s P1,000 worth in a pandemic?
                The cash aid will be given by LGUs through three means—electronic wallets, online money transfer services, or face-to-face distribution.

                The DBM said, “the cash aid shall benefit 10.9 million individuals or the bottom 80 percent of the population in Metro Manila, based on the population projection and available data of the Philippine Statistics Authority.”

                Progress so far
                On Wednesday, Local Government Secretary Eduardo Año said that 80.96 percent—or P9.1 billion out of the P11.262 billion cash aid—has already been distributed in Metro Manila.

                He added that a total of 9,101,999 low-income individuals in the NCR have received their cash aid from August 11-24.

                “This is the fastest distribution we’ve had in NCR since the start of the pandemic and we did this with people complying with minimum health standards,” Año said in a statement.

                READ: Cash aid distribution in NCR now 80 percent complete — DILG
                LGU performance
                According to Año, Caloocan City was the first out of the 16 cities in Metro Manila to finish with its cash aid distribution.

                In a Facebook post by Caloocan City Mayor Oscar Malapitan on Sunday (Aug. 22), he said the city government has distributed a total of P1,342,711,000 cash aid to its constituents.

                “In a span of 12 days, a total of 402,835 families have received their cash assistance in Caloocan,” the post read, written in Filipino.

                “Among those who received the cash assistance were the beneficiaries of the Special Amelioration Program or SAP, Pantawid Pamilyang Pilipino Program members of 4Ps, persons with disabilities, solo parents, and TODA/JODA members,” it added.

                The Pasig City Public Information Office on Thursday (Aug. 26) also posted on Facebook details of its ayuda distribution. It said the city’s “Ayuda Team” had already distributed 83.29 percent of P567.8 million ECQ financial assistance.

                Aside from cash assistance, the city government also distributes grocery packs to “pockets of poverty” in Pasig.

                READ: Needy residents without ‘ayuda’ due to low supply to get food packs–Pasig LGU
                As of Tuesday (Aug. 24), Año reported that the city of Manila has distributed 91.57 percent of the total allocation from the national government.

                Meanwhile, the Quezon City government on Wednesday (Aug. 25) announced that it has released a total of P2,096,614,000 to 2,096,614 individuals and 668,342 families from August 11 to 24.

                Simula August 11 to 24, 2021, umabot na sa P 2, 096, 614, 000 ang naipamahagi para sa 2, 096, 614 QCitizens o 668, 342…

                Posted by Quezon City Government on Tuesday, August 24, 2021

                Quezon City Mayor Joy Belmonte had said the local government may not be able to finish the cash aid distribution within 15 days owing to the city’s large population.

                “Based on Ayuda 1 experience, even though we are distributing 35,000 a day, on those days, we cannot [finish it within 15 days] due to our population and I do not want to sacrifice the minimum health standards. So, I appealed to authorities if we could extend the cash aid payout in Quezon City for one week, so 21 days,” Belmonte said in Filipino

                READ: Belmonte urges national gov’t to release P109M shortfall in cash aid allocation
                Makati, on the other hand, has released cash assistance to over 233,000 residents during the first day of distribution alone.

                According to Makati City Mayor Abby Binay on Aug. 12, 52 percent out of the P511 million downloaded to the city for the cash aid was released.



            Read more: https://newsinfo.inquirer.net/1479240/ayuda-distribution-quicker-but-many-still-waiting#ixzz8HFSrBgu4
            Follow us: @inquirerdotnet on Twitter | inquirerdotnet on Facebook
            <div class="main-divider"></div>
            <h1>Department of Agrarian Reform - Masbate awards CLOA to landless farmers</h1><br/>
            <img src="./assets/img/ayuda6.jpg" style="width:100%;" /><br/>
            <p>
                <br/>
            This as the Department of Agrarian Reform (DAR) accomplished over their target for the preparation of the final transfer of these properties to the farmer owners.

Of the target 2,100 hectares of farmland readied for field validation in preparation for the parcelazation to individual titles, we have accomplished 2,704 hectares, according to Bohol Provincial Agrarian Reform Officer Dr. Ronald Pumatong. 

This was announced by Pumatong during the recent Kapihan sa PIA at the PIA Bohol studio, and aired live over DyTR and PIA Bohol YouTube and Facebook accounts.

Pumatong also discussed another DAR program which now allows the individual agrarian reform beneficiary to own a clearly-delineated farm as stated in his own individual titles.
<br/><br/>
Through the Support for the Parcelazation of Lands for Individual Titles (SPLIT), the previously issued collective certificate of land ownership awards (CLOA) would now be partitioned for award to individual beneficiaries, said Pumatong.

The 2,323 agrarian reform beneficiaries tilling parts of the 2,704 hectares of land issued to them in the recent years are now on their way towards owning individual titles split from the communal lands awarded to them by the government for being in food production.

The awarded CLOAs then were not technically delineated as to who works on that particular lot, and farmers later realized part of what they farmed does not anymore belong to their awarded lots.
<br/><br/>
While some farmers are involved in food production, others awarded the same CLOA work only until they want, compromising their overall harvests.

Awarding collection CLOAs hastened the process of giving lands to farmers, but farmers could not really own the land which they can call their own, while the collection CLOA prevents them from investing in improving the land because the collective CLOA cannot be put up as loan collateral, added Pumatong.

He also shared that a project management office for SPLIT has already been going around Bohol to validate and inspect areas with communal CLOAs to be included in the SPLIT Program.

The PMT and its field validation teams have also tracked the inherent legal and technical problems which have plagued the country’s flagship social reform program.

Bohol still managed to put up 325 individual titles in computerized form for 217 agrarian reform beneficiaries, Pumatong said.

These were part of the 642 hectares of the 656 agrarian reform beneficiaries which the DAR has processed to the Register of Deeds for eventual release of computerized titles, he summed up. (RAHC/PIA7 Bohol)
            </p>
            <div class="main-divider"></div>  
<h1>Improving Support to Masbate Cattle Industry</h1>
<br/>
<img src="./assets/img/ayuda5.jpeg" />

<p>
<br/>
The cattle ranching in Masbate provides people with food, a bare necessity for anyone’s survival. Unlike movie theater, analogue and postal telecommunications, beef has a special place in people’s diet and this means demand will always be high.  For this reason, the cattle industry is less susceptible to economic disruptions or changes in consumer behavior, as beef is always in demand.

In his book “Las Islas de Masbate: A Beacon of Faith, A Fortress of Resistance,” historian Danilo Gerona said the dawn of cattle raising in Masbate dated back to the 16th century when the Spaniards transported cows and horses to the Philippines.

Between the 16th and 19th centuries, the Spanish colonizers brought cattle to Masbate via the Manila-Acapulco Galleon trade route between Mexico and the Philippines.
<br/><br/>
The cattle ranching in Masbate provides people with food, a bare necessity for anyone’s survival. Unlike movie theater, analogue and postal telecommunications, beef has a special place in people’s diet and this means demand will always be high.  For this reason, the cattle industry is less susceptible to economic disruptions or changes in consumer behavior, as beef is always in demand.

In his book “Las Islas de Masbate: A Beacon of Faith, A Fortress of Resistance,” historian Danilo Gerona said the dawn of cattle raising in Masbate dated back to the 16th century when the Spaniards transported cows and horses to the Philippines.

Between the 16th and 19th centuries, the Spanish colonizers brought cattle to Masbate via the Manila-Acapulco Galleon trade route between Mexico and the Philippines.
<br/><br/>
The rampant incidents of cattle rustling left many ranchers wondering if they were at risk of falling victims to rustlers.

Locking gates, pastures and corrals and permanently identifying livestock and equipment could help deter cattle theft, but unfortunately, they proved insufficient.

“When my father purchased the ranch, he planned to continue raising cattle for many years.  But rustlers were a clear and present danger to us, so he shut down our cattle ranch,” said Dr. Hernando Dorongon, chief government veterinarian for Masbate.

By the time cattle rustling went down as a mere part of “wild, wild west” history, just a fifth of the original cattle population remained grazing in fewer ranches.
</p>

        <div>
    </div>


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
            <td>Brgy. Moises R. Espinosa</td>
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