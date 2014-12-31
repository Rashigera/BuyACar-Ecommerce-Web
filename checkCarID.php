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
$q="SELECT * FROM cardata WHERE cno='$cno'";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
$cname=$row['cname'];
$cdetails=$row['cdetails'];
$cprice=$row['cprice'];
echo "<table border=1, width='625'>";
echo "<tr>";
echo "<td width='125'>";
echo "Car ID";
echo "</td>";
echo "<td width='125'>";
echo "Car Name:";
echo "</td>";
echo "<td width='125'>";
echo "Car Details";
echo "</td>";
echo "<td width='125'>";
echo "Car Price";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td width='125'>";
echo $cno;
echo "</td>";
echo "<td width='125'>";
echo $cname;
echo "</td>";
echo "<td width='125'>";
echo $cdetails;
echo "</td>";
echo "<td width='125'>";
echo $cprice;
echo "$";
echo "</td>";
echo "</tr>";
echo "</table>";
}
}
else
{
echo mysql_error();
}
?>
<a href="adminCars.php">back</a>