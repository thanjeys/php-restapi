<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include('./inc.db.php');

$request_method = $_SERVER['REQUEST_METHOD'];

if($request_method != "PUT")
{
    http_response_code(404);
    echo "Method is not supported";
    die();
}


foreach (getallheaders() as $name => $value) {
    echo "$name: $value <br>";
}


$data = json_decode(file_get_contents('php://input')); 


if(empty($data->name) || empty($data->description) || empty($data->id))
{ 
  die("Feilds are missing") ;
}

$sql = "UPDATE categories SET name = '$data->name', description = '$data->description' WHERE id = $data->id";
$result = $con->query($sql);

if($result) 
{ 

    // Get Insert Id
    $category_id =$data->id;

    $sql = "SELECT * FROM categories WHERE id = $category_id LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0) 
    { 
        $row = $result->fetch_assoc();    
        $category['id'] = $row['id'];
        $category['name'] = $row['name'];
        $category['description'] = $row['description'];
        $category['modified'] = $row['created'];

        http_response_code(200);
        echo json_encode($category);

    } else { 
        // set response code - 503 service unavailable
        http_response_code(503);
    
        // tell the user
        echo json_encode(array("message" => "Unable to update category."));
    }
    
}
else { 
    http_response_code(404);
    echo $con->connect_error;
    echo "Invalid User";
}


?>