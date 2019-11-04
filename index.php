<?php

    $sunny = rand(0, 1);
    $orai = ['Debesuota', 'Sauleta'];
    if ($sunny) {
        $oras = $orai[1];
        $style = 'sauleta';
    } else {
        $oras = $orai[0];
        $style = 'debesuota';
    }

?>
<html lang="en" dir="ltr">
<head>
    <style>
        div {
            width: 300px;
            height: 300px;
            background-position: center;
        }

        .sauleta {
            background-image: url("https://i.dlpng.com/static/png/1397265-chocolate-melting-in-the-sun-melting-sun-png-300_250_preview.png");
        }

        .debesuota {
            background-image: url("https://cdn.drawception.com/images/panels/2018/1-7/wL99Mkqwh1-2.png");
        }

        body {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
    </style>
</head>
<body>
<div class="<?php print $style; ?>"></div>
<p><?php print $oras; ?></p>
</body>
</html>