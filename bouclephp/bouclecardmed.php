<?php 
    // Inclusion du fichier contenant les fonctions relatives aux médecins
    require_once dirname(__DIR__) . ('/function/medecins.fn.php'); 
?>

<div class="row">
    <?php foreach ($medecins as $medecin) { ?>
        <div class="col-md-4 mb-4">
            <div class="card border-0">
                <!-- Affichage de l'image du médecin -->
                <img src="<?= $medecin['path_Med'] ?>" class="card-img-top rounded-3" alt="">
                <div class="card-body text-center">
                    <!-- Affichage du titre du médecin -->
                    <p class="fw-bold"><?= $medecin['titre']; ?></p>
                    <!-- Pas de titre spécifié ici -->
                    <h4 class="card-title text-uppercase fw-bold"></h4>
                    <p class="card-text"><?= $medecin['description']; ?></p>
                    <!-- Affichage de l'âge du médecin -->
                    <p class="card-link2 fw-bold text-decoration-none text-black text-uppercase position-relative">Agée <?= $medecin['age']; ?> ans</p>
                    <!-- Bouton pour découvrir les potions -->
                    <button type="button" class="btn btn-primary">Decouvrir ces Potions</button>
                </div>
            </div>
        </div>
    <?php } ?>
</div>


   

