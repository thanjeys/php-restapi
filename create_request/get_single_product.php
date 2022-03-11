<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('./inc.db.php');

$category_id = isset($_GET['id']) ? $_GET['id'] : die();

$sql = "SELECT * FROM categories WHERE id = $category_id LIMIT 1";
$result = $con->query($sql);

if($result->num_rows > 0) 
{ 
    $row = $result->fetch_assoc();

    http_response_code(200);
    $category['id'] = $row['id'];
    $category['name'] = $row['name'];
    $category['description'] = $row['description'];

    echo json_encode($category);
}
else { 
    http_response_code(404);
    echo "Invalid User";
}


?>