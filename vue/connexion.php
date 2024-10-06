<div class="container mt-5">
    <h2 class="text-center mb-4">Ajouter Chambres</h2>
    <div class="d-flex justify-content-center">
        <form method="post" action="../fonction.php" class="w-50 p-4 border rounded bg-light shadow">
            
            <div class="form-group mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" name="login" placeholder="Entrez votre login" required>
            </div>

            <div class="form-group mb-4">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" placeholder="Entrez votre mot de passe" required>
            </div>
  
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Ajouter</button>
            </div>
        </form>
    </div>
</div>
