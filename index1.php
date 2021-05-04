<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio 1</title>
  </head>
  <body>

    <?php

    // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

    $matches = [
      [
        'hometeam' => 'VL Pesaro',
        'guesteam' => 'Olimpia Milano',
        'homescore' => '81',
        'guestscore' => '88'
      ],
      [
        'hometeam' => 'Dinamo Sassari',
        'guesteam' => 'Reggiana',
        'homescore' => '89',
        'guestscore' => '82'
      ],
      [
        'hometeam' => 'Cremona',
        'guesteam' => 'Brescia',
        'homescore' => '89',
        'guestscore' => '94'
      ],
      [
        'hometeam' => 'Fortitudo Bologna',
        'guesteam' => 'Cantù',
        'homescore' => '75',
        'guestscore' => '68'
      ],
      [
        'hometeam' => 'Varese',
        'guesteam' => 'Trieste',
        'homescore' => '73',
        'guestscore' => '79'
      ],
      [
        'hometeam' => 'Venezia',
        'guesteam' => 'Universo treviso',
        'homescore' => '82',
        'guestscore' => '62'
      ],
    ];

    for ($i=0 ; $i < count($matches) ; $i++) {

      $match = $matches[$i];

      echo '<div>'. $match['hometeam'] . ' '. '-'. ' '.$match['guesteam']. '   '.$match['homescore']. ' '. '-'.' '.$match['guestscore'];
    }

     ?>

  </body>
</html>
