<?php
require_once dirname(__DIR__) . "/utilities/header.php"; // Inclusion du fichier d'en-tête

if (isset($_POST['Bouton'])) {
    $ID = $_POST['ID'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $image = $_POST['path_Potion'];
    $type_id = $_POST['type_id'];

    $sql = "UPDATE potions SET `titre` = '$titre', `description` = '$description', `prix` = '$prix', `type_id` = '$type_id' WHERE ID = $ID";
   
    $db->query($sql);

}
$typotion = "SELECT * FROM potions";
$stpo = $db->query($typotion);
$results = $stpo->fetchALL();

?>
<section class="container-md d-flex justify-content-center align-item-center">
    <div class="col-md-4 mb-4">
        <form method="POST">
            <div class="card border-0 p-1">
                <img src="../assets/img/update.jpg" class="card-img-top rounded-3" alt="">
                <h3 class="card-title text-uppercase fw-bold text-center">Update</h3>
                <div class="card-body text-center">
                    <label for="titre" class="form-label">titre</label>
                    <input type="text" class="form-control" id="titre" name="titre">

                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" id="description" name="description">

                    <label for="prix" class="form-label">prix</label>
                    <input type="number" class="form-control" id="prix" name="prix">

                    <label for="file">Fichier</label>
                    <input type="file" name="path_Potion">

                    <label for="type_id" class="form-label">type_id</label>
                    <input type="number" class="form-control" id="type_id" name="type_id">

                    <label for="validationDefault02" class="form-label">Numero Potion</label>
                    <select class="form-select" aria-label="Default select example" name="ID">
                        <option selected>Sélectionne le Numero</option>
                        <!-- Boucle pour afficher les options -->
                        <?php foreach ($results as $result): ?>
                            <option value="<?= $result["ID"] ?>">
                                <?= $result["ID"] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <button class="text-center btn btn-primary btn-outline-dark text-white fs-5 fw-bold text-uppercase"
                        type="submit" name="Bouton" value="Modifier"></button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php require_once dirname(__DIR__) . "/utilities/footer.php"; // Inclusion du footer ?>