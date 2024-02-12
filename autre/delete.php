<?php
require_once dirname(__DIR__) . "/utilities/header.php"; // Inclusion du fichier d'en-tête

?>

<div class="col-md-4 mb-4">
    <form method="POST">
        <div class="card border-0">
            <img src="../assets/img/delete.jpg" class="card-img-top rounded-3" alt="">
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
                <button class="text-center btn btn-danger btn-outline-dark text-white fs-5 fw-bold text-uppercase"
                    type="submit">Delete</button>
            </div>
        </div>
    </form>
</div>

<?php require_once dirname(__DIR__) ."/utilities/footer.php"; // Inclusion du footer ?>