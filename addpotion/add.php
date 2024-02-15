<?php
require_once dirname(__DIR__) . "/utilities/header.php"; // Inclusion du fichier d'en-tête

if (isset($_POST['add'])) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $image = '/assets/potion/plante/' . $_POST['path_Potion'];
    $type_id = $_POST['type_id'];

    $sql = "INSERT INTO Potions (`titre`, `description`, `prix`, `path_Potion`, `type_id`)
           VALUES('$titre',  '$description', '$prix', '$image', '$type_id')";

    $db->query($sql);


}
$typotion = "SELECT * FROM typespotions";
$stpo = $db->query($typotion);
$results = $stpo->fetchALL();

?>
<section class="container-md d-flex justify-content-center align-item-center">
    <div class="col-md-4">
        <form method="POST" action="#" enctype="multipart/form-data">
            <div class="card border-0 h-100 rounded-4 p-1">
                <!-- Image et titre de la carte -->
                <img src="../assets/img/ajout.jpg" class="card-img-top rounded-3" alt="">
                <h3 class="card-title text-uppercase fw-bold text-center">Ajout</h3>
                <!-- Corps de la carte avec les champs de saisie -->
                <div class="card-body text-center">
                    <!-- Champ pour le titre de la potion -->
                    <label for="validationDefault01" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="validationDefault01" name="titre">
                    <!-- Champ pour la description de la potion -->
                    <label for="validationDefault02" class="form-label">Description</label>
                    <input type="text" class="form-control" id="validationDefault02" name="description">
                    <!-- Champ pour le prix de la potion -->
                    <label for="validationDefault03" class="form-label">Prix</label>
                    <input type="text" class="form-control" id="validationDefault03" name="prix">
                    <!-- Champ pour sélectionner un fichier (image de la potion) -->
                    <label for="file">Fichier</label>
                    <input type="file" name="path_Potion">
                    <button type="submit">Enregistrer</button>
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
                    <button name="add"
                        class="text-center btn btn-success btn-outline-dark text-white fs-5 fw-bold text-uppercase"
                        type="submit">Ajouter</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php require_once dirname(__DIR__) . "/utilities/footer.php"; // Inclusion du footer ?>