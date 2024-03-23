<?php
$db= mysqli_connect("localhost","root","","libray" ); /* server name, username,  password,  database name */

if(!$db)
{
    die("connection failed:".mysqli-connet_error());
}

//echo"connected successfully.";
?>
