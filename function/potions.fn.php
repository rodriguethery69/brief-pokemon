<?php
function findAllPotions($db)
{
    // Requête SQL pour sélectionner tous les champs de la table 'potions'
    $sql = "SELECT * FROM potions";

    // Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère tous les résultats de la requête
    $result = $requete->fetchAll();

    // Retourne le résultat
    return $result;
}
function findAllPotionsGenres($db)
{
    // Requête SQL pour sélectionner tous les champs de la table 'potions'
    $sql = "SELECT potions.ID AS ID, potions.titre, potions.description, potions.prix, typespotions.nom_type FROM `potions` LEFT JOIN `typespotions` ON potions.type_id = typespotions.ID";

    // Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère tous les résultats de la requête
    $result = $requete->fetchAll();

    // Retourne le résultat
    return $result;
}

function findTypePotion($db, $type_id)
{
    // Requête SQL pour sélectionner tous les champs de la table 'potions'
    $sql = "SELECT * FROM potions WHERE type_id = $type_id";

    // Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère tous les résultats de la requête
    $result = $requete->fetchAll();

    // Retourne le résultat
    return $result;
}

function findPotionByID($db, $currentId)
{

    // Requête SQL pour sélectionner des informations spécifiques sur une potion par ID
    $sql = "SELECT 
        p.ID, p.titre, p.description, p.prix, p.path_Potion, tp.nom_type
    FROM 
        `potions` AS p
    JOIN 
        `typespotions` AS tp ON p.type_id = tp.id
        
    WHERE p.ID = $currentId";

    // Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère le premier résultat de la requête
    $potion = $requete->fetch();

    // Retourne les informations de la potion
    return $potion;
}

function updatePotion($db, $currentId)
{
    $sql = "UPDATE `potions` SET `ID`='[value-1]',`titre`='[value-2]',`description`='[value-3]',`prix`='[value-4]',`path_Potion`='[value-5]',`type_id`='[value-6]'
    WHERE id = $currentId";

    $requete = $db->query($sql);

    $update = $requete->fetch();

    return $update;
}


function getButtonColorClass($type_id)
{
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



