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
        <h1>Ospite selezionato</h1>
      </div>
      <div class="head">
        <h2><?php echo 'name' ?></h2>
        <h2><?php echo 'lastname' ?></h2>
        <h2><?php echo 'date_of_birth' ?></h2>


      </div>
      <div class="row">
      <?php foreach ($ospiti as $key => $value) {
        ?>
          <?php
          $query = $_GET['identify'];
           if ($query === $value['id']) {
          ?><h3><?php echo $value['name']; ?></h3>
            <h3><?php echo $value['lastname']; ?></h3>
            <h3><?php echo $value['date_of_birth'];?></h3> <?php
          } ?>


        <?php
      } ?>
      </div> 
    </div>
  </body>
</html>
