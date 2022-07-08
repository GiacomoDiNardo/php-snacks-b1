<!-- 
   ## Snack 7
    Creare un array contenente qualche alunno di un’ipotetica classe.
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->


<?php

$class = [
  [
    "name" => "Filippo",
    "lastname" => "Granucci",
    "voti" => [
      "matematica" => "7",
      "storia" => "6",
      "scienze" => "5",
      "arte" => "8"
    ]
  ],
  [
    "name" => "Marco",
    "lastname" => "Petrini",
    "voti" => [
      "matematica" => "4",
      "storia" => "9",
      "scienze" => "6",
      "arte" => "6"
    ]
  ],
  [
    "name" => "Marta",
    "lastname" => "Danesi",
    "voti" => [
      "matematica" => "5",
      "storia" => "6",
      "scienze" => "7",
      "arte" => "7"
    ]
  ],
  [
    "name" => "Luca",
    "lastname" => "Adami",
    "voti" => [
      "matematica" => "8",
      "storia" => "9",
      "scienze" => "7",
      "arte" => "7"
    ]
  ],
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    for ($i=0; $i < count($class); $i++) { 
      $alunno = $class[$i];
      // $sommaVoti = $alunno["voti"]["matematica"] + $alunno["voti"]["storia"] + $alunno["voti"]["scienze"] + $alunno["voti"]["arte"];
      $sommaVoti = array_sum($alunno["voti"]);
      $media = $sommaVoti / count($alunno["voti"]);
  ?>

    <div>
      <h2>Alunno: <?php echo $alunno["name"] . " " . $alunno["lastname"] ?></h2>
      <span>Media voti: <?php echo round($media, 1) ?></span>
    </div>

  <?php } ?>
</body>
</html>