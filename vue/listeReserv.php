<h2 class="text-center">Réservations</h2>

<?php foreach($reservations as $reservation): 
    $chambre = getOne("chambre", "numChambre", $reservation['numChambre']); 
    ?>

    <div class="card my-3" style="width: 18rem;">
        <img class="card-img-top" src="utils/img/<?= $chambre['image'] ?>" alt="Image de la chambre">
        <div class="card-body">
            <h5 class="card-title">Chambre n°<?= $reservation['numChambre'] ?></h5>
            <p class="card-text">Numéro Client : <?= $reservation['numClient'] ?></p>
            <p class="card-text">Date d'arrivée : <?= date("d/m/Y", strtotime($reservation['dateArrivee'])) ?></p>
            <p class="card-text">Date de départ : <?= date("d/m/Y", strtotime($reservation['dateDepart'])) ?></p>
        </div>
    </div>

<?php endforeach; ?>
