<?php require_once dirname(__DIR__) . "/utilities/header.php";?>
<?php require_once dirname(__DIR__) . "/function/potions.fn.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){

$currentId = $_POST['ID'];
$sql = "SELECT 
p.ID, p.titre, p.description, p.prix, p.path_Potion, tp.nom_type
FROM 
`potions` AS p
JOIN 
`typespotions` AS tp ON p.type_id = tp.id
WHERE p.ID = $currentId";

$requete = $db->query($sql);

$donneesActuelles = $requete->fetch();
$donneesSoumises = $_POST;

var_dump($donneesActuelles);
var_dump($donneesSoumises);

$differences = array_diff_assoc($donneesSoumises, $donneesActuelles);

var_dump($differences);

}