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
    <!-- ICON -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Seat Nederland</title>
</head>
<body>
<?php
include "include-basic-files/navbar-fixed.html";
?>


   


    <div class="configurator-productcard-container">
    <div class="configurator-title">
        <h2>Stel uw ideale Seat samen</h2>
    </div>
    <?php
    include "db_connection.php";

        $sql = "SELECT * FROM modellen";
        
        $data = $conn->query($sql);  

        foreach ($data as $row)
        {   
            echo
                
                '<a href="model-page.php?number='.$row['number'] .'">
                <div class="configurator-productcard animated fadeIn">
                    <div class="configurator-productcard-title">
                        <h4>'.$row['model'] . '</h4>
                    </div>
                    <div class="configurator-productcard-image">
                        <img alt="Img-car" src="' .$row['imageConfig'].'"/>
                    </div>
                    <div class="configurator-productcard-footer">
                        <div class="configurator-productcard-footer-button">
                            <a class="button" href="configurator-version.php?number='.$row['number'] .'">Kies uitvoering</a>
                        </div>
                    </div>  
                </div>
                </a>';
        }  
        ?>
    
    </div>

</body>    
</html>