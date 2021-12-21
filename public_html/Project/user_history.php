<?php
//filter by date range
//filter by category
//sort by total
//date purchase
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$result=[];
$db = getDB();
$user_id = get_user_id();
$params=[];
$query ="SELECT Orders.id, Orders.total_price, Orders.address, Orders.payment_method, Products.category, Orders.created FROM Orders INNER JOIN OrderItems ON OrderItems.order_id= Orders.id INNER JOIN Products ON OrderItems.product_id = Products.id WHERE user_id = :user_id ";
$params[":user_id"] = $user_id;
if(isset($_POST["category"])){
    $category = se($_POST,"category", "", false);
    if($category != "select"){
        $query .= " AND Products.category = :category";
        $params[":category"] = $category;
    }
   
    //echo($query);
}

if(isset($_POST["ascend"])){
    $query .= " ORDER BY Orders.total_price ASC";
}
else if (isset($_POST["descend"])){
    $query .= " ORDER BY Orders.total_price DESC";
}

$stmt = $db->prepare($query);

try {
    $stmt->execute($params);
    $r = $stmt->fetchALL(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
}catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>
<div class="container-fluid">
    <h1>Purchase History</h1>
    <form onsubmit=true method="POST" >
    <label for="category">Search by Category:</label>
        <select name="category" id="rating">
            <option value="select">select</option>
            <option value="lunch">Lunch</option>
            <option value="dessert">Dessert</option>
            <option value="drinks">Drinks</option>
            <option value="sides">Sides</option>
        </select>  
        <select name="created" id="rating">
            <option value="day">Past Day</option>
            <option value="week">Past Week</option>
            <option value="month">Past Month</option>
            <option value="year">Past Year</option>
        </select>  
        <input type="submit"  class = "btn btn-primary" value='Search'>
    </form>
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group mb-3">
            <input class="btn btn-primary" name= "ascend" type="submit" value="Total Price Ascend" />
            <input class="btn btn-primary" name = "descend" type="submit" value=" Total Price Descend" />
        </div>
    </form>
        <?php foreach ($result as $item) : ?>
            <?php $time= strtotime($item['created']);
            $date = date("m/d/Y",$time);?>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Purchase Date <?php se($date) ;?></h5>
                    </div>
                    <div class="card-body">
                        <label class="form-label" for="ship">Shipping Address <?php se($item["address"])?> </label>
                        <label class="form-label" for="pay">Payment Method <?php se($item["payment_method"])?> </label>
                    </div>
                    <div class="card-footer">
                        Total Cost: $ <?php se($item, "total_price"); ?>
                        <a href="order_details.php?id=<?php se($item, "id"); ?>">Order Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
</div>



