<?php
echo "	<body>
		<nav class='navbar navbar-expand-lg color-nav-bar'>
			<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
				<span class='navbar-toggler-icon'></span>
			</button>
			<div class='row navbar-positionnement' id='navbarSupportedContent'>
				<ul class='navbar-nav'>
					<li class='nav-item active'>
						<ul class='dropdown'>
							<a class='btn-design' href='index.php?vue=compte&action=accueil'>Accueil </a>
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
						<li><a href='index.php?vue=compte&action=modifier'>Modifier mon profil</a></li>
						<li><a href='index.php?action=accueil'>Se déconnecter</a></li>
					</ul>
				</ul>
			</div>
		</nav>
		";

?>
</head>
<!-- <li><a href='index.php?vue=compte&action=visualiser'>Voir mon profil</a></li> -->