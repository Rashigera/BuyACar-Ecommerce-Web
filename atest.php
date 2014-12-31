<html>
<title>Car Info</title>
<body>
<form enctype="multipart/form-data" action="storeinfo.php" method="POST">
<table border=0 align=center bgcolor=grey>
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
</body>
</html>