<?php
session_start();
if($_SESSION['Login']!="yes")
{
	header("location: form.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Protected Document</title>
</head>
<body>
<h1>This Document is protected</h1>
<p>You can only see if you are logged in</p>
</body>
</html>