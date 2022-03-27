<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Database Queries</title>
</head>
<body>
<form action="sql.php" method="POST">
	<p>Server Name:<input type="text" name="serverName"></p>
	<p>MySQL User:<input type="text" name="sqlUser"></p>
	<p>MySQL Pass:<input type="text" name="sqlPass"></p>
	<p>MySQL Database<input type="text" name="sqlDb"></p>
	<p>(NOTE: Leave database blank if creating a database) SQL:</p>
	<textarea name="sqlquery"></textarea>
	<input type="submit" name="submit" value="GO">
</form>
</body>
</html>