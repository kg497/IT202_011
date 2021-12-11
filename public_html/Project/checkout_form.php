<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$result=[];
$db = getDB();
$user_id = get_user_id();
$stmt = $db->prepare("SELECT Cart.user_id, Cart.product_id, Cart.desired_quantity, Cart.unit_price AS cart_price, Products.name, Products.unit_price AS actual_price, Products.stock FROM Cart INNER JOIN Products ON Cart.product_id = Products.id WHERE Cart.user_id = :user_id");
try {        
    $stmt->execute([":user_id" => $user_id]);
    $r = $stmt->fetchALL(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
        
}catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}

$cart_price = 0;
$actual_price = 0;
foreach($result as $item){
  $cart_price = $cart_price + ((int)(100*$item["cart_price"])* $item["desired_quantity"])/100;
  $actual_price = $actual_price + ((int)(100*$item["actual_price"])* $item["desired_quantity"])/100;
}

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
    $payment_method = se($_POST, "payment", "", false);
    $total_price= se($_POST, "total", 0, false);
    
    $hasError = false;
    if(strlen($zip)!=5){
      flash("Enter valid zip code", "danger");
      $hasError= true;
    }

    foreach($result as $item){
        if($item["desired_quantity"] > $item["stock"]){
            $hasError = True;
            flash( $item["name"] . " only has a stock of ". $item["stock"], "warning");
        }
    }

    if($actual_price != $total_price){
        flash("Incorrect total price", "danger");
        $hasError = true;
    }
    
    if(!$hasError){
        add_order( $user_id, $actual_price, $address, $payment_method);
        $stmt2 = $db->prepare("SELECT id FROM Orders WHERE user_id = :user_id ORDER BY Created DESC LIMIT 1");
        try {
            $stmt2->execute([":user_id" => $user_id]);
            $r = $stmt2->fetch(PDO::FETCH_ASSOC);
            if ($r) {
                $order_id = $r["id"];
                
            }
        } catch (PDOException $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
        
        foreach($result as $item){
            $product_id = $item["product_id"];
            $quantity = $item["desired_quantity"];
            $unit_price = $item["actual_price"];
            $stock= $item["stock"]-$quantity;
            add_order_items( $order_id, $product_id, $quantity, $unit_price);
            $stmt3 = $db->prepare("UPDATE Products SET stock = $stock WHERE id= :product_id");
            try {
              $stmt3->execute([":product_id"=> $product_id]);
            }
            catch (PDOException $e) {
              flash("<pre>" . var_export($e, true) . "</pre>");
            }
        }
        
        $stmt4 = $db->prepare("DELETE from Cart WHERE user_id = :user_id");
        try {
            $stmt4->execute([":user_id" => $user_id]);
        }
        catch (PDOException $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
        redirect('order_confirmation.php?id='.$order_id);
        
        
    }

}

?>
<div class="container-fluid">
    <h1>Checkout Form</h1>
    <form onsubmit=true method="POST" >
        <div class="mb-4">
            <input type=button onClick="location.href='cart.php'" class = "btn btn-primary" value='Update Cart'>
        </div>  
        <div class="mb-3">
            <label class="form-label" for="pw">Cart Total: $ <?php se($cart_price)?> </label>
        </div>
        <div class="mb-3">
            <label class="form-label" for="pw"><font size = 4>Your Total Cost: $ <?php se($actual_price)?></font> </label>
        </div>
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
            <input class="form-control" type="number" id="zip" name="zip" required/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="total">Payment Total</label>
            <input class="form-control" type="number" step = "0.01" id="total" name="total" required />
        </div>
        <input type="submit"  class = "btn btn-primary" value='Purchase'>
       
    </form>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>