<?php session_start();?>
<?php require_once('include/connection.php');
	setcookie('language','Sinhala',time()+10);
	

?>
<?php if(isset($_Session['id']))
{

header('Location:index.php');

}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Users</title>
	<link rel="stylesheet" href="css/ds.css">
</head>
<body>
<header>
	<div class="appname">User Management System</div>
	<div class="loggedin">Welcome <?php echo $_SESSION['firstname'];?>!<a href="logout.php">Log Out</a></div>
		
		
			  






</header>
<h1>Users</h1>



</body>
</html>