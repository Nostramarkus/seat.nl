<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style-desktop-version.css">
    <link href="css/interactive-image.css" rel="stylesheet">
    <!--JAVASCRIPT-->
    <style rel="js/navbar.js"></style>
    <style rel="js/image-slider.js"></style>
    <script src="js/interior.js"></script>
    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <title>Seat Nederland</title>
</head>
<body>

<div class="model-page-header-container">
<?php
include "include-basic-files/navbar.html";
include "db_connection.php";

$number = $_GET["number"];

    $sql = "SELECT model, number, modelTitle, modelImg, price, pricePrivateLease, headerImg, testDriveLink, interiorImg FROM modellen WHERE number='$number'";

    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        echo
            '<div class="model-page-container">
                <div class="model-page-header-image">
                    <img alt="img-header" src="' .$row['headerImg'].'"/>
                </div>  
                <div class="model-page-info-section">
                    <div class="model-page-info-menu-section">
                        <div class="model-page-info-menu-section-box">
                            <a href="#">menu1</a>
                        </div>
                        <div class="model-page-info-menu-section-box">
                            <a href="#">menu2</a>
                        </div>
                        <div class="model-page-info-menu-section-box">
                            <a href="#">menu3</a>
                        </div>
                        <div class="model-page-info-menu-section-box">
                            <a href="#">menu4</a>
                        </div>
                    </div>
                    <div class="model-page-info-button-section">
                        <a class="button-header" href="'.$row['testDriveLink'].'" target="_blank">Boek proefrit</a>
                        <a class="button-header" href="'.$row['testDriveLink'].'" target="_blank">Stel samen</a>
                    </div>
                    <div class="model-page-info-price-section">
                        <div class="model-page-info-price-section-box">
                        Prijs:<br> €'.$row['price'].'
                        </div>
                        <div class="model-page-info-price-section-box">
                        Private Lease:<br> €'.$row['price'].'
                        </div>
                        <div class="model-page-info-price-section-box">
                        Bijtelling:<br>  €'.$row['price'].'
                        </div>
                        <div class="model-page-info-price-section-box">
                        Garantie:<br> €'.$row['price'].'
                        </div>
               
                    </div>
                </div> 
            </div>';
    }  
?>






<!-- 
<div class="header-image-info-button">
            <a class="button-header" href="'.$row['testDriveLink'].'" target="_blank">Nu proefrijden</a>
            <a class="button-header" href="'.$row['testDriveLink'].'" target="_blank">Nu proefrijden</a>
            </div>


            <div class="header-image-info">
            <h3>prijs</h3>
            € '.$row['price'].'
            </div>
            <div class="header-image-info">
            <h3>Private Lease</h3>
            € '.$row['pricePrivateLease'].'
            </div>  
            <div class="header-image-info">
            <h3>Bijtelling</h3>
            € '.$row['price'].'
            </div>  
            <div class="header-image-info">
            <h3>Garantie</h3>
            '.$row['price'].'
            </div> 
 -->



</body>    
</html>