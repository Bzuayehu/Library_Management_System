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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://www.flaticon.com/free-icons/close" title="close icons">
    <title> DashBoard</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <script src="javascript.js"></script>
    <style>
        #requestinformation{
            height: 700px;
            width: 600px;
            background-color:black;
            opacity:0.4;
            color:white;
        }
        #updateanddelete{
            height: 600px;
            width: 600px;
            background-color:Black;
            opacity:0.4;
            color:white;
            text-align:center;
            position:absolute;
            left:30%;
            top:20%;
            align-content:vertical;
        }
    </style>
</head>

<body>
    <div class="bookbody">
        <header>
            <div class="logo">
                <img src="logo.png" alt="logo">
            </div><?php
           if( isset($_SESSION['login_user']))
           { ?><nav class="nav">
                <ul>
                     <li class="welcome-nav"> <a href="#"><?php echo "<i class='fa fa-user-circle'></i>".$_SESSION['login_user']?></a></li>
                    <li class=""> <a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li class=""><a href="About.php">about-us </a></li>
                    <li class=""> <a href="index.php#contact">Contact</a></li>
                    <li class=""><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a></li>
                

                </ul>
            </nav>
            <?php
           }
           else
           {
            ?><nav class="nav">
            <ul>
                <li class=""> <a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li class=""><a href="About.php">about-us </a></li>
                <li class=""> <a href="index.php#contact">Contact</a></li>
                <li class=""><a href="User_log_in.php"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a></li>
                
            </ul>
        </nav>
        <?php
    }
    ?>
           
        </header>
         
        <section style="height:750px;"class="books-section">
        <?php
 ;
    
	# code...
    ?>
     
 
<div  id="updateanddelete">
<form   action=""   name="book_information"   method="POST">
                 
                       
                 <div style="margin-top:150px;">
                     <label for="book-name">Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                     <input id="lname" type="text" name="username" placeholder="entre ur username"  >
                 </div>
                 <div>
                     <label for="author">New Password:&nbsp;</label>
                     <input style="color:white" id="lname" type="text" name="password" placeholder="new password"  >
                 </div>
                  
                 <input id="sign-up" type="submit" name="Confirm" value="confirm">
                 <!-- <input id="clear" onclick="return confirm('are you sure you want to delete the this book?');" type="submit" name="delete" value="delete"> -->
             
            </form>
<?php

 
  $uname=$_GET['username'];
  $result2=mysqli_query($db,"SELECT * FROM student where username=$uname");
  $row2=mysqli_fetch_assoc($result2);
    if (isset($_POST['Confirm']))
    {
    $updatesql="UPDATE student SET password='$_POST[password]' where username=$_POST[username]";
	$updatesql_result=mysqli_query($db,$updatesql);
    header('location: User_log_in.php.php');
        }
      
    

        
 
?>  
</div>
</section>

<footer style="text-align:center;">
    <div class="info"> Email: &nbsp; Bizuayehuagide@gmail.com</div><span> &nbsp; Mobile: &nbsp;+251969063839</span>
    <div class="info"> Email: &nbsp; worku@gmail.com</div><span> &nbsp; Mobile: &nbsp;+251956063839</span>
    <div class="info"> Email: &nbsp; Estegenet@gmail.com</div><span> &nbsp; Mobile: &nbsp;+25194907659</span>
    
</footer>

</div>
</body>
</html>
 