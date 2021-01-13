<?php 
include 'websessionholder.php';


if (isset($_GET['hashid'])) {
   
    @$rand_hash_id = ($_GET['hashid']);

  }






  $check_details = mysqli_query($con,"SELECT * FROM products WHERE hash_id='$rand_hash_id'");
  $get_details_row = mysqli_fetch_assoc($check_details);
  $v_productkind = $get_details_row['productkind'];
  $v_productcategory = $get_details_row['productcategory'];
  $v_producttype = $get_details_row['producttype'];
  $v_productbrand = $get_details_row['productbrand'];
  $v_productinfo = $get_details_row['productinfo'];
  $v_productprice = $get_details_row['productprice'];
  $v_photo1 = $get_details_row['photo1'];
  $v_photo2 = $get_details_row['photo2'];
  $v_photo3 = $get_details_row['photo3'];
  $v_rating = $get_details_row['rating'];
  $v_review_no = $get_details_row['review_no'];







  if (isset($_FILES['profilepic1'])&&isset($_POST['submitpic'])) {


    if ($v_photo1==="") {
      # code...

       $ddate=date('d-m-y');
       $chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
       $rand_dir_name=substr(str_shuffle($chars), 0, 8 );
        


       // CHECK IF DIRECTORY EXIST WITH A DATE
       // CHECK IF DIRECTORY EXIST WITH A DATE
       if (is_dir("productdata/productpic/$ddate")) {
         # code...
       }else{
       mkdir("productdata/productpic/$ddate"); 
       }


       mkdir("productdata/productpic/$ddate/$rand_dir_name"); 
       if (($_FILES["profilepic1"]["name"])=="") 
       {
       }
       else
       {
  
  
         $picname=preg_replace('#[^A-Za-z0-9]#i', '', $_FILES['profilepic1']["name"]);
         move_uploaded_file(@$_FILES["profilepic1"]["tmp_name"], "productdata/productpic/$ddate/$rand_dir_name/".$picname);
         $house_photo_name = @$picname;
         $house_photo_query =mysqli_query($con,"UPDATE products SET photo1='$ddate/$rand_dir_name/$house_photo_name' WHERE hash_id='$rand_hash_id'");


         // FOR CREFT UNIVERSE TABLE
         // FOR CREFT UNIVERSE TABLE
         $house_photo_query =mysqli_query($con,"UPDATE creftuniverse SET photo='$rand_dir_name/$house_photo_name' WHERE hashid='$rand_hash_id'");
    
       }

    }elseif ($v_photo1!="" && $v_photo2==="") {
      
       $ddate=date('d-m-y');
       $chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
       $rand_dir_name=substr(str_shuffle($chars), 0, 8 );
  



       // CHECK IF DIRECTORY EXIST WITH A DATE
       // CHECK IF DIRECTORY EXIST WITH A DATE
       if (is_dir("productdata/productpic/$ddate")) {
         # code...
       }else{
       mkdir("productdata/productpic/$ddate"); 
       }


       mkdir("productdata/productpic/$ddate/$rand_dir_name"); 
       if (($_FILES["profilepic1"]["name"])=="") 
       {
       }
       else
       {
  
  
         $picname=preg_replace('#[^A-Za-z0-9]#i', '', $_FILES['profilepic1']["name"]);
         move_uploaded_file(@$_FILES["profilepic1"]["tmp_name"], "productdata/productpic/$ddate/$rand_dir_name/".$picname);
         $house_photo_name = @$picname;
         $house_photo_query =mysqli_query($con,"UPDATE products SET photo2='$ddate/$rand_dir_name/$house_photo_name' WHERE hash_id='$rand_hash_id'");


         // FOR CREFT UNIVERSE TABLE
         // FOR CREFT UNIVERSE TABLE
         $house_photo_query =mysqli_query($con,"UPDATE creftuniverse SET photo='$rand_dir_name/$house_photo_name' WHERE hashid='$rand_hash_id'");
    
       }


    }elseif ($v_photo1!="" && $v_photo2!="" && $v_photo3==="") {
      
       $ddate=date('d-m-y');
       $chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
       $rand_dir_name=substr(str_shuffle($chars), 0, 8 );
        


       // CHECK IF DIRECTORY EXIST WITH A DATE
       // CHECK IF DIRECTORY EXIST WITH A DATE
       if (is_dir("productdata/productpic/$ddate")) {
         # code...
       }else{
       mkdir("productdata/productpic/$ddate"); 
       }


       mkdir("productdata/productpic/$ddate/$rand_dir_name"); 
       if (($_FILES["profilepic1"]["name"])=="") 
       {
       }
       else
       {
  
  
         $picname=preg_replace('#[^A-Za-z0-9]#i', '', $_FILES['profilepic1']["name"]);
         move_uploaded_file(@$_FILES["profilepic1"]["tmp_name"], "productdata/productpic/$ddate/$rand_dir_name/".$picname);
         $house_photo_name = @$picname;
         $house_photo_query =mysqli_query($con,"UPDATE products SET photo3='$ddate/$rand_dir_name/$house_photo_name' WHERE hash_id='$rand_hash_id'");


         // FOR CREFT UNIVERSE TABLE
         // FOR CREFT UNIVERSE TABLE
         $house_photo_query =mysqli_query($con,"UPDATE creftuniverse SET photo='$ddate/$rand_dir_name/$house_photo_name' WHERE hashid='$rand_hash_id'");
    
       }
    }


  }







  $check_details = mysqli_query($con,"SELECT * FROM products WHERE hash_id='$rand_hash_id'");
  $get_details_row = mysqli_fetch_assoc($check_details);
  $v_productkind = $get_details_row['productkind'];
  $v_productcategory = $get_details_row['productcategory'];
  $v_producttype = $get_details_row['producttype'];
  $v_productbrand = $get_details_row['productbrand'];
  $v_productinfo = $get_details_row['productinfo'];
  $v_productprice = $get_details_row['productprice'];
  $v_photo1 = $get_details_row['photo1'];
  $v_photo2 = $get_details_row['photo2'];
  $v_photo3 = $get_details_row['photo3'];
  $v_rating = $get_details_row['rating'];
  $v_review_no = $get_details_row['review_no'];



if ($v_photo1 === "") {
$v_photo1 = "";
}else {
$v_photo1 = "./productdata/productpic/".$v_photo1;
}

if ($v_photo2 === "") {
$v_photo2 = "";
}else {
$v_photo2 = "./productdata/productpic/".$v_photo2;
}

if ($v_photo3 === "") {
$v_photo3 = "";
}else {
$v_photo3 = "./productdata/productpic/".$v_photo3;
}


if ($v_photo1==""&&$v_photo2==""&&$v_photo3=="") {
  # code...
  $photo_count="0";
}elseif ($v_photo1!=""&&$v_photo2==""&&$v_photo3=="") {
  # code...
  $photo_count="1";
}elseif ($v_photo1!=""&&$v_photo2!=""&&$v_photo3=="") {
  # code...
  $photo_count="2";
}elseif ($v_photo1!=""&&$v_photo2!=""&&$v_photo3!="") {
  # code...
  $photo_count="3";
}




 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Creftbox</title>

  <!-- Bootstrap core CSS -->
  <link href="web_vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="web_vendor2/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="web_css/shop-homepage.css" rel="stylesheet">

  <script type="text/javascript" src="jquery.js"></script>
</head>

            <style type="text/css">
  
  @media only screen and (max-width: 1500px) {


    #navblockappear{
      display: none;
    }


     .styleboxitem{
      height: 170px;
      cursor: pointer;
  }


  .styleboxitemlabel{
    margin-top: 110px;
    color: #fff;
    text-align: center;
  }


    #statssize{
		 margin-top: 70px;
    }

         	.creftboxtooliconsgrid{
                  		float: left;
                  		text-align: center;
                  		padding: 5px;
                  	}

                  	.creftboxtoolicons{
                  		width: 200px; border: 1px solid #ddd;
                  		padding: 10px;
                  	}

                  	  .Additemcontainer{
  	
  			}



      @media only screen and (max-width: 900px) {







      @media only screen and (max-width: 576px) {
    #navblockdisapear{
   
      background: red;
      display: none;
    }

    #navblockappear{
      display: block;
    }


    #statssize{
		margin-top: 10px;
    }

     	.creftboxtooliconsgrid{
                  		float: left;
                  		text-align: center;
                  		padding: 5px;
                  		width: 50%;
                  	}



          	.creftboxtoolicons{
                  		width: 100%; border: 1px solid #ddd;
                  		padding: 10px;
                  		height: 100px;
                  	}















  }














  }











 





  }



  .profileanalytics{
/*  	border: 1px solid #ddd;
  	padding: 10px;
  	border-radius: 5px;
*/



  		  border: 1px solid #f5f5f5; 
  		  background: #fff; 
  		  padding: 10px; 
  		  border-radius: 10px;
  		  width: 100%
  		  margin: auto;
  		  box-shadow: 0 6px 10px 0 #ddd;
  }

.Dashboardcontainer{

  		  border: 1px solid #f5f5f5; 
  		  background: #fff; 
  		  padding: 10px; 
  		  border-radius: 10px;
  		  width: 100%
  		  margin: auto;
  		  box-shadow: 0 6px 10px 0 #ddd;
}


.inputtag {
    border: none;
    border-bottom: 1px solid #ddd;
    width: 100%;
    margin-top: 30px;

}

#selectinput{
	width: 100%;
	background: #fafafa;
	padding: 10px;
}


  .no-display {
    display: none;
  }

    #thesearchbox{
    
    border: 1px solid transparent;
    background: transparent;
    font-size: 14px; 
    width: 100%; 
    margin-left: 10px; 
    font-weight: bold;
  }



    .searchdiv{
    color: #fff;  
    width:90%; 
    margin: 7px; 
    background: #fff;  
    text-align: left; 
    border-radius: 15px;
    padding: 2px; 

  }


  .searchbtn{
    border-radius: 50%;
    height:30px;
    width: 30px;
    float: right;
    background: linear-gradient(,);
    border: 1px solid #fff;
    color: #000;
    margin-left: 10px;
    font-size: 17px;
  }


     .exploreDiv{
    background: #ddd; border-radius: 8px; margin: 3px; height: 260px;
    color: #fff; 
      -webkit-box-shadow: rgba(0, 0, 0, .4) 900px 1000px 000px inset; 
     -moz-linear-box-shadow: rgba(0, 0, 0, .4) 900px 1000px 000px inset;
     -ms-linear-box-shadow: rgba(0, 0, 0, .4) 900px 1000px 000px inset;
     
  }

  .exploreDiv:hover{

     -webkit-box-shadow: rgba(0, 0, 0, .1) 900px 1000px 000px inset; 
     -moz-linear-box-shadow: rgba(0, 0, 0, .1) 900px 1000px 000px inset;
     -ms-linear-box-shadow: rgba(0, 0, 0, .1) 900px 1000px 000px inset;
  }


  .ExploreLabel{
    margin-top: 180px;
    margin-left: 15px;
    font-size: 17px;
  }


.submitBTN{
  width: 200px;
  padding: 10px;
  background: linear-gradient(to bottom right, #000, rgb(232, 62, 140));
  border-radius: 23px;
  color: #fff;
  margin-top: 18px;
  margin-bottom: 30px;
  text-align: center;
  font-weight: bold;

}


</style>  

<body style="background: #fff;">

  <!-- Navigation -->
<?php include 'web_session_nav.php'; ?>


    <style type="text/css">
        .jumbolabel{
          color: #fff;
          font-size: 28px; font-weight: ;
          text-align: center;
        }

        .bgimgslider{
          position: absolute;
          left: 0;
          width: 100%;
          /*height: 100vh;*/
          height: 200px;
          background-image: linear-gradient(135deg, #0061f2 0%, rgba(105, 0, 199, 0.8) 100%);

        }

        .outer{
          left: 0;
          width: 100%;
          height: 200px;
          background: rgba(0,0,0,0.5);
        }




.fadedark{

  -webkit-box-shadow: rgba(0, 0, 0, .2) 900px 1000px 000px inset; 
     -moz-linear-box-shadow: rgba(0, 0, 0, .2) 900px 1000px 000px inset;
     -ms-linear-box-shadow: rgba(0, 0, 0, .2) 900px 1000px 000px inset;

}

a{
	color: #000;
	text-decoration: none;
}

    </style>

  <!-- Page Content -->
  <div class="container">

    <!-- FIRST DIV WITH IMG BACKGROUND -->
    <div class="bgimgslider">
        <div class="outer">
                  
          <br><br><br>


              <!-- START OF NEW CONTENT -->
              <!-- START OF NEW CONTENT -->
              <div style="width: 90%; margin: auto;">
                	
                	<a href="webDashboard.php">
                		<div style="text-align: center; color: #fff; font-weight: bold; font-size: 17px;">
                		<i class="fa fa-arrow-left"></i> Back to Dashboard
                		</div>
                	</a>


              <div class="row">


              	<div class="col-lg-2 col-md-2 col-sm-1"></div>

                  <div class="col-lg-8 col-md-8 col-sm-10">
                            

                              <br>
                    <!-- START OF CONTENT -->
                    <div class="Dashboardcontainer">
                        <div style="font-size: 18px; font-weight: bold; border-bottom: 1px solid #ddd; margin-bottom: 10px;">
                          <div style="border-bottom: 1px solid #ddd; padding: 10px; text-align: center;">
                          Add photos (max 3)
                          </div>

                
                        </div>

            			


            			<div class="" style="">




            				<?php 







if (!$v_photo3) {
  # code...
?>

                    
                    <center>
                      
                  <table>
                    <tr>
                      <td style="width: 500px;">
                        
                    <!-- START OF BUTTON -->
                    <div onclick="AddphotoFunction()" id="additemphotoLabel" style="width: 120px; padding: 7px; border: 1px solid #; margin: auto; font-size: 20px; text-align: center; border-radius: 20px; background: linear-gradient(#f5f5f5,#ccc); 
        box-shadow: 0 6px 10px 0 #ddd; cursor: pointer;">
                      <i class="fa fa-camera"></i> <span style="font-size: 12px; font-weight: bold;">add photo</span>
                    </div>
                    <!-- END OF BUTTON -->

                      </td>
                      <td style="width: 500px;">
                        
                    <!-- START OF BUTTON -->
                    <div onclick="checkifphotos('<?php echo$v_photo1; ?>')" id="additemphotoLabel" style="width: 100px; padding: 7px; border: 1px solid #; margin: auto; font-size: 20px; text-align: center; border-radius: 20px; background: #333; 
        box-shadow: 0 6px 10px 0 #ddd; cursor: pointer; color: #fff;">
                      Done
                    </div>
                    <!-- END OF BUTTON -->

                      </td>
                    </tr>
                  </table>

                    </center>



<?php
}




if ($v_photo3) {
  # code...
?>

<a href="webDashboard.php">
<div style="text-align: center; border: 1px solid #ddd; background: yellow; color: #000; font-weight: bold; border-radius: 20px; padding: 5px; width: 150px; font-size: 15px; margin: auto;">
  View in shop <i class="fa fa-store"></i>
</div>	
</a>

<br>
<div style="font-weight: bold; margin-top: 10px; text-align: center;">
  Photo 3
</div>
<div class="exploreDiv" style="background: url(<?php echo @$v_photo3; ?>) no-repeat center center; 
    background-size: cover;">
  
</div>
<br>
<?php

}



if ($v_photo2) {
  # code...
?>
<div style="font-weight: bold; margin-top: 10px; text-align: center;">
  Photo 2
</div>
<div class="exploreDiv" style="background: url(<?php echo @$v_photo2; ?>) no-repeat center center; 
    background-size: cover;">
  
</div>
<br>
<?php

}


if ($v_photo1) {
  # code...
?>
<div style="font-weight: bold; margin-top: 10px; text-align: center;">
  Photo 1
</div>
<div class="exploreDiv" style="background: url(<?php echo @$v_photo1; ?>) no-repeat center center; 
    background-size: cover;">
  
</div>
<?php

}




            				 ?>






            			</div>	

         



                    </div>
                    <!-- END OF CONTENT -->






                  </div>
   
              </div>
              <!-- END OF ROW -->





              </div>
              <!-- END OF NEW CONTENT -->
              <!-- END OF NEW CONTENT -->


              <!-- START OF DEFAULT PRODUCT FLOW -->
              <!-- START OF DEFAULT PRODUCT FLOW -->
              <div>
                
              </div>





	   <form action="webAddItemPhoto.php?hashid=<?php echo$rand_hash_id;?>" method="POST" enctype="multipart/form-data">
    									<input  id="photoinputfile1" type="file" accept="image/*" class="no-display" name="profilepic1" onchange="document.getElementById('submitpic').click(); document.getElementById('additemphotoLabel').innerHTML='loading..';">
    									<input type="submit" id="submitpic" name="submitpic" class="no-display">
  									</form>






<br><br>



        </div>
    </div>


  </div>
  <!-- /.container -->

  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>


  <!-- Footer -->


  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript">
  	
  function AddphotoFunction() {
        document.getElementById("photoinputfile1").click();
    }

  function checkifphotos(argument) {
    // body...
    if (argument=='') {
      alert('Enter one or more photos to ensure credibility');
    }else{
      window.location='webDashboard.php';
    }

  }

  </script>
  <script src="web_vendor/jquery/jquery.min.js"></script>
  <script src="web_vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
