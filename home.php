<?php
include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        #home::before {
            content: "";
            position: absolute;
            background: url(image/background-image2.jpg) no-repeat center center / cover;
            filter: grayscale(20%);
            height: 100%;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
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

        .heading {
            text-align: center;
            color: white;
            margin-top: 2%;
            font-size: 3em;
            text-transform: capitalize;
        }

        .dropdown-container .selecting-items {
            display: flex;
            justify-content: space-around;
            padding: 0px 120px;
        }

        select {
            margin-left: 0%;
            margin-top: 6%;

            border: 3px solid white;
            padding: 13px 61px;
        }

        .button {
            position: relative;
            padding: 17.5px 68px;
            top: 56%;
            background-color: #FFB000;
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
                <li><a href="index.php">Home</a></li>
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

    <section id="home">
        <form action="">
            <h1 class="heading">select your area</h1>
            <div class="dropdown-container">
                <div class="selecting-items">
                    <select name="" id="Select_City">
                        <option value="">Select City</option>
                        <option value="Kathmandu">Kathmandu</option>
                        <option value="Lalitpur">Lalitpur</option>
                        <option value="Bhaktapur">Bhaktapur</option>
                    </select>
                    <select name="" id="categories">
                        <option value="">Categories</option>
                        <option value="Kathmandu">7A</option>
                        <option value="Lalitpur">5A</option>

                    </select>
                    <select name="" id="Rating">
                        <option value="">Rating</option>
                        <option value="Kathmandu">Below 3 Star</option>
                        <option value="Lalitpur">Above 3 Star</option>
                       
                    </select>
                    <div class="sumbit-bttn">
                        <a href="kathmandu_futsal.php"><input type="submit" value="submit" name="submit" class="button"></a>
                    </div>


                </div>




            </div>
        </form>
    </section>




    </div>

</body>

</html>
