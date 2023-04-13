<?php
require("template/header.html");
date_default_timezone_set('Europe/Paris');
?>
<title>Harbor Cleaner</title>
<!-- Présentation du projet -->
<a id="projet"></a>
<!-- Présentation but du projet -->
<h2>Le but du projet ?</h2>
<!-- Présentation de l'équipe ayant développé le projet -->
<h2>Équipe de développement</h2>
<!-- Chiffres significatif -->
<h2>Harbor Cleaner en quelques chiffres</h2>
<a id="chiffres"></a>
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
$reponse = $bdd->query('SELECT * FROM `bateau` ORDER BY bateau_id DESC LIMIT 1'); //Requête BDD
While ($donnees = $reponse->fetch()) // Rend les valeurs utilisables et les affiche
{
    $etat = $donnees['etat'] == 1 ? 'En marche' : 'Ne fonctionne pas';
    echo'
    <div class="display-nombres">
    <table id="table-nombres" cellspacing="30">
        <tbody>
            <tr id="table-item">
                <th>Distance parcourue</th>
                <th>Déchet récolté</th>
                <th>Heure de fonctionnement</th>
                <th>Etat</th>
            </tr>
            <tr id="table-valeurs">
                <th>'.$donnees['distance'].' kms</th>
                <th>'.$donnees['dechet'].'t </th>
                <th>'.$donnees['heure'].'h </th>
                <th>'.$etat.'</th>
            </tr>
                <th></th>
            </tr>
        </tbody>
    </table>
    </div>
    ';
    }
$reponse->closeCursor();  // Termine le traitement de la requête
?>




<?php
require("template/footer.html");
?>