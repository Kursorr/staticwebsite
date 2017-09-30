<!-- Header OPEN -->
<div id="header">
<img alt="logo" src="images/logo.png">
<img alt="antarka" src="images/antarka.png" id="antarka">
</div>
<!-- Header CLOSE -->

<!-- Navigation OPEN -->
<nav>
<ul>
<li id="nav1"><a href="index.php">HOME<span>Online</span></a></li>
<li id="nav2"><a href="#">FORUM<span>Online</span></a></li>
<li id="nav3"><a href="#">TEAM<span>Online</span></a></li>
<li id="nav4"><a href="#">SERVICE<span>Online</span></a></li>
<li id="nav5"><a href="#">CONTACT<span>Online</span></a></li>
</ul>


<?php 
if (isset($_SESSION['pseudo'])) 
{
?>
<ul class="connect">
<li><a href="profil.php">Profil</a></li>
<li><a href="logout.php">Se déconnecter</a></li>
</ul>
<?php
}
else
{
?>
<ul class="connect">
<li><a href="logins.php">Se connecter</a></li>
<li><a href="register.php">S'enregistrer</a></li>
</ul>
<?php 
}
?>
</nav>
<!-- Navigation CLOSE -->