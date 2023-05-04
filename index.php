<?php
require("template/header.php");
date_default_timezone_set('Europe/Paris');
?>
<title>Harbor Cleaner</title>
<!-- Présentation du projet -->
<a id="projet"></a>
<!-- Présentation but du projet -->
<h2>Le but du projet ?</h2>
    <p>
    Bienvenue sur le site de notre projet de robot de nettoyage de ports ! Nous sommes quatre étudiants en terminale STI2D, deux spécialisés en Systèmes d'Information et Numérique (SIN) et deux en Innovation Technologique et Eco Conception (ITEC). Nous avons travaillé ensemble pour réaliser ce projet qui nous tient à cœur : maintenir nos milieux aquatiques propres, particulièrement la mer à proximité de laquelle nous vivons.
    <br> Notre robot de nettoyage de ports est notre projet de fin d'année et représente l'aboutissement de notre formation en STI2D. Nous avons conçu et construit ce robot à partir de zéro, en utilisant les compétences acquises en cours, mais aussi en menant nos propres recherches et en nous inspirant d'autres projets similaires.
    <br> Notre robot est équipé de différentes technologies pour lui permettre d'effectuer son travail de nettoyage de manière autonome et efficace. Nous avons également veillé à concevoir un robot respectueux de l'environnement, en utilisant des matériaux recyclés et en veillant à limiter son empreinte carbone.
    <br> Nous sommes fiers de présenter notre robot de nettoyage de ports, fruit de notre passion pour la technologie et notre engagement en faveur de l'environnement. Nous espérons que notre projet sera utile pour préserver la beauté de nos milieux aquatiques et sensibiliser les gens à l'importance de les maintenir propres.
    </p>
<!-- Présentation de l'équipe ayant développé le projet -->
<h2>Équipe de développement</h2>
<h3 id=équipe >équipe SIN : Jouin-Derrien Nicolas & Frances Alessio </h3>
<h3 id=équipe >équipe ITEC : Gloaguen Clement & Buanic Titouan</h3>
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
require("template/footer.php");
?>