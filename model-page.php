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
include "include-basic-files/navbar.html";
include "db_connection.php";

$number = $_GET["number"];

    $sql = "SELECT model, number, modelTitle, modelImg, price, pricePrivateLease, headerImg, testDriveLink, carImage1, interiorImg, carIntroductionTitle, carIntroductionImage FROM modellen WHERE number='$number'";

    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        echo
            '<div class="model-page-container">
                <div class="model-page-header-image">
                    <img alt="img-header" src="' .$row['headerImg'].'"/>
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
            </div>';
    }  
?>



</body>    
</html>