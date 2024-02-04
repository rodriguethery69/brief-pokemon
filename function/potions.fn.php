<?php

// Fonction pour récupérer tous les films de la base de données
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

function findPotionByID($db, $currentId){

    // Requête SQL pour sélectionner des informations spécifiques sur un film par ID
   $sql = "SELECT 
   p.id, p.titre, p.description, p.prix,  
   FROM `potions` AS p";

// Exécute la requête sur la base de données
   $requete = $db->query($sql);

   // Récupère le premier résultat de la requête
   $potion = $requete->fetch();

   // Retourne les informations du film
   return $potion;
 
}



