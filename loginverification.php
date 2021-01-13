<?php 
require 'connect.php';

 $postdata = file_get_contents("php://input");

if (isset($postdata) && !empty($postdata)) {
    # code...
    $request = json_decode($postdata);

    //Sanitize
     $accounttype = mysqli_real_escape_string($con, $request->accounttype);
     $email = mysqli_real_escape_string($con, $request->email);
     $password = mysqli_real_escape_string($con, $request->password);


     if ($accounttype == "restaurant") {
     	



    $go=mysqli_query($con,"SELECT * FROM resturants WHERE email='$email' AND password='$password' ");

   
  	//check for their existance
  	$get_number =mysqli_num_rows($go);//count the number of rows returned //check for their existance

    if ($get_number==1) 
    	{ echo json_encode("authenticated"); }
    else{ echo json_encode("Wrong email or password");}

 	





     }else{


    $go=mysqli_query($con,"SELECT * FROM deliverycompany WHERE email='$email' AND password='$password' ");

   
  	//check for their existance
  	$get_number =mysqli_num_rows($go);//count the number of rows returned //check for their existance

	
    if ($get_number === 1 ) 
    	{ echo json_encode("authenticated"); }
    else{ echo json_encode("Wrong email or password");}

 	




     }






}




 ?>