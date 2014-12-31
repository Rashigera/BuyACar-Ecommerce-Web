<?php
include 'core/init.php'; 
 include 'includes/overall/header.php'; 
 protect_page()
 ?>
<form name="form" method="POST" action="detailsforuser.php" >
<p>Check transaction enter transaction id:</p>
 <p><input type="text" name="id" id="id"></p>
 <p><input type="submit" name="submit" id="submit" value="submit"></p>
</form>
<?php include 'includes/overall/footer.php'; ?> 