<?php

    $bool = true;
    $str = "1";
    $int = 1;
    $flt = 1.23;
    $str_1 = "1.23";

    if ($bool === $int) {
        $li_1 = 'Identiski';
    }
    elseif ($bool == $int) {
        $li_1 = 'Lygus';
    }
    if ($str === $bool) {
        $li_2 = 'Identiski';
    }
    elseif ($str == $bool) {
        $li_2 = 'Lygus';
    }
    if ($flt === $str_1) {
        $li_3 = 'Identiski';
    }
    elseif ($flt == $str_1) {
        $li_3 = 'Lygus';
    }

?>
<html lang="en" dir="ltr">
    <body>
        <ul>
            <li><?php print $li_1; ?></li>
            <li><?php print $li_2; ?></li>
            <li><?php print $li_3; ?></li>
        </ul>
    </body>
</html>