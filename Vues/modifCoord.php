<form action="" method="post">
    <p>Ancien mot de passe : <input type='password' name='ancienMdp'></p>
    <p>Nouveau mot de passe :<input type='password' name='nouveauMdp'></p>
    <p>Vérification mot de passe : <input type='password' name='verifMdp'></p>
    <input class=" btn btn-secondary" type="submit" value="changeMdp">
</form>

<?php

if ((isset($_POST['nouveauMdp'])) && (isset($_POST["verifMdp"]))) {
    $nouveauMdp = $_POST['nouveauMdp'];
    $verifMdp = $_POST['verifMdp'];
    $loginClient = $_SESSION['login_client'];
    if ($nouveauMdp === $verifMdp) {

        $this->UpdateMotDePasseUser('client', $nouveauMdp, $loginClient);
        echo " toto";
    }
}
