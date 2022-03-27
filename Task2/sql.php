<?php
if(isset($_POST['submit']))
{
	$serverName=$_POST['serverName'];
	$sqlUser=$_POST['sqlUser'];
	$sqlPass=$_POST['sqlPass'];
	$sqlDb=$_POST['sqlDb'];
	$sqlquery=$_POST['sqlquery'];

	if(is_null($sqlDb))
	// Create connection
	$conn = new mysqli($serverName, $sqlUser, $sqlPass);
	else
	$conn = new mysqli($serverName, $sqlUser, $sqlPass, $sqlDb);
	if ($result = mysqli_query($conn,$sqlquery)) {
	  
		try{
			//echo "Returned rows are: " . $result -> num_rows;	
			echo'Done';	
		}
		catch(Exception $e){
			echo 'Message: ' .$e->getMessage();

		}
		echo '<p>'.$sqlquery.'</p>'.' Query Executed successfully<br>';
	  

	 
	}

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

}
?>