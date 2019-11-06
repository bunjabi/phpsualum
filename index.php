<?php

$days = 365;
$pack_price = 3.95;
$count_ttl = null;
$date=date(DATE_RSS);
$time_per_cig=null;
$time_ttl= null;

for ($i=0;$i<$days;$i++){
    $week_day=date('N', strtotime('+' . $i . 'day'));
    if($week_day==7){
        $count_ttl+=rand(0,5);
    }
    elseif($week_day==6){
        $count_ttl+=rand(5,20);
    }
    else{
        $count_ttl+=rand(2,9);
    }
}

$price_ttl = ceil($count_ttl / 20)*3.95;
$h2 = "Per $days dienas, surukysiu $count_ttl cigareciu uz $price_ttl euru";


?>
<html lang="en" dir="ltr">
    <body>
        <h1>Mano dumu skaiciuokle</h1>
        <h2><?php print $h2 ?></h2>
    </body>
</html>