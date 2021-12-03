<?php
require_once(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/functions.php");
is_logged_in(true);
$result = [];
$columns = get_columns("Products");
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "visibility", "modified", "created", "description"];
$db = getDB();
//get the item
$product_id = se($_GET, "id", -1, false);
$stmt = $db->prepare("SELECT * FROM Products where id =:id");

try {
    $stmt->execute([":id" => $product_id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $unit_price = $r["unit_price"];
        $result = $r;
    }
} catch (PDOException $e) {
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

if (isset($_POST["quantity"])) {
    $desired_quantity = $_POST["quantity"];
    $user_id = get_user_id();
    if($desired_quantity>0){
        if(add_item_cart($product_id, $user_id, $desired_quantity, $unit_price)){
            flash("Added to cart");
        }
        else{
            flash("could not add to cart", "danger");
        }
    }
}
?>

<div class="container-fluid">
    <h1>Add to Cart</h1>
    <?php foreach ($result as $column => $value) : ?>
            <?php /* Lazily ignoring fields via hardcoded array*/ ?>
            <?php if (!in_array($column, $ignore)) : ?>
                <div class="mb-4">
                    <label class="form-label" for="<?php se($column); ?>"><?php se($column); ?></label>
                    <label class="form-control" for ="<?php se($value); ?>"> <?php se($value); ?>  </label>
                </div>
            <?php endif; ?>
    <?php endforeach; ?>
  
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="mb-4">
            <label class="form-label" for="quantity">quantity </label>
            <input class="form-control" id="quantity" name="quantity" required />
        </div>
        <input type="submit" class="btn btn-primary" value="Add" />
    </form>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>

