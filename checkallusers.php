<?php 
include 'core/init.php'; 
admin_protect();
?>
<table border=1, width='625'>
<tr>
<td width='125'>
username
</td>
<td width='125'>
first name
</td>
<td width='125'>
last name
</td>
<td width='125'>
email
</td>
<td width='125'>
number of transactions
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
$q="SELECT * FROM users";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
$email=$row['email'];
$fname=$row['first_name'];
$lname=$row['last_name'];
$username=$row['username'];
$trans=$row['transNumb'];
echo "<table border=1, width='625'>";
echo "<tr>";
echo "<td width='125'>";
echo $username;
echo "</td>";
echo "<td width='125'>";
echo $fname;
echo "</td>";
echo "<td width='125'>";
echo $lname;
echo "</td>";
echo "<td width='125'>";
echo $email;
echo "</td>";
echo "<td width='125'>";
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