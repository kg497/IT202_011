<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "home.php"));
}
$db = getDB();
$results = [];
$params =[];
$query = "SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE 1=1";

$name = se($_POST, "itemName", "", false);
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}
$stock = se($_POST, "stock", -1, false);
if(!empty($stock)){
    $query .= " AND stock <= :stock";
    $params[":stock"]= $stock;
}
$query .= " LIMIT 50";
$stmt = $db->prepare($query);
try {
    $stmt->execute($params);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>
<div class="container-fluid">
    <h1>List Items</h1>
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group mb-3">
            <input class="form-control" type="search" name="itemName" placeholder="Item Filter" />
            
        </div>
        <div class="input-group mb-3">
            <label class="form-label" for="pw">Search Items with Stock less than or equal to</label>
            <input  type="number" id="stock" name="stock" />
        </div>
        <div class = "mb-3">
            <input class="btn btn-primary" type="submit" value="Search" />
        </div>

    </form>
        
    <?php if (count($results) == 0) : ?>
        <p>No results to show</p>
    <?php else : ?>
        <table class="table text-dark">
            <?php foreach ($results as $index => $record) : ?>
                <?php if ($index == 0) : ?>
                    <thead>
                        <?php foreach ($record as $column => $value) : ?>
                            <th><?php se($column); ?></th>
                        <?php endforeach; ?>
                        <th>Actions</th>
                    </thead>
                <?php endif; ?>
                <tr>
                    <?php foreach ($record as $column => $value) : ?>
                        <td><?php se($value, null, "N/A"); ?></td>
                    <?php endforeach; ?>


                    <td>
                        <a href="edit_item.php?id=<?php se($record, "id"); ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
