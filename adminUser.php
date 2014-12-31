<?php 
include 'core/init.php'; 
admin_protect();
?>
<html>
<form name="form" method="POST" action="checkUsername.php" >
<p>Check user by username: <input type="text" name="username" id="username"><input type="submit" name="submit" id="submit" value="submit"><p>
</form>
<form name="form" method="POST" action="checkEmailuser.php" >
<p>Check user by email: <input type="text" name="email" id="email"><input type="submit" name="submit" id="submit" value="submit"><p>
</form>
<form name="form" method="POST" action="checkallusers.php" >
<input type="submit" name="submit" id="submit" value="Check All Users">
</form>
<form name="form" method="POST" action="deleteuserUsername.php" >
<p>Delete user by username: <input type="text" name="username" id="username"><input type="submit" name="submit" id="submit" value="submit"><p>
</form>
<form name="form" method="POST" action="restart.php" >
<p>Restart password for user by username: <input type="text" name="username" id="username"><input type="submit" name="submit" id="submit" value="submit"><p>
</form>
<a href="adminIndex.php">Back</a>
</html>