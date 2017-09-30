<?php include 'partials/bdd.php';?>
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
			<h1>Création d'un compte</h1>
		</div>
		
		<form method="POST" action="register.php">
			<label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" required /><br />
	        <label for="email">Email</label><input type="text" name="email" id="email" required /><br />
	        <label for="password">Mot de passe</label><input type="password" name="password" id="password" required /><br />
	        <label for="verif-password">Vérification du mot de passe</label><input type="password" name="verifpassword" id="verif-password" required /><br />
   		    <input type="submit" value="Envoyer" id="submit" />
		</form>
	
	
<!-- Traitement des données -->

<?php
if (isset($_POST))
{
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$email = ($_POST['email']);
	$password = sha1($_POST['password']);
	$verifpassword = sha1($_POST['verifpassword']);
	
	if (isset($pseudo) AND isset($email) AND isset($password) AND isset($verifpassword))
	{
		if ($password == $verifpassword)
			{
				$req = $bdd->prepare('INSERT INTO users (pseudo, email, password) VALUES(?, ?, ?)');
				$req->execute(array($pseudo, $email, $password));
				echo 'Ton inscription a bien été pris en compte, bienvenue sur le site !';
			}
			else
			{
				echo 'Attention, la vérification du mot de passe doit être identique à celui inscrit dans le champ mot de passe.';
			}
	}
}
?>
<?php include 'partials/footer.php';?>
	</div>
	<!-- Body CLOSE -->
	</div>
<!-- Global CLOSE -->
</body>
<!-- Body CLOSE -->
</html>