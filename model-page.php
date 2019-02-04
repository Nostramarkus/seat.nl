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

    $sql = "SELECT model, number, modelTitle, modelImg, price, pricePrivateLease, headerImg, testDriveLink, carImage1, interiorImg FROM modellen WHERE number='$number'";

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
                    <div class="model-page-car-introduction-textarea debug1">
                        <h2>'.$row['model'].'</h2>
                        <h1>Generaties aan dynamiek</h1>
                        <p>We hebben de SEAT Ibiza in een nieuwe jasje gestoken. Het icoon die al 30 jaar op onze wegen is te vinden, was toe aan een welverdiende upgrade. Met die upgrade rolt de vijfde generatie Ibiza’s van de band en is hij nog ruimer, comfortabeler, slimmer en efficiënter dan ooit tevoren.
                        </p>
                    </div>
                </div>
                

             

            </div>';
    }  
?>



</body>    
</html>