<?php 
include 'core/init.php'; 
admin_protect();
?>
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysql_connect("localhost","root","");
if(!$conn)
{
echo mysql_error();
}
$db = mysql_select_db("lr",$conn);
if(!$db)
{
echo mysql_error();
}
$username=$_POST['username'];
$password=123456;
$password=md5($password);
mysql_query("UPDATE users SET password ='$password' WHERE username='$username'");
?>
<p>password restarted to 123456</p>
<p><a href="adminUser.php">back</a></p>