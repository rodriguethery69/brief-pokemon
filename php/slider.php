<?php include 'tabslider.php'; ?>
<?php

foreach ($tabslider as $value) {
    echo '<div class="carousel-item">
    <img src="/assets/img/' . $value['titre'] . '.jpg" class="d-block w-100 img-fluide" alt="...">
    </div>';
}
?>