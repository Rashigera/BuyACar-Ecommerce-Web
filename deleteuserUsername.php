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
if($username==="omar")
{
echo "You Cannot delete the admin";
}
else
{
$q="DELETE FROM users WHERE username='$username'";
$r = mysql_query("$q",$conn);
$q="DELETE FROM trans WHERE username='$username'";
$r2 = mysql_query("$q",$conn);
if($r)
{
echo "User: ";
echo "<b>";
echo $username;
echo "</b>";
echo " deleted.";
}
else
{
echo mysql_error();
}
}
?>
<a href="adminUser.php">back</a>