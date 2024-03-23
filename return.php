<?php
include "connection.php"; 
session_start();
$id=$_GET['book_id'];
$sql="UPDATE mybooks set mybooks.status='returned' where  book_id=$id and username='$_SESSION[login_user]'";
$deletesql_result=mysqli_query($db,$sql);
mysqli_query($db,"UPDATE books SET quantity=quantity+1 where book_id=$id");
$result=mysqli_query($db,"SELECT quantity FROM books where book_id=$id");
while($row=mysqli_fetch_array($result))
 
{
mysqli_query($db,"UPDATE books SET book_status=' available' where book_id=$id");
}
header('location: books.php');
?> 
 