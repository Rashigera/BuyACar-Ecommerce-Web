<table border=1, width='625'>
<tr>
<td width='125'>
Transaction ID
</td>
<td width='125'>
Credit Number:
</td>
<td width='125'>
Username:
</td>
<td width='125'>
Car Name
</td>
<td width='125'>
Amount
</td>
<td width='125'>
Transaction number
</td>
<td width='125'>
Details
</td>
</tr>
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
$username=$_POST['username'];
$q="SELECT * FROM trans WHERE username='$username'";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
$credit=$row['creditnumber'];
$id=$row['id'];
$cname=$row['cname'];
$amount=$row['amount'];
$transNumb=$row['transNumb'];
$detail=$row['detail'];
echo "<tr>";
echo "<td width='125'>";
echo $id;
echo "</td>";
echo "<td width='125'>";
echo $credit;
echo "</td>";
echo "<td width='125'>";
echo $username;
echo "</td>";
echo "<td width='125'>";
echo $cname;
echo "</td>";
echo "<td width='125'>";
echo $amount;
echo "$";
echo "</td>";
echo "<td width='125'>";
echo $transNumb;
echo "</td>";
echo "<td width='125'>";
echo $detail;
echo "</td>";
echo "</tr>";
}
}
else
{
echo mysql_error();
}
?>
</table>
<a href="adminTrans.php">back</a>