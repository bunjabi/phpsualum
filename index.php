<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <style>
          .body {
            display: flex;
            flex-direction: column;
            align-items: center;
         }
          .bomba {
              height: <?php print date('1s'); ?>px;
              width: <?php print date('1s'); ?>px;
              background-image: url("https://images-na.ssl-images-amazon.com/images/I/61V2cX4JqGL.png");
              background-size: cover;
          }
          .boom-00 {
              background-image: url("https://image.businessinsider.com/5673f88bdd089539748b45e8?width=1100&format=jpeg&auto=webp");
              background-size: cover;
          }
          p{
              text-align: center;
          }
      </style>
  </head>
  <body>
    <div class="bomba boom-<?php print date('s');?>"></div>
    <p><?php print date('s') ?></p>
  </body>
</html>