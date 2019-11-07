<?php

$car_price_new = 30000;
$car_price_used = $car_price_new;
$depreciation = 0.02;
$santaupos = 15000;

for ($i = 0; $car_price_used >= $santaupos; $i++) {
    $car_price_used *= 0.98;
}

$car_price_used = round($car_price_used, 2);
$months = $i;
$depr_prec = round(100 - ($car_price_used / $car_price_new * 100), 2);
$h2 = "Naujos masinos kaina $car_price_new";
$h3 = "Masina galesi nusipirkti po $months menesiu, kai jos verte bus $car_price_used";
$h4 = "Masina nuevertes $depr_prec proc.";

$eur_500=intdiv($car_price_used , 500);
$car_price_used-=$eur_500*500;
$eur_200=(int)($car_price_used / 200);
$car_price_used-=$eur_200*200;
$eur_100=(int)($car_price_used / 100);
$car_price_used-=$eur_100*100;
$eur_50=(int)($car_price_used / 50);
$car_price_used-=$eur_50*50;
$eur_20=(int)($car_price_used / 20);
$car_price_used-=$eur_20*20;
$eur_10=(int)($car_price_used / 10);
$car_price_used-=$eur_10*10;
$eur_5=(int)($car_price_used / 5);
$car_price_used-=$eur_5*5;
$eur_2=(int)($car_price_used / 2);
$car_price_used-=$eur_2*2;
$eur_1=(int)($car_price_used / 1);
$car_price_used-=$eur_1*1;
$eur_05=round(($car_price_used / 0.5)-0.05,2);
$car_price_used-=$eur_05*0.5;
$eur_02=round(($car_price_used/0.2)-0.05,2);
$car_price_used-=$eur_02*0.2;
$eur_01=round(($car_price_used/0.1)-0.05,2);
$car_price_used-=$eur_01*0.1;
$eur_005=round(($car_price_used/0.05)-0.005,2);
$car_price_used-=$eur_005*0.05;
$eur_002=round(($car_price_used/0.02)-0.005,2);
$car_price_used-=$eur_002*0.02;
$eur_001=round(($car_price_used/0.01)-0.005,2);
$car_price_used-=$eur_001*0.01;

?>
<html lang="en" dir="ltr">
    <head>
        <style>
            .eur-500{
                width: 300px;
                height: 152px;
                background-image: url("https://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-500-Euro-Banknote-Front-Issued-2002-300x152.png");
            }
            .eur-200{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-200-Euro-Banknote-Front-Issued-2002-300x164.png");
            }
            .eur-100{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-100-Euro-Banknote-Front-Issued-2002-300x172.png");
            }
            .eur-50{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-50-Euro-Banknote-Front-Issued-2002-300x162.png");
            }
            .eur-20{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-20-Euro-Banknote-Front-Issued-2002-300x163.png");
            }
            .eur-10{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-10-Euro-Banknote-Front-Issued-2014-300x155.png");
            }
            .eur-5{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-5-Euro-Banknote-Front-Issued-2013-300x149.png");
            }
            .eur-2{
                width: 300px;
                height: 152px;
                background-image: url("data:image/jpeg;base64,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");
            }
            .eur-1{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-5-Euro-Banknote-Front-Issued-2013-300x149.png");
            }
            .eur-05{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-5-Euro-Banknote-Front-Issued-2013-300x149.png");
            }
            .eur-02{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-5-Euro-Banknote-Front-Issued-2013-300x149.png");
            }
            .eur-01{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-5-Euro-Banknote-Front-Issued-2013-300x149.png");
            }
            .eur-005{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-5-Euro-Banknote-Front-Issued-2013-300x149.png");
            }
            .eur-002{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-5-Euro-Banknote-Front-Issued-2013-300x149.png");
            }
            .eur-001{
                width: 300px;
                height: 152px;
                background-image: url("http://www.cash4coins.co.uk/wp-content/uploads/2012/11/European-5-Euro-Banknote-Front-Issued-2013-300x149.png");
            }

        </style>
    </head>
    <body>
        <h1>Kiek nuvertes masina?</h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h4><?php print $h4; ?></h4>
        <div>

            <?php for ($a=0; $a<$eur_500; $a++) : ?>
                <div class="eur-500"></div>
            <?php endfor; ?>

            <?php for ($b=0; $b<$eur_200; $b++) : ?>
                <div class="eur-200"></div>
            <?php endfor; ?>

            <?php for ($c=0; $c<$eur_100; $c++) : ?>
                <div class="eur-100"></div>
            <?php endfor; ?>

            <?php for ($d=0; $d<$eur_50; $d++) : ?>
                <div class="eur-50"></div>
            <?php endfor; ?>

            <?php for ($e=0; $e<$eur_20; $e++) : ?>
                <div class="eur-20"></div>
            <?php endfor; ?>

            <?php for ($f=0; $f<$eur_10; $f++) : ?>
                <div class="eur-10"></div>
            <?php endfor; ?>

            <?php for ($g=0; $g<$eur_5; $g++) : ?>
                <div class="eur-5"></div>
            <?php endfor; ?>
            <?php for ($g=0; $g<$eur_2; $g++) : ?>
                <div class="eur-2"></div>
            <?php endfor; ?>

            <?php for ($g=0; $g<$eur_1; $g++) : ?>
                <div class="eur-1"></div>
            <?php endfor; ?>
            <?php for ($g=0; $g<$eur_05; $g++) : ?>
                <div class="eur-05"></div>
            <?php endfor; ?>
            <?php for ($g=0; $g<$eur_02; $g++) : ?>
                <div class="eur-02"></div>
            <?php endfor; ?>
            <?php for ($g=0; $g<$eur_01; $g++) : ?>
                <div class="eur-01"></div>
            <?php endfor; ?>
            <?php for ($g=0; $g<$eur_005; $g++) : ?>
                <div class="eur-005"></div>
            <?php endfor; ?>
            <?php for ($g=0; $g<$eur_002; $g++) : ?>
                <div class="eur-002"></div>
            <?php endfor; ?>
            <?php for ($g=0; $g<$eur_001; $g++) : ?>
                <div class="eur-001"></div>
            <?php endfor; ?>

        </div>
    </body>
</html>