<?php require_once __DIR__ . ('/utilities/header.php');
      require_once __DIR__ . "/function/potions.fn.php";
      $potions = findAllPotions($db);
    ?>

<body>
    <main>
        <!-- cards -->
        <section class="container-md w-66 m-auto">
            <?php require_once __DIR__ . ('/php/bouclecardpot.php'); ?>
        </section>
    </main>
    
    <?php require_once __DIR__ . ('/utilities/footer.php'); ?>
</body>

</html>