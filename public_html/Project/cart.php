<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
// go to cart and go to speccific user, get product_id - go to Products table to get name, get quantity, and unit_price
// go to Products table to get the name of the item,
$res = [];
$columns = get_columns("Cart");
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "modified", "created"];
$result=[];
$db = getDB();
$user_id = get_user_id();
$stmt = $db->prepare("SELECT user_id, product_id, desired_quantity, unit_price from Cart WHERE user_id = :user_id ORDER BY modified");
//$stmt2 = $db->prepare("SELECT id, name from Products WHERE user_id = :user_id");
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
    <?php foreach ($result as $item) : ?>

        <?php 
        $product= $item["product_id"];
        ?>
        <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
            <div class="mb-4">
                <input type = "hidden" name = "product_id" value = "<?php se($item, "product_id");?>" />
                <input class="btn btn-primary" name = "clear" type="submit" value="Clear Cart" />
            </div>              
        </form>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                    <p class="card-text">Quantity <?php se($item, "desired_quantity"); ?></p>
                    
                    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="mb-4">
                            <label class="form-label" for="quantity">Update Quantity </label>
                            <input class="form-control" id="quantity" name="quantity" />
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update" />
                    </form>
                    <a href="details.php?id=<?php se($item, "product_id");?>">Details</a>   
                    </div>
                    <div class="card-footer">
                        Cost: $ <?php se($item, "unit_price"); ?>
                        <input type=button onClick="location.href='add_cart.php?id=<?php se($item, "id");?>unit_price=<?php se($item, "unit_price");?>'" class = "btn btn-primary" value='Purchase'>
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
</div>

<?php
    require(__DIR__. "/../../partials/flash.php"); 
?>


