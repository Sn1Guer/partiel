<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "partiel1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("La connexion a échouée: " . $conn->connect_error);
}

$sql = "INSERT INTO `visiteurs` ( `nom`, `prenom`, `age`)
VALUES( 'AUMONT', 'Guillaume', 22 ),
";

if ($conn->query($sql) === TRUE) {
  echo "les nouveaux enregistrements ont bien été ajoutés";
} else {
  echo "Erreur: " . $sql . "
" . $conn->error;
}

$conn->close();
?> 
