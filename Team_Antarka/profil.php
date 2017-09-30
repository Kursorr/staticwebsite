<?php $auth=0 ?>
<?php include "partials/bdd.php" ?>
<?php include "partials/auth.php" ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/style-register.css">
		<link rel="stylesheet" href="style/profil.css">
		<meta charset="UTF-8">
	</head>

	<body>
	<div class="global">
	<?php include "partials/head-nav.php" ?>
		
		<div id="profil">
			<ul>
				<li>
					<a href="modifier">Modifier</a>
					<a href="delete.php">Supprimer</a>
				</li>
			</ul>
		</div>
			<div id="body">
			</div>
	<?php include "partials/footer.php" ?>
	</div>
	</body>
</html>