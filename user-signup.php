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
    <title>User sign up</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <script src="javascript.js"> </script>
    <script type="text/javascript">
    
    </script>
    <style>
             .reg-btn a {
    text-decoration: none;
    color:rgb(14, 235, 14);
    
  }
    </style>
</head>

<body>
    <header>
        <div class="user-login-logo">
            <h1 style="margin-top:10px;"> <a href="index.php" style="text-decoration: none;color:violet; mrgin 10px;"><i style="color:gold;font-family:'Matura MT Script Capitals';">EBW</i> Library Management System</a></h1>
        </div>
        <nav class="nav">
            <ul>
                <li class="header1"> <a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li class="header1"><a href="About.php">about-us </a></li>
                <li class="header1"><a href="index.php#contact" class="fa fa-contact">contact</a> </li> 
                <li> <Button   type="submit" class="reg-btn registerbutton" 
                                name="Sign_up"><a href="User_log_in.php" style="text-decoration:none; " >  Sign in</a><i class='fa fa-user'></i><button></li>
            </ul>
        </nav>
    </header>
    <section class="user-section" style="background-image: linear-gradient(  rgba(255, 255, 255, 0.3),white),url('image6.jpg');">
    <marquee behavior="" direction="ltr" style="color:mediumslateblue; font-size: 50px;">Welcome to
            registration page 
            please fill those fields appropriately
        </marquee>
        <div class="section-box-log-in" style="background-image: linear-gradient(to bottom,rgba(0, 0, 0, 0.6), gray );left:35%;">

            <div class="log-in-head">
              <legend>  
                <h1 >User Registration Form </h1>
               </legend>
            </div>
            <form   action="" onsubmit="return validation()" name ="userSignup"  method="post">
                <fieldset>
                <div class="form">
                    <div>
                        <label for="fname">First Name:&nbsp;</label>
                        <input style="" id="fname" type="text" name="firstname" value="" placeholder="Enter Your Name">
                    </div>
                    <div>
                        <label for="lastname">Last Name:&nbsp;</label>
                        <input id="lname" type="text" name="lastname" value="" placeholder="Enter Your Last Name">
                    </div>
                    <div>
                        <label for="Username">User Name:&nbsp;</label>
                        <input id="username" type="text" name="username" value="" placeholder="Enter Your Username">
                    </div>
                    <div>
                        <label for="email">Email:&nbsp;</label>
                        <input id="email" type="email" name="email" value="" placeholder="Enter Your Email Address">
                    </div>
                    
                    <div>
                        <label for="Userpassword">Password: &nbsp;</label>
                        <input id="password" type="password" name="password" value=""
                            placeholder="Enter Your Password">
                    </div>
                    <div>
                        <label for="userid">ID:&nbsp;</label>
                        <input id="userid" type="text" name="userid" value="" placeholder="Enter Your Id Number">
                    </div>
                    <div>
                        <label for="phoneNumber">Phone Number:&nbsp;</label>
                        <input id="phone" type="text" name="phoneNumber" value="" placeholder="Enter Your Phone number">
                    </div>
                    <input id="sign-up" type="submit"  name="Sign_up" value="sign up">
                    <input id="clear" type="reset" name="clear" value="Clear">

                    <div>
                        <p> if you have an account <a style="color:violet;text-decoration:none;" href="User_log_in.php">log in </a> here </p>
                    </div>
                </div>
                </fieldset>
            </form>

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
    <script type="text/javascript" >
        alert("Registered successfully"); 
        window.location="User_log_in.php";
        </script>
             <?php 
    }
else
{
    ?>
    <script type="text/javascript" >
        alert("The username already exists");
    </script>
        <?php

}
 
}
?>
 
    
</body>

</html>