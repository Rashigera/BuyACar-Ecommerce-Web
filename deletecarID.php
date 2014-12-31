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
$q="DELETE FROM cardata WHERE cno='$cno'";
$r = mysql_query("$q",$conn);
if($r)
{
echo "Car With Id: ";
echo "<b>";
echo $cno;
echo "</b>";
echo " deleted.";
}
else
{
echo mysql_error();
}
?>
<a href="adminCars.php">back</a>