<?php

    include "db_connection.php";

    $bodyType = $_GET['bodyType'];

    $sql = "SELECT model, number, modelTitle, bodyType, modelImg, bodyType, price, pricePrivateLease, priceBijtelling, warranty, headerImg, testDriveLink, carImage1, interiorImg, carIntroductionTitle, carIntroductionImage, carImage2, carImage3, carConnectivityTitle, carConnectivityImage, carAudioTitle, carAudioImage, color1, color2, color3, color4  FROM modellen WHERE bodyType=('$bodyType')";

    $data = $conn->query($sql); 

    $date = date('Y-m-d');

    foreach ($data as $row)
    {   
      
        echo
        '<a href="model-page.php?number='.$row['number'] .'">
        <div class="model-overview-productcard animated fadeIn">
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
        </div>
        </a>';  
    }  
?>

