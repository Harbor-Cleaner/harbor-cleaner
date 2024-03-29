<?php
require("template/header.php");
date_default_timezone_set('Europe/Paris');
?>
<title>Harbor Cleaner</title>
<p>
  Bienvenue sur le site de notre projet ! Nous sommes quatre étudiants en terminale STI2D passionnés par l'environnement et plus particulièrement par la préservation de nos milieux aquatiques. Vivant à côté de la mer, nous avons décidé de nous mobiliser pour nettoyer nos ports en créant un robot autonome.
</p>
<!-- Présentation du projet -->
<a id="projet"></a>
<h2>Le but du projet ?</h2>
<div class="split-screen">
  <!--Contenue  présentation droite -->
  <div class="split-screen__half">
    <p id="text-team">
      <br> Notre robot a été conçu pour collecter les déchets qui polluent les ports et les bassins maritimes. Grâce à notre formation en Systèmes d'Information et Numérique (SIN) et en Innovation Technologique et Eco Conception (ITEC), nous avons travaillé ensemble pour développer un système automatisé efficace et respectueux de l'environnement.
      <br> Nous avons investi beaucoup de temps et d'énergie dans ce projet, car nous sommes convaincus que la préservation de l'environnement est une responsabilité de tous. Nous sommes fiers de ce que nous avons accompli et nous espérons que notre robot contribuera à maintenir nos milieux aquatiques propres.
    </p>
  </div>
  <!-- Contenue présentation gauche -->
  <div class="split-screen__half">
    <iframe
    id="video-index"
    width="560"
    height="315"
    src="https://www.youtube-nocookie.com/embed/QbWDWxB6gSI?controls=0"
    title="YouTube video player"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen>
    </iframe>
  </div>
</div>
<!-- Présentation de l'équipe ayant développé le projet -->
<a id="team"></a>
<h2>Équipe de développement</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Illustration/photos_team/Aless.webp" alt="Aless" id="pfp">
      <div class="container">
        <h3>Alessio Frances</h3>
        <p class="title">Étudiant SIN</p>
        <p>alessio.frances@likes.org</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Illustration/photos_team/Nicolas.jpg" alt="Nicolas" id="pfp">
      <div class="container">
        <h3>Nicolas Jouin</h3>
        <p class="title">Étudiant SIN</p>
        <p>nicolas.jouin-derrien@likes.org</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Illustration/photos_team/Clément.jpg" alt="Clément" id="pfp">
      <div class="container">
        <h3>Clément Gloaguen</h3>
        <p class="title">Étudiant ITEC</p>
        <p>clement.gloaguen@likes.org</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Illustration/photos_team/Titouan.jpg" alt="Titouan" id="pfp">
      <div class="container">
        <h3>Titouan Buanic</h3>
        <p class="title">Étudiant ITEC</p>
        <p>titouan.buanic@likes.org</p>
      </div>
    </div>
  </div>
</div>


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
// Affichage de données sous forme de tableau (Affichage simplifié)
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
                <th>État</th>
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
<p>
Nous sommes impatients de partager notre expérience avec vous et de vous présenter notre robot de nettoyage de ports. N'hésitez pas à nous contacter si vous avez des questions ou des commentaires !
</p>
<?php
require("template/footer.php");
?>