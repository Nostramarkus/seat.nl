<?php

    include "db_connection.php";

    $city = $_GET['city'];

    $sql = "SELECT * FROM dealers WHERE city=('$city')";

    $data = $conn->query($sql); 

    $date = date('Y-m-d');

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
            <a class="button" href="model-page.php?number='.$row['number'] .'">Bekijk details</a>
          </div>
        </div>
      </div>
    </div>';     
    }  
?>