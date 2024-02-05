<?php
function findAllPotions($db) { 
    // Requête SQL pour sélectionner tous les champs de la table 'movies'
    $sql = "SELECT * FROM potions";

    // Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère tous les résultats de la requête
    $result = $requete->fetchAll();

    // Retourne le résultat
    return $result;
}
function findTypePotion($db, $type_id) { 
    // Requête SQL pour sélectionner tous les champs de la table 'movies'
    $sql = "SELECT * FROM potions WHERE type_id = $type_id";
    
    // Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère tous les résultats de la requête
    $result = $requete->fetchAll();

    // Retourne le résultat
    return $result;
}

function findPotionByID($db, $currentId){

    // Requête SQL pour sélectionner des informations spécifiques sur une potion par ID
    $sql = "SELECT 
        p.ID, p.titre, p.description, p.prix, p.path_Potion, tp.nom_type
    FROM 
        `potions` AS p
    JOIN 
        `typespotions` AS tp ON p.type_id = tp.id";

    // Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère le premier résultat de la requête
    $potion = $requete->fetch();

    // Retourne les informations de la potion
    return $potion;
}

function getButtonColorClass($type_id) {
    switch ($type_id) {
        case 1:
            return 'btn-success'; // Couleur pour le type 1 (Les Potions Plantes)
        case 2:
            return 'btn-primary'; // Couleur pour le type 2 (Les Potions Eaux)
        case 3:
            return 'btn-danger'; // Couleur pour le type 3 (Les Potions Feu)
        case 5:
            return 'btn-warning'; // Couleur pour le type 5 (Les Potions Electrique)
        case 4:
            return 'btn-info'; // Couleur pour le type 4 (Les Potions Glace)
        case 6:
            return 'btn-danger'; // Couleur pour le type 6 (Les Potions Fée)
        default:
            return 'btn-secondary'; // Couleur par défaut
    }
}



