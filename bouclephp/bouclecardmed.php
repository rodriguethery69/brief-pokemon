<?php 
    require_once dirname(__DIR__) . ('/function/medecins.fn.php'); 
?>

<div class="row">
    <?php foreach ($medecins as $medecin) { ?>
        <div class="col-md-4 mb-4">
            <div class="card border-0">
                <!-- Utilisez le chemin de l'image directement depuis la jointure -->
                <img src="<?= $medecin['path_Med'] ?>" class="card-img-top rounded-3" alt="">
                <div class="card-body text-center">
                    <p class="fw-bold"><?= $medecin['titre']; ?></p>
                    <h4 class="card-title text-uppercase fw-bold"></h4>
                    <p class="card-text"><?= $medecin['description']; ?></p>
                    <p class="card-link2 fw-bold text-decoration-none text-black text-uppercase position-relative">Agée <?= $medecin['age']; ?> ans</p>
                    <button type="button" class="btn btn-primary">Decouvrir ces Potions</button>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

   

