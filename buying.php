<?php
session_start();
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
if(empty($_POST['creditnumber']) ===false)
{
$cno=$_GET['cno'];
$credit=$_POST['creditnumber'];
$q="SELECT * FROM bank where creditnumber=$credit";
$r=mysql_query("$q");
$q1="SELECT COUNT('creditnumber') FROM bank where creditnumber=$credit";
$r1=mysql_query("$q1");
if(mysql_result($r1, 0) == 1)
{
$query = mysql_query("SELECT COUNT('cno') FROM `cardata` WHERE `cno` ='$cno'");
$array=mysql_fetch_array($r);
$usermoney=$array['amount'];
$fname=$array['first_name'];
$lname=$array['last_name'];
if(mysql_result($query, 0) == 1)
{
$q="Select * from cardata where cno=$cno";
$r1=mysql_query("$q");
$array1=mysql_fetch_array($r1);
$carprice=$array1['cprice'];
$cname=$array1['cname'];
$username=$_SESSION['username'];
if($carprice<=$usermoney)
{
$current=$usermoney-$carprice;
$q="UPDATE bank SET amount = $current WHERE creditnumber=$credit";
mysql_query("$q");
$q="UPDATE bank SET amount = amount+$carprice WHERE creditnumber='1122334455'";
mysql_query("$q");
$q="UPDATE users SET transNumb = transNumb+1 WHERE username='$username'";
mysql_query("$q");
$q="Select * from users where username='$username'";
$r1=mysql_query("$q");
$array1=mysql_fetch_array($r1);
$transNumb=$array1['transNumb'];
$q="INSERT INTO trans VALUES ('','$credit','$username','$cname','$carprice','$transNumb','Chill you just bought the car','0')";
mysql_query("$q");
echo "Transaction complete";
echo "<br>";
echo "<br>";
echo "You're billing reciept is:";
echo "<br>";
echo "<br>";
$q="Select * from trans where transNumb='$transNumb' and username='$username'";
$r2=mysql_query("$q");
$array2=mysql_fetch_array($r2);
$transID=$array2['id'];
echo "Transaction ID: ";
echo $transID;
echo "<br>";
echo "<br>";
echo "Credit Number: ";
echo $credit;
echo "<br>";
echo "<br>";
echo "First Name: ";
echo $fname;
echo "<br>";
echo "<br>";
echo "Last Name: ";
echo $lname;
echo "<br>";
echo "<br>";
echo "User Name: ";
echo $username;
echo "<br>";
echo "<br>";
echo "Car: ";
echo $cname;
echo "<br>";
echo "<br>";
echo "Amount: ";
echo $carprice;
echo "$";
echo "<br>";
echo "<br>";
echo "<b>Please keep you're transaction ID for refrence to check status and to recieve ";
echo "<br>";
echo "your're car upon arival make sure to have a copy of the credit car used!!!</b>";

}
else
{
echo "You do not have enough money in you're bank account";
}

}
}
else
{
echo "Invalid credit card number";
}
}
else
{
echo "Please enter credit card number";
}
?>