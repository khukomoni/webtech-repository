<?php

require_once 'db_connect.php';


function showAllProducts()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM product_table ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProduct($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM product_table where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchProduct($name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM product_table WHERE Name LIKE '%$name%'";

    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addProduct($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT INTO product_table(Name, BuyingPrice, SellingPrice) VALUES (:name, :buyingPrice, :sellingPrice)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':buyingPrice' => $data['buyingPrice'],
            ':sellingPrice' => $data['sellingPrice']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function editProduct($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE product_table set Name = ?, BuyingPrice = ?, SellingPrice = ? where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['buyingPrice'], $data['sellingPrice'], $id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function deleteProduct($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM product_table WHERE `ID` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
