<?php
include "connection.php"; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>about us</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <script src="javascript.js"> </script>
    <script type="text/javascript">

    </script>
    <style>
    .reg-btn a {
        text-decoration: none;
        color: rgb(14, 235, 14);

    }
#signin{
    text-decoration: none;
        background-color: rgb(14, 235, 14);
        color:white;
}
/* #signin:hover{
    text-decoration: none;
        color: rgb(14, 235, 14);
        background-color:white;
}
#link:hover{
    color: rgb(14, 235, 14);
} */
    .containheader {
        position: relative;
        left: 33.3%;
        top: 8%;
        width: 500px;
        background: url("developers.jpg");
        color: white;
        border-radius: 20px;
        height:100px;
        background-image: linear-gradient(  rgba(0, 0, 0, 0.3),white);
    }
    .contain {
        position: relative;
        left: 9%;
        top: 10%;
       
        background: linear-gradient(to bottom,yellow,violet);
        color: white;
        border-radius: 20px;
        margin-top:80px;
        width:1100px;
        height:600px
    }
    /* .image {
    
 
    } */
    /* .image{
  
  background-color: #DDFFF7;
  position: relative;
  box-shadow: 10px 10px 42px 0 rgba(0,0,0,0.75);
} */
/* .image:after, .image:before{
  mix-blend-mode:multiply;
  filter:none;
  z-index: -1;
  content:'';
  width:calc(100% + (50px * 2));
  height:calc(100% + (50px * 2));
  position: absolute;
  display: block;
  animation: border 10s ease-in-out infinite;
  transform:translateX(-50px) translateY(-50px);
}
@keyframes border {
  0%, 100% {
    -webkit-clip-path: polygon(0 0, calc(100% - (33.3333333333px)) calc(0% + (33.3333333333px)), 100% 100%, calc(0% + (33.3333333333px)) calc(100% - (33.3333333333px)));
            clip-path: polygon(0 0, calc(100% - (33.3333333333px)) calc(0% + (33.3333333333px)), 100% 100%, calc(0% + (33.3333333333px)) calc(100% - (33.3333333333px)));
  }
  50% {
    -webkit-clip-path: polygon(calc(0% + (33.3333333333px)) calc(0% + (33.3333333333px)), 100% 0, calc(100% - (33.3333333333px)) calc(100% - (33.3333333333px)), 0 100%);
            clip-path: polygon(calc(0% + (33.3333333333px)) calc(0% + (33.3333333333px)), 100% 0, calc(100% - (33.3333333333px)) calc(100% - (33.3333333333px)), 0 100%);
  }
} */

/* .image:after{
  animation-delay: -5s;
  background-color: #93e1d8;
  clip-path: polygon(0 0, calc(100% - (33.3333333333px)) calc(0% + (33.3333333333px)), 100% 100%, calc(0% + (33.3333333333px)) calc(100% - (33.3333333333px)));
}
.image:before {
  background-color: #AA4465;
    clip-path: polygon(calc(0% + (33.3333333333px)) calc(0% + (33.3333333333px)), 100% 0, calc(100% - (33.3333333333px)) calc(100% - (33.3333333333px)), 0 100%);
}

.image:hover:after{
  animation-delay: -0.1s;
}
.image:hover:before, .image:hover:after {

          animation-duration: 0.2s;
} */
    .description {
    
    margin-top:40px;
        }
    

    .contain-each {
        position:relative;
        top:25vh;
        width:230px;
        display:inline-block;
        


    }
    
    #contain-each0 {
         left:10vh  

    }
    #contain-each1 {
            left:35vh  

    }
    #contain-each2 {
        left:60vh       

    }
.description{
    
}
    img {
        border-radius: 40vh;
        border:10px unset black;
    }
    </style>
</head>

<body>
    <header>
        <div class="user-login-logo">
            <h1 style="margin-top:10px;"> <a href="index.php" style="text-decoration: none;color:Green; margin:30px;padding-top:30px;"><i style="color:blue;font-family:'Matura MT Script Capitals';"> EBW </i> Library Management System </a></h1>
        </div>
        <nav class="nav">
            <ul>
                <li class=""> <a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li class="header1"><a href="index.php#contact" class="fa fa-contact">contact</a> </li>
                            <li style="margin-right:0px; " >  <Button id="signin" type="submit" class="reg-btn registerbutton" name="Sign_up"><a href="User_log_in.php"
                            style="text-decoration:none;color:white " id="link"> Sign in</a><i class='fa fa-user'></i><button><Button   type="submit" class="reg-btn registerbutton"
                                name="Sign_up"><a href="user-signup.php" style="text-decoration:none; "> + Sign Up</a><button></li>
            </ul>
        </nav>
    </header>
    <section class="user-section" style="background-attachment: fixed;background-image: linear-gradient(  rgba(0, 0, 0, 0.3),black),linear-gradient(  rgba(0, 0, 200, 0.3),black);">
        <div class="containheader" >
            <h1 style="color:blue;font-size:50px;text-align:center;padding-top:15px;">Developers</h1>
        </div>
        <div class="contain"  >
            <div class="contain-each" id="contain-each0">
                <div class="image">
                    <img src="develp.jpg" alt="" width="200px" height="200px">
                </div>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa esse
                </div>
            </div>
            <div class="contain-each" id="contain-each1">
                <div class="image" id="image2">
                    <img src="devop.jpg" alt="" width="200px" height="200px">
                </div>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa esse
                </div>
            </div>
            <div class="contain-each" id="contain-each2">
                <div class="image" id="image3"  >
                    <img src="developer.jpg" alt="" width="200px" height="200px">
                </div>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa esse
                </div>
            </div>

        </div>

    </section>
    <?php
if(isset($_POST['Sign_up']))
{
    $count=0;
    $sql="SELECT username FROM student";
    $result=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($result))
{
    if($row['username']==$_POST['username'])
    {
        $count=$count+1;
    }
}
if($count==0){
mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[email]','$_POST[password]','$_POST[userid]','$_POST[phone_Number]');");

    ?>
    <script type="text/javascript">
    alert("Registered successfully");
    window.location = "User_log_in.php";
    </script>
    <?php 
    }
else
{
    ?>
    <script type="text/javascript">
    alert("The username already exists");
    </script>
    <?php

}
 
}
?>


</body>

</html>