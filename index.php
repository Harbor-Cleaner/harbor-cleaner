<?php
require("template/header.html");
date_default_timezone_set('Europe/Paris');
?>
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
$reponse = $bdd->query('SELECT * FROM `bateau` ORDER BY distance DESC LIMIT 1'); //Requête BDD
While ($donnees = $reponse->fetch()) // Rend les valeurs utilisables et les affiche
{

    echo'
    <div class="display-nombres">
    <table>
        <thead>
            <tr>
                <th colspan="2">Notre projet en quelques chiffres</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Distance parcourue</th>
                <th>Déchet récolté</th>
                <th>Heure de fonctionnement</th>
                <th>Etat</th>
            </tr>
            <tr>
                <th>Distance parcourue</th>
                <th>Déchet récolté</th>
                <th>Heure de fonctionnement</th>
                <th>Etat</th>
            </tr>
                <th>'.$donnees['distance'].'</th>
            </tr>
        </tbody>
    </table>
        <ul>
            <li> Distance parcourues : <br>kms </li>
            <li> Déchet récoltés : <br>'.$donnees['dechet'].'t </li>
            <li> Heure de fonctionnement : <br>'.$donnees['heure'].'h </li>
            <li> Etat : <br>'.$donnees['etat'].'</li>
        </ul>
    </div>
    ';
    }
$reponse->closeCursor();  // Termine le traitement de la requête
?>



<?php
require("template/footer.html");
?>