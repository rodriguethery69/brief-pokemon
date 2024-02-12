    <!-- Inclusion du fichier onglets.php contenant les données des onglets -->
<?php include 'onglets.php'; ?> 

<?php
    // Boucle à travers chaque élément du tableau $onglets
    foreach ($onglets as $value) {
        // Affichage de chaque onglet sous forme d'un élément de liste
        echo '<li class="nav-item py-3 me-3">
                    <a class="btn btn-danger btn-outline-dark" href="' . $value['href'] . '">
                        <span class="text-white fs-5 fw-bold text-uppercase">' . $value['onglet'] . '</span>
                    </a>
                </li>';
    }
?>
