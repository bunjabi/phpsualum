<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> PHP lydës ir <?php print date('Y-m-d', strtotime('+' . rand(0,10) . 'year')); ?></title>
  </head>
  <body>
      <h1>
            <b>Inija</b> - Galbût turësiu <?php print rand(1,5); ?> vaikus!
      </h1>
      <p> D. Trumpas nebebus prezidentu:<?php print date('Y-m-d'. strtotime('+' . rand(2,10) . 'years')); ?>  </p>
     
  </body>
</html>
