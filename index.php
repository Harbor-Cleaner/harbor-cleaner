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
<div class="display-nombres">
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
$reponse = $bdd->query('SELECT * FROM `bateau` ORDER BY distance DESC LIMIT 1'); //Requête BDD
While ($donnees = $reponse->fetch()) // Rend les valeurs utilisables et les affiche
{
    echo'
    <div class="display-nombres">
        <ul>
            <li> Distance parcourues : '.$donnees['distance'].'kms </li>
            <li> Déchet récoltés :'.$donnees['dechet'].'t </li>
            <li> Heure de fonctionnement'.$donnees['heure'].'h </li>
            <li> Etat :'.$donnees['etat'].'</li>
        </ul>
    </div>
    ';
    }
$reponse->closeCursor();  // Termine le traitement de la requête
 
?>
</div>

<?php
require("template/footer.html");
?>