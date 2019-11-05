<?php

$months = 12;
$wallet = 1000;
$month_income = 700;
$month_expenses = null;

for ($i = 1; $i <= 12; $i++) {
    $month_expenses = rand(300, 700);
    $wallet += $month_income - $month_expenses;
    if ($wallet < 0) {
        $h2 = "atsargiai, $i menesi gali baigtis pinigai!";
        break;
    }
    $h2 = "po $months m., prognazuojamas likutis: $wallet";
}

?>
<html lang="en" dir="ltr">
    <body>
        <h1> Wallet forecast</h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>