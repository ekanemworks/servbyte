<?php 
require 'connect.php';

$meal = [];

  if (isset($_GET['mealid'])) {

        @$mealid = ($_GET['mealid']);

$sql = "SELECT * FROM meal WHERE id = '$mealid'";
$result = mysqli_query($con,$sql);
	
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


 ?>