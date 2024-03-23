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
    <style>
     #Approveinformation {
        position: absolute;
        display: inline-block;
        left: 17%;
        top: 20%;
        height: 800px;
        width: 800px;
        background-color: rgba(22, 20, 20, 0.83);
        color: Black;

    }
    </style>
</head>

<body>
    <div class="bookbody">
        <header class="homeheader">

            <div class="logo">
                <img src="logo.png" alt="logo">
            </div><?php
           if( isset($_SESSION['login_Admin']))
           { ?><nav class="nav">
                <ul>
                    <li class="welcome-nav"> <a
                            href="#"><?php echo " <i class='fa fa-user-circle'></i>".$_SESSION['login_Admin']?></a>
                    </li>
                    <li class="header1"> <a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li class="header1"><a href="About.php">about-us </a></li>
                    <li class="header1"> <a href="index.php#contact">Contact</a></li>
                    <li class="header1"><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a>
                    </li>


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
                    <li class="header1"><a href="User_log_in.php"><i class="fa fa-sign-in"
                                aria-hidden="true"></i>login</a>
                    </li>

                </ul>
            </nav>
            <?php
    }
    ?>
        </header>

        <section style="height: 1300px;" class="books-section">

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
echo "<td>";  echo $row['status'];  echo "</td>";
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
            </div>
            <!----------------------------------------- dashboard --------------------------------------------------->





            <!----------------------------------------- Html and php code to view Books ---------------------------------------------------->

            <!-- php code to view the request information----------------------------->
            <div id="Approveinformation">
                <h1 style="text-align:center;color:white; margin:30px;">Approve requests</h1>
                <div class="adminrequestsearch2">
                    <form method="post" name="approve">
                      
                          <input style="margin-bottom:10px;width: 300px;display:block;" type="text" name="approve" autocomplete="off"
                                placeholder="approved or not " class="form-control" required=""> 
                          <input style="margin-bottom:10px;width: 300px;display:block;" type="date" name="issue" autocomplete="off"
                                placeholder="issue Date " class="form-control" required=""> 
                         <input style="margin-bottom:20px;width: 300px;display:block;" type="date" name="return_book" class="form-control"
                                autocomplete="off" placeholder="return Date " required=""> 
                        <button type="submit" name="send1" autocomplete="off">approve</button>
                    </form>
                </div>
                <?php
if(isset($_POST['send1']))
{
    $result4=mysqli_query($db,"SELECT quantity FROM books where book_id='$_SESSION[book_id]';");
    $row4=mysqli_fetch_array($result4);
    
    if($row4['quantity']>0){
        if($_POST['approve']='Approved'){
            $result1=mysqli_query($db,"SELECT student.username,userid,books.book_id,book_name,author,edition,issue,return_book,mybooks.status FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.book_id=books.book_id inner join mybooks on mybooks.book_id=books.book_id where approve='' ORDER BY `issue_book`.`return_book` ASC;");
            $row1=mysqli_fetch_array($result1);

        mysqli_query($db,"UPDATE books SET quantity=quantity-1 where book_id='$_SESSION[book_id]';");
        $result3=mysqli_query($db,"INSERT INTO `mybooks` VALUES('$row1[book_id]','$row1[username]','$row1[return_book]','issued')");

        $result=mysqli_query($db,"SELECT quantity FROM books where book_id='$_SESSION[book_id]';");
        mysqli_query($db,"UPDATE issue_book SET approve='$_POST[approve]',issue='$_POST[issue]',return_book='$_POST[return_book]' where username='$_SESSION[name]'and book_id= '$_SESSION[book_id]'"); 

    while($row=mysqli_fetch_array($result))
    {
if($row['quantity']==0){

mysqli_query($db,"UPDATE books SET book_status='not available' where book_id= '$_SESSION[book_id]';");
    }}
    ?>
                <script type="text/javascript">
                alert("Approved Sucessfulluy");
                window.location = 'managebooks.php';
                </script>
                <?php
    
        }
        else if ($_POST['approve']='Not Approved'){
            $result5=mysqli_query($db,"SELECT student.username,userid,books.book_id,book_name,author,edition,issue,return_book,mybooks.status 
            FROM student inner join issue_book ON 
            student.username=issue_book.username inner join  books ON issue_book.book_id=books.book_id inner join mybooks on mybooks.book_id=books.book_id where approve='Not Approved'");
            $row5=mysqli_fetch_array($result5);

            $result3=mysqli_query($db,"INSERT INTO `mybooks` VALUES('$row5[book_id]','','','Not issued')");
            mysqli_query($db,"UPDATE issue_book SET approve='$_POST[approve]',issue='',return_book='' where username='$_SESSION[name]'and book_id= '$_SESSION[book_id]'"); 
            header("location:managebooks.php");
        }
        
}
else{
    ?>
                <script type="text/javascript">
                alert("The Book is not available");
                </script>
                <?php
     header("location:managebooks.php");
}}
?>
            </div>

            <!-- <!  --------------------------------------End of section-------------------------------------------------------- -->

        </section>

        <!-- <footer>
        <span class="info"> Email: &nbsp; Bizuayehuagide@gmail.com</span>
        <span>Mobile: &nbsp;+251969063839</span>
    </footer> -->

    </div>
</body>

</html>