<?php

$car_price_new = 30000;
$car_price_used = $car_price_new;
$depreciation = 0.02;
$santaupos = 15000;

for ($i = 0; $car_price_used > $santaupos; $i++) {
    $car_price_used *= 0.98;
}

$car_price_used = round($car_price_used, 2);
$months = $i;
$depr_prec = round(100 - ($car_price_used / $car_price_new * 100), 2);
$h2 = "Naujos masinos kaina $car_price_new";
$h3 = "Masina galesi nusipirkti po $months menesiu, kai jos verte bus $car_price_used";
$h4 = "Masina nuevertes $depr_prec proc."

?>
<html lang="en" dir="ltr">
    <body>
        <h1>Kiek nuvertes masina?</h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h4><?php print $h4; ?></h4>
    </body>
</html>