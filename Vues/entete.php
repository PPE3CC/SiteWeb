<html>

<head>
	<title>
		Ma Vidéothéque
	</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="stylevideo.css" type="text/css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light ">
			<a href="/">
				<div class="icon">
					<img src="logo-vidéothèque.png" alt="Videotheque" style="width: 5rem">
				</div>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<ul class="dropdown">
							<a class="btn btn-secondary" href="index.php">Accueil <span class="sr-only">(current)</span></a>
						</ul>
					</li>
					<li class="nav-item active">
						<ul class="dropdown">
							<button class="btn btn-secondary" type="button" data-toggle="dropdown">Les Films<span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#">Voir tous les films</a></li>
							</ul>
						</ul>
					</li>
					<li class="nav-item active">
						<ul class="dropdown">
							<button class="btn btn-secondary" type="button" data-toggle="dropdown">Les Séries<span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#">Voir toutes les séries</a></li>
							</ul>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav ml-auto pos-avatar justify-content-end">
					<li class="nav-item active">
						<ul class="dropdown">
							<button class="btn btn-secondary dropdown-toggle btn-avatar" type="button" data-toggle="dropdown"><img class="avatar" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"><span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="index.php?vue=compte&action=visualiser">Voir mon profil</a></li>
								<li><a href='index.php?vue=compte&action=modifier'>Modifier mon profil</a></li>
								<li><a href='index.php?vue=compte&action=visuEmprunt'>Visualiser mes Emprunts</a></li>
								<li><a href='index.php?action=acceuil'>Se déconnecter</a></li>
							</ul>
						</ul>
					</li>
				</ul>
			</div>
		</nav>