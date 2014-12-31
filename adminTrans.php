<?php 
include 'core/init.php'; 
admin_protect();
?>
<form name="form" method="POST" action="checktransid.php" >
<p>Check transaction by id: <input type="text" name="id" id="id"><input type="submit" name="submit" id="submit" value="submit"><p>
</form>
<form name="form" method="POST" action="checkTransUser.php" >
<p>Check transaction for user: <input type="text" name="username" id="username"><input type="submit" name="submit" id="submit" value="submit"><p>
</form>
<form name="form" method="POST" action="changeDetail.php" >
<p>Update detail for user transaction: </p>
<p>ID: <input type="text" name="id" id="id"></p>
<p>Detail: <input type="text" name="detail" id="detail"></p>
<input type="submit" name="submit" id="submit" value="submit"></p>
</form>
<form name="form" method="POST" action="checkNewTrans.php" >
<p><input type="submit" name="submit" id="submit" value="Check New Transaction"><p>
</form>
<a href="adminIndex.php">Back</a>