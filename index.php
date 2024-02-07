<?php 
require_once __DIR__ . ('/utilities/header.php'); // Inclusion du fichier d'en-tête
?>

<body class="d-flex flex-column min-vh-100">
    <main>
        <!-- Contenu principal -->
        <!-- slider -->
        <h2 class="text-center mt-3">Guérir avec amour, soigner avec passion - Votre PokéDoc médecin de confiance!</h2>
        <section class="d-flex justify-content-center p-4">
            <!-- Carrousel Bootstrap -->
            <div id="carouselExampleSlidesOnly" class="carousel slide w-25" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/img/pokemon7.jpg" class="d-block w-100 img-fluide rounded-3" alt="...">
                    </div>
                    <?php include 'sliderphp/slider.php'; // Inclusion du contenu du carrousel ?>
                </div>
            </div>
            <!-- Carte d'information -->
            <div class="mx-1"></div> <!-- Cet élément permet de separer le slider et la card -->
            <div class="card" style="width: 18rem;">
                <img src="/assets/img/pokemon8.jpg" class="card-img-top rounded-3" alt="...">
                <div class="card-body">
                    <p class="card-text">Le centre spécialisé où les dresseurs peuvent acheter des potions Mystique spécifiques pour leurs Pokémon .</p>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <?php require_once __DIR__ . ('/utilities/footer.php'); // Inclusion du footer ?>

    <!-- Lien vers le fichier JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


