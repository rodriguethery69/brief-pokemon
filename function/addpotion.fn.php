<?php
function addPotion($db)
{
    // Récupération des données du formulaire
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $path_Potion = isset($_POST['path_Potion']); 
    $type_id = $_POST['type_id'];

    // Vérification si le formulaire a été soumis et s'il contient des données
    if (isset($_POST['add']) && !empty($_POST)) {
        // Construction de la requête SQL d'insertion avec les données du formulaire
        $sql = "INSERT INTO Potions (`titre`, `description`, `prix`, `path_Potion`, `type_id`)
                VALUES('$titre',  '$description', '$prix', '$path_Potion', '$type_id')";

        // Exécution de la requête SQL pour insérer la potion dans la base de données
        $db->query($sql);
    }
}
