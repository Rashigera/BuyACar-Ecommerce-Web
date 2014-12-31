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

$q="SELECT * FROM cardata";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
$cno=$row['cno'];
$cprice=$row['cprice'];
$cname=$row['cname'];
$cdetails=$row['cdetails'];
echo "<a href='buyacar.php?cno=$cno'>";
echo "<img src=image.php?cno=" .$row['cno']." width=300 height=150/>";
echo "</a>";
echo "</br>";
echo "Car ID: ";
echo $row['cno'];
echo"</br>";
echo "Car Type: ";
echo $row['cname'];
echo "</br>";
echo "Car details: ";
echo $row['cdetails'];
echo "</br>";
echo "Car Price: ";
echo $row['cprice'];
echo "$";
echo "</br>";
echo "</br>";

}
}
else
{
echo mysql_error();
}
?>