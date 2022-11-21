<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>groupe</title>
  <link rel="stylesheet" href="style.css">
</head>
</body>
</html>
<?php
// TODO : Externaliser ces variables dans un autre fichier.
// Connection à la BDD
$hostname = 'localhost:3307';
$dbname = 'les_joies_du_festival';
$dbuser = 'root';
$dbpass = '';
$dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpass);
// Lecture des articles au sein de la BDD
$sth = $dbh->prepare("SELECT * FROM groupes;");
$sth->execute();
$groupes = $sth->fetchAll();
//var_dump($groupes);
// Affichage des articles
//foreach($groupes as $groupe) {
for($i=0; $i<count($groupes); $i++) {
    $groupe = $groupes[$i];
?>
<h1> <?= $groupe['nom'] ?> </h1>;
<p> <?= $groupe['description'] ?> </p>;
<img src='<?=$groupe['photo']?>' />



 <?php
  }
