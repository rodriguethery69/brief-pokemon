<?php require_once __DIR__ . ('/utilities/header.php');
      require_once __DIR__ . "/function/medecins.fn.php";
      $medecins = findAllMedecins($db);
    ?>

<body>
    <main>
        <!-- cards -->
        <section class="container-md w-66 m-auto">
            <?php require_once __DIR__ . ('/bouclephp/bouclecardmed.php'); ?>
        </section>
    </main>
    
    <?php require_once __DIR__ . ('/utilities/footer.php'); ?>
</body>

</html>
