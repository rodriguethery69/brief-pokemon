<?php include 'onglets.php'; ?>
<?php
foreach ($onglets as $value) {
    echo '<li class="nav-item py-3 me-3">
        <a class="btn btn-danger btn-outline-dark" href="' . $value['href'] . '">
            <span class="text-white fs-5 fw-bold text-uppercase">' . $value['onglet'] . '</span>
        </a>
    </li>';
}
?>