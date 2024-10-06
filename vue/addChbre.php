
    <h2 class="text-center">Ajouter Chambres</h2>

    <form method="post" action="chambre.php?action=ajouter" enctype="multipart/form-data" id="form">
        
        <div class="form-group">
            <label for="">Prix</label>
            <input type="text" id="prix" name="prix" class="form-control">
            <span id="errPrix" class="alert text-danger"></span>
        </div>

        <div class="form-group">
            <label for="">Nombre lits</label>
            <input type="text" class="form-control" name="nbLit" id="nbLit">
            <span id="errLit" class="alert text-danger"></span>
        </div>

        <div class="form-group">
            <label for="">Capacité</label>
            <input type="text" class="form-control" name="nbPers" id="nbPers">
            <span id="errPers" class="alert text-danger"></span>
        </div>

        <div class="form-group">
            <label for="">Photo</label>
            <input type="file" accept="image/*" class="form-control" name="image">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" class="form-control"></textarea>
        </div>
 
        <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
    </form>

    <script>
        let prix = ById("prix");
        let errPrix = ById("errPrix");
        let nbPers = ById("nbPers");
        let errPers = ById("errPers");
        let nbLit = ById("nbLit");
        let errLit = ById("errLit");
        let PasErreur = false;

        prix.addEventListener("blur", () => {
            PasErreur = false;
            if (prix.value >= 50 && prix.value <= 250) {
                errPrix.innerHTML = "";
                PasErreur = true;
            } else {
                errPrix.innerHTML = "Le prix doit être compris entre 50 et 250 € !";
            }
        });

        nbLit.addEventListener("blur", () => {
            PasErreur = false;
            if (nbLit.value != 2) {
                errLit.innerHTML = "Le nombre de lit doit être à 2 !";
            } else {
                errLit.innerHTML = "";
                PasErreur = true;
            }
        });

        nbPers.addEventListener("blur", () => {
            PasErreur = false;
            if (nbPers.value >= 1 && nbPers.value <= 4) {
                errPers.innerHTML = "";
                PasErreur = true;
            } else {
                errPers.innerHTML = "Le nombre de personnes doit être compris entre 1 et 4 !";
            }
        });

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            if (prix.value >= 50 && prix.value <= 250 &&
                nbLit.value == 2 &&
                nbPers.value >= 1 && nbPers.value <= 4) {
                PasErreur = true;
            } else {
                PasErreur = false;
            }

            if (PasErreur === true) {
                form.submit();
            }
        });

        function ById(id) {
            return document.getElementById(id);
        }
    </script>

