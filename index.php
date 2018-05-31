<?php session_start();?>
<?php require_once('include/connection.php');?>

<?php

if(isset($_POST['Submit']))
{
     

     $errors=array();
// check if the username and password has been entered
	
	if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1)
{

    
		$errors[]='Username is Missing/Invalid';


}
if(!isset($_POST['password'])||strlen(trim($_POST['password']))<1)
{

    
		$errors[]='Password is Missing/Invalid';


}

if(empty($errors))
{


//Save user name and password to vaiables

	$email=mysqli_real_escape_string($connection,$_POST['email']);
	$password=mysqli_real_escape_string($connection,$_POST['password']);
	$hashed_password =($password);
	//Prepare database query

	$password=($password);
    $query="SELECT * FROM usertable WHERE email='{$email}'
    AND password='{$hashed_password}'
    LIMIT 1";

    $result_set=mysqli_query($connection,$query);
    if($result_set)
    {
      
      // Query successful!
    	if(mysqli_num_rows($result_set)== 1)
    	{        $usertable=mysqli_fetch_assoc($result_set);
                $_Session['id']=$usertable['id'];
                $_Session['firstname']=$usertable['firstname'];
            //valid user found
            //redirect to users.php
            header('Location:users.php');
        }

        	else{


        		$errors[]='Invalid Username/Password';
        	}}
        		else{
        			$errors[]='Database Query Failed';
        		}

        		}

}
    	

    


    ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Log In- User Managment System</title>


	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	
	
	<div class="login">
	
     
<img src="icon.png" class="len">
     	<h1>Login Here</h1>

          <fieldset>
          	<form action="index.php" method="post">
           <legend></legend>
            <p>UserName</p>
	   
           <input type="text" name="email" placeholder="Email Addrress">
           <p>Password</p>
	    
           <input type="text" name="password" id=""placeholder="Password">
           <input type="Submit"  name="Submit" value="Login">
           
          
<?php

		if(isset($errors) && !empty($errors))
		{

		echo'<p class="error">Invalid Username/Password</p>';


		}

?>


			




          




         

           



	
          </fieldset>

      </form>



</div></body></html>
<?php mysqli_close($connection); ?>






	








