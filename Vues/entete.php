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

	<head>
		<?php

		if (isset($_SESSION['login_client'])) {
			echo "	<body>
		<nav class='navbar navbar-expand-lg navbar-light '>
			<a href='/'>
				<div class='icon'>
					<img src='logo-vidéothèque.png' alt='Videotheque' style='width: 5rem'>
				</div>
			</a>
			<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
				<span class='navbar-toggler-icon'></span>
			</button>
			<div class='collapse navbar-collapse' id='navbarSupportedContent'>
				<ul class='navbar-nav mr-auto'>
					<li class='nav-item active'>
						<ul class='dropdown'>
							<a class='btn btn-secondary' href='index.php'>Accueil <span class='sr-only'>(current)</span></a>
						</ul>
					</li>
					<li class='nav-item active'>
						<ul class='dropdown'>
							<button class='btn btn-secondary' type='button' data-toggle='dropdown'>Emprunts<span class='caret'></span></button>
							<ul class='dropdown-menu'>
							<li><a href='index.php?vue=compte&action=ajoutEmprunt'>Effectuer un emprunt</a></li>
								<li><a href='index.php?vue=compte&action=visuEmprunt'>Visualiser mes emprunts</a></li>
							</ul>
						</ul>
					</li>
				</ul>
				<ul class='nav navbar-nav ml-auto pos-avatar justify-content-end'>
					<li class='nav-item active'>
						<ul class='dropdown'>
							<button class='btn btn-secondary dropdown-toggle btn-avatar' type='button' data-toggle='dropdown'><img class='avatar' src='https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png'><span class='caret'></span></button>
							<ul class='dropdown-menu'>
								<li><a href='index.php?vue=compte&action=visualiser'>Voir mon profil</a></li>
								<li><a href='index.php?vue=compte&action=modifier'>Modifier mon profil</a></li>
								
								<li><a href='index.php?action=acceuil'>Se déconnecter</a></li>
							</ul>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		";
		} else {
			echo "	<body>
			<nav class='navbar navbar-expand-lg navbar-light '>
				<a href='/'>
					<div class='icon'>
						<img src='logo-vidéothèque.png' alt='Videotheque' style='width: 5rem'>
					</div>
				</a>
				<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
					<span class='navbar-toggler-icon'></span>
				</button>
				<div class='collapse navbar-collapse' id='navbarSupportedContent'>
					<ul class='navbar-nav mr-auto'>
					</ul>
				</div>
			</nav>
			";
		}
		?>