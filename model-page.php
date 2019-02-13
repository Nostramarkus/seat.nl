<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style-desktop-version.css">
    <!--JAVASCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/animatescroll.js"></script>
    <script src="js/main.js"></script>
    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <title>Seat Nederland</title>
</head>
<body>

<div class="model-page-header-container">
<?php
include "include-basic-files/navbar-fixed.html";
include "db_connection.php";

$number = $_GET["number"];

    $sql = "SELECT * FROM modellen WHERE number='$number'";

    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        echo
            '<div class="model-page-container ">
                <div class="model-page-image">
                    <img alt="img-header" src="' .$row['headerImg'].'"/>
                </div>  
                <div class="model-page-header">
                    <div class="model-page-header-title">
                        <h1>SEAT '.$row['model'].'</h1>
                    </div>
                   
                    <div class="model-page-header-price-button-section">
                        <div class="model-page-header-price-section">
                            <div class="model-page-header-price ">
                                <h2>Vanafprijs:</h2>
                                <h3>€ '.$row['price'].'</h3>
                            </div>
                            <div class="model-page-header-price ">
                                <h2>Private Lease:</h2>
                                <h3>€ '.$row['pricePrivateLease'].'</h3>
                            </div>
                            <div class="model-page-header-price">
                                <h2>Bijtelling:</h2>
                                <h3>€ '.$row['priceBijtelling'].'</h3>
                            </div>
                            <div class="model-page-header-price ">
                                <h2>Garantie:</h2>
                                <h3>'.$row['warranty'].' jaar</h3>
                            </div>
                        </div>

                        <div class="model-price-header-button-section">
                            <div class="model-price-header-button">
                                <a class="button button-big" href="'.$row['testDriveLink'].'"target="_blank">Nu proefrijden</a>
                            </div>
                        </div>
                    </div>
                
                
                <div class="model-page-car-introduction">
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

                <div class="model-page-car-connectivity">
                <div class="model-page-car-connectivity-textarea">
                    <div class="model-page-car-connectivity-textarea-text">
                        <h2>'.$row['model'].'</h2>
                        <h1>'.$row['carConnectivityTitle'].'</h1>
                        <p>'.$row['carConnectivityImage'].'</p>
                    </div>
                </div>
                <div class="model-page-car-connectivity-image">
                    <img alt="Car Image 2" src="' .$row['carImage2'].'"/>
                </div>
            </div>

            <div class="model-page-car-audio">
            <div class="model-page-car-audio-image">
                <img alt="Car Image 1" src="' .$row['carImage3'].'"/>
            </div>
            <div class="model-page-car-audio-textarea">
                <div class="model-page-car-audio-textarea-text">
                    <h2>'.$row['model'].'</h2>
                    <h1>'.$row['carAudioTitle'].'</h1>
                    <p>'.$row['carAudioImage'].'</p>
                </div>
            </div>   
        </div>';
    }  
?>
</body>    
</html>

