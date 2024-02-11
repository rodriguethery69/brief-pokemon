<?php
require_once __DIR__ . ('/utilities/header.php'); // Inclusion du fichier d'en-tête

if (isset($_POST) && !empty($_POST)) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $image = '/assets/potion/plante/' . $_POST['path_Potion'];
    $type = $_POST['type_id'];

    $sql = "INSERT INTO Potions (`titre`, `description`, `prix`, `path_Potion`, `type_id`)
           VALUES('$titre',  '$description', '$prix', '$image', '$type')";

    $db->query($sql);
}


?>
<section class="container-md">
    <div class="row">
        <div class="col-md-4 mb-4">
            <form method="POST">
                <div class="card border-0">
                    <img src="assets\img\ajout.jpg" class="card-img-top rounded-3" alt="">
                    <h3 class="card-title text-uppercase fw-bold text-center">Ajout</h3>
                    <div class="card-body text-center">
                        <label for="validationDefault01" class="form-label">titre</label>
                        <input type="text" class="form-control" id="validationDefault01" name="titre">
                        <label for="validationDefault01" class="form-label">description</label>
                        <input type="text" class="form-control" id="validationDefault01" name="description">
                        <label for="validationDefault01" class="form-label">prix</label>
                        <input type="text" class="form-control" id="validationDefault01" name="prix">
                        <label for="file">Fichier</label>
                        <input type="file" name="path_Potion">
                        <label for="validationDefault01" class="form-label">type Potion</label>
                        <input type="text" class="form-control" id="validationDefault01" name="type_id">
                        <button class="text-center btn btn-success btn-outline-dark text-white fs-5 fw-bold text-uppercase" type="submit">Submit form</button>
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
                        <button class="text-center btn btn-primary btn-outline-dark text-white fs-5 fw-bold text-uppercase" type="submit">Submit form</button>
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
                        <button class="text-center btn btn-danger btn-outline-dark text-white fs-5 fw-bold text-uppercase" type="submit">Submit form</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require_once __DIR__ . ('/utilities/footer.php'); // Inclusion du footer ?>