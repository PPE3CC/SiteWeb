<h3 class="d-flex justify-content-center"><u> Formulaire récupération mot de passe</u></h3>
<form action="" method="post">
    <div class="form-group d-flex justify-content-center"> <label class="col-2 text-right">Login :</label>
        <div class="col-2"> <input type='text' name='loginforgetpwd'></div>
    </div>
    <div class="form-group d-flex justify-content-center"> <label class="col-2 text-right">Adresse Mail :</label>
        <div class="col-2"> <input type='text' name='mailforgetpwd'></div>
    </div>

    <div class="d-flex justify-content-center"> <input class=" btn btn-secondary" type="submit" value="Envoyer"></div>
</form>

<?php

if (isset($_POST['mailforgetpwd']) && isset($_POST['loginforgetpwd'])) {
    $mailforgetpwd = $_POST['mailforgetpwd'];
    $loginforgetpwd = $_POST['loginforgetpwd'];
    $emailClient = $this->maVideotheque->getMail($loginforgetpwd);
    if ($mailforgetpwd === $emailClient) {
        // mail ( $mailforgetpwd , "Reinitialisation Mot de passe - Vidéothèque " , "Voici le lien qui permet de reinitialiser votre compte :");
        echo "Un mail de changement de mot de passe à été envoyer sur votre boite mail";
    } else {
        echo "<div class='form-group d-flex justify-content-center'> Une erreur est survenue. <br>Soit l'email ou le login est incorrect</div>";
    }
}
