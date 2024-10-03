<?php 

include "fonciton?php";

include "vue/header.php";

if( isset($_POST['prenom'])){
    extract($_POST);

    // Insertion client 
    //  $numClient = ($pdo->lastInsertId());

    // Insertion réservation
    /*
    date arr
    date dep
    num chambre
    num client
    */

    echo "Réservation OK";

}

include " vue/footer.php";