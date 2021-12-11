<?php
is_logged_in(true);
require(__DIR__ . "/../../partials/nav.php");
$result=[];
$db = getDB();
$user_id = get_user_id();
$stmt = $db->prepare("SELECT id, total_price, address, payment_method, created FROM Orders WHERE user_id = :user_id ORDER BY created DESC LIMIT 10");
try {
    $stmt->execute([":user_id" => $user_id]);
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
                        Total Cost: $ <?php se($item, "unit_price"); ?>
                        <a href="order_details.php?id=<?php se($item, "id"); ?>">Order Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
</div>



