
<?php 

require 'connect.php';
$meal = [];
$sql = "SELECT * FROM meal";

if ($result = mysqli_query($con,$sql)) 
{
	# code...
	$cr = 0;
	while ($row = mysqli_fetch_assoc($result)) 
	{
		$meal[$cr]['id'] = $row['id'];
		$meal[$cr]['hash_id'] = $row['hash_id'];
		$meal[$cr]['mealname'] = $row['mealname'];
		$meal[$cr]['picture'] = $row['picture'];
		$meal[$cr]['price'] = $row['price'];
		$meal[$cr]['preparationtime'] = $row['preparationtime'];
		$meal[$cr]['description'] = $row['description'];
		$meal[$cr]['addedby'] = $row['addedby'];
		$cr++;
	}


	//print_r($users);

	echo json_encode($meal);

}
else{
	http_response_code(404);
}


 ?>