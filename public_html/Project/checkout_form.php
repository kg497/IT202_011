<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");

if (isset($_POST["address"]) && isset($_POST["payment"])) {
    $street_num= se($_POST, "address", "", false);
    $street = se($_POST, "street", "", false);
    $apt= se($_POST, "apt", "", false);
    $city= se($_POST, "city", "", false);
    $state = se($_POST, "state", "", false);
    $zip = se($_POST, "zip", "", false);

    if(strlen($apt) > 0){
        $address = $street_num . " ". $street . " " . $apt . ", ". $city . ", ". $state .  ", " . $zip;
    }
    else{
        $address = $street_num . " ". $street . ", ". $city . ", ". $state .  ", " . $zip;
    }
    echo($address);
    $user_id = get_user_id();
    $payment_method = se($_POST, "payment", "", false);
    $total_price= se($_POST, "total", 0, false);
    $actual_price = 0;
    echo($zip);
   
   //add_order( $user_id, $total_price, $address, $payment_method);
    $hasError = false;
    if (empty($street_num)|| empty($street) || empty($city)) {
      flash("Missing address information", "danger");
      $hasError = true;
    }
    if (empty($payment_method)) {
      flash("Missing payment method", "danger");
      $hasError = true;
    }
    //if($total_price != $actual_price){
      //flash("Enter correct total price", "danger");
      //$hasError = true;
    //}
    if(strlen($zip)!=5){
      flash("Enter valid zip code", "danger");
      $hasError= true;
    }

}



?>
<div class="container-fluid">
    <h1>Checkout Form</h1>
    <form onsubmit=true method="POST">
        <div class="mb-3">
            <label class="form-label" for="pw">First Name</label>
            <input class="form-control" type="text" id="first" name="first" required  />
        </div>
        <div class="mb-3">
            <label class="form-label" for="pw">Last Name</label>
            <input class="form-control" type="text" id="last" name="last" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="pw">Payment method</label>
            <input class="form-control" type="text" id="payment" name="payment" required  />
        </div>
        <div class="mb-3">
            <label class="form-label" for="address"> Address Number</label>
            <input class="form-control" type="number" id="address" name="address" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="street"> Street Name</label>
            <input class="form-control" type="text" id="street" name="street" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="apt"> Apartment/Suite</label>
            <input class="form-control" type="text" id="apt" name="apt" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="city"> City</label>
            <input class="form-control" type="text" id="city" name="city" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="state">State/Province</label>
            <input class="form-control" type="text" id="state" name="state" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="country">Country</label>
            <label class="form-control" for="country">United States</label>
        </div>
        <div class="mb-3">
            <label class="form-label" for="zip">Postal/Zip Code</label>
            <input class="form-control" type="number" id="zip" name="zip" required length = "5"/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="total">Payment Total</label>
            <input class="form-control" type="text" id="total" name="total" required />
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Purchase" />
    </form>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>