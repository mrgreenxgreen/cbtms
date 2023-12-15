
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> CBTMS</title>

<link rel="icon" type="image/x-icon" href="./assets/img/cbtms_logo.png">
<link  rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css" />
        <link  rel="stylesheet" href="./assets/fontawesome/css/all.min.css" />
        
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        
        <style>
            body{
                margin:0px;
                padding:0px;
                box-sizing:border-box;
                font-family: 'Roboto', sans-serif;

            }
            .login-background
            {
                background-image:url('./assets/img/wallpaper1.jpg');
                background-size: cover;
                border:1px solid green;
                height:100vh;
                width:100vw;
                display:flex;
                align-items:center;
                justify-content:center;
                flex-direction: column;
            }
            .card {
                box-shadow: 1px 1px 10px 1px #333;
            
                width:  600px;
                display:flex;
                justify-content:center;
                align-items: center;
                backdrop-filter: blur(16px) saturate(180%);
                -webkit-backdrop-filter: blur(16px) saturate(180%);
                background-color: rgba(17, 25, 40, 0.75);
                border-radius: 12px;
                border: 1px solid rgba(255, 255, 255, 0.125);
            }

            
            .x{
              
        
               
            }
           

            .input-container {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            width: 450px;
            margin-bottom: 15px;
            
            }

            .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width:100px;
            text-align: center;
            border-radius:15px 0px 0px 15px;
            }

            .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
            }

            .input-field:focus {
            border: 2px solid dodgerblue;
            }

            /* Set a style for the submit button */
            #Submit {
            background-color: dodgerblue;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border:1px solid white;
            width:150px;
            opacity: 0.9;
            text-align: center;
            margin:auto;
            border-radius:15px;
            font-size: 25px;
            }

            #Submit:hover {
            opacity: 1;
            }
        </style>
    </head>
<body>
  
    <main>
    <div class="login-background">
        <div style="display:flex;gap:2em;box-shadow:1px 1px 10px 2px #333;      backdrop-filter: blur(16px) saturate(180%); -webkit-backdrop-filter: blur(16px) saturate(180%); background-color: rgba(17, 25, 40, 0.75);padding:15px;padding-right:50px;border-radius:25px;">
        <div style="width:80px;height:80px;padding:10px;border-radius:50%;"><img src="./assets/img/cbtms_logo.png"  style="width:100%;"alt="logo"/></div>
        <h1 style="color:#00cc00;font-size:50px;text-shadow:1px 2px 5px darkgreen;"> <span style="color:dodgerblue;text-shadow:1px 1px 2px darkblue"> Centralized</span> Barangay Transaction Management System </h1>
        </div>  
            <br/>
        
                   
            <!-- <form  action="loginx.php" method="post" name="form">
                <div class="x">
                
                <input type="text" name="username" placeholder="username" required/>
                <div>
                <div class="x">
                <input type="password" name="password" placeholder="password" required/>
                </div>
                <input type="submit" value="login" name="Submit" id="Submit" />
            </form> -->
       <!-- upload image -->
       
</form>


            <div class="card">
         


            <form action="registerx.php" method="post" name="form" style="max-width:500px;display:flex;flex-direction:column;justify-content:center;align-items:center;color:white;">
            <h3><a href="index.php" style="color:#00cc00;text-decoration:none;font-size:20px;"><span style="color:dodgerblue;">C</span>BTMS - REGISTRATION</a></h3>


            <div style="height:150px;width:150px;background-color:red;border-radius:50%;margin:10px;">
        
            meow
        </div>
                <!-- Brgy   -->
                <div class="input-container">
               

                    <i class="fa fa icon"><small style="font-size:10px;">Barangay</small></i>
                    <select style="width:inherit;" name="brgy">
                        <option value="BACOLOD">BACOLOD</option>
                        <option value="BANGAD">BANGAD</option> 
                        <option value="BARA">BARA </option>
                        <option value="BONBON">BONBON</option>
                        <option value="CALASUCHE">CALASUCHE</option>
                        <option value="CALUMPANG">CALUMPANG</option>
                        <option value="CAPACULAN">CAPACULAN</option>
                        <option value="CAYABON">CAYABON</option>
                        <option value="GUINLUTHANGAN">GUINLUTHANGAN</option>
                        <option value="JAMORAWON">JAMORAWON</option>
                        <option value="MAGSALANGI">MAGSALANGI</option>
                        <option value="MATAGBAC">MATAGBAC</option>
                        <option value="MATANGLAD">MATANGLAD</option>
                        <option value="MATIPORON">MATIPORON</option>
                        <option value="MOISES R. ESPINOSA">MOISES R. ESPINOSA</option>
                        <option value="NARANGASAN">NARANGASAN</option>
                        <option value="PAMANGPANGON">PAMANGPANGON</option>
                        <option value="POBLACION EAST" selected>POBLACION EAST</option>
                        <option value="POBLACION WEST">POBLACION WEST</option>
                        <option value="PARAISO">PARAISO</option>
                        <option value="SAN ANTONIO">SAN ANTONIO</option>
                        <option value="SAN CARLOS">SAN CARLOS</option>
                        <option value="SAWMILL">SAWMILL</option>
                        <option value="TAGBON">TAGBON</option>

                    </select>
                </div>
                <!-- username -->
                <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input class="input-field" type="text" placeholder="Username" name="username" required>
                </div>

                <!-- password -->
                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field" type="password" placeholder="Password" name="password" minlength="8" required>
                </div>
                  <!-- confirm password -->
                  <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field" type="password" placeholder="Confirm Password" name="confirmpassword" minlength="8" required>
                </div>
                <!-- name: last name, first name, middle name -->
                <div class="input-container">
                    <i class="fa fa icon"><small style="font-size:10px;">Last Name</small></i>
                    <input class="input-field" type="text" placeholder="Last name" name="lastname" required>
                </div>
                <div class="input-container">
                    <i class="fa fa icon"><small style="font-size:10px;">First Name</small></i>
                    <input class="input-field" type="text" placeholder="First name" name="firstname" required>
                </div>
                <div class="input-container">
                    <i class="fa fa icon"><small style="font-size:10px;">Middle Name</small></i>
                    <input class="input-field" type="text" placeholder="Middle name" name="middlename" required>
                </div>
                <!-- Phone -->
                <div class="input-container">   
                    <i class="fa fa-phone icon"></i>
                    <input class="input-field" type="text" placeholder="Phone Number" name="phoneNumber"  minlength="11" maxlength="11" required>
                </div>
                <!-- Mail -->
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field" type="email" placeholder="Email" name="email" required>
                </div>
                

                <input type="submit" name="RegisterSubmit" value="Register" iD="Submit" />
                <br/>
                
            </form>
            
        </div>
        </div>

    </main>
</body>
</html>