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
		$stateAb = filter_input(INPUT_POST, 'stateAb');
		//$stateName = filter_input(INPUT_POST, 'stateName');
	
		// query to update data into the table
			if($query="SELECT * FROM CUSTOMER WHERE stateAb = '$stateAb'"){
				if($query==null){
					echo "No record Available";
					die();
				}
		
			else{
				$output=$connection->query($query);
				$output->setFetchMode(PDO::FETCH_ASSOC);

			}
	}
}
?>
	

<html>
    <head>
        <title>Customer Data </title>
		<style>
			
			table, th, td {
  				border: 1px solid black;
  				border-style: inset;
				border-color: #70807C;
				}
			th {
 				 background-color: #70807C;
				 text-align: center
			}
			thead {color:white;}
		</style>
    </head>
    	<body style="background-color:F6F6F6;">
            <h2 style="font-family:verdana;">Customer Data</h2>
            <table class="table">
                <thead class ="thread black">
                    <tr>
                        <th style ="font-family:courier">Customer ID</th>
                        <th style ="font-family:courier">Customer Name</th>
						<th style ="font-family:courier"> Street </th>
						<th style ="font-family:courier"> City</th>
						<th style ="font-family:courier"> State Ab</th>
                        <th style ="font-family:courier">Zipcode</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $output->fetch()): ?>
                        <tr>
                            <td style ="font-family:courier" ><?php echo htmlspecialchars($row['cID']) ?></td>
                            <td style ="font-family:courier"><?php echo htmlspecialchars($row['name']); ?></td>
                            <td style ="font-family:courier"><?php echo htmlspecialchars($row['street']); ?></td>
							<td style ="font-family:courier"><?php echo htmlspecialchars($row['city']) ?></td>
							<td style ="font-family:courier"><?php echo htmlspecialchars($row['stateAb']) ?></td>
							<td style ="font-family:courier"><?php echo htmlspecialchars($row['zipcode']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>