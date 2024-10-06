<h2 class="text-center">Détail de la Chambre</h2>

<p>
    <img class="card-img-top w-25" src="utils/img/<?= $chambre['image'] ?>" alt="Card image cap">
</p>

<p>Prix : <?= $chambre['prix'] ?>€ par nuit.</p>

<p>
    <div><?= $chambre['nbLits'] ?> Lit(s)</div>
    <?= $chambre['description'] ?>
</p>

<a href="#" class="btn btn-success" onclick="toggleReservationForm()">Réserver</a>

<div id="reservationForm" style="display: none; margin-top: 20px;">
    <h2 class="text-center">Réserver Chambre</h2>

    <form action="reservation.php" method="post">
        <input type="hidden" name="numChambre" value="<?= $_GET['id'] ?>">

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" required>
        </div>

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" required>
        </div>

        <div class="form-group">
            <label for="tel">Téléphone</label>
            <input type="text" class="form-control" name="tel" id="tel" required>
        </div>

        <div class="form-group">
            <label for="dateArrivee">Date Arrivée</label>
            <input type="date" class="form-control" name="dateArrivee" id="dateArrivee" required>
        </div>

        <div class="form-group">
            <label for="dateDepart">Date Départ</label>
            <input type="date" class="form-control" name="dateDepart" id="dateDepart" required>
        </div>

        <input type="submit" class="btn btn-outline-success mt-2" value="Réserver">
    </form>
</div>

<script>
    function toggleReservationForm() {
        var form = document.getElementById('reservationForm');
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    }
</script>
