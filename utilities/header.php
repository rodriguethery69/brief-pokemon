<?php 
    require_once dirname(__DIR__) ."/config/config.php"; // Inclusion du fichier de configuration
    require_once dirname(__DIR__) ."/function/database.fn.php"; // Inclusion du fichier de fonctions de base de données
    $db = getPDOlink($config); // Connexion à la base de données
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css"> <!-- lien vers la feuille de style -->
    <script src="script.js"></script>
    <link rel="shortcut icon" href="/assets/favicon/favicon.png" type="image/x-icon"> <!-- lien vers l'icône du site -->
    <!-- lien vers Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PokéDoc</title> <!-- titre de la page -->
</head>

<body class="index">
    <header>
        <!-- barre de navigation -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid h-100">
                <!-- logo de la navbar -->
                <div class="pokeball"></div>
                <!-- menu burger -->
                <button class="navbar-toggler h-100" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- contenu du menu -->
                <div class="collapse navbar-collapse h-md-100" id="navbarSupportedContent">
                    <div class="">
                        <!-- inclusion du contenu du menu depuis un fichier PHP -->
                        <ul class="navbar-nav mb-2 mb-lg-0 h-100 px-2 ">
                            <?php require_once dirname(__DIR__) . "/navphp/navbar.php"; ?>
                        </ul>  
                    </div>
                </div>
            </div>
        </nav>
    </header>
