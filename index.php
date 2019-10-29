<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> PHP lydës ir <?php print date('Y-m-d', strtotime('+1 day') ) ; ?> </title>
  </head>
  <body>
      <h1><b>Inija</b>- PHP su mainm buvo ir <?php print date('H', strtotime('- 1 hour')); ?></h1>
    <p> <?php print date('Y', strtotime('+1 year'))?> ne uþ kalnø</p>
  </body>
</html>
