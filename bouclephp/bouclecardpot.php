<div class="row">
    <?php foreach ($result as $potion) { ?>
        <!-- Début d'une carte pour chaque potion -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 rounded-4 h-100">
                <!-- Image de la potion -->
                <img src="<?= $potion['path_Potion'] ?>" class="card-img-top rounded-4" alt="">
                <div class="card-body text-center">
                    <!-- Titre de la potion -->
                    <p class="fw-bold"><?= $potion['titre']; ?></p>
                    <!-- Description de la potion -->
                    <p class="card-text"><?= $potion['description']; ?></p>
                    <!-- Prix de la potion -->
                    <p class="card-link2 fw-bold text-decoration-none text-black text-uppercase position-relative"><?= $potion['prix']; ?> Poke$</p>
                    <!-- Bouton pour ajouter la potion au panier -->
                    <button type="button" class="btn <?= getButtonColorClass($potion['type_id']); ?> btn-outline-dark text-white fs-5 fw-bold text-uppercase">Ajouter au Panier</button>
                </div>
            </div>
        </div>
    <?php } ?>
</div>


