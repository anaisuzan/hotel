<?php

$pdo = new PDO("mysql:host=localhost;dbname=ipssi_hotel", "root", "",[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

function getAll($table){
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM" .$table );
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOne($table, $column, $id){
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM " . $table . "WHERE" . $colum ."=?");
    $stmt->execute([$id]);

    return $stmt->fetch();
}