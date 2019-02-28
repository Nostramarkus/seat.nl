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

    $sql = "SELECT * FROM config WHERE number='$number'";

    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        echo
            '<div class="configurator-model-container">
                <div class="configurator-header-image">
                    <img data-image="white" class="active" src="' .$row['version3WhiteImg'].'" alt="Wit">
                    <img data-image="black" src="' .$row['version3BlackImg'].'" alt="Zwart">
                    <img data-image="blue" src="' .$row['version3BlueImg'].'" alt="Blauw">
                    <img data-image="orange" src="' .$row['version3OrangeImg'].'" alt="Oranje">
                </div>
                <div class="configurator-article-menu">
                    <ul class="configurator-ul">
                        <div class="configurator-p">SEAT ' .$row['model'].' </div>
                        <a href="#"><li class="configurator-li"> 1. Motor</li></a>
                        <a href="#"><li class="configurator-li">2. Exterieur</li></a>
                        <a href="#"><li class="configurator-li">3. Interieur</li></a>
                        <a href="#"><li class="configurator-li">4. Samenvatting</li></a>
                    </ul>
                </div>
                <div class="configurator-article-section">
                    <div class="configurator-change-color">
                        <h3>Gepersonaliseerde lakkleuren</h3>
                        <p>Uw auto in uw favoriete kleur. Het kleurenaanbod van Seat is ongekend groot. Op deze pagina vindt u slechts een selectie. Bekijk bij de Seat-dealer alle mogelijkheden voor een kleur naar wens.</p>
                    <div class="configurator-change-color-buttons">
                        <div>
                            <input data-image="white" type="button" id="white"  name="color" value="white" checked>
                            <label for="white"><span></span></label>
                        </div>
                        <div>
                            <input data-image="black" type="button" id="black" name="color" value="black" checked>
                            <label for="black"><span></span></label>
                        </div>
                        <div>
                            <input data-image="blue" type="button" id="blue" name="color" value="blue" checked>
                            <label for="blue"><span></span></label>
                        </div>
                        <div>
                            <input data-image="orange" type="button" id="orange" name="color" value="orange" checked>
                            <label for="orange"><span></span></label>
                        </div>
                    </div>
                    </div>
                    <div class="configurator-overview-section">
                        <h1>Uw SEAT ' .$row['model'].'</h1>
                        <div class="configurator-header-image adjustment">
                            <img data-image="white" class="active" src="' .$row['version3WhiteImg'].'" alt="Wit">
                            <img data-image="black" src="' .$row['version3BlackImg'].'" alt="Zwart">
                            <img data-image="blue" src="' .$row['version3BlueImg'].'" alt="Blauw">
                            <img data-image="orange" src="' .$row['version3OrangeImg'].'" alt="Oranje">
                        </div>
                        <div class="configurator-overview-info-section">
                            <div class="configurator-overview-price"
                            <p>Basisauto:   € ' .$row['price'].'</p>
                            <p>Meeruitvoering:   € 0</p>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
    
           
              
 
 ';
    }  
?>
</body>    
</html>

