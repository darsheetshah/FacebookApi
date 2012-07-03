<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Creating New User</title>
</head>

<body>
<?php
$conn = mysql_connect("localhost");
if(!$conn)
{
echo "Could not connect to database";
}
mysql_select_db("test", $conn);
$sql = "insert into login values('$_POST[username]','$_POST[password]')";
mysql_query($sql);
header("location: Login.php");
mysql_close($conn);
?>

</body>
</html>
