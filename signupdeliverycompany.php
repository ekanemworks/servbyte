<?php 
require 'connect.php';

 $postdata = file_get_contents("php://input");

if (isset($postdata) && !empty($postdata)) {
    # code...
    $request = json_decode($postdata);


    //Sanitize
     $city = mysqli_real_escape_string($con, $request->city);
     $companyname = mysqli_real_escape_string($con, $request->companyname);
     $email = mysqli_real_escape_string($con, $request->email);
     $password = mysqli_real_escape_string($con, $request->password);
     $phone = mysqli_real_escape_string($con, $request->phone);




    // TO INSERT DETAILS
    $sql = "INSERT INTO deliverycompany  VALUES (NULL,
                                        '$companyname',
                                        '',
                                        '$email',
                                        '$phone',
                                        '$password',
                                        '$city')";
    $go=mysqli_query($con,$sql);



    $sql2 = "SELECT id FROM deliverycompany WHERE email = '$email'";
    $result2 = mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $companyId = $row2['id'];


     echo json_encode($companyId);

    // // SEND AN EMAIL
    $subject = 'Welcome to Creftbox';
    $message = 'Hi, your profile has being created on ServByte and you`re ready to go. ';
    $headers = 'From: noreply@servbyte.com';
    mail($email,$subject,$message,$headers);





}




 ?>