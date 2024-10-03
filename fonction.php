<?php

$pdo = new PDO("mysql:host=localhost;dbname=ipssi_hotel", "root", "",[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

function getAll(){
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM chambre");
    $stmt->execute();

    return $stmt->fetchAll();
}