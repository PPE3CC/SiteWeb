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
                <div class='page'>
  <div class='container'>
    <div class='left'>
      <div class='login'>Login</div>
      <div class='eula'>By logging in you agree to the ridiculously long terms that you didn't bother to read</div>
    </div>
    <div class='right'>
      <svg viewBox='0 0 320 300'>
        <defs>
          <linearGradient
                          inkscape:collect='always'
                          id='linearGradient'
                          x1='13'
                          y1='193.49992'
                          x2='307'
                          y2='193.49992'
                          gradientUnits='userSpaceOnUse'>
            <stop
                  style='stop-color:#ff00ff;'
                  offset='0'
                  id='stop876' />
            <stop
                  style='stop-color:#ff0000;'
                  offset='1'
                  id='stop878' />
          </linearGradient>
        </defs>
        <path d='m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143' />
      </svg>
      <div class='form'>
        <label for='email'>Email</label>
        <input type='email' id='email'>
        <label for='password'>Password</label>
        <input type='password' id='password'>
        <input type='submit' id='submit' value='Submit'>
      </div>
    </div>
  </div>
</div>

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
