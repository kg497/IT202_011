<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");

$results = [];
    $db = getDB();
    $stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE name like :name AND visibility ");
    $stmt2 = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE category = :category AND visibility ORDER BY modified LIMIT 10 ");
    if (isset($_POST["submit"])) {
        $stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE name like :name AND visibility ORDER BY unit_price ASC LIMIT 10 ");
        $stmt2 = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE category = :category AND visibility ORDER BY unit_price ASC LIMIT 10");
    }
    else if (isset($_POST["submit2"])){
        $stmt .= $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE name like :name AND visibility ORDER BY unit_price DESC LIMIT 10");
        $stmt2 = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE category = :category AND visibility ORDER BY unit_price DESC LIMIT 10");
    }
    
    try {
        $stmt->execute([":name" => "%" . $_POST["itemName"] . "%"]);
        $stmt2->execute([":category" => $_POST["itemName"]]);
        
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $s = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
        else if($s){
            $results = $s;
        }
    }
    catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }

    
?>
<div class="container-fluid">
    <h1>Order</h1>
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group mb-3">
            <input class="form-control" type="search" name="itemName" placeholder="Item Filter" />
            <input class="btn btn-primary" type="submit" value="Search" />
        </div>
    </form>
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group mb-3">
            <input class="btn btn-primary" name= "submit" type="submit" value="Price Ascend" />
            <input class="btn btn-primary" name = "submit2" type="submit" value=" Price Descend" />
        </div>
    </form>
    

    <?php if (count($results) == 0) : ?>
        <p>No results to show</p>
    <?php else : ?>
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php se($item, "name"); ?></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                        <a href="details.php?id=<?php se($item, "id"); ?>">Details</a>
                    </div>
                    <div class="card-footer">
                        Cost: $ <?php se($item, "unit_price"); ?>
                        <button onclick="location.href='cart.php';" class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>