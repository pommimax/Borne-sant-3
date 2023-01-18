<?PHP
//version 09/12
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "tutorial";
$sante = $_COOKIE["sante"];

if ($_POST["Age"] == 20){
	$_POST["Age"]="De 0 a 20 ans";
}
else if ($_POST["Age"] == 44){
	$_POST["Age"]="De 21 a 44 ans";
}
else if ($_POST["Age"] == 64){
	$_POST["Age"]="De 45 a 64 ans";
}
else if ($_POST["Age"] == 69){
	$_POST["Age"]="De 65 a 69 ans";
}
else if ($_POST["Age"] == 70){
	$_POST["Age"]="70 ans et plus";
}



$sql = "INSERT INTO `etudiants` (Age, Sexe,Sante,Alimentation,ActivitePhysique,Corpulence,Sommeil,Alcool,Tabac,TQ1,Cannabis,HeroineCocaine,AutresSubstances,AutresPratiques)
VALUES( '$_POST[Age]','$_POST[Sexe]','$sante','$_POST[Alimentation]','$_POST[ActivitePhysique]','$_POST[Corpulence]','$_POST[Sommeil]','$_POST[Alcool]','$_POST[Tabac]','$_POST[TQ1]','$_POST[Cannabis]','$_POST[HeroineCocaine]','$_POST[AutresSubstances]','$_POST[AutresPratiques]')";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // définir le mode exception d'erreur PDO 

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  // utiliser la fonction exec() car aucun résultat n'est renvoyé
  $conn->exec($sql);
  echo "Nouveaux enregistrement ajoutés avec succés<br> <a href='questionnaire.php'>Retour au formulaire</a>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>

  