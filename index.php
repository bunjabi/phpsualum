<?php
    $bin_vol = 40;
    $bin_heap_vol = rand(5,20);
    $trash_per_day = 15;
    $days = floor((40 + $bin_heap_vol) / 15 );
    $p_trashcan = 'Turima šiukšlinė - <?php print $bin_vol; ?> litrų';
    $p_zmona_pyks = 'Žmona nieko nesako, kol kaupas neviršija <?php print $bin_heap_vol; ?>';
    $h3_lazy_days = 'nieko nedarysiu <?php print $days; ?> dienas';
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Šiukšlių prognozė</title>
  </head>
  <body>
    <h1>Šiukšlių prognozė</h1>
    <p><?php print $p_trashcan; ?></p>
    <p><?php print $p_zmona_pyks; ?></p>
    <h3><?php print $h3_lazy_days; ?></h3>
  </body>
</html>