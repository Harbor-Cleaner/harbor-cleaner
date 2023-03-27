<?php
require("template/header.html");
date_default_timezone_set('Europe/Paris');
?>

<title>Harbor Cleaner</title>
<!-- Présentation du projet -->
<h1>Harbor Cleaner</h1>
<a id="projet"></a>
<!-- Présentation but du projet -->
<h2>Le but du projet ?</h2>
<!-- Présentation de l'équipe ayant développé le projet -->
<h2>Équipe de développement</h2>
<!-- Chiffres significatif -->
<h2>Harbor Cleaner en quelques chiffres</h2>
<a id="chiffres"></a>
<div id="display-nombres">
<?php
 try
 {
    $bdd = new PDO('mysql:host=localhost;dbname=harborcleaner', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 }
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
// Affichage de données
$reponse = $bdd->query('SELECT * FROM `bateau` ORDER BY dechet DESC LIMIT 1'); //Requête BDD
While ($donnees = $reponse->fetch()) // Rend les valeurs utilisables et les affiche
{
    echo '<h4>'.$donnees['distance'].' kms </h4>';
    echo '<h4>'.$donnees['dechet'].' tonnes </h4>';
    echo '<h4>'.$donnees['etat'].'</h4>';
    echo '<h4>'.$donnees['heure'].' h de fonctionnement</h4>';
     
    }
$reponse->closeCursor();  // Termine le traitement de la requête
 
?>
</div>

<?php
require("template/footer.html");
?>