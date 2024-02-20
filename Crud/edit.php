<?php require_once dirname(__DIR__) . "/utilities/header.php";?>
<?php require_once dirname(__DIR__) . "/function/potions.fn.php";?>

<?php $potion = findPotionByID($db, $_GET['id']);?>

<?php var_dump($potion);?>

<section class="container-md d-flex justify-content-center align-item-center">
    <div class="col-md-4">
        <form method="POST" action="update.php">
        <input type="hidden" id="ID" name="ID" value="<?php echo $_GET['id']?>" />
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
                    <!-- Bouton pour ajouter la potion -->
                    <select class=" form-select border border-dark" aria-label="Default select example" name="nom_type">
                    <option selected>Sélectionne le Genre</option>
                    <button
                        class="text-center btn btn-success btn-outline-dark text-white fs-5 fw-bold text-uppercase"
                        type="submit">Mettre à jour</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php require_once dirname(__DIR__) . "/utilities/footer.php"; // Inclusion du footer  ?>
