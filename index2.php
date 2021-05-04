<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio 2</title>
  </head>
  <body>

    <?php

    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"


    $name = $_GET['name'];
    $lungname = strlen($name);
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    $mailok = strpos($mail, '.') && strpos($mail, '@');
    $ageok = is_numeric($age);

    if (($lungname > 3) && $mailok && $ageok) {


        echo 'accesso riuscito';
    } else{

      echo 'accesso negato';
    }


     ?>

  </body>
</html>
