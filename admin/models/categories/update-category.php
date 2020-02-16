<?php 

header("Content-Type:application/json");

require_once "category_functions.php";

require_once "../../../config/connection.php";
    
if(isset($_POST['id']))
{
    $id = $_POST['id'];

    $category = findCategory($id);
    $allCategories = getAllCategories();

    $data['category'] = $category;
    $data['allCategories'] = $allCategories;

    echo json_encode($data);
}
else {

    http_response_code(400);
    echo json_encode(["error"=> "You haven't sent id"]);
}

?>