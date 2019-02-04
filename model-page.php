<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style-desktop-version.css">
    <link href="css/interactive-image.css" rel="stylesheet">
    <!--JAVASCRIPT PARALLAX SCROLL-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/scrollMagic.min.js"></script>
    <script src="js/main.js"></script>
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

    $sql = "SELECT model, number, modelTitle, modelImg, price, pricePrivateLease, headerImg, testDriveLink, carImage1, interiorImg, carIntroductionTitle, carIntroductionImage FROM modellen WHERE number='$number'";

    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        echo
            '<div class="model-page-container">
                <div class="model-page-header-image" id="parralex-1">
                    <img alt="img-header" src="' .$row['headerImg'].'"/>
                </div>  
                <div class="model-page-info-section">
                    <div class="model-page-info-menu-section">
                        <div class="model-page-info-menu-section-box">
                            <a href="#">Model</a>
                        </div>
                        <div class="model-page-info-menu-section-box">
                            <a href="#">Techniek</a>
                        </div>
                        <div class="model-page-info-menu-section-box">
                            <a href="#">Proefrit</a>
                        </div>
                        <div class="model-page-info-menu-section-box">
                            <a href="#">Afbeeldingen</a>
                        </div>
                    </div>
                
                    <div class="model-page-info-price-section">
                        <div class="model-page-info-price-section-box">
                        Prijs:<br> €'.$row['price'].'
                        </div>
                        <div class="model-page-info-price-section-box">
                        Private Lease:<br> €'.$row['pricePrivateLease'].'
                        </div>
                        <div class="model-page-info-price-section-box">
                        Bijtelling:<br>  €'.$row['price'].'
                        </div>
                        <div class="model-page-info-price-section-box">
                        Garantie:<br> €'.$row['price'].'
                        </div>
                    </div>
                </div> 

                <div class="model-page-car-introduction" id="parralex-2">
                    <div class="model-page-car-introduction-image">
                    <img alt="Car Image 1" src="' .$row['carImage1'].'"/>
                    </div>
                    <div class="model-page-car-introduction-textarea">
                        <div class="model-page-car-introduction-textarea-text">
                            <h2>'.$row['model'].'</h2>
                            <h1>'.$row['carIntroductionTitle'].'</h1>
                            <p>'.$row['carIntroductionImage'].'</p>
                        </div>
                    </div>
                </div>

                <div class="model-page-car-movie debug1" id="parralex-3">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/NqeXluxyKIY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="model-page-car-movie-mp4">
                        <div class="model-page-car-movie-title debug1">
                            <h2>'.$row['modelTitle'].'</h2>
                            
                        </div>
                    </div>
                </div>

            </div>';
    }  
?>



</body>    
</html>