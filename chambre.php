<?php

include "fonction.php";

include "vue/header.php";

if( isset($_GET['action']) ){
    $action = $_GET['action'];

    switch($action){
        case "ajouter_form";

            include "vue/addChbre.php";
            break;

        case "ajouter": 

            if (isset($_POST['prix'])) {
                extract($_POST);

                if (isset($_FILES['image']['name'])) {
                    $infoImage = pathinfo($_FILES['image']['name']);
                    $fileName = $_FILES['image']['name'];
                    $extensions = ["jpeg", "jpg", "png"];

                    if (in_array(strtolower($infoImage['extension']), $extensions)) {
                        move_uploaded_file($_FILES['image']['tmp_name'], "utils/img/" . $fileName);
                    } else {
                        echo "Extension de fichier non autorisée.";
                        exit;
                    }
                }

                $query = "INSERT INTO chambre (prix, nbLits, nbPers, image, description) VALUES (:prix, :lit, :cap, :img, :desc)";
                $stmt = $pdo->prepare($query);
                $stmt->execute([
                    "prix"  => $prix,
                    "lit"   => $nbLit,
                    "cap"   => $nbPers,
                    "img"   => $fileName,
                    "desc"  => $description
                ]);

                header("Location: index.php");
                exit;
            }

            break;


        case "detail":
            $chambre = getOne("chambre", "numChambre", $_GET['id']);

            include "vue/detail.php";
            break;

        case "supprimer":
                if (isset($_GET['id'])) {
                    $numChambre = $_GET['id'];
                    
                    $query = "DELETE FROM chambre WHERE numChambre = :numChambre";
                    $stmt = $pdo->prepare($query);
                    $stmt->execute(['numChambre' => $numChambre]);
    
                    header("Location: index.php");
                    exit;
                }
                break;
        
        case "reservation_form":
            include "vue/FormReserv.php";
            break;
        case "reservation":
            $reservations = getAll("reservation");
            include "vue/listeReserv.php";
            break;

        }

    }

include "vue/footer.php";
