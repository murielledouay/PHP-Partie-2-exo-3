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
  <?php
  if ($gender == 'homme'){
      echo 'C\'est un développeur !!!';
    } elseif ($gender == 'femme'){
      echo 'C\'est une développeuse !!!';
    }
    else {
      echo 'Vous avez fait une erreur dans le genre';
    }
  ?>
</body>
</html>
