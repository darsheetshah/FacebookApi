<?php
$conn = mysql_connect("localhost","root","root");
mysql_select_db("test", $conn);

$sql = "select * from login where username ='$_POST[username]' and password='$_POST[password]'";

$count = mysql_query($sql);

mysql_close($conn);
if(mysql_num_rows($count)==1)
{
session_start();
$username1=$_POST['username'];
//session_register($username);
//$_SESSION['username2']=$username1;
//echo $_SESSION['username'];

header("location: Home.php");
$_SESSION['username']=$_POST['username'];
}

else 
header("location Login.php");


?>