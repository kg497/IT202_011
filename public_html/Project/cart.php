<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
// go to cart and go to speccific user, get product_id - go to Products table to get name, get quantity, and unit_price
// go to Products table to get the name of the item,
$total=0;
$res = [];
$columns = get_columns("Cart");
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "modified", "created", "avg_rating", "num_rating"];
$result=[];
$db = getDB();
$user_id = get_user_id();
$stmt = $db->prepare("SELECT Cart.user_id, Cart.product_id, Cart.desired_quantity, Cart.unit_price, Products.name FROM Cart INNER JOIN Products ON Cart.product_id = Products.id WHERE Cart.user_id = :user_id");
if (isset($_POST["deletion"])) {
    $p = se($_POST, "product_id", -1, false);
    $stmt3 = $db->prepare("DELETE from Cart WHERE product_id = :product_id AND user_id = :u_id");
    try {
        $stmt3->execute([":u_id" => $user_id, ":product_id" => $p]);
    }catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}
if (isset($_POST["clear"])) {
    $p = se($_POST, "product_id", -1, false);
    $stmt4 = $db->prepare("DELETE from Cart WHERE user_id = :u_id");
    try {
        $stmt4->execute([":u_id" => $user_id]);
    }catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}
if (isset($_POST["desired_quantity"])) {
    $p= se($_POST, "product_id", -1, false);
    $q= se($_POST, "desired_quantity", 0, false);
    $stmt4 = $db->prepare("UPDATE Cart SET desired_quantity = $q WHERE user_id = :u_id AND product_id= :product_id");
    if($q != 0){
        try {
            $stmt4->execute([":u_id" => $user_id, ":product_id"=> $p]);
        }catch (PDOException $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    }
    else{
        $user_id =get_user_id();
        $stmt5 = $db->prepare("DELETE from Cart WHERE product_id = :product_id AND user_id = :u_id");
        try {
            $stmt5->execute([":u_id" => $user_id, ":product_id" => $p]);
        }catch (PDOException $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    }
    
}
try {
    $stmt->execute([":user_id" => $user_id]);
    $r = $stmt->fetchALL(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
    
}catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
function mapColumn($col)
{
    global $columns;
    foreach ($columns as $c) {
        if ($c["Field"] === $col) {
            return inputMap($c["Type"]);
        }
    }
    return "text";
}

?>
<div class="container-fluid">
    <h1>My Cart</h1>
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="mb-4">
            <input type = "hidden" name = "product_id" value = "<?php se($item, "product_id");?>" />
            <input class="btn btn-primary" name = "clear" type="submit" value="Clear Cart" />
        </div>              
    </form>
    <div class="mb-4">
        <input type=button onClick="location.href='checkout_form.php'" class = "btn btn-primary" value='Purchase'>
    </div>   
    <?php foreach ($result as $item) : ?>

        <?php 
        $product= $item["product_id"];
        ?>
        <?php $total = $total + ((int)(100*$item["unit_price"])* $item["desired_quantity"])/100;
        $product_tot =((int)(100*$item["unit_price"])* $item["desired_quantity"])/100;
        ?>
            
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php se($item, "name"); ?></h5>
                    </div>
                    <div class="card-body">
                    <p class="card-text">Unit Price: $ <?php se($item, "unit_price");?></p>
                    <p class="card-text">Total Cost: $ <?php se($product_tot);?></p>
                    
                    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="mb-4">
                            <input type = "hidden" name = "product_id" value = "<?php se($item, "product_id");?>"/>
                            <label class="form-label" for="quantity">Quantity <?php se($item, "desired_quantity"); ?> </label>
                            <input class="form-control" id="desired_quantity" name="desired_quantity" value= "<?php se($item, "desired_quantity");?>" />
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update" />
                    </form>
                    <a href="details.php?id=<?php se($item, "product_id");?>">Details</a>   
                    </div>
                    <div class="card-footer">
                        
                        <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="mb-4">
                            <input type = "hidden" name = "product_id" value = "<?php se($item, "product_id");?>" />
                            <input class="btn btn-primary" name = "deletion" type="submit" value="Delete Item" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <div>
        <p class="card-text" ><font size = 4>Total Cart Cost: $ <?php se($total);?></font></p>
    </div>
</div>

<?php
    require(__DIR__. "/../../partials/flash.php"); 
?>


