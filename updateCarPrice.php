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
$cno=$_POST['cno'];
$cprice=$_POST['cprice'];
$q="UPDATE cardata SET cprice='$cprice' WHERE cno='$cno'";
mysql_query($q);
?>
<p>Car Price Updated</p>
<p><a href="adminCars.php">back</a></p>