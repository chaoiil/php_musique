<?php
//connexion a la base de donnees
$hostname = 'localhost:3307';
$dbname = 'les_joies_du_festival';
$dbuser = 'root';
$dbpass = '';
$dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpass);
//structure de la table
$sql = "CREATE TABLE `Groupes`(";
$sql = "`id` int(11) NOT NULL";
$sql = "`nom` varchar(255) NOT NULL";
$sql = " `description` text NOT NULL";
$sql = "`cout` decimal(10,2) NOT NULL";
$sql = "`pays_origine` varchar(255) NOT NULL";
$sql = "`musiciens` text NOT NULL";
$sql = "`email` varchar(255) NOT NULL";
$sql = "`photo` varchar(255) NOT NULL)";
$sql = "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

// nouvelle connexion à la base de données MySQL à l’aide de PDO
try { 
  $Connection = new PDO("$hostname;dbname=$dbname","$dbuser","dbpass");
  echo "Connexion réussie";
} catch (PDO $error) {
  echo 'Échec de la connexion : ' . $error->getMessage();
}
// insertion
$my_Insert=$Connection->prepare("INSERT INTO groupes (`id`, `nom`, `description`, `cout`, `pays_origine`, `musiciens`, `email`, `photo`) VALUES(1, 'Soviet Suprem', 'Soviet Suprem est un groupe de musique humoristique français, originaire de la banlieue Est parisienne. Le groupe est composé de John Lénine (alias Toma Feterman, chanteur de La Caravane Passe)1 et de Sylvester Staline (alias R.wan, chanteur du groupe Java). Son style musical s\'inspirerait des musiques des pays de l\'Union soviétique mêlées à des influences balkaniques, militaro-punk et rap. ', '314.15', 'France', '- John Lénine\r\n- Sylvester Staline', 'soviet.suprem@wanalike.fr', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Soviet_Suprem_Live_2.JPG/440px-Soviet_Suprem_Live_2.JPG");
// execution de la requete
if ($my_Insert->execute()) {
  echo "Nouveau enregistrement créé avec succès";
} else {
  echo "Impossible de créer l'enregistrement";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create a group</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Create a group</h1>
  <form action="create.php" method="post">
    <p>
      <label for="nom">Nom: </label>
      <input type="text" name="nom" id="">
    </p>
    <p>
      <label for="description">Description: </label>
      <textarea name="description" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
      <label for="cout">Coût :</label>
      <input type="number" name="cout" id="">
    </p>
    <p>
      <label for="pays_origine"> Pays d'origine: </label>
      <input type="text" name="pays_origine" id="">
    </p>
    <p>
      <label for="musiciens">Musiciens du groupe:</label>
      <textarea name="musiciens" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
      <label for="email">Email de contact :</label>
      <input type="email" name="email" id="">
    </p>
    <p>
      <label for="photo">Photo du groupe:</label>
      <input type="url" name="photo" id="">
    </p>
    <input type="submit" value="creer">
  </form>
</body>
</html>

