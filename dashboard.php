<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="shortcut icon" href="Illustration/Favicon/favicon_sombre.ico" type="image/x-icon">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Fonction pour recharger la partie de la page
        function reloadCarte() {
            $.ajax({
                url: 'update_carte.php', // Le fichier PHP pour mettre à jour les coordonnées
                success: function(data) {
                    // Mettre à jour l'URL de l'élément iframe avec les nouvelles coordonnées
                    $('#carte').attr('src', data);
                }
            });
        }

        // Recharger la partie de la page toutes les 5 secondes
        setInterval(reloadCarte, 10);
    </script>   
</head>
<body>
<!-- NavBar -->
  <header>
      <nav class="navbar">
          <ul>
              <li><a href="index.php">Accueil</a></li>
              <li><a href="dashboard.php">Dashboard</a></li>
          </ul>
      </nav>
  </header>

<title>Harbor Cleaner | Pilotage</title>
    <div class="split-screen">
        <!-- Contenue gauche -->
        <div class="split-screen__half">
            <div id="carte-container">
            <!-- Afficher le lien Waze avec les coordonnées actuelles -->
            <iframe id="carte" src=""></iframe>
        </div>
        </div>
    <!-- Contenue droite -->
    <div class="split-screen__half">
        <video id="camera"></video>
    </div>
<script>
    //  { exact: "environment" }
    if(navigator && navigator.mediaDevices){
    const options = { audio: false, video: { facingMode: "user", width: 1000 , height: 450  } }
    navigator.mediaDevices.getUserMedia(options)
    .then(function(stream) {
        var video = document.querySelector('video');
        video.srcObject = stream;
        video.onloadedmetadata = function(e) {
          video.play();
        };
    })
    .catch(function(err) {
        //Handle error here
    });
}
else{
    console.log("La caméra n'est pas supporté par votre navigateur.")
}

    // Good to go!
</script>

<!-- Dasboard bouton commande -->

<!-- bouton activation moteur -->

<h2>Moteur droit</h2>
    <div class="flipswitch">
        <input type="checkbox" name="flipswitch" class="flipswitch-cb" id="fs" checked>
        <label class="flipswitch-label" for="fs">
            <div class="flipswitch-inner"></div>
            <div class="flipswitch-switch"></div>
        </label>
    </div>
