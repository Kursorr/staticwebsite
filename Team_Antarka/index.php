<?php $auth=0; ?>
<html>
	<head>
		<meta charset="UTF-8" />
		<link href="style/style.css" rel="stylesheet" >
		<link href="js/owlcarousel/owl.carousel.css" rel="stylesheet">
		<title>Team Antarka</title>
	</head>

<body>
	<!-- Global OPEN -->
	<div class="global">
<?php include 'partials/auth.php';?>
<?php include 'partials/head-nav.php';?>

	<div class="carousel">
		<div id="nova">
		<img src="images/nova.png" alt="nova">
			<div class="items">
				<div class="p">J'adore jeter des bombes</div>
			</div>
		</div>
		<div id="arthas">
		<img src="images/Arthas.png" alt="nova">
			<div class="items">
				<div class="p">Waaaaaaaaah</div>
			</div>
		</div>
	</div>

	<!-- Body OPEN -->
	<div id="body">
		<div id="gauche">
			<div id="actualite">
				<h1>Actualité</h1>
			<hr>
			</div>
		</div>
		<div id="milieu">

		</div>

		<div id="droite">

		</div>
	</div>
	<!-- Body CLOSE -->
<?php include 'partials/footer.php';?>
	</div>
	<!-- Global CLOSE -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/owlcarousel/owl.carousel.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/jquery.velocity.js"></script>
</body>
</html>
