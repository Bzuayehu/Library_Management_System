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
    <script>
 
 function user() {
    document.getElementById("users").style.display = "none";

  }
  function bookclose() {
    document.getElementById("container").style.display = "none";

  }
  
 </script>
    <style>
.formm{
    margin-bottom:30px; 
    width: 300px; 
    text-align:center;
    outline:none;
    height:30px;
    border:none;
    background-color:transparent;
    border-bottom:2px solid white;;
    color:white;
}
::placeholder{
    
  color: rgb(151, 144, 144);
}
.adminrequestsearch{
  margin-top: 100px;
  padding-left: 255px;
  
}
    #requestinformation {
        position: absolute;
  display:none;
  left: 25%;
  top: 20%;
    height: 700px;
    width: 800px;
    background-color:rgba(22, 20, 20, 0.83);
    color:Black;
     
    }
    #viewtable{
    position:relative;
    left:10%;
    margin-top:50px;
}
    </style>
</head>

<body>
    <div class="bookbody">
        <header  class="homeheader">

            <div class="logo">
                <img src="logo.png" alt="logo">
            </div><?php
           if( isset($_SESSION['login_Admin']))
           { ?><nav class="nav">
                <ul>
                    <li class="welcome-nav"> <a
                            href="#"><?php echo "<i class='fa fa-user-circle'></i>".$_SESSION['login_Admin']
                            ?></a></li>
                    <li class="header1"> <a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li class="header1"><a href="About.php">about-us </a></li>
                    <li class="header1"> <a href="index.php#contact">Contact</a></li>
                    <li class="header1"><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a></li>


                </ul>
            </nav>
            <?php
           }
           else
           {
            ?><nav class="nav">
                <ul>
                    <li class="header1"> <a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li class="header1"><a href="About.php">about-us </a></li>
                    <li class="header1"> <a href="index.php#contact">Contact</a></li>
                    <li class="header1"><a href="Admin_log_in.php"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a>
                    </li>

                </ul>
            </nav>
            <?php
    }
    ?>

        </header>
        <section class="books-section">
            <div>
                <!-- html code for the search form -->
                <div class="small">
                    <form method="post" name="searchform">
                        <input type="search" name="search" id="searchId" autocomplete="off"
                            placeholder="search books..." required>
                        <input type="submit" onclick="search()" value="search" name="Searchsubmit" class="fa fa-search">
                    </form>
                </div>
                <!------------------------------- php code to search Books -->
                <div class="big" id="searchbox">
                    <?php
if (isset($_POST['Searchsubmit']) )
{
    $search=mysqli_query($db,"SELECT * FROM books WHERE book_name  like '%$_POST[search]%'");
if(mysqli_num_rows($search)==0)
{
    echo "sorry! no books found. Try searching again.";
}
else
{
?>
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

                    <h1 class="welcomebooks" style="margin:20px;color:white;"> Admin Dash Board </h1>

                    <div class="viewbook-box" onclick="viewBooks()" id="div1">
                        <h1><i class="fa fa-book"></i>View book</h1>
                    </div>


                    <!-- <div class=" viewbook-box" id="div3">
                        <h1>return Book </h1>
                        <Button id="ReturnBookId" type="submit" class="fa fa-arrow-right"> </Button>
                    </div> -->
                    <div class=" viewbook-box" onclick="ViewUsers()" id="div3">
                        <h1> <i class="fa fa-user"></i>View User </h1>
                    </div>
                    <div class=" viewbook-box" onclick="IssuedBook()" id="div3">
                        <h1>Issued Books</h1>
                    </div>
                    <div class=" viewbook-box" onclick="EditBook()" id="div3">
                        <h1>Edit Book</h1>
                    </div>
                    <div class=" viewbook-box" class="fa fa-book" onclick="AddBook()" id="div3">
                        <h1>Add book </h1>
                    </div>
                    <div class=" viewbook-box" onclick="viewrequestInfo()" id="div3">
                        <h1>manage requests </h1>
                    </div>


                </div>

            </div>
            <!----------------------------------------- Html and php code to view Books ---------------------------------------------------->
            <div class="display-box" id="container">
            <a id="close"style="font-size:20px;margin-left:95%;margin-top:5%;cursor: pointer;width:10%;background-color: rgb(243, 234, 234);color:red;" onclick="bookclose()">x</a>  
                <div class="book-list">
                    <span style="text-align:center; margin:30px;color:white;">List Of books</span>
                    <div class="filter-books">
                        <select name="category" class="options-btn" id="filter">
                            <option value="" disabled selected>Book type</option>
                            <option name="All" value="all">All</option>
                            <option name="Fiction" value="Fiction">Fiction</option>
                            <option name="Health and Wellness" value="Health and Wellness">Health and Wellness</option>
                            <option name="Biography" value="Biography">Biography</option>
                            <option name="Business" value="Business">Business</option>
                            <option name="Educational" value="Educational">Educational</option>
                        </select>
                    </div>

                </div>

                <table id="issueviewtable" border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
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
    $count=0;
    
    
    while($row=mysqli_fetch_assoc($result))
    
    {echo"<tr>";
    echo "<td>";  echo $row['book_id'];  echo "</td>";
    echo "<td>";  echo $row['book_name'];  echo "</td>";
    echo "<td>";  echo $row['author'];  echo "</td>";
    echo "<td>";  echo $row['book_status'];  echo "</td>";
    echo "<td>";  echo $row['edition'];  echo "</td>"; 
    echo "<td>";  echo $row['quantity'];  echo "</td>";
    echo "<td>";  echo $row['type'];  echo "</td>";
    echo"</tr>";
    if($row['book_status']==('Available'||'available')){
    $count+=$row['quantity'];
    }
}
    // else{
    //     $count  
    // }}?>
                    <tr class="row">
                        <td>Total Number of books </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td style="color:green;"><?php echo($count)?></td>
                        <td> </td>

                    </tr>

                </table>



            </div>
            <!-------------------------------------- html form  to add book ------------------------------------------------------------->
            <div id="container2">
                <form action=" " name="book_information" onsubmit=" return Bookvalidation()" method="POST">
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
                            <!-- <div>
                                <label for="book-name">image:&nbsp;</label>
                                <input id="lname" type="file" name="image" placeholder="upload book's image"> 
                            </div> -->
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
                            <input id="sign-up" autocomplete="off" type="submit" name="add" value="Add">
                            <input id="clear" autocomplete="off" type="reset" name="clear" value="Clear">
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
$result=mysqli_query($db,"SELECT quantity FROM books where book_id='$_POST[book_id]';");
if (row['quantity']>0) {
 mysqli_query($db,"UPDATE books SET book_status='available' where book_id= '$_POST[book_id]';");
}
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
                <a id="close"style="font-size:20px;margin-left:95%;margin-top:5%;cursor: pointer;width:10%;background-color: rgb(243, 234, 234);color:red;" onclick="user()">x</a>
                 
                <h1 style="text-align:center; margin:30px;color:white;">Users of the library</h1>
                
                <div  id="tablee">
                <table style="margin-top: 100px;margin-bottom: 100px;" id="usertable"border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
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
            </div>
 
            <!-- php code to view the request information----------------------------->
            <div id="requestinformation">
                <h1 style="text-align:center;color:white;margin:30px;">Requested Books</h1>
                <div class="adminrequestsearch">
                    <form method="post" name="requestapproveform">
                        <p><input class="formm"  type="text" name="username" autocomplete="off"
                                placeholder="username" required=""></p>
                        <p> <input class="formm"   type="text" name="book_id" autocomplete="off"
                                placeholder="book_id" required=""></p>
                        <button type="submit" name="send" style="width: 100px;margin-left:100px;text-align:center;border-radius:20px;background-color:yellow;cursor:pointer;border:none;height:30px;">submit</button>



                    </form>
                </div>
                <?php
if(isset($_SESSION['login_Admin']))
{
    $result=mysqli_query($db,"SELECT student.username,userid,books.book_id,book_name,author,edition,book_status,issue_book.Id 
    FROM student inner join issue_book ON student.username=issue_book.username inner join  books ON issue_book.book_id=books.book_id where approve=''");
    if(mysqli_num_rows($result)==0)
    {
        echo "<h1><b><Br><br>";
        echo "<span style='margin:20px;color:white;'>There is no pending request </span>";
        echo "</h1></b>"; 
    }
    else
    {
   ?> <table id="viewtable"border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
                    <tr class="row">
                    <th class="col">Id </th>
                        <th class="col">student username </th>
                        <th> Student id </th>
                        <th> Book id </th>
                        <th> Book name </th>
                        <th class="col">Author's name </th>
                        <th> Edition </th>
                        <th> Status </th>


                    </tr>
                    <?php
while($row=mysqli_fetch_assoc($result))
{echo"<tr>";
    echo "<td>";  echo $row['Id'];  echo "</td>";
echo "<td>";  echo $row['username'];  echo "</td>";
echo "<td>";  echo $row['userid'];  echo "</td>";
echo "<td>";  echo $row['book_id'];  echo "</td>";
echo "<td>";  echo $row['book_name'];  echo "</td>";
echo "<td>";  echo $row['author'];  echo "</td>";
echo "<td>";  echo $row['edition'];  echo "</td>";
echo "<td>";  echo $row['book_status'];  echo "</td>";
 
echo"</tr>";
}?>
                </table><?php
}
}
 else
{    
     echo "<h2><b><Br><br>";
    echo "<span style='margin:30px;color:red;'>please log in first to view the request  </span>";
    echo "</h2></b>";
    
}
 if(isset($_POST['send']))
 {
    $_SESSION['name']=$_POST['username'];
    $_SESSION['book_id']=$_POST['book_id'];
 
?>
                <script type="text/javascript">
                window.location = "approve.php"
                </script>
                <?php 
}
?>
            </div>
            <!---------------------------------------- html and php code to update and delete books ----------------------------------------->
            <div id="EditBook">

                <table style="issueviewtable" border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
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

            <div id="IssuedBooks">
                <h1 style="text-align:center; margin:30px;color:white">Issued Books</h1>
                <?php
if(isset($_SESSION['login_Admin']))
{ 
    
  
        // mysqli_query($db,"UPDATE issue_book SET approve='$_POST[approve]',issue='$_POST[issue]',return_book='$_POST[return]' where username='$_SESSION[name]'and book_id= '$_SESSION[book_id]'"); 
        //    mysqli_query($db,"UPDATE books SET quantity=quantity-1 where book_id='$_SESSION[book_id]';");
        //    $result=mysqli_query($db,"SELECT quantity FROM books where book_id='$_SESSION[book_id]';");
        $result=mysqli_query($db,"SELECT student.username,userid,books.book_id,book_name,author,edition,issue,return_book,mybooks.status 
        FROM student inner join issue_book ON 
        student.username=issue_book.username inner join  books ON issue_book.book_id=books.book_id inner join mybooks on mybooks.book_id=books.book_id where approve='Approved'
    ORDER BY `issue_book`.`return_book` ASC");
    //    if($row['status']='available'){}
      if(mysqli_num_rows($result)==0)
      {
          echo "<h1><b><Br><br>";
          echo "<span style='margin:20px;color:white;'>There is no issued books </span>";
          echo "</h1></b>";  
      }
      else
      { 
     ?>
     <div id="tablee" style="margin-bottom:50px" > <table style="margin-bottom:50px" id="issueviewtable" border="1" bgcolor="red" cellspacing="5" cellpadding="10" width="500px" height="200px">
                    <tr class="row">
                        <th class="col">Student username </th>
                        <th> Student id </th>
                        <th> Book id </th>
                        <th> Book name </th>
                        <th class="col">Author's name </th>
                        <th> Edition </th>
                        <th>Issued date </th>
                        <th> Return date</th>
                        <th> Status</th>



                    </tr>
                    <?php
  while($row=mysqli_fetch_assoc($result))
  {echo"<tr>";
  echo "<td>";  echo $row['username'];  echo "</td>";
  echo "<td>";  echo $row['userid'];  echo "</td>";
  echo "<td>";  echo $row['book_id'];  echo "</td>";
  echo "<td>";  echo $row['book_name'];  echo "</td>";
  echo "<td>";  echo $row['author'];  echo "</td>";
  echo "<td>";  echo $row['edition'];  echo "</td>";
  echo "<td>";  echo $row['issue'];  echo "</td>";
  echo "<td>";  echo $row['return_book'];  echo "</td>";
  echo "<td>";  echo $row['status'];  echo "</td>";
   
   
  echo"</tr>";
  }?>
                </table>
                </div><?php
  }
  }
   else
  {    
       echo "<h2><b><Br><br>";
      echo "<span style='margin:30px;color:yellow;'>please log in first to view the request  </span>";
      echo "</h2></b>";
      
  }?>
            </div>
            <!-- --------------------------------------End of section-------------------------------------------------------- -->

        </section>

        <footer style="text-align:center;">
            <a name="contact.php">
                <h1 style="text-align:center; margin:30px;Color:Green;font-size:30px;">Developers</h1>
                <div class="info"> Email: &nbsp; Bizuayehuagide@gmail.com</div><span> &nbsp; Mobile:
                    &nbsp;+251969063839</span>
                <div class="info"> Email: &nbsp; worku@gmail.com</div><span> &nbsp; Mobile: &nbsp;+251956063839</span>
                <div class="info"> Email: &nbsp; Estegenet@gmail.com</div><span> &nbsp; Mobile:
                    &nbsp;+25194907659</span>
            </a>
        </footer>

    </div>
</body>

</html>