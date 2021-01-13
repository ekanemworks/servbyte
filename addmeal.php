<?php 
require 'connect.php';

 $postdata = file_get_contents("php://input");



if (isset($postdata) && !empty($postdata)) {
    # code...
    $request = json_decode($postdata);


//  //    //Sanitize
     $mealname = mysqli_real_escape_string($con, $request->mealname);
     $price = mysqli_real_escape_string($con, $request->price);
     $preparationtime = mysqli_real_escape_string($con, $request->preparationtime);
     $description = mysqli_real_escape_string($con, $request->description);
     $addedby = mysqli_real_escape_string($con, $request->addedby);


     // USE EMAIL TO GET CITY FROM DATABASE
    $sql_city_extract = mysql_query($con,"SELECT city FROM resturants WHERE email='$addedby'");
    $row_extract = mysqli_fetch_assoc($sql_city_extract);
    $city = $row_extract['city'];


    $hash_variable = $mealname.$addedby
	$hash_id=md5($hash_variable);


//  //    // TO INSERT DETAILS
    $sql = "INSERT INTO meal  VALUES (NULL,
    									'$hash_id',
                                        '$mealname',
                                        '',
                                        '$price',
                                        '$preparationtime',
                                        '$description',
                                        '$addedby'
                                        '$city')";
    $go=mysqli_query($con,$sql);




    // GETTING MEAL ID USED TO ADD PICTURE
    $sql2 = "SELECT id FROM meal WHERE hash_id = '$hash_id'";
    $sql_get = mysqli_query($con,$sql2);
    $sql_row = mysqli_fetch_assoc($sql_get);

    $id = $sql_row['id'];


    echo json_encode($id);



}




 ?>