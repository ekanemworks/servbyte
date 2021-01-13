<?php 

require 'connect.php';

  if (isset($_GET['mealid'])) {

        @$mealid = ($_GET['mealid']);


$target_dir = "images/meal/";
 $target_file = $target_dir.basename($_FILES["myfile"]["name"]); //Joining the path and the actual file


 move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);

	

 $sql = "UPDATE meal SET picture='$target_file' WHERE id='$mealid'";

 mysqli_query($con, $sql);



   }


 ?>