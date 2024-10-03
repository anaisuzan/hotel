
    
    <h2 class="text-center">Détail de la Chambre</h2>

    <p>
        <img class="card-img-top w-25" src="utils/img/<?= $chambre['image'] ?>" alt="Card image cap">
    </p>

    Prix <?= $chambre['prix'] ?>€ par nuit.

    <p>
        <div><?= $chambre['nbLits'] ?> Lit(s)</div>
        <?= $chambre['description'] ?>
    </p>

    <button>Réserver</button>