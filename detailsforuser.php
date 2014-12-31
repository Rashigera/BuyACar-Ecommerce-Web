<?php
include 'core/init.php'; 
 include 'includes/overall/header.php'; 
 protect_page()
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
$username=$_SESSION['username'];
$id=$_POST['id'];
$q="SELECT * FROM trans WHERE username='$username' AND id='$id'";
$r = mysql_query("$q",$conn);
while($row=mysql_fetch_array($r))
{
echo "<br>";
$detail=$row['detail'];
echo $detail;
echo "<br>";
}
?>
<a href="transStatus.php">Back</a>
<?php include 'includes/overall/footer.php'; ?> 