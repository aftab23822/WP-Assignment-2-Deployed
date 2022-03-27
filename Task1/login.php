<?php
session_start();
if(isset($_POST['submit']))
{
	if($_POST['username']=='php' && $_POST['password']=='php')
	{
		$_SESSION['Login']='yes';
		echo "<h1>You are logged in</h1>";
		echo "<p><a href='document.php'>Link To Protected File </a></p>";
	}
	else{
		$_SESSION['Login']='no';
		echo "<h1>You are not logged correctly in </h1>";
		echo "<p><a href='document.php'>Link To Protected File </a></p>";

	}
}
?>