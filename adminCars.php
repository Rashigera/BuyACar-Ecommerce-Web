<?php 
include 'core/init.php'; 
admin_protect();
?>
<html>
<body>
<form enctype="multipart/form-data" action="storeinfo.php" method="POST">
<table border=0>
<tr>
<td>Car Name</td><td><input type=text name="cname"></td>
</tr>
<tr>
<td>Car Description</td><td><input type=text name="cdetails"></td>
</tr>
<tr>
<td>Car Photo</td><td><input type=file name="cphoto"></td>
</tr>
<tr>
<td>Car Price $</td><td><input type=text name="cprice"></td>
</tr>
<tr>
<td></td><td><input type="submit" value="Store Information"></td>
</tr>
</form>

<form name="form" method="POST" action="checkCarID.php" >
<p>Check car by id: <input type="text" name="cno" id="cno"><input type="submit" name="submit" id="submit" value="submit"><p>
</form>
<form name="form" method="POST" action="checkallCars.php" >
<input type="submit" name="submit" id="submit" value="Check All Cars">
</form>
<form name="form" method="POST" action="deletecarID.php" >
<p>Delete car by id: <input type="text" name="cno" id="cno"><input type="submit" name="submit" id="submit" value="submit"><p>
</form>
<form name="form" method="POST" action="updateCarPrice.php" >
<p>Update car price: </p>
<p>ID: <input type="text" name="cno" id="cno"></p>
<p>Price: <input type="text" name="cprice" id="cprice"></p>
<input type="submit" name="submit" id="submit" value="submit"></p>
</form>
<a href="adminIndex.php">Back</a>
</body>
</html>