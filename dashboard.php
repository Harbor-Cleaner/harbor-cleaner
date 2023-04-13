<?php
require("template/header.html");
date_default_timezone_set('Europe/Paris')
?>

<title>Harbor Cleaner | Pilotage</title>
<h2>Information concernant Harbor Cleaner</h2>
<div class="split-screen">
    <!-- Contenue gauche -->
    <div class="split-screen__half">
    <iframe
    id="carte"
    width="425" 
    height="350" 
    frameborder="0" 
    scrolling="no" 
    marginheight="0" 
    marginwidth="0" 
    src="https://www.openstreetmap.org/export/embed.html?bbox=-4.942474365234375%2C47.622826666563675%2C-3.1297302246093754%2C48.43284538647477&amp;layer=mapnik">
    </iframe>
    </div>
    <!-- Contenue droite -->
    <div class="split-screen__half">
        <video id="camera"></video>
    </div>
</div>
<?php
require("template/footer.html");
?>
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
    console.log("camera API is not supported by your browser")
}

    // Good to go!
</script>