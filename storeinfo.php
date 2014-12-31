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
$cname = $_POST['cname'];
$cdetails = $_POST['cdetails'];
$cphoto = addslashes (file_get_contents($_FILES['cphoto']['tmp_name']));
$image = getimagesize($_FILES['cphoto']['tmp_name']);
$imgtype=$image['mime'];
$cprice=$_POST['cprice'];

$q ="INSERT INTO cardata VALUES('','$cname','$cdetails','$cphoto','$imgtype','$cprice')";
$r = mysql_query($q,$conn);
if($r)
{
echo "information stored successfully";
header('Location:adminCars.php?success');
}
else
{
echo mysql_error();
}

?>