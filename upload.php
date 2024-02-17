<?php

// Définition des chemins d'images possibles
$cheminsImages = array(
    'potion1' => 'assets/potion/plante/',
    'potion2' => 'assets/potion/eau/',
    'potion3' => 'assets/potion/feu/',
    'potion4' => 'assets/potion/electrique/',
    'potion5' => 'assets/potion/glace/',
    'potion6' => 'assets/potion/fée/',
    'potion7' => 'assets/potion/dragon/',
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
        // Déplace le fichier téléchargé vers le répertoire de destination
        $selectedPlacement = $_POST['image_placement'];
        $destPath = $selectedPlacement . $newFileName;

        // Vérifie si le déplacement du fichier a réussi
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            echo "Le fichier a été uploadé avec succès !";
        } else {
            echo "Erreur lors de l'upload du fichier.";
        }
    } else {
        echo "Erreur lors de la récupération du fichier.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Back Office : Upload de fichier</title>
</head>

<body class="d-flex flex-column vh-100">
    <main class="flex-grow-1 py-4">
        <div class="container py-4">
            <form action="#" method="POST" class="col-6 mx-auto" enctype="multipart/form-data">
                <fieldset>
                    <legend>Upload fichier</legend>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="productPathImg" class="form-label">Fichier image :</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="3072000" />
                            <input type="file" name="product_path_img" id="productPathImg" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <!-- Ajout d'un selecteur pour choisir l'emplacement de l'image -->
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
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="submit" name="submitProduct" value="Enregistrer" class="btn btn-primary">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
</body>

</html>