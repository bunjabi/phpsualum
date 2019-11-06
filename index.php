<?php

$car_price_new = 30000;
$car_price_used = $car_price_new;
$months = 24;
$depreciation = 0.02;

for ($i = 0; $i < $months; $i++) {
    $car_price_used -= round($car_price_used * 0.02, 2);
}

$depr_prec = 100 - ($car_price_used / $car_price_new * 100);
$h2 = "Naujos masinos kaina $car_price_new";
$h3 = "po $months men, masinos verte bus: $car_price_used eur";
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