<!--  file index.php in cui:
 - è definita una classe ‘Movie’
      => all'interno della classe sono dichiarate delle variabili d'istanza
      => all'interno della classe è definito un costruttore
      => all'interno della classe è definito almeno un metodo
   -  vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
class Movie
{
   public $title;
   public $director;
   public $date;

   function __construct($_title, $director)
   {
      $this->title = $_title;
      $this->director = $director;
   }

   function setRealeaseDate()
   {
      $date = date("d/m/Y");
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>movie php</title>
</head>

<body>
   <?php
   $movie1 = new Movie('film 1', 'Carlo Pippoz');
   $movie2 = new Movie('film2', 'ho mal di panciaaa');

   echo $movie1->title;
   echo $movie1->director;
   echo '<hr>';
   echo $movie2->title;
   echo $movie2->director;
   ?>
</body>

</html>