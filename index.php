<?php
   $h1_skola = (rand(1,100));
   $h3_1kab = (rand(101,200));
   $h3_2kab = (rand(201,300));
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Skolos Skaiciuokle</title>
  </head>
  <body>
    <h1>Skolos skaiciuokle</h1>
    <h3>Jei paėmei <?php print $h1_skola;?> jievrų</h3>
    <h3>Su dviem kabančiais grąžinsi <?php print $h3_2kab;?></h3>
    <h3>Su vienu kabančiu grąžinsi <?php print $h3_1kab;?></h3>
  </body>
</html>