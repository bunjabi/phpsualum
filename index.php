<?php

    $kates = rand(1, 3);
    $sunys = rand(1, 3);
    $katasuniai = 0;
    $pavyko = null;
    for ($i = 0; $i < $kates; $i++) {
        for ($x = 0; $x < $sunys; $x++) {
            $pavyko = rand(0, 1);
            if ($pavyko) {
                $katasuniai++;
                break;
            }
        }
    }
    $h2 = "Dalyvavo $kates kates ir $sunys sunys.";
    $h3 = "katsuniu iseiga: $katasuniai";

?>
<html lang="en" dir="ltr">
    <body>
        <h1> Katasuniu Iseiga</h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</html>