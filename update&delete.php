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
                <li class="header1"> <a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li class="header1"><a href="About.php">about-us </a></li>
                <li class="header1"> <a href="index.php#contact">Contact</a></li>
                <li class="header1"><a href="User_log_in.php"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a></li>
                
            </ul>
        </nav>
        <?php
    }
    ?>
           
        </header>
         
        <section style="height:750px;"class="books-section">
        <?php
$id=$_GET['book_id'];
$sql="SELECT * FROM books WHERE book_id=$id";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result);
	$bookName=$row['book_name'];
	$author=$row['author'];
    $status=$row['book_status'];
	$edition=$row['edition'];
    $quantity=$row['quantity'];
	$type=$row['type'];
	//$id2=$result['id'];
    
	# code...
    ?>
     
 
<div  id="update and delete">
            <form   action=""   name="book_information"   method="POST">
                <fieldset >
                <div style="background-color:gray;margin:100px;color:white;width: 350px;border-radius: 20px;margin-left:300px;" class="form">
                    <div>
                        <input id="lname" type="hidden" name="book_id" value="<?php echo($_GET['book_id']) ?>"  >
                    </div>
                    <div>
                        <label for="book-name">Book name:&nbsp;</label>
                        <input id="lname" type="text" name="book_name" value="<?php echo($bookName) ?>"  >
                    </div>
                    <div>
                        <label for="author">Author:&nbsp;</label>
                        <input id="lname" type="text" name="author" value="<?php echo($author) ?>"  >
                    </div>
                    <div>
                        <label for="status">status:&nbsp;</label>
                        <input id="lname" type="text" name="status" value="<?php echo($status) ?>"  >
                    </div>
                    <div>
                        <label for="edition">edition:&nbsp;</label>
                        <input id="lname" type="text" name="edition" value="<?php echo($edition) ?>"  >
                    </div>
                    <label for="quantity">Quantity:&nbsp;</label>
                    <input id="lname" type="text" name="quantity" value="<?php echo($quantity) ?>" >
                       
                    <div>
                    <p style="margin-bottom:10px;color:white;"><label for="quantity">Type:&nbsp;</label></p> 
                        <select style="background-color:transparent" name="catagory" class="options-btn" id="filter">
                            <option style="color:white;" value="Fiction" <?php if($type == 'Fiction') echo 'selected'; ?>>Fiction</option>
                            <option style="color:white;"value="Textbooks" <?php if($type == 'Textbooks') echo 'selected'; ?>>Textbooks</option>
                            <option style="color:white;" value="Health and Wellness" <?php if($type == 'Health and Wellness') echo 'selected'; ?>>Health and Wellness</option>
                            <option style="color:white;" value="Biography" <?php if($type == 'Biography') echo 'selected'; ?>>Biography</option>
                            <option style="color:white;" value="Business" <?php if($type == 'Business') echo 'selected'; ?>>Business</option>
                        </select>
                    </div>
                    <input id="sign-up" autocomplete="off" type="submit" name="update" value="Update">
                    <input id="clear" autocomplete="off" onclick="return confirm('are you sure you want to delete this book?');" type="submit" name="delete" value="delete">
                </fieldset>
            </form>
<?php
    if (isset($_POST['update'])){
	$newbookName=$_POST['book_name'];
	$newauthor=$_POST['author'];
    $newstatus=$_POST['book_status'];
	$newedition=$_POST['edition'];
    $newquantity=$_POST['quantity'];
	$newtype=$_POST['catagory'];
    $id2=$_POST['book_id'];
	$updatesql="UPDATE books set book_name='$newbookName',author='$newauthor',book_status='$newstatus',
    edition='$newedition',quantity=$newquantity,type='$newtype' where book_id=$id2";
	$updatesql_result=mysqli_query($db,$updatesql);

       $result=mysqli_query($db,"SELECT quantity FROM books where book_id=$id2");
   $row=mysqli_fetch_array($result);
if ($row['quantity']>0) {
    mysqli_query($db,"UPDATE books SET book_status='available' where book_id=$id2");
}
if ($row['quantity']==0) {
    mysqli_query($db,"UPDATE books SET book_status='not available' where book_id=$id2");
}
	if (!$updatesql_result) {
		echo " book's data is not updated".mysql_error();
        die();
	}
    else{
        echo "<script>alert('books data is updated seccessfully')
        window.location='managebooks.php';</script>";
        
   }
} 
elseif(isset($_POST['delete'])){
   $id=$_GET['book_id'];
   $sql="DELETE from books where book_id=$id";
   $deletesql_result=mysqli_query($db,$sql);
   if (!$deletesql_result) {
       echo "data is not deleted".mysql_error();
       # code...
   }else{

   echo "<script>alert('Book is deleted')</script>";
   header('location: managebooks.php');
   }
}
 
?>  

</section>

<footer style="text-align:center;">
    <div class="info"> Email: &nbsp; Bizuayehuagide@gmail.com</div><span> &nbsp; Mobile: &nbsp;+251969063839</span>
    <div class="info"> Email: &nbsp; worku@gmail.com</div><span> &nbsp; Mobile: &nbsp;+251956063839</span>
    <div class="info"> Email: &nbsp; Estegenet@gmail.com</div><span> &nbsp; Mobile: &nbsp;+25194907659</span>
    
</footer>

</div>
</body>
</html>
 