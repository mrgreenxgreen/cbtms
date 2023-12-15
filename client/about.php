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
        <link rel="stylesheet" href="./assets/css/about.css" />
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
            <div class="about-container">
                <div class="about-one">
                    
<img src="./assets/img/data-center.jpg" />
<h1>CBTMS - Centralized  Barangay Transaction Management System</h1>
<br/>

<h4>Centralization </h4>
<br/>
Centralization refers to the process in which activities involving planning and decision making within an organization are concentrated a specific leader or location. In a centralized organization, the decision-making powers are retained in the head office and all other locations are directed from this main office resulting in communication flowing in a top-down manner. In contrast, a decentralized setup empowers teams or departments to make decisions, promoting communication in all directions.

Many businesses in rapidly changing technological environments have a centralized form of management structure. 
<br/><br/>
Decentralization on the other hand may be effective in businesses that need individualized customer service, usually at the point of contact with customers or who have different business locations.
<br/><br/>
<h4>Advantages of Centralization</h4>
<br/>
Clear Chain of Command
A streamlined and well-defined hierarchy ensures efficient decision-making. Everyone in the organization knows who to report to and who to approach whenever they have questions. This clarity ensures prompt responses to concerns from employees. Senior executives follow a clear plan of delegating authority to employees who excel in specific functions. The executives also gain the confidence that when they delegate responsibilities to mid-level managers and other employees, there will be no overlap. A clear chain of command is beneficial when the organization needs to execute decisions quickly and in a unified manner.

<br/><br/>
Focused Vision<br/><br/>
Centralized management aids in communicating and delivering the organization’s vision, and the clear lines of authority enable consistent message delivery. There are clear lines of communication and senior executives can communicate the organization’s vision to employees and guide them towards achievement of that vision.
<br/><br/>
Reduced Costs<br/><br/>
A centralized organization follows standard procedures and methods that lead to reduced office and administrative costs. The administrative costs and minimize operational expenses. The organization does not need to incur extra costs to hire specialists for other parts of the organization since critical decisions are made at the head office and then communicated outwards. The clear chain of command reduces duplication of responsibilities that may result in additional costs to the organization.
<br/><br/>
Quick Implementation<br/><br/>
A centralized structure allows for faster decision making from the top since decisions are made by a small group of people and then communicated to the lower-level managers. The involvement of only a few people makes the decision-making process more efficient since they can discuss the details of each decision in one meeting.
<br/><br/>
Improved Quality of Work<br/><br/>
The standardized procedures and better supervision in a centralized organization result in improved quality of work. Supervisors in each department ensure that the work outputs are uniform and of high quality.
<div class="main-divider"></div>

                    <img src="./assets/img/welcome.jpg" style="margin:auto;width:100%;" />
                    <br/>
                    <h1>Milagros, Masbate </h1>
                    <br/>
                    <h4>Barangays of Milagros </h4>

                    <br/>
                    <p>
                        
                    Milagros is politically subdivided into 27 barangays with one island barangay and one island sitio.
                        <br/><br/>
                    It is located at the southern part of the Masbate Island duplicating boomerang shape of the Island. It is bounded out the north by 
                    the Mobo, Baleno, Masbate City, Mobo, North – East by Uson North West by Aroroy, Mandaon and Balud, On the East by the Municipality 
                    of Cawayan and to the south by Asid Gulf.
                        <br/><br/>
                    It is the largest municipality of the province with an area of 56, 540 hectares. It has an estimated population of 50, 100 for the
                     year 2007.
                        <br/><br/>
                    Below are the list of 27 barangays of Milagros, Masbate, to wit: <br/><br/>
                    - Bacolod <br/>
                    - Bangad <br/>
                    - Bara <br/>
                    - Bonbon <br/>
                    - Calasuche <br/>
                    - Calumpang <br/>
                    - Capaculan <br/>
                    - Cayabon <br/>
                    - Guinluthangan <br/>
                    - Jamorawon <br/>
                    - Magsalangi <br/>
                    - Matagbac <br/>
                    - Matanglad <br/>
                    - Matiporon <br/>
                    - Moises R. Espinosa <br/>
                    - Narangasan <br/>
                    - Pamangpangon <br/>
                    - Poblacion East <br/>
                    - Poblacion West <br/>
                    - Paraiso (Potot) <br/>
                    - San Antonio <br/>
                    - San Carlos <br/>
                    - Sawmill <br/>
                    - Tagbon <br/>
                    - Tawad <br/>
                    - Tigbao <br/>
                    - Tinaclipan (Bato) <br/><br/>
                    </p>
                     <!--Statistics 1 -->
                     <div class="main-divider"></div>

                <div>
                    <h1>Statistics</h1>
                    <img src="./assets/img/stat1.jpg" />
                    <img src="./assets/img/stat2.jpg" style="width:90%;" />
                </div>
                <div class="main-divider"></div>
                    <h1>History </h1><br/>
                    <h4>How Milagros got its name?</h4>
                    <br/>
                Milagros got its name from Spanish word Milagro meaning miracle. Stories handed down from generation to generation told us that the
                 community was founded by early settlers who are peace loving and faithful converted Christians. Early then, coastal communities are
                  the center of trade and commerce because of its facility to transport goods and products to and from the other communities. 
                  These are often the targets of marauding “moro” bandits who pillage and wreak havoc to victim communities. News of the atrocities 
                  caused by these heartless invaders sent shivers to the bones of those unwarring communities.
                        <br/><br/>
                One day a flotilla of vintas with armed men aboard anchored at the bay ready to attack on signal. People scampered to safety to
                 neighboring hills leaving behind the weak, the sick and the old. Being true believers of the Christian faith, they implored the 
                 aid of their patron Saint, St. Joseph to spare them from the wrath of these heartless invaders. Their prayers were not left unanswered. 
                 Every time these invaders are poised to attack, they saw myriads of armed combatants with guns and cannons lined up at the shore in 
                 defense position, thus giving the bandits second thoughts of pursuing their attack. Every time these bandits are set to attack these 
                 armed combatants always appear. Sensing that they are vulnerable to these invincible defenders, the “moro” bandits called off the
                  attack.
                        <br/><br/>
                This always happened whenever there were invaders who threaten the peaceful community. News of these events circulated among other bandit 
                groups, which eventually deter them from raiding the community.
                        <br/><br/>
                For these countless miracles, the community was called “MILAGROS”.<br/><br/>

                  
                    <br/>
                    <h4>Politics </h4>
                    <br/>
                    <p>
                    Milagros is one of the original municipalities of Masbate since its creation as a New Province by virtue of Philippine Commission
                     Act. No. 105 enacted on March 18, 1901. It is the mother municipality of Cawayan, Balud and Mandaon until their creation under 
                     Executive Order 244.

                    The former dominant political clan in Milagros was the De Jesus Clan and followed by the Abapo Clan. In 2015, former Milagros town
                     Mayor Bernardito Abapo was arrested in a raid by the Philippine National Police and Philippine Drug Enforcement Agency on a 
                     suspected drug laboratory in Masbate province.[6] The results of the 2007 Local Elections replaced the Abapo Clan by the Magbalon
                      Clan Dr. Natividad Isabel Revil-Magbalon finished her 3-consecutive terms or a total of 9 years as being the mayor of the
                       municipality. Since Dr. Natividad Isabel Magbalon can no longer run for mayor, her husband Jose Magbalon Jr. run on her 
                       behalf and won the 2016 elections with 51.2% votes over his opponent Bobet Trias<br/>`</p>
                    <h4>Geography</h4>
                    <br/>
                    The municipality is endowed with rich mineral resources the as of to date has partially been tapped. Manganese is being extracted at barangays Pamangpangon and Taisan and as being exported to Japan. Large deposit of white clay, which maybe used in making of porcelain products and other novelty items can be found at Barangay Bonbon and Matanglad. Other precious minerals such as gold, copper and silver are also present in the area.

The municipality is bounded on the south by Asia Gulf which is part of the Visayan Sea, a rich existing fishing ground.

Aware of the need to conserve, protect and manage our marine resources, the LGU has passed the Municipal Fishery Ordinance and Instituted the Coastal Resource Management Program.

Under this program, Bangad Fish Sanctuary was established and Mangrove Reforestation was launched and sustained. Fish wardens are trained and deputized. Other coastal barangays has resorted to seaweeds farming as alternative livelihood and to prevent corals and sea grass from further degradation from drag net and trawl fishing
              
<!--CBTMS ABOUT -->

</div>

            </div>
            <div class="main-divider"></div>
            <div style="display:flex;width:100%;justify-content:center;">
                <img src="./assets/img/milagros.jpg" height="470" style="margin:2em;"   />
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