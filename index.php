<?php
include "connection.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Online Library Managemennt System</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <script src="javascript.js"></script>

    <style>
    footer {
        border-top: 5px solid #e9d30b;
        height: 1000px;
        background-image: linear-gradient(blue, yellow)
    }

    /* footer span.facebook {
        margin:0px;
        
    } */
    .reg-btn a {
        text-decoration: none;
        color: rgb(14, 235, 14);

    }

    .reg-btn a:hover {
        text-decoration: none;
        color: white;
    }

    .fa-facebook,
    .fa-google,
    .fa-twitter,
    .fa-instagram {
        padding: 10px;
        font-size: 10px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        border-radius: 50%;
        /* border:1px solid; */



    }

    .header1 a {

        text-decoration:none;
    }

    .fa-facebook:hover,
    .fa-google:hover,
    .fa-twitter:hover,
    .fa-instagram:hover {
        opacity: 0.7;
    }

    .fa-facebook {
        /* background-color: rgba(0, 0, 0, 0.73); */
        background-color: #4267B2;
        color: white;
    }

    .fa-facebook:hover {

        color: white;
    }

    .fa-twitter {
        background-color: #1DA1F2;
        color: white;
    }

    .fa-twitter:hover {

        color: white;
    }

    .fa-instagram {


        /* change this to change the size*/

        background-color: rgba(0, 0, 0, 0.73);
        color: white;
    }

    .fa-google {
        background-color: rgba(0, 0, 0, 0.73);
        color: white;
    }
      .header1 a:hover{
border-bottom:1px solid black;
    }
    </style>

</head>

<body>
    <div class="body">
        <header style="position:fixed;left:0%;top:0%;width:100%" class="homeheader">
            <div class="logo">
                <img src="logo.png" alt="logo">
            </div>

            <nav class="nav">
                <ul>
                    <li class="header1"><a href="index.php" class="fa fa-home"  ><span>Home</span> </a> </li>
                    <!-- <li class="header1"><a href="Book_home.php" class="fa fa-book"  ><span>Books</span> </a> </li> -->
                    <li class="header1"><a href="User_log_in.php" class='fa fa-user'>user</a> </li>
                    <li class="header1"><a href="Admin_log_in.php" class='fa fa-user'></i>admin</a></li>
                    <li class="header1"><a href="About.php">about-us </a></li>
                    <li class="header1"><a href="#contact" class="fa fa-contact">contact</a> </li>
                    <li> <Button type="submit" class="reg-btn registerbutton" name="Sign_up"><a href="user-signup.php"
                                style="text-decoration:none; "> + Sign Up</a><button></li>
                </ul>
            </nav>
        </header>
        <section class="home-section">
            <div class="section-box" id="section">
                <h1 class="welcome">Welcome to our Library </h1>
                <div class="admin-box" id="div1">

                    <h1 style="padding-left:10px;padding-top:10px"><img src="user login.ico" alt="" width="70px;"
                            height:="70px;"
                            style="margin-left:0px; margin-top:-60px;border-radius:50%;border:1px solid black;background-color:blue;">
                        <span style="margin-left:40px"> Admin log in</span> </h1>
                    <!-- <form  id="adminloginbutton"   name="formal2" onclick="login()"    action="User_log_in.php" method="get">   -->
                    <!-- <input type="submit"id="adminloginbutton" class="fa fa-arrow-right" name="admin_log-in" value="Log in">  -->
                    <a href="Admin_log_in.php" style="text-decoration:none;"><Button id="adminloginbutton" type="submit"
                            class="fa fa-arrow-right"> </Button></a>


                </div>
                <div class=" user-box" id="div2">
                    <h1>user log in </h1>
                    <a href="user_log_in.php" style="text-decoration:none"><Button id="userloginbutton" type="submit"
                            class="fa fa-arrow-right"> </Button></a>
                </div>

            </div>
        </section>
        <footer style="text-align:center;">
            <div style=" font-size:100px; margin-top: 100px;text-align:center;background-color: rgba(32, 162, 222, 0.219); background-color: rgba(0, 0, 0, 0.815);
    color: rgba(255, 255, 255, 0.753);">
                <h1 class="quote" style="display:inline-block;margin-left:0px;color:yellow;"> We are here to create
                    knowledgeable
                    persons</h1>
                <h2 style="display:inline-block">Educate yourself</h2>


            </div>
            <div style="padding-left:30%;">
                <h2 class="quote1"> <i style="color:green;">EBW</i> Library management System</h2>
            </div>
            <p style="margin-top:20px;color:white">
            <p style=" color:white;font-size:20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro a
                quaerat sunt in <br>vel, illo accusantium voluptatem natus deserunt illum tenetur repellendus nam
                tempore eveniet! Officia exercitationem inventore sint asperiores. <br>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro a quaerat sunt in vel, illo accusantium
                voluptatem natus deserunt illum tenetur repellendus nam tempore eveniet! Officia exercitationem
                inventore sint asperiores.<br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro a quaerat
                sunt in vel, illo accusantium voluptatem natus deserunt illum tenetur repellendus nam tempore eveniet!
                Officia exercitationem inventore sint asperiores.</p>
            </p>
            <div
                style=" ;margin-left:350px;height:200px;text-align:center;width:600px;background-image: linear-gradient( rgba(75, 218, 194, 0.76), rgba(75, 218, 194, 0.76));border-radius:0px">
                <a name="contact"></a>
                <!-- <div style="text-align:center;margin-top: 100px;">contact</div> -->
                <h1 class="info" style="text-align:center;margin-top: 150px;color:white; padding: 30px;"> Email: &nbsp;
                    Bizuayehuagide@gmail.com <br>
                    Mobile: &nbsp;+251969063839</h1>
                <div style=" text-align:center; margin-top:30px">
                    <span class="facebbok"><a href="#" class="fa fa-facebook"></a></span>
                    <span class="facebbok"><a href="#" class="fa fa-google"></a></span>
                    <span class="facebbok"><a href="#" class="fa fa-twitter"></a></span>
                    <span class="facebbok"><a href="#" class="fa fa-instagram"></a></span>
                </div>
                <div style=" text-align:center; margin-top:10px">
                    <span class="header1"><a href="index.php">Home</a></span>
                    <span class="header1"><a href="About.php">About-us</a></span>
                    <span class="header1"><a href="Admin_log_in.php">Admin</a></span>
                    <span class="header1"><a href="User_log_in.php">User</a></span>
                    <span class="header1"><a href="index.php#contact">Contact</a></span>
                </div>

            </div>
            <div style="position:absolute;top:298%;left:0%;width:100%;background-color:black;height:5%;color:white;">
                <h1 style="padding:10px">&copy; Copyright 2022 All rights reserved</h1>
            </div>
        </footer>

    </div>
    <div style="position:fixed;top:40%;left:10%;">
        <div class="facebbok1"><a href="#" class="fa fa-facebook"></a></div>
        <div style="margin-top:5px;" class="facebbok1"><a href="#" class="fa fa-google"></a></div>
        <div style="margin-top:5px;" class="facebbok1"><a href="#" class="fa fa-twitter"></a></div>
        <div style="margin-top:5px;" class="facebbok1"><a href="#" class="fa fa-instagram"></a></div>

    </div>
</body>


</html>