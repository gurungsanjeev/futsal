<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.html">
    <title>Document</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        .container {
            content: "";
            position: absolute;
            background: url(image/background-image.jpg) no-repeat center center / cover;
            filter: grayscale(20%);


            height: 100%;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            background-color: #5C854E;

        }

        nav {
            display: flex;

            align-items: center;
            box-shadow: 4px 11px 4px -4px rgba(0, 0, 0, 0.25);
            background: #BAC3B7;
            position: relative;
            justify-content: space-between;
            padding: 0px 120px 0px 120px;
            box-sizing: border-box;
        }



        .navbar_content {
            align-items: center;
            display: flex;
            list-style: none;
            float: left;
            padding: 10px 0px;
            font-family: poppins;
        }

        .navbar_content li a {
            align-items: center;
            display: flex;
            text-decoration: none;
            list-style: none;
            font-size: 20px;
            letter-spacing: 1px;
            float: left;
            padding: 10px 73px 10px 0px;
            color: black;
            font-weight: bold;
            font-family: poppins;

        }

        .navbar_content,
        li a:hover {
            color: green;
            transition: .4s;
        }


        .socialmedia_icon {
            display: flex;
        }

        .CTA {
            float: right;
            font-size: 3rem;
            float: right;
            position: absolute;
            top: 44%;
            color: white;
            right: 120px;
        }

        .CTA-button {
            display: flex;
        }

        button {
            text-decoration: none;
            color: black;
            border: 1.5px solid black;
            padding: 9px 57px;
            border-radius: 30px;
            margin-right: 15px;
            background-color: #FFB000;


        }

        button:hover {
            background-color: #DD9A06;
            transition: .4s;

        }




        .login-bttn {
            border: 1px solid black;
            padding: 8px 0.8px 8px 0;
            border-radius: 30px;
            background-color: transparent;
            color: white;
            width: 184px;
        }

        .login-bttn:hover {
            background-color: #5C854E;
            transition: .4s;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="header">
        <nav>
            <h2 class="logo" style="font-size: 30px;"><i class="fa-regular fa-futbol"></i>
                LOGO</h2>
            <div class="navbar_content">
                <li><a href="#">Home</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Contact</a></li>
                <div class="socialmedia_icon">
                    <li class="items"><a href="#"><i class="fa-brands fa-facebook fa-2x"
                                style="color: #155ecb;"></i></a>
                    </li>
                    <li class="items"><a href="#"><i class="fa-brands fa-instagram fa-2x"
                                style="color: #be16d4;"></i></a>
                    </li>

                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="CTA">
            <div class="text">
                <h3>Dream it</h3>
                <h4 style="color: #FFB000;">Achieve it</h4>

            </div>
            <div class="CTA-button">
                <a href="register.php"><button type="button">Register now</button></a>
                <a href="home.php"><button type="button" class="login-bttn">Login</button></a>
            </div>

        </div>
    </div>



    </div>

</body>

</html>