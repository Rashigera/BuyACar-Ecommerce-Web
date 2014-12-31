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
$email=$_POST['email'];
$q="SELECT * FROM users WHERE email='$email'";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
$fname=$row['first_name'];
$lname=$row['last_name'];
$username=$row['username'];
$trans=$row['transNumb'];
echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "username";
echo "</td>";
echo "<td>";
echo "first name";
echo "</td>";
echo "<td>";
echo "last name";
echo "</td>";
echo "<td>";
echo "email";
echo "</td>";
echo "<td>";
echo "number of transactions";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo $username;
echo "</td>";
echo "<td>";
echo $fname;
echo "</td>";
echo "<td>";
echo $lname;
echo "</td>";
echo "<td>";
echo $email;
echo "</td>";
echo "<td>";
echo $trans;
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
<a href="adminUser.php">back</a>