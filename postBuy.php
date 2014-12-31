<?php
include 'core/init.php'; 
 include 'includes/overall/header.php';
 protect_page();
 ?>
 <h1>Post Buy</h1>
 <?php
 include 'buying.php';
 ?>
 <br>
 <br>
 <form name="form" method="POST" action="buyacar.php <?php $cno=$_GET['cno'];echo "?cno=$cno";?>" >
 <input type="submit" name="Back" id="Back" value="Back">
 </form>

<?php include 'includes/overall/footer.php'; ?>