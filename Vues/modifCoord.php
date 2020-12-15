<form action="" method="post">
    <p>Ancien mot de passe : <input type='password' name='verifAncienMdp' required></p>
    <p>Nouveau mot de passe :<input type='password' name='nouveauMdp' required></p>
    <p>Vérification mot de passe : <input type='password' name='verifMdp' required></p>
    <input class=" btn btn-secondary" type="submit" value="changeMdp">
</form>


<?php
if ((isset($_POST['nouveauMdp'])) && (isset($_POST["verifMdp"]) && (isset($_POST["verifAncienMdp"])))) {
    $nouveauMdp = $_POST['nouveauMdp'];
    $verifMdp = $_POST['verifMdp'];
    $loginClient = $_SESSION['login_client'];
    $verifAncienMdp = $_POST['verifAncienMdp'];

    if ($verifAncienMdp === $ancienMdp) {
        if ($verifAncienMdp !== $nouveauMdp) {
            if ($nouveauMdp === $verifMdp) {
                $this->maVideotheque->updateUnMdp($nouveauMdp, $loginClient);
                echo "\nLe changement de mot bien a bien été effectué. \n";
                // echo " ---- ModifCoord page";
            } else {
                echo "Les nouveaux mot de passe ne concorde pas";
            }
        } else {
            echo "\nVotre mot de passe est identique à l'ancien, veuillez changer.\n";
        }
    } else {
        echo "Erreur dans l'entrée de l'ancien mot de passe";
    }
}
