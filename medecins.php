<?php 
require_once __DIR__ . ('/utilities/header.php'); // Inclusion du fichier d'en-tête
require_once __DIR__ . "/function/medecins.fn.php"; // Inclusion du fichier de fonctions pour les médecins
$medecins = findAllMedecins($db); // Appel de la fonction pour trouver tous les médecins
?>

<body>
    <main>
        <!-- Contenu principal -->
        <!-- Section des cartes -->
        <section class="container-md w-66 m-auto">
            <?php require_once __DIR__ . ('/bouclephp/bouclecardmed.php'); // Inclusion du contenu de la boucle pour les cartes des médecins ?>
        </section>
    </main>
    
    <?php require_once __DIR__ . ('/utilities/footer.php'); // Inclusion du Footer ?>
</body>

</html>

