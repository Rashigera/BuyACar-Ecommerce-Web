        
     

    
     <form name="form" method="POST" action="postBuy.php <?php $cno=$_GET['cno'];echo "?cno=$cno";?>" >
       <table width="788" border="0">
         <tr>
           <td width="782">
		   <p>Car ID: <?php $cno=$_GET['cno']; echo $cno;?></p></td>
         </tr>
         <tr>
           
         </tr>
		 <tr>
           <td width="782">
		   <p>Car Name: <?php $cno=$_GET['cno']; $q="Select * from cardata where cno='$cno'";
$r=mysql_query("$q");
$array=mysql_fetch_array($r);
$cname=$array['cname'];echo $cname;?></p></td>
         </tr>
         <tr>
           
         </tr>
		 <tr>
           <td width="782">
		   <p>Car Details: <?php $cno=$_GET['cno']; $q="Select * from cardata where cno='$cno'";
$r=mysql_query("$q");
$array=mysql_fetch_array($r);
$cdetails=$array['cdetails'];echo $cdetails;?></p></td>
         </tr>
         <tr>
         </tr>
		 <tr>
           <td width="782">
		   <p>Car Price: <?php $cno=$_GET['cno']; $q="Select * from cardata where cno='$cno'";
$r=mysql_query("$q");
$array=mysql_fetch_array($r);
$cprice=$array['cprice'];echo $cprice;?></p></td>
         </tr>
         <tr>
           
         </tr>
		 
         <tr>
          <td><label for="creditnumber">credit number:</label>
             
             <input type="text" name="creditnumber" id="creditnumber">
           </td>
         </tr>        
         <tr>
           <td><input type="submit" name="buy" id="buy" value="BUY"></td>
         </tr>
       </table>
     </form>