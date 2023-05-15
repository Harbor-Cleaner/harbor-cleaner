<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="refresh" content="5"><!-- actualisation toutes les 30 secondes -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="shortcut icon" href="Illustration/Favicon/favicon_sombre.ico" type="image/x-icon">
</head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script>
    jQuery(function(){
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 200 ) { 
                    $('#scrollUp').css('right','10px');
                } else { 
                    $('#scrollUp').removeAttr( 'style' );
                }

            });
        });
    });
</script>
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
            <?php
	            // Définir les nouvelles coordonnées aléatoires
	            $lat = rand(40, 60);
	            $lon = rand(-10, 10);
            ?>
	        <!-- Afficher le lien Waze avec les nouvelles coordonnées -->
	        <iframe id="carte" src="https://embed.waze.com/iframe?zoom=16&lat=<?php echo $lat; ?>&lon=<?php echo $lon; ?>&pin=1"></iframe>
        </div>
    <!-- Contenue droite -->
    <div class="split-screen__half">
        <video id="camera"></video>
    </div>
<script>
    //  { exact: "environment" }
    if(navigator && navigator.mediaDevices){
    const options = { audio: false, video: { facingMode: "user", width: 750, height: 500  } }
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
