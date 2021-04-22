<head>
	<title>
		Ma Vidéothéque
	</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="stylevideo.css" type="text/css" />
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="JS/jquery-3.4.1.min"> </script>
	<script src="JS/bootstrap.min.js"></script>
	<script src="JS/ajaxa.js"></script>
	<script src="sass source/stylesheets/index.scss build/stylesheets/index.css"></script>

	<head>
		<?php

		if (isset($_SESSION['login_client']) || isset($_POST['login'])) {
			echo "	<body>
		<nav class='navbar navbar-expand-lg color-nav-bar'>
			<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
				<span class='navbar-toggler-icon'></span>
			</button>
			<div class='row navbar-positionnement' id='navbarSupportedContent'>
				<ul class='navbar-nav'>
					<li class='nav-item active'>
						<ul class='dropdown'>
							<a class='btn-design' href='index.php?vue=compte&action=acceuil'>Accueil </a>
						</ul>
					</li>
					<li class='nav-item active'>
						<ul class='dropdown'>
							<button class='btn-design' type='button' data-toggle='dropdown'>Emprunts</button>
							<ul class='dropdown-menu'>
								<li><a href='index.php?vue=compte&action=ajoutEmprunt'>Effectuer un emprunt</a></li>
								<li><a href='index.php?vue=compte&action=visuEmprunt'>Visualiser mes emprunts</a></li>
							</ul>
						</ul>
					</li>
				</ul>
				<ul class='dropdown test '>
					<button class='btn-design' type='button' data-toggle='dropdown'>Profil</button>
					<ul class='dropdown-menu'>
						<li><a href='index.php?vue=compte&action=visualiser'>Voir mon profil</a></li>
						<li><a href='index.php?vue=compte&action=modifier'>Modifier mon profil</a></li>
						<li><a href='index.php?action=acceuil'>Se déconnecter</a></li>
					</ul>
				</ul>
			</div>
		</nav>
		";
		} else {
			echo "	<body>

			";
		}
		?>