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
    <title>Admin Log in</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <style>
           #username,#password{
            border-radius:0px;
            text-align:center;
            outline:none;
            border-color:gold;
        }
        #username:hover,#password:hover{
            background-color:transparent;
            border-radius:0px;
        }
        #log-in{
            border-radius:20px;
            width: 300px;
            border: 1px solid white;
        }
        #log-in:hover{
            background-color:green;
        }
        ::placeholder{
            color: rgb(151, 144, 144);
        }
    </style>
</head>

<body>
    <header>
        <div class="user-login-logo">
            <h1 style="margin-top:10px;"> <a href="index.php" style="text-decoration: none;color:gold"><i
                        style="color:violet;font-family:'Matura MT Script Capitals'">EBW</i> Library Management System</a></h1>
        </div>
        <nav class="nav">
            <ul style=" Float:left:">
                <li class="header1"> <a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li class="header1"><a href="Admin-signup.php"><i class="fa fa-registered"
                            aria-hidden="true"></i>register</a></li>
                <!--sign up button at top right -->
            </ul>
        </nav>
    </header>
    <section class="user-section"
        style="width:100%;background-image: linear-gradient(  rgba(255, 255, 255, 0.3),white),url('image6.jpg');">
        
        <div style="position:absolute;left:5%;top:45%;">
             <p style="color:orange;font-size:40px;text-align:center;margin-left:0px"> <span style="font-family:'Matura MT Script Capitals'" >EBW</span> <br>library management System</p> 
            <p style="margin-top:20px;font-size:20px">Aims</p>
            <p style="margin-top:50px;font-size:20px;color:orange;width:700px">Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Ullam voluptas odit
                labore eaque, aspernatur officiis numquam provident
                molestias eius odio velit ut, debitis atque enim! Veritatis unde beatae quo officia.</p>
                <p style="margin-top:30px;font-size:20px;color:orange;width:700px">Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Ullam voluptas odit
                labore eaque, aspernatur officiis numquam provident
                molestias eius odio velit ut, debitis atque enim! Veritatis unde beatae quo officia.</p>
        </div>
        <div class="section-box-log-in" style="background-image:linear-gradient(orange,black);height:410px;width:400px">
            <img src="user login.ico" alt="" width="100px;" height:="100px;"
                style="margin-left:30px;margin-top:-50px;border-radius:50%;border:1px solid black;background-color:blue;">

            <div class="log-in-head" style=" margin-left:0px;">
                <h1>Admin log in</h1>
            </div>
            <form id="loginform" name="log-in-page" action="" method="POST">
                <div class="form">
                    <div> 
                        <input id="username" type="text" name="username" value="" placeholder="Username">
                    </div>
                    <div> 
                        <input id="password" type="password" name="password" value="" placeholder=" Password">
                    </div>
                    <input id="log-in" type="submit" name="log-in" value="Log in" style="background-color:green;margin-top:20px;">
                 <!-- <input id="clear" type="reset" name="clear" value="Clear"> -->
                    <div> <a style="color:violet;text-decoration:none;"href="">Forget password</a>
                        <p> Don't have an account? please <a style="color:violet;text-decoration:none;" href="Admin-signup.php">sign up </a> here </p>
                    </div>
                </div>

            </form>
            <?php
if(isset($_POST['log-in']))
{
    $count=0;
    // $sql="SELECT * FROM `Student` where username='c' && password='d';";
    $result=mysqli_query($db,"SELECT * FROM `admin` where username='$_POST[username]' && password='$_POST[password]';");
   $count= mysqli_num_rows($result);
   if ($count==0)
     {
        ?>
            <!--<script type="text/javascript" >
            alert("the username and the password doesn't match");
        </script>-->
            <div style=" color:red; margin:30px;font-size:20px;">
                <strong>The username and the password doesn't match</strong>
                <strong styele="padding-left:30px;">please try again!</strong>
            </div>
            <?php
     }
     else
     {
        $_SESSION['login_Admin']=$_POST['username'];
        ?>
            <script type="text/javascript">
            window.location = "managebooks.php";
            </script>
            <?php 
     }
}
    ?>
        </div>
      
    </section>
    <div style="position:absolute;left:30%;top:130%;color:yellow;font-size:40px;text-align:center;">
           <h1><span style=" font-family:'Matura MT Script Capitals';color:blue">EBW</span> library management System</h1>
        </div>
 

</body>

</html>