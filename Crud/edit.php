<?php require_once dirname(__DIR__) . "/utilities/header.php";?>
<?php require_once dirname(__DIR__) . "/function/potions.fn.php";?>

<?php $potion = findPotionByID($db, $_GET['id']);?>

<?php var_dump($potion);?>

<section class="container-md d-flex justify-content-center align-item-center">
    <div class="col-md-4">
        <form method="POST" action="update.php">
            <div class="card border-0 h-100 rounded-4 p-1">
                <!-- Corps de la carte avec les champs de saisie -->
                <div class="card-body text-center">
                    <!-- Champ pour le titre de la potion -->
                    <label for="validationDefault01" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="validationDefault01" name="titre" value="<?= $potion['titre'] ?>">

                    <!-- Champ pour le prix de la potion -->
                    <label for="validationDefault03" class="form-label">Prix</label>
                    <input type="text" class="form-control" id="validationDefault03" name="prix" value="<?= $potion['prix'] ?>">

                    <!-- Champ pour la description de la potion -->
                    <label for="validationDefault02" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="10" cols="33"><?= $potion['description'] ?></textarea>         

                    <!-- Sélection du type de potion -->
                    <select class="form-select" aria-label="Default select example" name="type_id">
                        <option selected>Sélectionne le Type</option>
                        <!-- Boucle pour afficher les options -->
                        <?php foreach ($results as $result): ?>
                            <option value="<?= $result["ID"] ?>">
                                <?= $result["nom_type"] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <!-- Bouton pour ajouter la potion -->
                    <button name="editer"
                        class="text-center btn btn-success btn-outline-dark text-white fs-5 fw-bold text-uppercase"
                        type="submit">Mettre à jour</button>
                </div>
            </div>
        </form>
    </div>
</section>
