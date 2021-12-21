<?php
require(__DIR__ . "/../../partials/nav.php");
//Rate button on Details.php redirect to ratings.php check
//make html form for user check
//check if user has purchased this item before in 
//create php that will insert into ratings table 
//in details .php select from the ratings table, and use for loop to print
//average ratings
//pagination
$product_id = se($_GET, "id", -1, false);
$user_id = get_user_id();

$db= getDB();
$stmt = $db->prepare("SELECT name FROM Products where id =:id");
try {
    $stmt->execute([":id" => $product_id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    $name = se($r, "name", "", false);
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}

if(isset($_POST["rating"]) && isset($_POST["review"])){
 
    $rating = se($_POST, "rating", -1, false);
    $comment = se($_POST, "review", "", false);
    //insert into table
    add_rating( $product_id, $user_id, $rating, $comment);
    redirect('details.php?id='.$product_id);
    
}
?>

<div class="container-fluid">
    <h1>Rate Product: <?php se($name) ?></h1>
    <form onsubmit=true method="POST" >
    <label for="rating">Rate:</label>
        <select name="rating" id="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>  
        <div class="mb-3">
            <label class="form-label" for="pw">Review</label>
            <input class="form-control" type="text" id="review" name="review" />
        </div>
        <input type="submit"  class = "btn btn-primary" value='Rate'>
       
    </form>

    <?php
    require(__DIR__. "/../../partials/flash.php"); 
    ?>