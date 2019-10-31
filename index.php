<?php

    $distance = rand(1,5000);
    $consumption = 7.5;
    $price_l = 1.3;
    $fuel_total = round(($distance / 100 * $consumption), 2) ;
    $price_trip = round(($fuel_total * $price_l), 2);
    $li_1="Nuvažiuota distancija: $distance";
    $li_2="Sunaudota $fuel_total litrai kuro";
    $li_3="Sumokėta už kurą $price_trip pinigai";

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kelionės skaičiuoklė</title>
  </head>
  <body>
    <h1>Kelionės skaičiuoklė</h1>
    <ul>
        <li><?php print $li_1?></li>
        <li><?php print $li_2?></li>
        <li><?php print $li_3?></li>
    </ul>
  </body>
</html>