<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<!-- ********************* -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php

      include 'database.php';



    ?>
    <div class="container">
      <div class="titl">
        <h1>Ospiti Hotel</h1>
      </div>
      <div class="head">
        <h2><?php echo 'id' ?></h2>
        <h2><?php echo 'prenotazione_id' ?></h2>
        <h2><?php echo 'ospite_id' ?></h2>
      </div>
      <?php foreach ($ospiti as $key => $value) {
        ?> <div class="row">

          <a href="<?php echo 'http://localhost/db_chiamata_con_php/index_2.php?identify='.$value['id'] ?>"> <h3><?php echo $value['id'] ?></h3></a>
           <h3><?php echo $value['prenotazione_id'] ?></h3>
           <h3><?php echo $value['ospite_id'] ?></h3>


        </div> <?php
      } ?>
    </div>
  </body>
</html>
