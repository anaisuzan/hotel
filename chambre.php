<?php

include "vue/header.php";

if( isset($_GET['action']) ){
    $action = $_GET['action'];

    switch($action){
        case "ajouter": 

            if( isset($_POST['prix']) ){

                //upload img
                // test si le fichier existe
                if(isset($_FILES['image']['name'])){
                    // pathinfo renvoie es infos du fichier uploadé
                    $infoImage = pathinfo($_FILES['image']['name']);

                    // On crée une liste d'extensions autorisées
                    $extensions = ["jpeg", "jpg', png"];

                    // test si l'extension du fichier est autorisée
                    if( in_array($infoImage['extension'], $extensions) ){
                        move_uploaded_file($_FILES['image']['tmp_name'], "utils/
                        img/".$_FILES['image']['tmp_name']);
                    }

                }
                
                $query =  'INSERT INTO ';
            }

            include "vue/addChbre.php";
            break;
    }
}

include "vue/footer.php";
