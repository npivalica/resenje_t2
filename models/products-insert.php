<?php

header("Content-Type: application/json");

if(isset($_POST['send'])){
    require "../config/connection.php";
    $naziv = $_POST['naziv'];
    $opis = $_POST['opis'];
    $cena = $_POST['cena'];
    $kolicina = $_POST['kolicina'];
    $kategorija = $_POST['kategorija'];
    $velicine = $_POST['velicine'];
    
    try {
        $conn->beginTransaction();
        $result = $conn->prepare("INSERT INTO products VALUES (NULL, ?, ?, ?, ?, ?)");
        $result->bindValue(1, $naziv);
        $result->bindValue(2, $opis);
        $result->bindValue(3, $cena);
        $result->bindValue(4, $kolicina);
        $result->bindValue(5, $kategorija);
        $result->execute();

        // ID unetog proizvoda
        $id = $conn->lastInsertId();

        if(count($velicine) > 0){
            // INSERT upit -> da bi uneo vise redova - pogledati u PhpMyAdmin

            $queryParams = [];
            $values = [];

            foreach($velicine as $velicina){
                $queryParams[] = "(NULL,?,?)";

                $values[] = $id; // ono sto menja prvi "?"
                $values[] = $velicina; // ono sto menja drugi "?"
            }

            $result_sizes = $conn->prepare("INSERT INTO product_sizes VALUES " . implode(",", $queryParams));
            // upit ce izgledati INSERT INTO product_sizes VALUES (NULL, ?, ?) , (NULL, ?, ?) 

            $result_sizes->execute($values); // u toku izvrsavanja, svaki "?" se menja sa po jednom vrednoscu iz niza, onako kako smo dodavali u niz -> pogledati FOR petlju iznad
            // uvek ce ici: INSERT INTO product_sizes VALUES (NULL, 1,2) , (NULL, 1,3), (NULL, 1,4)
            // "1" - ID proizvoda, "2,3,4" - ID selektovanih velicina
            
        }

        $conn->commit();
        echo json_encode(['message'=> 'Product successfully created']);
        http_response_code(201);
    }
    catch(PDOException $ex){
        $conn->rollback();
        echo json_encode(['message'=> $ex->getMessage()]);
        http_response_code(500);
    }
} else {
    http_response_code(400);
}