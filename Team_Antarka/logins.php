<?php
session_start();
include 'partials/bdd.php';
?>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style/style-register.css">
		<link rel="stylesheet" href="style/style.css">
		<title>Team Antarka</title>
	</head>
	
<body>
	<!-- Global OPEN -->
	<div class="global">
<?php include 'partials/head-nav.php';?>

	<!-- Body OPEN -->

	<div id="body">
		<div id="titre">
			<h1>Se connecter</h1>
		</div>
		<form method="POST" action="logins.php">
			<label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" required /><br />
	        <label for="password">Mot de passe</label><input type="password" name="password" id="password" required /><br />
   		    <input type="submit" value="Se connecter" id="submit" />
		</form>
<!-- Récupération des données -->
<?php
if (isset($_POST['pseudo']) AND isset($_POST['password']))
{
	$pseudo = $bdd->quote($_POST['pseudo']);
	$password = sha1($_POST['password']);
	$select = $bdd->query("SELECT * FROM users WHERE pseudo=$pseudo AND password='$password'");
	if ($select->rowCount() > 0){
		var_dump($select->fetch());
		$_SESSION['pseudo'] = $pseudo;
		header('Location:index.php');
		die();
	}
	else
	{
		echo "Identifiants incorrects.";
	}
}
include 'partials/footer.php';?>
	</div>
	<!-- Body CLOSE -->
</div>
<!-- Global CLOSE -->
</body>
<!-- Body CLOSE -->
</html>