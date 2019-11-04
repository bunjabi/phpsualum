<?php

    $h2 = null;
    $grizai_velai = rand(0, 1);
    $grizai_isgeres = rand(0, 1);
    $h3_miegosi = 'nemiegosi';
    $h3 = "$h3_miegosi ant sofos";

    if ($grizai_isgeres) {
        if ($grizai_velai) {
            $h2 = 'Grizai velai ir isgeres';
            $h3_miegosi = 'miegosi;';
        }
        $h2 = 'grizai isgeres';
    } elseif ($grizai_velai) {
        $h2 = 'Grizai velai';
    } else {
        $h2 = 'Nieko nepadarei';
    }

?>
<html lang="en" dir="ltr">
<body>
    <h1> Buitine skaiciuokle </h1>
    <h2><?php print $h2; ?> </h2>
    <h3><?php print $h3; ?></h3>
</body>
</html>