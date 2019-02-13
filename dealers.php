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
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <style rel="js/navbar.js"></style>
    <style rel="js/image-slider.js"></style>
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>
    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <title>Dealers van SEAT Nederland </title>
</head>
<body>
<?php
include "include-basic-files/navbar-fixed.html";
?>
<br><br><br><br><br><br>
<h1>Vind een SEAT dealer in de buurt.</h1>

          <input type="text" id="searchDealer" placeholder="Zoek op woonplaats">
            <button onClick="searchDealer()">zoek</button>

        <div class="dealer-info-card-container" id="searchResult">
        
        <?php
        include "db_connection.php";

            $sql = "SELECT * FROM dealers";
            
            $data = $conn->query($sql);  

            foreach ($data as $row)
            {   
                echo

                '<div class="dealer-info-card animated fadeIn">
                    <div class="dealer-info-card-title">
                      <h1>'.$row['name'] . '</h1>
                    </div>
                    <div class="dealer-location-contact-section">
                      <div class="location-contact">
                        <h2>Adres</h2>
                        '.$row['streetname'] . '<br>
                        '.$row['zipcode'] . ' '.$row['city'] . '
                      </div>
                      <div class="location-contact">
                        <h2>Contact</h2>
                        0'.$row['phonenumber'] . '<br>
                        '.$row['mailadres'] . '
                      </div>
                      <div class="location-button">
                        <a class="button" href="dealer-detailpage.php?dealerId='.$row['dealerId'] .'">Bekijk details</a>
                      </div>
                    </div>
                </div>
              </div>';
                    
                
            }  
        ?>