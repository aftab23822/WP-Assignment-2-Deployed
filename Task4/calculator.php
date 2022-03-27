<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Php Calculator</title>
</head>
<body>
<form method="POST" accept="<?php echo $_SERVER['PHP_SELF'];?>">
	<p>Enter First Number <input type="number" name="num1"></p>
	<p>Select Operator 
		<select name="Operator">
		<option value="*">*</option>
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="/">/</option>
		</select>
	<p>Enter Second Number <input type="number" name="num2"></p>
	<input type="submit" name="submit">
</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$result;
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$operator=$_POST['Operator'];
	switch ($operator) {
		case '*':
			$result=$num1*$num1;
			break;
		
		case '+':
			$result=$num1+$num1;
			break;
		

		case '-':
			$result=$num1-$num1;
			break;
		
		case '/':
			$result=$num1/$num1;
			break;
		

		default:
			$result='Invalid Operator';
			break;
	}
echo "<p>Answer:".$result."</p>";
}
?>