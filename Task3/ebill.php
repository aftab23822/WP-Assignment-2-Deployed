<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Electric Bill</title>
</head>
<body>
<h1>Php - Calculate Electricity Bill</h1>
<form method="POST" accept="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type="number" name="units" placeholder="Please enter no. of Units">
	<input type="submit" name="submit">
</form>
<p>Total amount of 25 - 87.50</p>

</body>
</html>

<?php 
if(isset($_POST['submit']))
{
	$price=0;
	$units=$_POST['units'];
	while($units>0)
	{

		if($units>=250)
		{
			$price+=(250*6.0);
			$units-=250;
		}
		if($units>=100)
		{
			$price+=(100*5.20);
			$units-=100;	

		}
		if($units>=100)
		{
			$price+=(100*4.0);
			$units-=100;	

		}
		if($units<=50)
		{

			$price+=($units*3.5);
			$units-=$units;

		}
	}
	echo '<h1>Total Bill: '.$price.'</h1>';
}

else
{
	echo 'No';
}
?>