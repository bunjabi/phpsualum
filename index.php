<?php

    $bool = true;
    $str = "1";
    $int = 1;
    $flt = 1.23;
    $str_1 = "1.23";
    $equals = null;
    $li_1="Bool (true) ir Integer (1):$equals";
    $li_2="String (1) ir Boolean (1):$equals";
    $li_3="Float (1.23) ir String (1.23):$equals";

    if ($bool === $int) {
        $equals = 'Identiski';
    }
    elseif ($bool == $int) {
        $equals = 'Lygus';
    }
    if ($str === $bool) {
        $equals = 'Identiski';
    }
    elseif ($str == $bool) {
        $equals = 'Lygus';
    }
    if ($flt === $str_1) {
        $equals = 'Identiski';
    }
    elseif ($flt == $str_1) {
        $equals = 'Lygus';
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