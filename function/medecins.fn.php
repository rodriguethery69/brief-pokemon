<?php

// Fonction pour récupérer tous les films de la base de données
function findAllMedecins($db) { 
    // Requête SQL pour sélectionner tous les champs de la table 'movies'
    $sql = "SELECT * FROM medecins";

    // Exécute la requête sur la base de données
    $requete = $db->query($sql);

    // Récupère tous les résultats de la requête
    $result = $requete->fetchAll();

    // Retourne le résultat
    return $result;
}

function findMedecinByID($db, $currentId){

    // Requête SQL pour sélectionner des informations spécifiques sur un film par ID
   $sql = "SELECT 
   m.id, m.titre, m.description, m.specialite, 
   m.age 
   FROM `medecins` AS m";

// Exécute la requête sur la base de données
   $requete = $db->query($sql);

   // Récupère le premier résultat de la requête
   $medecin = $requete->fetch();

   // Retourne les informations du film
   return $medecin;
 
}

