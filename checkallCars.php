<?php 
include 'core/init.php'; 
admin_protect();
?>
<table border=1, width='600'>
<tr>
<td width='150'>
Car ID:
</td>
<td width='150'>
Car name:
</td>
<td width='150'>
Car Details:
</td>
<td width='150'>
Car Price:
</td>
</tr>
<?php
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
$q="SELECT * FROM cardata";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
$cno=$row['cno'];
$cdetails=$row['cdetails'];
$cname=$row['cname'];
$cprice=$row['cprice'];
echo "<table border=1, width='600'>";
echo "<tr>";
echo "<td width='150'>";
echo $cno;
echo "</td>";
echo "<td width='150'>";
echo $cname;
echo "</td>";
echo "<td width='150'>";
echo $cdetails;
echo "</td>";
echo "<td width='150'>";
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