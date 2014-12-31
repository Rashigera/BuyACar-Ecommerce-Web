

             
     

    
     <form name="form" method="POST" action="buying.php <?php $cno=$_GET['cno'];echo "?cno=$cno";?>" >
       <table width="788" border="0">
         <tr>
           <td width="782">
		   <p>Car ID: <?php $cno=$_GET['cno']; echo $cno;?></p></td>
         </tr>
         <tr>
           
         </tr>
		 <tr>
           <td width="782">
		   <p>Car Name: <?php $cname=$_GET['cname']; echo $cname;?></p></td>
         </tr>
         <tr>
           
         </tr>
		 <tr>
           <td width="782">
		   <p>Car Details: <?php $cdetails=$_GET['cdetails']; echo $cdetails;?></p></td>
         </tr>
         <tr>
         </tr>
		 <tr>
           <td width="782">
		   <p>Car Price: <?php $cprice=$_GET['cprice']; echo $cprice;?></p></td>
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



<?php include 'includes/overall/footer.php'; ?>    