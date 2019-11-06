<?php
$petrol_in_tank=rand(5,30);
$tank=$petrol_in_tank;

for($diesel = 1; ($diesel / $tank) <= 0.1; $diesel++){
    $tank = $diesel+$petrol_in_tank;
    $petrol_in_tank++;
}
$h2="benzino buvo: $petrol_in_tank";
$h3="max dyzelio riba: $diesel";
?>
<html lang="en" dir="ltr">

    <body>
        <h1>Pripylei dyzelio i benz. masina?</h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</html>