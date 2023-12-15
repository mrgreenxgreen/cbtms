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
                height: 300px;
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
            min-width: 50px;
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
    <div class="login-background">
        <div style="display:flex;gap:2em;box-shadow:1px 1px 10px 2px #333;      backdrop-filter: blur(16px) saturate(180%); -webkit-backdrop-filter: blur(16px) saturate(180%); background-color: rgba(17, 25, 40, 0.75);padding:15px;padding-right:50px;border-radius:25px;">
        <div style="width:80px;height:80px;padding:10px;border-radius:50%;"><img src="./assets/img/cbtms_logo.png"  style="width:100%;"alt="logo"/></div>
        <h1 style="color:#00cc00;font-size:50px;text-shadow:1px 2px 5px darkgreen;"> <span style="color:dodgerblue;text-shadow:1px 1px 2px darkblue"> Centralized</span> Barangay Transaction Management System </h1>
        </div>  
            <br/>
        <div class="card">
        <form action="loginy.php" method="post" name="form" style="max-width:500px;display:flex;flex-direction:column;justify-content:center;align-items:center;color:white;">
        <h3><a href="index.php" style="color:#00cc00;text-decoration:none;"><span style="color:dodgerblue;">C</span>BTMS</a></h3>
            <!-- username -->
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username" name="username" required>
            </div>
            <!-- password -->
            <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field" type="password" placeholder="Password" name="password" required>
                </div>

                <input type="submit" value="Login" name="SubmitAdminLogin" id="Submit" />
                <br/>
                <small>Forgot Password?</small>
            </form>
        </div>

        </div>
            <!-- login form -->
                <!-- <h1>CBTMS</h1>
                <h3>Authorized users only </h3>
                <div>
                    <form action="loginy.php" method="post" >
                        <input type="text" name="username" placeholder="username" />
                        <input type="password" name="password" placeholder="password" />
                        <input type="submit" name="SubmitAdminLogin" value="login" />
                    </form>
                </div>
        -->
    </body>
</html>