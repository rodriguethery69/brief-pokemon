<?php
require_once dirname(__DIR__) . "/utilities/header.php"; // Inclusion du fichier d'en-tête

// Vérifie si le bouton de soumission du formulaire a été cliqué
if (isset($_POST['Bouton'])) {
    // Récupération des données du formulaire
    $ID = $_POST['ID']; // ID de la potion à mettre à jour
    $titre = $_POST['titre']; // Nouveau titre de la potion
    $description = $_POST['description']; // Nouvelle description de la potion
    $prix = $_POST['prix']; // Nouveau prix de la potion
    $image = $_POST['path_Potion']; // Nouveau chemin de l'image de la potion
    $type_id = $_POST['type_id']; // Nouvel ID de type de la potion

    // Construction de la requête SQL pour mettre à jour les données de la potion dans la base de données
    $sql = "UPDATE potions SET `titre` = '$titre', `description` = '$description', `prix` = '$prix', `type_id` = '$type_id' WHERE ID = $ID";
   
    // Exécution de la requête SQL pour mettre à jour les données de la potion
    $db->query($sql);
}

// Sélection de toutes les potions de la base de données
$typotion = "SELECT * FROM potions";
$stpo = $db->query($typotion);
$results = $stpo->fetchALL();

$selectedPotion = null; // Initialisation de la variable pour stocker les détails de la potion sélectionnée

// Vérification si une potion est sélectionnée dans le formulaire
if (isset($_POST['ID']) && $_POST['ID'] != 'Sélectionne le Numero') {
    $selectedID = $_POST['ID']; // ID de la potion sélectionnée
    // Récupération des détails de la potion sélectionnée depuis la base de données
    $sql = "SELECT * FROM potions WHERE ID = $selectedID";
    $stmt = $db->query($sql);
    $selectedPotion = $stmt->fetch(PDO::FETCH_ASSOC); // Stockage des détails de la potion sélectionnée
}
?>

<section class="container-md d-flex justify-content-center align-item-center">
    <div class="col-md-4 mb-4">
        <form method="POST">
            <div class="card border-0 p-1">
                <img src="<?php echo !empty($selectedPotion['path_Potion']) ? $selectedPotion['path_Potion'] : '../assets/img/update.jpg'; ?>" class="card-img-top rounded-3" alt="">
                <h3 class="card-title text-uppercase fw-bold text-center">Update</h3>
                <div class="card-body text-center">
                    <!-- Afficher les champs du formulaire avec les détails de la potion sélectionnée -->
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="<?php echo isset($selectedPotion['titre']) ? $selectedPotion['titre'] : ''; ?>">

                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo isset($selectedPotion['description']) ? $selectedPotion['description'] : ''; ?>">

                    <label for="prix" class="form-label">Prix</label>
                    <input type="number" class="form-control" id="prix" name="prix" value="<?php echo isset($selectedPotion['prix']) ? $selectedPotion['prix'] : ''; ?>">

                    <label for="file">Fichier</label>
                    <input type="file" name="path_Potion" value="<?php echo isset($selectedPotion['path_Potion']) ? $selectedPotion['path_Potion'] : ''; ?>">

                    <label for="type_id" class="form-label">Type ID</label>
                    <input type="number" class="form-control" id="type_id" name="type_id" value="<?php echo isset($selectedPotion['type_id']) ? $selectedPotion['type_id'] : ''; ?>">

                    <label for="validationDefault02" class="form-label">Numero Potion</label>
                    <!-- Soumettre automatiquement le formulaire lors de la sélection -->
                    <select class="form-select" aria-label="Default select example" name="ID" onchange="this.form.submit()">
                        <option selected>Sélectionne le Numero</option>
                        <!-- Boucle pour afficher les options -->
                        <?php foreach ($results as $result): ?>
                            <option value="<?= $result["ID"] ?>" <?php echo ($selectedID == $result['ID']) ? 'selected' : ''; ?>>
                                <?= $result["ID"] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <button class="text-center btn btn-primary btn-outline-dark text-white fs-5 fw-bold text-uppercase"
                        type="submit" name="Bouton" value="Modifier">Modifier</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php require_once dirname(__DIR__) . "/utilities/footer.php"; // Inclusion du footer ?>


