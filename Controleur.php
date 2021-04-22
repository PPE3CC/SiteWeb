<?php
//include du fichier GESTION pour les objets (Modeles)
include 'Modeles/gestionVideo.php';

//classe CONTROLEUR qui redirige vers les bonnes vues les bonnes informations
class Controleur
{
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------ATTRIBUTS PRIVES-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private $maVideotheque;


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------CONSTRUCTEUR------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function __construct()
	{
		$this->maVideotheque = new gestionVideo();
	}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------METHODE D'AFFICHAGE DE L'ENTETE-----------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function afficheEntete()
	{
		//appel de la vue de l'entête
		require 'Vues/entete.php';
	}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//---------------------------METHODE D'AFFICHAGE DU PIED DE PAGE------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function affichePiedPage()
	{
		//appel de la vue du pied de page
		require 'Vues/piedPage.php';
	}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//--------------------------METHODE D'AFFICHAGE DU MENU-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function afficheMenu()
	{
		//appel de la vue du menu
		require 'Vues/menu.php';
	}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//--------------------------METHODE D'AFFICHAGE DES VUES----------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function affichePage($action, $vue)
	{
		//SELON la vue demandée
		switch ($vue) {
			case 'compte':
				$this->vueCompte($action);
				break;
				// case 'film':
				// 	$this->vueFilm($action);
				// 	break;
				// case 'serie':
				// 	$this->vueSerie($action);
				// 	break;
				// case 'Videotheque':
				// 	$this->vueRessource($action);
				// 	break;
			case "accueil":
				session_destroy();
				break;
		}
	}


	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//----------------------------Mon Compte--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	private function vueCompte($action)
	{

		//SELON l'action demandée
		switch ($action) {
				//CAS visualisation de mes informations-------------------------------------------------------------------------------------------------
			case 'ajoutEmprunt':
				//ici il faut pouvoir avoir accès au information de l'internaute connecté
				$lesFilms = $this->maVideotheque->getLesNomsFilms();
				require "Vues/ajoutEmprunt.php";
				break;
			case 'visuEmprunt':
				//ici il faut pouvoir avoir accès au information de l'internaute connecté
				$laDateAbonnement = $this->maVideotheque->getLaDateAbonnement($_SESSION['login_client']);
				$lesEmprunts = $this->maVideotheque->afficheLesEmprunts($_SESSION['login_client']);
				require 'Vues/emprunts.php';
				break;
				//CAS enregistrement d'une modification sur le compte------------------------------------------------------------------------------
			case 'modifier':
				// ici il faut pouvoir modifier le mot de passe de l'utilisateur
				$ancienMdp = $this->maVideotheque->getMdp($_SESSION['login_client']);
				require 'Vues/modifProfil.php';
				break;
				//CAS ajouter un utilisateur ------------------------------------------------------------------------------
			case 'nouveauLogin':
				// ici il faut pouvoir recuperer un nouveau utilisateur

				$this->maVideotheque->ajouteUnClient($_POST['nomClient'], $_POST['prenomClient'], $_POST['emailClient'], $_POST['dateAbonnementClient'], $_POST['login'], $_POST['password'], 0);
				$nom = $_POST['nomClient'];
				$prenom = $_POST['prenomClient'];
				$email = $_POST['emailClient'];
				$dateAbonnement = $_POST['dateAbonnementClient'];
				$login = $_POST['login'];
				$password = $_POST['password'];
				$verifIdentifiant = $this->maVideotheque->VerifIdentifiant($login);

				if ($verifIdentifiant == 0) {
					$this->maVideotheque->ajouteUnClient($nom, $prenom, $email, $dateAbonnement, $login, $password);
					echo "Vous avez bien créer votre compte";
					//mail("PPE3.Carcouet@gmail.com", "Nouveau client", "Nouveau client enregistré sur votre site :\nMonsieur/Madame" + $nom + " " + $prenom +" vient de créer un compte sur votre site web. Avec l'adresse suivante : " + $email + ". En date du " + $dateAbonnement + ". Login : " + $login + ".");
					//mail($email, "Inscription en attente de validation par notre équipe", "Bonjour Monsieur/Madame " + $nom + " " + $prenom + ".\n\n
					//Nous sommes heureux de vous compter parmis nos inscrits à notre service de vidéothèque !\n 
					//Votre inscription à bien était reçu et est en cours de validation. Cependant il reste une dernière étape :\n 
					//En effet, afin de finaliser votre inscription, veuillez nous envoyer un chèque de 45€ à l'ordre suivant : VidéoStourem.\n 
					//Après réception de ce dernier nous validerons votre compte dans les 24h qui suivent la réception.\n\n 
					//Veuillez agréer, madame, monsieur, l'expression de nos sincère salutations. \n\n
					//L'équipe VidéoStouRem.");
					//A tester en mode en ligne.
				} else {
					echo "Identifiants déjà utilisé";
				}
				break;

				//CAS verifier un utilisateur ------------------------------------------------------------------------------
			case 'verifLogin':
				// ici il faut pouvoir vérifier un login un nouveau utilisateur
				//Je récupère les login et password saisi et je verifie leur existancerequire
				//pour cela je verifie dans le conteneurClient via la gestion.
				$_SESSION["login_client"] = $_POST['login'];
				$ceLogin = $_POST['login'];
				$unPassword = $_POST['password'];
				$resultat = $this->maVideotheque->verifLogin($ceLogin, $unPassword);
				//si le client existe alors j'affiche le menu et la page visuGenre.php
				if ($resultat == 1) {
					echo $this->maVideotheque->listeLesGenres();
				} else {
					if ($resultat == 2) {
						echo "</nav>
								<div>
					 				<div>Votre compte n'est pas actif.
			  							</div>
									<meta http-equiv='refresh' content='1;index.php'>";
					} else {
						// destroy la session et je repars sur l'acceuil en affichant un texte pour prévenir la personne
						//des mauvais identifiants;
						session_destroy();
						echo "</nav>
									<div class=''>
										<span class=''>Identifiants incorrects</span>
									</div>
									<meta http-equiv='refresh' content='1;index.php'>";
					}
				}
				break;

			case 'forgetmdp':
				// if (isset($_POST['mailforgetpwd']) && isset($_POST['loginforgetpwd'])) {
				$emailClient = $this->maVideotheque->getMail($_POST['loginforgetpwd']);
				// }
				require "Vues/forgetPassword.php";
			case 'acceuil':
				echo $this->maVideotheque->listeLesGenres();
		}
	}
}
