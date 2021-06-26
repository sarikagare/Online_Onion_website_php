
<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
    $FullName = $_POST['FullName'];
     $Email = $_POST['Email'];
     $Address = $_POST['Address'];
     $City=$_POST['City'];
     $State=$_POST['State'];
     $zip=$_POST['zip'];
     $NameonCard=$_POST['NameonCard'];
     $cardno=$_POST['cardno'];
     $expmonth=$_POST['expmonth'];
     $expyear=$_POST['expyear'];
     $Cvv=$_POST['Cvv'];


    $sql = "INSERT INTO checkout (FullName,Email,Address,City,State,zip,NameonCard,cardno,expmonth,expyear,Cvv) VALUES ('$FullName','$Email','$Address','$City','$State','$zip','$NameonCard','$cardno','$expmonth','$expyear','$Cvv')";

     if (!mysqli_query($conn,$sql)) 
     {
        echo mysqli_error($conn);
     } 
     elseif ($sql > 0)
      {

       echo "<script> window.location.assign('cucces.php'); </script>";
     }
     else
     {
      echo "Failed..Fill Out Again..";
     }
  
    }
      
  

  ?>


<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2>Checkout</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method=post action="checkout.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="FullName" placeholder="Ashvini J. Shewale" required="True">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="Email" placeholder="Ashu@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="Address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="City" placeholder="Nashik">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="State" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="NameonCard" placeholder="Ashvini J. Shewale">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardno" placeholder="1111-2222-3333-4444" required="True">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required="True">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="Cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>

            <td><input style="padding: 10px 25px;font-weight:bold;background-color: green;border-radius: 5px;cursor: pointer;color: white" type="submit" name="submit" value="contineu to checkout"></td>
      </form>
    </div>
  </div>
</div>

</body>
</html>

