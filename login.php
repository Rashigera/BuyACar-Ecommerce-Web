<?php
include 'core/init.php';
logged_in_redirect();
	
if (empty($_POST) ===false)
 {
    $username=$_POST['username'];
	$password=$_POST['password'];
   
   	if (empty($username) ===true || empty($password) ===true)
	{
	$errors[]= 'you need to enter username and password';
   }
   else if (user_exists($username)===false)
   {
   $errors[] ="username does not exist, please make sure of your spelling";
   }
   else if (user_active($username) ===false)
   {
   $errors[]="you haven't activated your account";
   }
   else 
   {
   
     if(strlen($password) >32){
	    $errors[]='Password too long';
		}
		
     $login=login($username,$password);
	 if ($login===false)
	    {
	    $errors[]="Username and Password combination is incorrect";
		}
		else if($username==="omar")
		{
			$_SESSION['username']=$username;
			header('Location: adminIndex.php');
		}
		else
		{
		 $_SESSION['username']=$username;
		 $_SESSION['user_id'] = $login;
         header('Location: index.php');
 		 exit();
	    }
	}	
	
   
 } 
else{
  $errors[]= 'No data received';
}  
 include 'includes/overall/header.php';
 if (empty($errors) ===false){
 ?>
    We tried to log you in, but:
<?php	
echo output_errors($errors);

} 
 include 'includes/overall/footer.php';
?>  
