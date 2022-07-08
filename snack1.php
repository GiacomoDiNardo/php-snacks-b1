<!-- 
    ## Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
     Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
      Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
 -->


<?php 
$matchList = [
  [
    "casa" => "Milano",
    "ospiti" => "Siena",
    "puntiCasa" => "88",
    "puntiOspiti" => "75"
  ],
  [
    "casa" => "Cantù",
    "ospiti" => "Bologna",
    "puntiCasa" => "68",
    "puntiOspiti" => "79"
  ],
  [
    "casa" => "Venezia",
    "ospiti" => "Sassari",
    "puntiCasa" => "90",
    "puntiOspiti" => "83"
  ],
  [
    "casa" => "Brescia",
    "ospiti" => "Brindisi",
    "puntiCasa" => "77",
    "puntiOspiti" => "67"
  ],
  [
    "casa" => "Treviso",
    "ospiti" => "Varese",
    "puntiCasa" => "82",
    "puntiOspiti" => "81"
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
  <div class="container">

    <h1>Risultati partite</h1>

    <?php  
      for ($i=0; $i < count($matchList) ; $i++) { 
        $partitaCorrente = $matchList[$i];
    ?>

        <div>
          <span><?php echo $partitaCorrente["casa"] . " - " . $partitaCorrente["ospiti"] . " | " . $partitaCorrente["puntiCasa"] . " - " . $partitaCorrente["puntiOspiti"] ?></span>
        </div>

    <?php  } ?>
  </div>
</body>
</html>