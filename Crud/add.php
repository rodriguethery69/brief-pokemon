<?php
require_once dirname(__DIR__) . "/utilities/header.php"; // Inclusion du fichier d'en-tête
require_once dirname(__DIR__) . "/function/addpotion.fn.php";

if
(isset($_POST) && !empty($_POST)) {
    addPotion($db);
}

$cheminsImages = array(
    'potion1' => '../assets/potion/plante/',
    'potion2' => '../assets/potion/eau/',
    'potion3' => '../assets/potion/feu/',
    'potion4' => '../assets/potion/electrique/',
    'potion5' => '../assets/potion/glace/',
    'potion6' => '../assets/potion/fée/',
    'potion7' => '../assets/potion/dragon/',
);

// Choix du chemin d'image par défaut (par exemple, le premier chemin)
$cheminParDefaut = reset($cheminsImages);

// Utilisation de la constante pour le chemin par défaut
define("CHEMIN_DE_LIMAGE", $cheminParDefaut);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['product_path_img']) && $_FILES['product_path_img']['error'] == 0) {
        $fileTmpPath = $_FILES['product_path_img']['tmp_name'];
        $fileName = $_FILES['product_path_img']['name'];

        $newFileName = str_replace(['_', '', ' '], '-', $fileName);
        // Récupérer le chemin sélectionné par l'utilisateur à partir du formulaire
        $selectedPlacement = $_POST['image_placement'];
        $destPath = $selectedPlacement . $newFileName;

        // Déplacer le fichier téléchargé vers le répertoire de destination choisi
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            echo "Le fichier a été uploadé avec succès !";
        } else {
            echo "Erreur lors de l'upload du fichier.";
        }
    } else {
        echo "Erreur lors de la récupération du fichier.";
    }
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
                    <label for="productPathImg" class="form-label">Fichier image :</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="3072000" />
                            <input type="file" name="product_path_img" id="productPathImg" class="form-control">
                    <label for="imagePlacement" class="form-label">Emplacement de l'image :</label>
                            <select name="image_placement" id="imagePlacement" class="form-select">
                                <option value="<?php echo $cheminsImages['potion1']; ?>">Dossier Plante</option>
                                <option value="<?php echo $cheminsImages['potion2']; ?>">Dossier Eau</option>
                                <option value="<?php echo $cheminsImages['potion3']; ?>">Dossier Feu</option>
                                <option value="<?php echo $cheminsImages['potion4']; ?>">Dossier Electrique</option>
                                <option value="<?php echo $cheminsImages['potion5']; ?>">Dossier Glace</option>
                                <option value="<?php echo $cheminsImages['potion6']; ?>">Dossier Fée</option>
                                <option value="<?php echo $cheminsImages['potion7']; ?>">Dossier Dragon</option>
                                <!-- Ajoutez d'autres options selon vos besoins -->
                            </select>
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

<?php require_once dirname(__DIR__) . "/utilities/footer.php"; // Inclusion du footer  ?>