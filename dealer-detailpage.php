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

        <?php
        include "db_connection.php";

        $dealerId = $_GET["dealerId"];

            $sql = "SELECT * FROM dealers WHERE dealerId='$dealerId'";;
            
            $data = $conn->query($sql);  

            foreach ($data as $row)
            {   
                echo

                '<img alt="img-header" src="' .$row['headerImage'].'"/>
                <h1>Welkom op de persoonlijke SEAT dealer pagina van:</h1>
                <h2>'.$row['name'] . '</h2>
                ';
                    
                
            }  
        ?>