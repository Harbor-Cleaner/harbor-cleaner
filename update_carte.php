<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "harborcleaner";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupérer les coordonnées lat et lon depuis la base de données
$sql = "SELECT lat, lon FROM bateau";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lat = $row["lat"];
    $lon = $row["lon"];

    // Construire l'URL avec les nouvelles coordonnées
    $wazeUrl = "https://embed.waze.com/iframe?zoom=16&lat=" . $lat . "&lon=" . $lon . "&pin=1";

    // Renvoyer l'URL mis à jour
    echo $wazeUrl;
} else {
    echo ""; // Gérer le cas où il n'y a pas de données dans la base de données
}

// Fermer la connexion à la base de données
$conn->close();
?>