<?php
	// Définir les nouvelles coordonnées aléatoires
	$lat = rand(40, 60);
	$lon = rand(-10, 10);
?>
<!-- Afficher le lien Waze avec les nouvelles coordonnées -->
<iframe id="carte" src="https://embed.waze.com/iframe?zoom=16&lat=<?php echo $lat; ?>&lon=<?php echo $lon; ?>&pin=1"></iframe>