<?php

  require_once __DIR__."/Movie.php";

  $movie1 = new Movie("Harry Potter", "Fantasy");
  $movie2 = new Movie("frankenstein junior", "comico");

  $movie1->attori = "Daniel Radcliffe, Emma Watson, Rupert Grint";
  $movie1->setBudget("10 mln $");


  $movie2->attori = "Gene Wilder, Marty Feldman";
  $movie2->setBudget("5 mln $");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
</head>
<body>

  <div>
    <!-- FILM 1 -->
    <h1> <?php echo $movie1->getInfo() ?></h1>
    <h2> Attori: <?php echo $movie1->attori ?> <br> Budget film: <?php echo $movie1->getBudget() ?></h2>
    <h3>biglietti venduti: <?php echo Movie::getBiglietti() ?></h3>
  </div>

  <div style="margin-top: 100px;">
    <!-- FILM 2 -->
    <h1> <?php echo $movie2->getInfo() ?></h1>
    <h2> Attori: <?php echo $movie2->attori ?> <br> Budget film: <?php echo $movie2->getBudget() ?></h2>
  </div>
  
</body>
</html>