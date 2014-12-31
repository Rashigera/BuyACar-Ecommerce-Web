



<html>
<head>
   <title>upload</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
File:
<input type="file" name="image"> <input type="submit" value="Upload">
</form>

<?php 
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("lr") or die(mysql_error()); 



 $file=$_FILES['image']['tmp_name'];

if(!isset($file))
   echo "please select an image";
   
   else
   {
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name=addslashes($_FILES['image']['name']);
	$image_size=getimagesize($_FILES['image']['tmp_name']);
	
	if ($image_size==FALSE)
	  echo "Thats not an image";
	else
	{
	if(!$insert=mysql_query("INSERT INTO store VALUES('','$image_name','$image')"))
	  echo "Problem uploading image.";
	  else
	  {
	   $lastid=mysql_insert_id();
		 echo "Image Uploaded.<p />Your Image:<p /><img src=get.php?id=$lastid>";
	  }
    }	
 }
 

?>
</body>
</html>