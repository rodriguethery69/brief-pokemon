<!-- titre -->
<div class="text-center text-uppercase mt-5">
                <h4 class="fw-bold">VOS POTIONS FAVORITES</h4>
                <!-- 3 cards -->
                <!-- div grand-parent row-cols-3 = 3 colonnes /row-cols-md-3 format au dessus de la tablette = md= gros tel 3 colonnes -->
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mx-0 mx-md-5">

<!-- il faut indiquer quel dossier contenant les variable et valeur doit être appeler pour effectuer la boucle -->

<?php include 'medicaments.php'; ?>
<?php 

foreach ($medicaments as $value) {
    echo '<div class="col">
    <div class="card border-0">
        <img src="/img/'. $value['titre'] .'.jpg" class="card-img-top rounded-0" alt="">
        <div class="card-body">
            <p class="fw-bold">JEUDI 11 JANVIER</p>
            <h4 class="card-title text-uppercase fw-bold">' . $value['titre'] . '</h4>
            <p class="card-text">' . $value['description'] . '</p>
            <p class="card-link2 fw-bold text-decoration-none text-black text-uppercase position-relative">' . $value['prix'] . '</p>
        </div>
    </div>
</div>';
    
}
?>