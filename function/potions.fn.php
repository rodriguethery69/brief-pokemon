<?php
function findAllPotions($db) { 
    // Requête SQL pour sélectionner tous les champs de la table 'potions'
    $sql = "SELECT * FROM potions";

    // Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère tous les résultats de la requête
    $result = $requete->fetchAll();

    // Retourne le résultat
    return $result;
}
function findTypePotion($db, $type_id) { 
    // Requête SQL pour sélectionner tous les champs de la table 'potions'
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
    // Utilisation d'une instruction switch pour déterminer la classe de couleur en fonction de l'identifiant de type
    switch ($type_id) {
        case 1:
            return 'btn-success'; // Retourne la classe de couleur pour le type 1 (Potions Plantes)
        case 2:
            return 'btn-primary'; // Retourne la classe de couleur pour le type 2 (Potions Eaux)
        case 3:
            return 'btn-danger'; // Retourne la classe de couleur pour le type 3 (Potions Feu)
        case 5:
            return 'btn-warning'; // Retourne la classe de couleur pour le type 5 (Potions Electrique)
        case 4:
            return 'btn-info'; // Retourne la classe de couleur pour le type 4 (Potions Glace)
        case 6:
            return 'btn-danger'; // Retourne la classe de couleur pour le type 6 (Potions Fée)
        default:
            return 'btn-secondary'; // Retourne une classe de couleur par défaut si l'identifiant de type n'est pas reconnu
    }
}



