<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "partiel1";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "DELETE FROM partiel WHERE id";

 $conn->exec($sql);
  echo "Enregistrement supprimé avec succés";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 

  //connexion a la base de données

  //récupération de l'id dans le lien

  //requête de suppression

  //redirection vers la page index.php
