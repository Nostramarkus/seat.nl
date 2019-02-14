<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style-desktop-version.css">
    <!--JAVASCRIPT-->
    <style rel="js/navbar.js"></style>
    <style rel="js/image-slider.js"></style>
    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <!-- ICON -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Seat Nederland</title>
</head>
<body>
   <?php
    include "include-basic-files/navbar-fixed.html";
    ?>

<!--HEADER-->
<div class="index-container">
    <div class="index-header ">
        <div class="index-header-titel">
            <h1>De SEAT Tarraco.</h1>
            <h3>Onze grootste SUV ooit</h3>
            <a class="button" href="model-page.php?number=7">Ontdek nu</a>
        </div>
    </div>
    <!-- <div class="index-header-footer">
    </div>   -->
    <!--MODELS-->
    <div class="index-model-container">
        <div class="index-model-title">
            <p>Bekijk hieronder al onze modellen.</p>
        </div>
        <div class="index-model-cars-container">
            <div class="index-model-cars">
                <a href="model-page.php?number=1">
                <img src="img/img-productcard/mii/mii.png" alt="SEAT Mii">
                <p>SEAT Mii</p>
                </a>
            </div>    
            <div class="index-model-cars">
                <a href="model-page.php?number=2">
                <img src="img/img-productcard/ibiza/ibiza.png" alt="SEAT Ibiza">
                <p>SEAT Ibiza</p>
                </a>
            </div> 
            <div class="index-model-cars">
                <a href="model-page.php?number=3">
                <img src="img/img-productcard/arona/arona.png" alt="SEAT Arona">
                <p>SEAT Arona</p>
                </a>
            </div> 
            <div class="index-model-cars">
                <a href="model-page.php?number=4">
                <img src="img/img-productcard/leon/leon-hatchback.png" alt="SEAT Leon">
                <p>SEAT Leon</p>
                </a>
            </div> 
            <div class="index-model-cars">
                <a href="model-page.php?number=5">
                <img src="img/img-productcard/ateca/ateca.png" alt="SEAT Ateca">
                <p>SEAT Ateca</p>
                </a>
            </div> 
            <div class="index-model-cars">
                <a href="model-page.php?number=6">
                <img src="img/img-productcard/alhambra/alhambra.png" alt="SEAT Alhambra">
                <p>SEAT Alhambra</p>
                </a>
            </div> 
            <div class="index-model-cars">
                <a href="model-page.php?number=7">
                <img src="img/img-productcard/tarraco/tarraco.png" alt="SEAT Tarraco">
                <p>SEAT Tarraco</p>
                </a>
            </div> 
        </div>
    </div>
    <a onclick="$('#landingspage-info-section-container').animatescroll({scrollSpeed:2000,easing:'easeOutBounce'});"><span style="font-size: 3rem; color: black;"><i class="fas fa-arrow-circle-down"></i></span></a>
    
    <div class="index-about-us">
        Over SEAT
    </div>
</div>
</body>    
</html>
