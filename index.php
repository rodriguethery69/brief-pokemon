<?php 
require_once __DIR__ . ('/utilities/header.php');

?>

<body class="d-flex flex-column min-vh-100">
    <main>
        <!-- slider -->
        <h2 class="text-center mt-3">Bienvenue Au Centre Pokémon de la Potion Mystique</h2>
        <section class="d-flex justify-content-center p-4">
            <div id="carouselExampleSlidesOnly" class="carousel slide w-25" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/img/pokemon7.jpg" class="d-block w-100 img-fluide" alt="...">
                    </div>
                    <?php include 'php/slider.php'; ?>
                </div>
            </div>
            <div class="mx-5"></div>
            <div class="card" style="width: 18rem;">
                 <img src="/assets/img/pokemon8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Le cente spécialisé où les dresseurs peuvent acheter des potions Mystique spécifiques pour leurs Pokémon .</p>
                </div>
            </div>
        </section>
    </main>
    
    <!--footer -->
    <?php require_once __DIR__ . ('/utilities/footer.php'); ?>

    <!-- lien bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

