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
            '<div class="model-page-header-image">
            <img alt="img-header" src="' .$row['headerImg'].'"/>
            </div>  
            <div class="model-page-header-title">
            <h1>'.$row['modelTitle'].'</h1>
            <a class="button-header" href="'.$row['testDriveLink'].'" target="_blank">Nu proefrijden</a>
            </div>    
            </div>
            <div class="model-page-header-info-section">
            <div class="header-image-info-whitespace">
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
            </div>  
            
            <div class="model-page-interior">
            <div class="interior-title">
            <h1>Interieur van de SEAT '.$row['model'].'</h1>
            </div>
            <div class="interior-bg-image">
            <img src="' .$row['interiorImg'].'" alt="interior '.$row['model'].'">
            </div>';
    }  
?>










    




</body>    
</html>