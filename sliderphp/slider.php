<!-- Inclusion du fichier tabslider.php contenant les données des éléments à afficher dans le carrousel -->
<?php include 'tabslider.php'; ?> 

<?php
    // Boucle à travers chaque élément du tableau $tabslider
    foreach ($tabslider as $value) {
        // Affichage de chaque élément du carrousel
        echo '<div class="carousel-item">
                <img src="/assets/img/' . $value['titre'] . '.jpg" class="d-block w-100 img-fluide rounded-3" alt="...">
            </div>';
    }
?>
