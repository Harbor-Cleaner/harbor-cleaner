<?php
require("template/header.html");
date_default_timezone_set('Europe/Paris')
?>

<title>Harbor Cleaner | Pilotage</title>
<h2>Pilotage</h2>
<div class="split-screen">
    <!-- Contenue gauche -->
    <div class="split-screen__half">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21358.88595380644!2d-4.10964305!3d47.9970783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4810d5925b5c02cf%3A0x19d6d491f66ae9e0!2sCath%C3%A9drale%20Saint-Corentin!5e0!3m2!1sfr!2sfr!4v1678975896937!5m2!1sfr!2sfr"
            width="500" 
            height="500" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            id="carte">
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
    const options = { audio: false, video: { facingMode: "user", width: 500, height: 500  } }
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