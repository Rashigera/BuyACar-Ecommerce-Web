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
$q="SELECT * FROM trans WHERE id='$id'";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
$credit=$row['creditnumber'];
$username=$row['username'];
$cname=$row['cname'];
$amount=$row['amount'];
$transNumb=$row['transNumb'];
$detail=$row['detail'];
echo "<table border=1, width='625'>";
echo "<tr>";
echo "<td width='125'>";
echo "Transaction ID";
echo "</td>";
echo "<td width='125'>";
echo "Credit Number:";
echo "</td>";
echo "<td width='125'>";
echo "Username:";
echo "</td>";
echo "<td width='125'>";
echo "Car Name";
echo "</td>";
echo "<td width='125'>";
echo "Amount";
echo "</td>";
echo "<td width='125'>";
echo "Transaction number";
echo "</td>";
echo "<td width='125'>";
echo "Detail";
echo "</td>";
echo "</tr>";
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
echo "</table>";
}
}
else
{
echo mysql_error();
}
?>
<a href="adminTrans.php">back</a>