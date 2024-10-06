<?php

include "fonction.php";
include 'vue/header.php';

$numClient = $_SESSION['user']['id_util'];
$numChambre = isset($_GET['id']) ? intval($_GET['id']) : 0;

if( isset($_POST['dateArrivee']) && isset($_POST['dateDepart']) ){
    extract($_POST);


    if(empty($dateArrivee) || empty($dateDepart)){
        echo "Veuillez renseigner toutes les dates.";
    } elseif($dateArrivee >= $dateDepart){
        echo "La date de départ doit être supérieure à la date d'arrivée.";
    } else {
        try {
            $stmt = $pdo->prepare(" INSERT INTO reservation (numClient, numChambre, dateArrivee, dateDepart) 
                VALUES (:numClient, :numChambre, :dateArrivee, :dateDepart) ");

            $stmt->bindParam(':numClient', $numClient, PDO::PARAM_INT);
            $stmt->bindParam(':numChambre', $numChambre, PDO::PARAM_INT);
            $stmt->bindParam(':dateArrivee', $dateArrivee, PDO::PARAM_STR);
            $stmt->bindParam(':dateDepart', $dateDepart, PDO::PARAM_STR);

            $stmt->execute();

            echo "Réservation effectuée avec succès !";
        } catch (PDOException $e) {
            echo "Erreur lors de la réservation : " . $e->getMessage();
        }
    }
}

include 'vue/footer.php';
?>
