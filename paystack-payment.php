<?php
require 'connect.php';


  if (isset($_GET['id'])) {
       
    @$id = ($_GET['id']);

  	$query = mysqli_query($con,"SELECT price FROM meal WHERE id = '$id'");
  	$fetch = mysqli_fetch_assoc($query);
  	$price = $fetch['price'];

  }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<h3>Customer info Confirmation</h3>


<form id="paymentForm">
  <div class="form-group">
    <input style="margin: 10px; padding: 5px; width: 200px; border-radius: 4px; border: 1px solid #ddd;" type="email" id="email-address" placeholder="Email" required />
  </div>
<!--   <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required />
  </div>
 -->  <div class="form-group">
    <input style="margin: 10px; padding: 5px; width: 200px; border-radius: 4px; border: 1px solid #ddd;" type="text" id="first-name" placeholder="First name"/>
  </div>
  <div class="form-group">
    <input style="margin: 10px; padding: 5px; width: 200px; border-radius: 4px; border: 1px solid #ddd;" type="text" id="last-name" placeholder="Last name" />
  </div>




  <div class="form-submit">
    <button style="margin: 10px; padding: 5px; width: 200px; border-radius: 4px; border: 1px solid #ddd; background: green; color: #fff;" type="submit" onclick="payWithPaystack()"> Payment  N<?php echo $price; ?></button>
  </div>
</form>
<script>
  const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_live_9348accd8565f9196bd757dbbdc16e8b3f97b12f', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: <?php echo $price; ?> * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });
  handler.openIframe();
}
</script>
<script src="https://js.paystack.co/v1/inline.js"></script>
</body>
</html>