<!--Kandimalla, Lakshmi Pravallika ( 1002033072)
	Kommalapaty, Prudvi Raj ( 1002029512 ) -->
<?php
	//defining db variables
	$host = "localhost:3306";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "gallery_prav";
	
	//creating connection
	$connection = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
	
	//check connection
	if(!$connection){
		die("Connection Failed");
	}
	
	else{
	//giving values to update into table
	//$stateAb = filter_input(INPUT_POST, 'stateAb');
	$stateName = filter_input(INPUT_POST, 'stateName');
	
	// query to update data into the table
	$query="DELETE from STATE WHERE stateName = '$stateName'";
	
	//condition to check if the insert is completed
	if($connection->query($query)){
			echo "Record has been deleted successfully";
		}
	else{
		echo " Error: ",$query ."
		".$connection->error;
	}
	
	}
	
		
?>
	