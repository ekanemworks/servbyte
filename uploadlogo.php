<?php 

require 'connect.php';

  if (isset($_GET['companyid'])) {

        @$companyid = ($_GET['companyid']);


$target_dir = "images/logo/";
 $target_file = $target_dir.basename($_FILES["myfile"]["name"]); //Joining the path and the actual file


 move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);

	

 $sql = "UPDATE deliverycompany SET logo='$target_file' WHERE id='$companyid'";

 mysqli_query($con, $sql);

 echo json_encode("Successful!");



   }


 ?>