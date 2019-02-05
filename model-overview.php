<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style-desktop-version.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css"> 
    <!--JAVASCRIPT-->
    <style rel="js/navbar.js"></style>
    <style rel="js/image-slider.js"></style>
    <script src="js/main.js"></script>
    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <title>Seat Nederland</title>
</head>
<body>
<?php
include "include-basic-files/navbar-fixed.html";
?>

<div class="model-overview-title-container">
    <div class="model-overview-title">
    <h2>KIES UW SEAT</h2>
    </div>
    <div class="header-filter">
    <a class="button-header" href="#">Filter</a>
    </div>


<div class="model-overview-productcard-container">
<?php
include "db_connection.php";

    $sql = "SELECT model, number, modelTitle, modelImg, price, pricePrivateLease FROM modellen";

    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        echo
            '<div class="model-overview-productcard animated fadeIn">
            <div class="productcard-title">
            <h4>'.$row['model'] . '</h4>
            <p>'.$row['modelTitle'] . '</p>
            </div>
            <div class="productcard-image">
            <img alt="Img-car" src="' .$row['modelImg'].'"/>
            </div>
            <div class="productcard-footer">
            <div class="productcard-footer-price">
            <p>Verkrijgbaar vanaf <span style="color: #F47a14">€'.$row['price'] . '</span> of private<br> lease \'m vanaf <span style="color: #F47a14">€'.$row['pricePrivateLease'] . '</span> pm.</p> 
            </div>
            <div class="productcard-footer-button">
                <a class="button-header" href="model-page.php?number='.$row['number'] .'">Ontdek de '.$row['model'] . '</a>
            </div>
            </div>  
            </div>';
    }  
?>
</div>
</div>
</body>    
</html>