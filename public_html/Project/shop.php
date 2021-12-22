<?php
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();

$col = se($_GET, "col", "cost", false);
//allowed list
if (!in_array($col, ["unit_price", "stock", "name", "created", "avg_rating", "category"])) {
    $col = "unit_price"; //default value, prevent sql injection
}
$order = se($_GET, "order", "asc", false);
//allowed list
if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection
}
$name = se($_GET, "itemName", "", false);
$category = se($_GET, "category", "", false);
$category = se($_GET, "category", "", false);
//split query into data and total
$base_query = "SELECT id, name, description, unit_price, stock, avg_rating FROM Products";
$total_query = "SELECT count(1) as total FROM Products";
//dynamic query
$query = " WHERE visibility"; //1=1 shortcut to conditionally build AND clauses
$params = []; //define default params, add keys as needed and pass to execute
//apply name filter
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}

if (!empty($category) && $category != "select") {
    $query .= " AND category = :category";
    $params[":category"] = $category;
}

//apply column and order sort
if (!empty($col) && !empty($order)) {
    $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
}
//paginate function
$per_page = 5;
paginate($total_query . $query, $params, $per_page);

$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;
//get the records
$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null; //set it to null to avoid issues


//$stmt = $db->prepare("SELECT id, name, description, cost, stock, image FROM BGD_Items WHERE stock > 0 LIMIT 50");
try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}

?>
<div class="container-fluid">
    <h1>Order</h1>
    <form method="GET" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group mb-3">
            <input class="form-control" type="search" name="itemName" placeholder="Item Filter" />
            <input class="btn btn-primary" type="submit" value="Search" />
        </div>
        <label for="category">Search by Category:</label>
        <select name="category" id="category">
            <option value="select">select</option>
            <option value="lunch">Lunch</option>
            <option value="dessert">Dessert</option>
            <option value="drinks">Drinks</option>
            <option value="sides">Sides</option>
        </select>
        <label for="col">Sort By:</label>
        <select name="col" id="col">
            <option value="select">select</option>
            <option value="total_price">Total Price</option>
            <option value="avg_rating">Rating</option>
        </select>
        <select name="order" value="<?php se($order)?>">
            <option value="select">select</option>
            <option value="asc">Low to high</option>
            <option value="desc">High to low</option>
        </select>
    </form>
    
    
    <?php if (count($results) == 0) : ?>
        <p>No results to show</p>
    <?php else : ?>
        <?php include(__DIR__. "/../../partials/pagination.php"); ?>
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php se($item, "name"); ?></h5>
                    </div>
                    <div class="card-body">
                        <a href="details.php?id=<?php se($item, "id");?>">Details</a>
                    </div>
                    <div class="card-footer">
                        Cost: $ <?php se($item, "unit_price"); ?>
                        <input type=button onClick="location.href='add_cart.php?id=<?php se($item, "id");?>unit_price=<?php se($item, "unit_price");?>'" class = "btn btn-primary" value='Add to Cart'>
                    </div>
                </div>
            </div>
            <?php if(has_role("Admin")) : ?>
            <a href="admin/edit_item.php?id=<?php se($item, "id"); ?>">Edit</a>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php
    require(__DIR__. "/../../partials/flash.php"); 
   ?>