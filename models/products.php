<?php

header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] == "GET"){
    require "../config/connection.php";
    try {
        $products = executeQuery("SELECT p.*, c.name AS categoryName FROM products p INNER JOIN categories c ON p.category_id = c.id");
        echo json_encode($products);
    } catch(PDOException $ex){
        echo json_encode(['message'=> $ex->getMessage()]);
        http_response_code(500);
    }
    
} else {
    http_response_code(400);
}