<?php
function setComments($conn)
{
$msg='';
if(isset($_POST['commentSubmit']))
{
$userid=$_POST['userid'];
$message=$_POST['message'];

$sql="insert into comments (userid,message)Values( '$userid','$message')";
$result=$conn->query($sql);

	}
}
?>