<?php 
    require_once dirname(__DIR__) . ('/function/potions.fn.php');
    
    $typesPotions = array_unique(array_column($potions, 'nom_type'));
    $selectedType = isset($_GET['nom_type']) ? $_GET['nom_type'] : 'all';
?>

<!-- Formulaire pour sélectionner le type de potion -->
<form method="get" action="">
    <label for="nom_type">Choisir le type de potion : </label>
    <select name="nom_type" id="nom_type" onchange="this.form.submit()">
        <option value="all" <?= ($selectedType === 'all') ? 'selected' : ''; ?>>Toutes les potions</option>
        <?php foreach ($typesPotions as $type) { ?>
            <option value="<?= $type['nom_type'] ?>" <?= ($selectedType === $type['nom_type']) ? 'selected' : ''; ?>>
                <?= $type['nom_type'] ?>
            </option>
        <?php } ?>
    </select>
    <noscript><input type="submit" value="Filtrer"></noscript>
</form>

<div class="row">
    <?php foreach ($potions as $potion) { 
        if ($selectedType === 'all' || $potion['nom_type'] === $selectedType) {
    ?>
            <div class="col-md-4 mb-4">
                <div class="card border-0">
                    <img src="<?= $potion['path_Potion'] ?>" class="card-img-top rounded-0" alt="">
                    <div class="card-body text-center">
                        <p class="fw-bold"><?= $potion['titre']; ?></p>
                        <p class="card-text"><?= $potion['description']; ?></p>
                        <p class="card-link2 fw-bold text-decoration-none text-black text-uppercase position-relative"><?= $potion['prix']; ?> Poke$</p>
                    </div>
                </div>
            </div>
    <?php 
        }
    } 
    ?>
</div>

