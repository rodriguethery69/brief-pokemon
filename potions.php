<?php require_once __DIR__ . ('/utilities/header.php'); // Inclusion du header
      require_once __DIR__ . "/function/potions.fn.php"; // Inclusion du fichier de fonctions pour les potions

      // Récupération des potions en fonction du type sélectionné ou de toutes les potions si aucun type n'est sélectionné
    $result = findTypePotion ($db, '1 or type_id=2 or type_id=3 or type_id=4 or type_id=5 or type_id=6 or type_id=7');
        if (isset($_POST['type_id'])==FALSE)
    $_POST['type_id'] = '1 or type_id=2 or type_id=3 or type_id=4 or type_id=5 or type_id=6 or type_id=7';
        else $result = findTypePotion ($db,$_POST['type_id']);
?>
<body>
    <main>
        <!-- Formulaire de sélection du type de potion -->
        <form class="m-2 col-3" method="post" action="potions.php">
            <label class="m-2 " for="type_id"></label>
            <select class="form-select m-2 btn btn-danger btn-outline-dark text-white fs-4 fw-bold text-uppercase" name="type_id" aria-label="Default select example">
                <option value="1 or type_id=2 or type_id=3 or type_id=4 or type_id=5 or type_id=6 or type_id=7">Toutes les potions</option>
                <option value="1" >Les Potions Plantes</option>
                <option value="2" >Les Potions Eaux</option>
                <option value="3" >Les Potions Feu</option>
                <option value="4" >Les Potions Glace</option>
                <option value="5" >Les Potions Electrique</option>
                <option value="6" >Les Potions Fée</option>
                <option value="7" >Les Potions Dragon</option>
            </select>
            <button class="m-2 btn btn-danger btn-outline-dark text-white fs-5 fw-bold text-uppercase" type="submit">Sélectionner</button>
        </form>

        <!-- Affichage des potions en fonction du type sélectionné -->
        <section class="container-md w-66 m-auto">
            <?php require_once __DIR__ . ('/bouclephp/bouclecardpot.php'); // Inclusion du contenu de la boucle pour les cartes de potions ?>
        </section>
    </main>

    <?php require_once __DIR__ . ('/utilities/footer.php'); // Inclusion du footer ?>
</body>

</html>
