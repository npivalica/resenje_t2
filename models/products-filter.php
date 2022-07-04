<?php

header("Content-Type: application/json");

if(isset($_POST['value'])){
    require "../config/connection.php";

    $value = trim($_POST['value']);

    $valueCompareString = "%$value%"; // rezultat: 'name LIKE "%vrednost%"', zato sto bindParam posmatra tip podatka i automatski dodaje navodnike

    //$valueNumberCompare = (int) $value; // bindParam gleda tip podatka u promenjivoj. AKo ne bismo kastovali, upit bi izgledao: 'price >= "100" ', sto ne bi prikazalo sintaksnu gresku.
    
    try {
        $result = $conn->prepare("SELECT p.*, c.name AS categoryName FROM products p INNER JOIN categories c ON p.category_id = c.id WHERE p.name LIKE :value OR p.description LIKE :value");
        $result->bindParam(":value", $valueCompareString);
        // $result->bindParam(":price", $valueNumberCompare);
        $result->execute();

        $products = $result->fetchAll();
        echo json_encode($products);
    } catch(PDOException $ex){
        echo json_encode(['message'=> $ex->getMessage()]);
        http_response_code(500);
    }
    
} else {
    http_response_code(400);
}