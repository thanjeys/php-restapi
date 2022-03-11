<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('./inc.db.php');


$sql = "SELECT * FROM categories";
$result = $con->query($sql);

if($result->num_rows > 0) 
{ 
    $json_result['count'] = $result->num_rows;

    while($row = $result->fetch_assoc()) { 
        $category[]['id'] = $row['id'];
        $category[]['name'] = $row['name'];
        $category[]['description'] = $row['description'];
    }

    $json_result['categories'] = $category;

    http_response_code(200);


    echo json_encode($json_result);
}
else { 
    http_response_code(404);
    echo "Invalid User";
}


?>