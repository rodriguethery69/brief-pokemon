<?php
require_once __DIR__ . ('/utilities/header.php'); // Inclusion du fichier d'en-tête

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
<section class="container-md">
    <div class="row">
        <div class="col-md-4 mb-4">
            <form method="POST" action="#">
                <div class="card border-0">
                    <!-- Image et titre de la carte -->
                    <img src="assets\img\ajout.jpg" class="card-img-top rounded-3" alt="">
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

        <div class="col-md-4 mb-4">
            <form method="POST">
                <div class="card border-0">
                    <img src="assets\img\update.jpg" class="card-img-top rounded-3" alt="">
                    <h3 class="card-title text-uppercase fw-bold text-center">Update</h3>
                    <div class="card-body text-center">
                        <label for="validationDefault02" class="form-label">titre</label>
                        <input type="text" class="form-control" id="validationDefault02" name="titre">
                        <label for="validationDefault02" class="form-label">description</label>
                        <input type="text" class="form-control" id="validationDefault02" name="description">
                        <label for="validationDefault02" class="form-label">prix</label>
                        <input type="text" class="form-control" id="validationDefault02" name="prix">
                        <label for="validationDefault02" class="form-label">Potion Image</label>
                        <input type="text" class="form-control" id="validationDefault02" name="path_Potion">
                        <label for="validationDefault02" class="form-label">type Potion</label>
                        <input type="text" class="form-control" id="validationDefault02" name="type_id">
                        <button
                            class="text-center btn btn-primary btn-outline-dark text-white fs-5 fw-bold text-uppercase"
                            type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-4 mb-4">
            <form method="POST">
                <div class="card border-0">
                    <img src="assets\img\delete.jpg" class="card-img-top rounded-3" alt="">
                    <h3 class="card-title text-uppercase fw-bold text-center">Delete</h3>
                    <div class="card-body text-center">
                        <label for="validationDefault03" class="form-label">titre</label>
                        <input type="text" class="form-control" id="validationDefault03" name="titre">
                        <label for="validationDefault03" class="form-label">description</label>
                        <input type="text" class="form-control" id="validationDefault03" name="description">
                        <label for="validationDefault03" class="form-label">prix</label>
                        <input type="text" class="form-control" id="validationDefault03" name="prix">
                        <label for="validationDefault03" class="form-label">Potion Image</label>
                        <input type="text" class="form-control" id="validationDefault03" name="path_Potion">
                        <label for="validationDefault03" class="form-label">type Potion</label>
                        <input type="text" class="form-control" id="validationDefault03" name="type_id">
                        <button
                            class="text-center btn btn-danger btn-outline-dark text-white fs-5 fw-bold text-uppercase"
                            type="submit">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require_once __DIR__ . ('/utilities/footer.php'); // Inclusion du footer ?>