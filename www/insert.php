<?PHP

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "tutorial";


$sql = "INSERT INTO `etudiants` (Age,Sante,ActivitePhysique,Corpulence,Sommeil,Alcool,Tabac,Cannabis,HeroineCocaine,AutresSubstances,AutresPratiques)
VALUES( '$_POST[Age]','$_POST[Sante]','$_POST[ActivitePhysique]','$_POST[Corpulence]','$_POST[Sommeil]','$_POST[Alcool]','$_POST[Tabac]','$_POST[Cannabis]','$_POST[HeroineCocaine]','$_POST[AutresSubstances]','$_POST[AutresPratiques]')";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // définir le mode exception d'erreur PDO 

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // utiliser la fonction exec() car aucun résultat n'est renvoyé
  $conn->exec($sql);
  echo "Nouveaux enregistrement ajoutés avec sucéés<br> <a href='questionnaire.php'>Retour au formulaire</a>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>

