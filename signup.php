<?php 
require 'connect.php';

 $postdata = file_get_contents("php://input");

if (isset($postdata) && !empty($postdata)) {
    # code...
    $request = json_decode($postdata);


    //Sanitize
     $city = mysqli_real_escape_string($con, $request->city);
     $resturantname = mysqli_real_escape_string($con, $request->resturantname);
     $email = mysqli_real_escape_string($con, $request->email);
     $password = mysqli_real_escape_string($con, $request->password);




    // TO INSERT DETAILS
    $sql = "INSERT INTO resturants  VALUES (NULL,
                                        '$resturantname',
                                        '$city',
                                        '$email',
                                        '$password')";
    $go=mysqli_query($con,$sql);


    // SEND AN EMAIL
    $subject = 'Welcome to Creftbox';
    $message = 'Hi, your profile has being created on ServByte and you`re ready to go. ';
    $headers = 'From: noreply@servbyte.com';
    mail($email,$subject,$message,$headers);



    echo json_encode('Signup Working!');



}




 ?>