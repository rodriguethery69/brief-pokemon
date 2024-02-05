<div class="row">
        <?php foreach ($result as $potion) { ?>
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-4 h-100">
                    <img src="<?= $potion['path_Potion'] ?>" class="card-img-top rounded-4" alt="">
                    <div class="card-body text-center">
                        <p class="fw-bold"><?= $potion['titre']; ?></p>
                        <p class="card-text"><?= $potion['description']; ?></p>
                        <p class="card-link2 fw-bold text-decoration-none text-black text-uppercase position-relative"><?= $potion['prix']; ?> Poke$</p>
                        <button type="button" class="btn <?= getButtonColorClass($potion['type_id']); ?> btn-outline-dark text-white fs-5 fw-bold text-uppercase">Ajouter au Panier</button>
                    </div>
                </div>
            </div>
        <?php } ?>
</div>
