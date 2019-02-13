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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filter.js"></script>
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
        <button class="button" id="openFilterOverview">filter</button>
    </div>

    <div id="filter-overview">
        <div class="filter-overview-title-and-close-button">
            <h2>Maak hieronder u keuze.</h2>
            <button class="button" id="hideFilterOverview">sluit</button>
        </div>
        <div class="filter-overview-filter-buttons">
            <div class="filter-overview-button-show-all">
                <button class="button" onclick="filterAll('car')">Laat alles zien</button>
            </div>
            <div class="filter-overview-button-filter">
                Carrosserievarianten
                <button class="button" onclick="filter('stadsauto')">Stadsauto</button>
                <button class="button" onclick="filter('hatchback')">Hatchback</button>
                <button class="button" onclick="filter('suv')">SUV</button>
                <button class="button" onclick="filter('mpv')">MPV</button>   
            </div>
        </div>
    </div>
  
           
    

        <div class="model-overview-productcard-container" id="filter">
        
        <?php
        include "db_connection.php";

            $sql = "SELECT * FROM modellen";
            
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
                                <a class="button" href="model-page.php?number='.$row['number'] .'">Ontdek de '.$row['model'] . '</a>
                            </div>
                        </div>  
                    </div>';
            }  
        ?>
    </div>
</div>


</body>    
</html>



