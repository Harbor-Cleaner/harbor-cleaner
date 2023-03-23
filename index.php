<?php
require("/template/header.html");
date_default_timezone_set('Europe/Paris')
?>

<title>Harbor Cleaner</title>
<!-- Présentation du projet -->
<h1>Harbor Cleaner</h1>
<!-- Présentation but du projet -->
<h2>Le but du projet ?</h2>
<!-- Présentation de l'équipe ayant développé le projet -->
<h2>Équipe de développement</h2>
<!-- Chiffres significatif -->
<h2>Harbor Cleaner en quelques chiffres</h2>
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
$reponse = $bdd->query('SELECT * FROM bateau'); //Requête base de donnees
While ($donnees = $reponse->fetch()) // Rend les valeurs utilisables et les affiche
{
    echo '<h4>'.$donnees['temp.air'].'</h4>';
    echo '<h4>'.$donnees['temp.eau'].'</h4>';
    echo '<h4>'.$donnees['porte'].'</h4>';
    echo '<h4>'.$donnees['bouffe'].'</h4>';
    echo '<h4>'.$donnees['eau'].'</h4>';
     
    }
$reponse->closeCursor();  // Termine le traitement de la requête
 
?>



<?php
require("/template/footer.html");
?>