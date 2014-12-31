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
$id=$_POST['id'];
$detail=$_POST['detail'];
$q="UPDATE trans SET detail='$detail' WHERE id='$id'";
mysql_query($q);
?>
<p>Details updated</p>
<p><a href="adminTrans.php">back</a></p>