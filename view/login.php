<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Read the JSON file contents
    $jsonData = file_get_contents('../data/users.json');

    // Convert JSON data to an array
    $users = json_decode($jsonData, true);

    // Find the user with matching email and password
    $user = array_filter($users, function($user) use ($email, $password) {
        return $user['email'] === $email && $user['password'] === $password;
    });

    if (!empty($user)) {
        // Redirect to another page on successful login
        header('Location: landing.php');
        exit();
    } else {
        //echo 'Invalid email or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota&family=Inter&display=swap" rel="stylesheet">
    <style>

        body{

            display: flex;
            justify-content: center; 
            align-items: center; 
            height: 100vh;
            margin: 0;
            font-family: 'Bellota', 'cursive';

        }
        h6{
            margin: 0;
            padding-bottom: 10px;
            font-weight: 400;
            padding-bottom: 12%;
            

        }
        h2{
            margin: 0;
            padding-bottom: 5px;
            font-weight: 400;
            font-size: 25px;

        }
        .skycolor{

            color: #89BFFF;
        }
        .login{

            border: 1px solid whitesmoke;
        }
        .upper{

            display: flex;
            
        }
        .image{

            width: 50%;
        }
        .image img{
            height: 100%;
            width: 80%;
        }

        .signup{

            padding-top: 10%;
            width: 30%;
            font-family: 'Bellota', 'cursive';
            font-weight: lighter;


        }
        .inputs{

            background-color: #D9D9D9;
            border: none;
            outline: none;
            border-radius: 7px;
            padding: 3%;
            padding-left: 30px;
            padding-right: 30px;
            font-family: 'Bellota', 'cursive';
            font-size: 12px;
            width: 400px;
            height: 25px;


        }

        .button{

            text-decoration: none;
            color:white;
            background-color: #89BFFF;
            padding: 8px 30px;
            border: none;
            border-radius: 5px;
            font-weight: 400;
            font-family: 'Inter', sans-serif;


        }
        .buttonAccount{

            display: flex;
            font-size: 12px;
            justify-content: space-between;
            padding-right: 15px;
            width: 450px;

        }

        .input-icon-login {
            position: absolute;
            left: 2%;
            top: 39%;
            transform: translateY(-50%);
        }
        .input-icon-lock {
            position: absolute;
            left: 3%;
            top: 36%;
            transform: translateY(-50%);
        }

        .input-icon-img-login {
            width: 22px;
            height: 22px;
        }
        .input-icon-img-lock {
            width: 15px;
            height: 15px;
        }
        .input-container {

          position: relative;

        }

        footer{

            background-color: #D9D9D9;
            display: flex;
            justify-content:center;
            font-size: 10px;
            padding-top: 2%;
            padding-bottom: 2%;
        }


        footer a{

            padding-right: 1.5%;
            color: #5f85b2;
            font-size: 12px;

        }
    </style>
</head>
<body>
    
    <body>

        <section class="container">

            <div class="login">
                <section class="upper">
                    <div class="image">
                    <img src="images/mefolio banner.png">

                    </div>
            
                    <div class="signup">
                        <h2 class="skycolor">Log In to Your Account</h2>
                        <h6 class="skycolor">Manage Your Portfolio, share your world</h3>
                    <form method="POST" action="">
                        <div class="input-container">
                            <span class="input-icon-login">
                                <img class="input-icon-img-login" src="images/login.png">
                              </span>
                            <input class="inputs" type="text" name="email" placeholder="Email or Username" required><br><br>
                        </div>
                        <div class="input-container">
                            <span class="input-icon-lock">
                                <img src="images/padlock.png">
                              </span>
                            <input class="inputs" type="text" name="password" placeholder="Password" required><br><br>
                        </div>

                        
                        <div class="buttonAccount">

                            <input class="button" type="submit" value="LOGIN">
                            <p>Don't have an Account? <a href="signup.php">Signup</a> </p>

                        </div>
                    </form>
                    </div>
        
                    
                </section>
                <footer>
                    <a href="">About Us</a>
                    <a href="">Our Policy</a>
                    <a href="">Terms and Conditions</a>
                    <a href="">© MeFolio by Team MouseBreaker 2023</a>
                </footer>
            </div>
        </section>
    </body>


</body>
</html>



