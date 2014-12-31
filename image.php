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
$cno = $_GET['cno'];
$q="SELECT cphoto,cphototype FROM cardata where cno='$cno'";
$r=mysql_query("$q",$conn);
if($r)
{
$row=mysql_fetch_array($r);
$type="Content-type: ".$row['cphototype'];
header($type);
echo $row['cphoto'];
}
else
{
echo mysql_error();
}
?>