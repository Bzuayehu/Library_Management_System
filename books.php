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
    <title>books</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <script src="javascript.js"></script>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

    function profile() {

        document.getElementById("profile").style.display = "inline-block";
        document.getElementById("profile").style.color = "white";
        //  document.getElementById("profile").style.width = 50%;
        document.getElementById("profile").style.position = "fixed";
        document.getElementById("profile").style.left = "120vh";
        document.getElementById("profile").style.top = "7vh";
        document.getElementById("profile").style.zIndex = "4";
         
    }

    function close2() {

        document.getElementById("profile").style.display = "none";


    }

    function viewBooks() {

        document.getElementById("searchbox").style.display = "none";
        document.getElementById("requestBook").style.display = "none";
        document.getElementById("requestinformation").style.display = "none";
        document.getElementById("EditBook").style.display = "none";
        document.getElementById("returnBook").style.display = "none";
        document.getElementById("container").style.display = "inline-block";


    }

    function requestBook() {

        document.getElementById("container").style.display = "none";
        document.getElementById("searchbox").style.display = "none";
        document.getElementById("container2").style.display = "none";
        document.getElementById("requestinformation").style.display = "none";
        document.getElementById("users").style.display = "none";
        document.getElementById("returnBook").style.display = "none";
        document.getElementById("requestBook").style.display = "inline-block";

    }


    function viewrequestInfo() {

        document.getElementById("container").style.display = "none";
        document.getElementById("container2").style.display = "none";
        document.getElementById("searchbox").style.display = "none";
        document.getElementById("requestBook").style.display = "none";
        document.getElementById("returnBook").style.display = "none";
        document.getElementById("requestinformation").style.display = "inline-block";

    }

    function returnBooks() {

        document.getElementById("container").style.display = "none";
        document.getElementById("searchbox").style.display = "none";
        document.getElementById("container2").style.display = "none";
        document.getElementById("requestBook").style.display = "none";
        document.getElementById("requestinformation").style.display = "none";
        document.getElementById("returnBook").style.display = "inline-block";


    }
    </script>
    <style>
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

    .facebook1 {

        margin-top: 10px;
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
    #profile {
    /* position:fixed; */
    /* display: none; */
   width:320px;
   height: 350px;
   /* left:70%;
   top: 3%; */
   background-color: black;
   border: 1px solid; 
   max-height: 110vh;
   /* color: white;
    position: fixed;
    left: 120vh;
    top: 7vh; 
    z-index:4;*/
    display:none; 
}
    </style>
</head>

<body>
    <div class="bookbody">
    <div id="profile"> 
    <a id="close" style="font-size:20px;margin-left:97%;margin-top:5%;cursor: pointer; background-color: rgb(243, 234, 234);color:red;"
                    onclick="close2()">x</a>
                <?php
$result=mysqli_query($db,"SELECT * FROM student where username='$_SESSION[login_user]'");
while($row=mysqli_fetch_assoc($result)){
?>
                <i style="margin:10px;font-size:30px"
                    class='fa fa-user-circle'>&nbsp;<?php echo $row['firstname']?>&nbsp;<?php echo $row['lastname']?></i>
                <p style="color:white;margin-top:30px;margin-left:30px;font-size:20px;">User Name:&nbsp;&nbsp;<a
                        style="color:green;"><?php echo $row['username']?></a></p>
                <p style="color:white;margin-top:10px;margin-left:30px;font-size:20px;">Email:&nbsp;&nbsp;<a
                        style="color:yellow;"><?php echo $row['email']?></a></p>
                <p style="color:white;margin-left:30px;margin-top:10px;font-size:20px;">Phone Number:&nbsp;&nbsp;<a
                        style="color:blue;"><?php echo $row['phone_Number']?></a></p>
                <p style="color:white;margin-top:10px;margin-left:30px;font-size:20px;">ID Number:&nbsp;&nbsp;<a
                        style="color:yellow;"><?php echo $row['userid']?></a></p>

                <?php
}
 ?>
            </div>
        <header class="homeheader">

            <div class="logo">
                <img src="logo.png" alt="logo">
            </div><?php
           if( isset($_SESSION['login_user']))
           { ?><nav class="nav">
                <ul>
                    <?php 
                //echo "welcome<i class='fa fa-user-circle'></i>".$_SESSION['login_user']
                ?>
                    <!-- <li class="welcome-nav"  >  <a onclick="profile()"href="#"></a></li> -->

                    <li class="welcome-nav"> <a onclick="profile()" href="#"> <i
                                class='fa fa-user-circle'>Profile</i></a> </li>
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
                    <li class=""><a href="User_log_in.php"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a>
                    </li>

                </ul>
            </nav>
            <?php
    }
    ?>

        </header>
        <a href="User_log_in.php">
<i class="fa fa-arrow-left" style="margin-top:0px;position:fixed;cursor:pointer;">
</i></a>
        <section class="books-section">



            <!-- html code for the search form -->
            <div class="small">
                <form method="post" name="searchform">
                    <input type="search" name="search" id="searchId" autocomplete="off" placeholder="search books..."
                        required>
                    <button type="submit" onclick="search()" name="Searchsubmit">search</button>
                </form>
            </div>
            <!------------------------------- php code to search Books -->
            <div class="big" id="searchbox">

                <?php
if (isset($_POST['Searchsubmit']) )
{
    $search=mysqli_query($db,"SELECT * FROM books WHERE book_name like '%$_POST[search]%'");
if(mysqli_num_rows($search)==0)
{
   echo " <h3 style='margin-bottom:20px;color:white'>sorry! no books found. Try searching again.</h3>";
}
else
{
?> <h3 style="margin-bottom:20px;color:white">Search result:</h3>
                <table border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
                    <tr class="row">
                        <th class="col"> Book-id </th>
                        <th> Book-name </th>
                        <th> author </th>
                        <th> status </th>
                        <th> edition </th>
                        <th> quantity </th>
                        <th> type </th>
                    </tr>
                    <?php
 
while($row=mysqli_fetch_assoc($search))
{echo"<tr>";
echo "<td>";  echo $row['book_id'];  echo "</td>";
echo "<td>";  echo $row['book_name']; echo "</td>";
echo "<td>";  echo $row['author'];  echo "</td>";
echo "<td>";  echo $row['book_status'];  echo "</td>";
echo "<td>";  echo $row['edition'];  echo "</td>"; 
echo "<td>";  echo $row['quantity'];  echo "</td>";
echo "<td>";  echo $row['type'];  echo "</td>";
echo"</tr>";
}?>
                </table>
                <?php
    }

}
  
 ?>
            </div>
            <!----------------------------------------- dashboard --------------------------------------------------->

            <div class="section-box-books" id="section">

                <h1 class="welcomebooks" style=" margin-left:0px;"> User Dash Board </h1>
                <div class="viewbook-box" id="div1" onclick="viewBooks()">
                    <h1><i class="fa fa-book"></i>View book</h1>
                </div>
                <div class=" viewbook-box" id="div2" onclick="requestBook()">
                    <h1>Issue Book </h1>
                </div>
                <div class=" viewbook-box" id="div3" onclick="returnBooks()">
                    <h1>mybooks </h1>
                </div>
                <!-- <div class=" viewbook-box" id="div3">
                        <h1>return Book </h1>
                        <Button id="ReturnBookId" type="submit" class="fa fa-arrow-right"> </Button>
                    </div> -->
                <div class=" viewbook-box" id="div3" onclick="viewrequestInfo()">
                    <h1> request Information </h1>
                </div>


            </div>


            <!----------------------------------------- Html and php code to view Books ---------------------------------------------------->
            <div class="display-box" id="container">
                <div class="book-list">
                    <a href="books.php"><span></span></a>
                    <span style="text-align:center; margin:30px;color:white;">List Of books</span>
                    <form class="filter-books" action='' method='post'>

                        <select name="category" class="options-btn" id="filter">
                            <option value="" disabled selected>Category</option>
                            <option name="All" value="All">All</option>

                            <option name="Fiction" value="Fiction">Fiction</option>
                            <option name="Educational" value="Educational">Educational</option>
                            <option name="Health and Wellness" value="Health and Wellness">Health and Wellness</option>
                            <option name="Biography" value="Biography">Biography</option>
                            <option name="Business" value="Business">Business</option>
                        </select>
                        <!-- <input style="border-radius:20px" type="submit" name='select' value="selelct"> -->
                    </form>

                </div>

                <table id="issueviewtable" border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px"
                    height="200px">
                    <tr class="row">
                        <th class="col"> Book-id </th>
                        <th> Book-name </th>
                        <th> author </th>
                        <th> status </th>
                        <th> edition </th>
                        <th> quantity </th>
                        <th> type </th>
                    </tr>
                    <?php
            
    
 
    
            $result=mysqli_query($db,"SELECT * FROM `BOOKS`;");
            while($row=mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo "<td>";  echo $row['book_id'];  echo "</td>";
                echo "<td>";  echo $row['book_name'];  echo "</td>";
                echo "<td>";  echo $row['author'];  echo "</td>";
                echo "<td>";  echo $row['book_status'];  echo "</td>";
                echo "<td>";  echo $row['edition'];  echo "</td>"; 
                echo "<td>";  echo $row['quantity'];  echo "</td>";
                echo "<td>";  echo $row['type'];  echo "</td>";
                echo"</tr>";
            } 
    //     if(isset($_POST['select'])){
    //     if ($category == 'Fiction'){
        
    //         $result=mysqli_query($db,"SELECT * FROM `BOOKS` WHERE type='$category'");
    //         while($row=mysqli_fetch_assoc($result)){
    //             echo"<tr>";
    //             echo "<td>";  echo $row['book_id'];  echo "</td>";
    //             echo "<td>";  echo $row['book_name'];  echo "</td>";
    //             echo "<td>";  echo $row['author'];  echo "</td>";
    //             echo "<td>";  echo $row['status'];  echo "</td>";
    //             echo "<td>";  echo $row['edition'];  echo "</td>"; 
    //             echo "<td>";  echo $row['quantity'];  echo "</td>";
    //             echo "<td>";  echo $row['type'];  echo "</td>";
    //             echo"</tr>";
    //         } 
    //     }else if ($category == 'Educational'){
    //         $result=mysqli_query($db,"SELECT * FROM `BOOKS` WHERE type='$category'");
    //         while($row=mysqli_fetch_assoc($result)){
    //             echo"<tr>";
    //             echo "<td>";  echo $row['book_id'];  echo "</td>";
    //             echo "<td>";  echo $row['book_name'];  echo "</td>";
    //             echo "<td>";  echo $row['author'];  echo "</td>";
    //             echo "<td>";  echo $row['status'];  echo "</td>";
    //             echo "<td>";  echo $row['edition'];  echo "</td>"; 
    //             echo "<td>";  echo $row['quantity'];  echo "</td>";
    //             echo "<td>";  echo $row['type'];  echo "</td>";
    //             echo"</tr>";
    //         } 
    //     }else if ($category == 'Health and Wellness'){
    //         $result=mysqli_query($db,"SELECT * FROM `BOOKS` WHERE type='$category'");
    //         while($row=mysqli_fetch_assoc($result)){
    //             echo"<tr>";
    //             echo "<td>";  echo $row['book_id'];  echo "</td>";
    //             echo "<td>";  echo $row['book_name'];  echo "</td>";
    //             echo "<td>";  echo $row['author'];  echo "</td>";
    //             echo "<td>";  echo $row['status'];  echo "</td>";
    //             echo "<td>";  echo $row['edition'];  echo "</td>"; 
    //             echo "<td>";  echo $row['quantity'];  echo "</td>";
    //             echo "<td>";  echo $row['type'];  echo "</td>";
    //             echo"</tr>";
    //         } 
    //     }else if ($category == 'Biography'){
    //         $result=mysqli_query($db,"SELECT * FROM `BOOKS` WHERE type='$category'");
    //         while($row=mysqli_fetch_assoc($result)){
    //             echo"<tr>";
    //             echo "<td>";  echo $row['book_id'];  echo "</td>";
    //             echo "<td>";  echo $row['book_name'];  echo "</td>";
    //             echo "<td>";  echo $row['author'];  echo "</td>";
    //             echo "<td>";  echo $row['status'];  echo "</td>";
    //             echo "<td>";  echo $row['edition'];  echo "</td>"; 
    //             echo "<td>";  echo $row['quantity'];  echo "</td>";
    //             echo "<td>";  echo $row['type'];  echo "</td>";
    //             echo"</tr>";
    //         } 
    //     }else if ($category == 'Business'){
    //         $result=mysqli_query($db,"SELECT * FROM `BOOKS` WHERE type='$category'");
    //         while($row=mysqli_fetch_assoc($result)){
    //             echo"<tr>";
    //             echo "<td>";  echo $row['book_id'];  echo "</td>";
    //             echo "<td>";  echo $row['book_name'];  echo "</td>";
    //             echo "<td>";  echo $row['author'];  echo "</td>";
    //             echo "<td>";  echo $row['status'];  echo "</td>";
    //             echo "<td>";  echo $row['edition'];  echo "</td>"; 
    //             echo "<td>";  echo $row['quantity'];  echo "</td>";
    //             echo "<td>";  echo $row['type'];  echo "</td>";
    //             echo"</tr>";
    //         } 
    //     }
    // }
    ?>
                </table>



            </div>
            <!-------------------------------------- html form  to add book ------------------------------------------------------------->
            <div id="container2">
                <form action=" " name="book_information" method="POST">
                    <fieldset>
                        <div class="form">
                            <div>
                                <label for="Book-id">Book id:&nbsp;</label>
                                <input id="lname" type="text" name="book_id" value="" placeholder="Enter book id">
                            </div>
                            <div>
                                <label for="book-name">Book name:&nbsp;</label>
                                <input id="lname" type="text" name="book_name" value="" placeholder="Enter book  name">
                            </div>
                            <div>
                                <label for="book-name">image:&nbsp;</label>
                                <input id="lname" type="file" name="image" placeholder="upload book's image">
                            </div>
                            <div>
                                <label for="author">Author:&nbsp;</label>
                                <input id="lname" type="text" name="author" value="" placeholder="enter the author ">
                            </div>
                            <div>
                                <label for="status">status:&nbsp;</label>
                                <input id="lname" type="text" name="status" value="" placeholder="Enter book's status">
                            </div>
                            <div>
                                <label for="edition">edition:&nbsp;</label>
                                <input id="lname" type="text" name="edition" value=""
                                    placeholder="Enter book's edition">
                            </div>
                            <label for="quantity">Quantity:&nbsp;</label>
                            <input id="lname" type="text" name="quantity" value=""
                                placeholder="the amount of book u want to add">

                            <div>
                                <select name="catagory" class="options-btn" id="filter">
                                    <option value="Fiction">Fiction</option>
                                    <option value="Textbooks">Textbooks</option>
                                    <option value="Health and Wellness">Health and Wellness</option>
                                    <option value="Biography">Biography</option>
                                    <option value="Business">Business</option>
                                </select>
                            </div>
                            <input id="sign-up" type="submit" name="add" value="Add">
                            <input id="clear" type="reset" name="clear" value="Clear">
                    </fieldset>
                </form>
            </div>
            <!-----------------------------Php code to Add Books ------------------------------------ -->
            <?php
if(isset($_POST['add']))
{
    $count=0;
    $sql="SELECT book_id FROM books";
    $result=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($result))
{
    if($row['book_id']==$_POST['book_id'])
    {
        $count=$count+1;
    }
}
if($count==0){
mysqli_query($db,"INSERT INTO `books` VALUES('$_POST[book_id]','$_POST[book_name]','$_POST[author]','$_POST[status]','$_POST[edition]','$_POST[quantity]','$_POST[catagory]');");

    ?>
            <script type="text/javascript">
            alert("Book added successfully");
            </script>
            <?php
    }
else
{
    ?>
            <script type="text/javascript">
            alert("The Book already exists");
            </script>
            <?php
}
 
}
?>
            <!--------------------------------------- Code to view the users of the library--------------------------------------------------------- -->
            <div class="view-user" id="users">
                <h1>Users of the library</h1>
                <table border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
                    <tr class="row">
                        <th class="col"> fname </th>
                        <th> lastname </th>
                        <th>username </th>
                        <th> email</th>
                        <th> userid </th>
                        <th>Phone Number </th>
                    </tr>
                    <?php
            $result=mysqli_query($db,"SELECT * FROM `Student`;");
 
while($row=mysqli_fetch_assoc($result))
{echo"<tr>";
    echo "<td>";  echo $row['firstname'];  echo "</td>";
    echo "<td>";  echo $row['lastname'];  echo "</td>";
    echo "<td>";  echo $row['username'];  echo "</td>";
    echo "<td>";  echo $row['email'];  echo "</td>";
    echo "<td>";  echo $row['userid'];  echo "</td>"; 
    echo "<td>";  echo $row['phone_Number'];  echo "</td>";
    echo"</tr>";
}?>
                </table>
            </div>
            <div id="requestBook">
                <!-- -------------------------------------html form for the request submit button------------------------------------------------------- -->

                <form method="post" name="requestform">
                    <input type="search" name="book_id" id="searchId" autocomplete="off" placeholder="Enter Book id"
                        required>
                    <input type="submit" value="request" autocomplete="off" name="request" class="fa fa-search">
                </form>
                <!------------------------------------------------------ php code to request Books--------------------------------------------- -->

                <?php
  
   
    if(isset($_POST['request']))
    {
        if(isset($_SESSION['login_user']))
        {
            $res=mysqli_query($db,"SELECT book_id FROM `books` where book_id='$_POST[book_id]'" );
            $result=mysqli_query($db,"SELECT quantity FROM books where book_id='$_POST[book_id]'");
            $rowquantity=mysqli_fetch_array($result);
            
        if($row=mysqli_num_rows($res)>0) {
            if(($rowquantity['quantity']==0)){
        
                ?>
                <script type="text/javascript">
                alert("The book is not available");
                </script>
                <?php
                } 
                elseif(($rowquantity['quantity']>0)){
                    $sql="INSERT INTO issue_book VALUES('','$_SESSION[login_user]','$_POST[book_id]','','','')";
                    mysqli_query($db,$sql);
                    ?>
                <script type="text/javascript">
                alert("You request was successful");
                </script>
                <?php
                      $_SESSION['book_id']=$_POST['book_id'];  
                     
                }    
        }  
        else{
          
                ?>
                <script type="text/javascript">
                alert("the book is not found in our library");
                </script>
                <?php
               
             
        }}
        else{
        ?>
                <script type="text/javascript">
                alert("You must have to log in  to request a book");
                </script>
                <?php
   } }
    ?>
            </div>
            <!-- php code to view the request information----------------------------->
            <div id="requestinformation">
                <?php
if(isset($_SESSION['login_user']))
{
    
    if($result6=mysqli_query($db,"SELECT * FROM issue_book inner join  mybooks ON issue_book.book_id=mybooks.book_id where
     issue_book.username='$_SESSION[login_user]'and mybooks.status='issued'"))
{
    if(mysqli_num_rows($result6)==0)
    {
        echo "you did not request any book";  
    }
    else
    {
   ?> <table border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
                    <tr class="row">
                        <th class="col"> Book-id </th>
                        <th> approve status </th>
                        <th> issue date </th>
                        <th> return date </th>

                    </tr>
                    <?php
while($row=mysqli_fetch_assoc($result6))
{echo"<tr>";
echo "<td>";  echo $row['book_id'];  echo "</td>";
echo "<td>";  echo $row['approve'];  echo "</td>";
echo "<td>";  echo $row['issue'];  echo "</td>";
echo "<td>";  echo $row['return_book'];  echo "</td>";
echo"</tr>";
}?>
                </table><?php
}
}else if($result6=mysqli_query($db,"SELECT * FROM issue_book inner join  mybooks ON issue_book.book_id=mybooks.book_id where
issue_book.username='$_SESSION[login_user]'and mybooks.status='Not issued'")){
     if(mysqli_num_rows($result6)==0)
     {
         echo "you did not request any book";  
     }
     else
     {
    ?> <table border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
                    <tr class="row">
                        <th class="col"> Book-id </th>
                        <th> approve status </th>
                        <th> issue date </th>
                        <th> return date </th>

                    </tr>
                    <?php
 while($row=mysqli_fetch_assoc($result6))
 {echo"<tr>";
 echo "<td>";  echo $row['book_id'];  echo "</td>";
 echo "<td>";  echo $row['approve'];  echo "</td>";
 echo "<td>";  echo $row['issue'];  echo "</td>";
 echo "<td>";  echo $row['return_book'];  echo "</td>";
 echo"</tr>";
 }?>
                </table><?php

}
}
else{
    echo "you did not request any book";
}}
 else
{
    echo "please log in first to view request information";
}

?>
            </div>
            <!---------------------------------------- htl and php code to return books ----------------------------------------->


            <div>
                <div id="returnBook">
                    <?php
if(isset($_SESSION['login_user']))
{
  if(  $result=mysqli_query($db,"SELECT * FROM mybooks WHERE username='$_SESSION[login_user]' and mybooks.status='issued';")){
    if(mysqli_num_rows($result)==0)
    {
         
            echo"You don't have any books ";
        
    }
    else
    {
   ?> <table border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
                        <tr class="row">
                            <th class="col"> Book-id </th>
                            <th> return date </th>
                            <th> Status </th>
                            <th> return </th>

                        </tr>
                        <?php
while($row=mysqli_fetch_assoc($result))
{echo"<tr>";
echo "<td>";  echo $row['book_id'];  echo "</td>";
echo "<td>";  echo $row['date'];  echo "</td>";
echo "<td>";  echo $row['status'];  echo "</td>";
echo "<td>";  echo  "<a style='text-decoration:none;'href='return.php?book_id=$row[book_id]'>return</a>";  echo "</td>";
echo"</tr>";
}?>
                    </table><?php
}
  }
else 
{
    echo "you dont have any book";
}
}
 else
{
    echo "<h4 style='color:red;'> please log in first to view your books </h4>";
}

?></div>
            </div>
            <!---------------------------------------- htl and php code to update and delete books ----------------------------------------->
            <div id="EditBook">

                <table border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
                    <tr class="row">
                        <th class="col"> Book-id </th>
                        <th> Book-name </th>
                        <th> author </th>
                        <th> status </th>
                        <th> edition </th>
                        <th> quantity </th>
                        <th> type </th>
                        <th> Edit </th>
                    </tr>
                    <?php
    $result=mysqli_query($db,"SELECT * FROM `BOOKS`;");
    
    while($row=mysqli_fetch_assoc($result))
    {echo"<tr>";
    echo "<td>";  echo $row['book_id'];  echo "</td>";
    echo "<td>";  echo $row['book_name'];  echo "</td>";
    echo "<td>";  echo $row['author'];  echo "</td>";
    echo "<td>";  echo $row['book_status'];  echo "</td>";
    echo "<td>";  echo $row['edition'];  echo "</td>"; 
    echo "<td>";  echo $row['quantity'];  echo "</td>";
    echo "<td>";  echo $row['type'];  echo "</td>";
    echo "<td>";  echo "<a href='update&delete.php?book_id=$row[book_id]'>"; echo "edit"; echo "<a>"; echo "</td>";
    //echo "<td><a href=\"update.php?id=$w[id]\">edit</a>
    echo"</tr>";
    }?>
                </table>

            </div>
  
            <!-- --------------------------------------End of section-------------------------------------------------------- -->

        </section>

        <footer style=" text-align:center; margin-left:0%;  ">
            <p>
            <h6 style="line-height:1px;">Thank You For Using This System.</h6>
            <h6 style="line-height:1px;margin:20px">&copy;2022 </h6>
            </p>

        </footer>

    </div>
    <div style="position:fixed;top:40%;left:5%;">
        <div class="facebbok1"><a href="#" class="fa fa-facebook"></a></div>
        <div style="margin-top:5px;" class="facebbok1"><a href="#" class="fa fa-google"></a></div>
        <div style="margin-top:5px;" class="facebbok1"><a href="#" class="fa fa-twitter"></a></div>
        <div style="margin-top:5px;" class="facebbok1"><a href="#" class="fa fa-instagram"></a></div>

    </div>
</body>

</html>