<?php
// traduction en else if de l'opérateur ternaire
$gender = 'femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 2 exo 3</title>
</head>
<body>
  <?php if ($gender != 'homme'){ ?>
    <p>C'est une développeuse !!!</p>
  <?php } else { ?>
    <p>C'est un développeur !!!</p>
  <?php } ?>
</body>
</html>
