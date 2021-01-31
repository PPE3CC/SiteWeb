<?php
session_start();
// session_destroy();
include 'Controleur.php';

function chargerPage()
{
    $monControleur = new Controleur();
    $monControleur->afficheEntete();
    if ((isset($_POST['login'])) || (isset($_SESSION["login_client"]))) {
        if ((isset($_POST['vue'])) && (isset($_POST['action']))) {
            $monControleur->affichePage($_POST['action'], $_POST['vue']);
        } else {
            if ((isset($_GET['vue'])) && (isset($_GET['action']))) {
                $monControleur->affichePage($_GET['action'], $_GET['vue']);
            } else {
                premier_affichage();
            }
        }
    } else {

        premier_affichage();
    }
    $monControleur->affichePiedPage();
}
function premier_affichage()
{
    echo "</nav>
                <div class='container'>
                    <div class='row justify-content-center align-items-center'>
                        <table class='table w-50'>
                            <thead>
                                <td class='head-table-connexion text-white'>Je suis déjà client</td>
                                <td class='head-table-connexion text-white'>Je crée mon compte</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='td-table justify-content-center'>
                                        <form action=index.php method=POST>
                                            <input class='form-group' type='text' placeholder='Login' name='login'/><br>
                                            <input class='form-group' type='password' placeholder='Mot de passe' name='password'/><br>
                                            <input type='hidden' name='vue' value='compte'>
                                            <input type='hidden' name='action' value='verifLogin'/>
                                            <input class='btn btn-secondary mx-auto' type='submit' value='Connexion'/>
                                        </form>
                                        <a href='index.php?vue=compte&action=forgetmdp' class='text-secondary'>Mot de passe oublié ?</a>
                                    </td>
                                 
                                    <td class='justify-content-center td-table'>
                                        <form id='creationCompte' method='post' role='form'>
                                            <input class='form-group' type='text' id='nomClient' name='nomClient' placeholder='saisir votre nom'/><br>
                                            <input class='form-group' type='text' id='prenomClient' name='prenomClient' placeholder='Saisir votre prenom'/><br>
                                            <input class='form-group' type='text' id='emailClient' name='emailClient' placeholder='Saisir votre email'/><br>
                                            <input class='form-group' type='date' id='dateAbonnementClient'  name='dateAbonnementClient' placeholder='Date souhaitée d abonnement'/><br>
                                            <input class='form-group' type='text' id='login' name='login' placeholder='Saisir votre login'/><br>
                                            <input class='form-group' type='password' id='password' name='password' placeholder='Choisir un mot de passe'/><br>
											<input type=hidden name=vue value=compte>
											<input type=hidden name=action value=nouveauLogin>
                                            <input class='btn btn-secondary' type='submit' value='Enregister'/>
                                        </form>
                                    </td>
                            </tbody>
                        </table>
                    </div>
                </div>";
}

chargerPage();
