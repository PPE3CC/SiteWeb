<p>
    <a class="btn btn-secondary" data-toggle="collapse" href="#collapseMdp" role="button" aria-expanded="false" aria-controls="collapseMdp">
        Changement de mot de passe
    </a>
</p>
<div class="collapse  " id="collapseMdp">
    <div class="bg-transparent col-12">
        <h3>Changer le mot de passse</h3>
        <form action="" method="post">
            <div class="form-group d-flex justify-content-center"> <label class="col-2 text-right">Ancien mot de passe :</label>
                <div class="col-2"> <input type='password' name='verifAncienMdp' required></div>
            </div>
            <div class="form-group d-flex justify-content-center"> <label class="col-2 text-right">Nouveau mot de passe :</label>
                <div class="col-2"><input type='password' name='nouveauMdp' required></div>
            </div>
            <div class="form-group row justify-content-center"> <label class="col-2 text-right">Vérification mot de passe : </label>
                <div class="col-2"><input type='password' name='verifMdp' required></div>
            </div>
            <div class="d-flex justify-content-center"> <input class=" btn btn-secondary" type="submit" value="Modifier le mot de passe"></div>
        </form>
    </div>
</div>

<p>
    <a class="btn btn-secondary" data-toggle="collapse" href="#collapseCoord" role="button" aria-expanded="false" aria-controls="collapseCoord">
        Changement de coordonnées
    </a>
</p>
<div class="collapse" id="collapseCoord">
    <div class="bg-transparent col-12">
        <h3>Changer les coordonnées</h3>
        <form action="" method="post">
            <div class="form-group d-flex justify-content-center"> <label class="col-2 text-right">Nom :</label>
                <div class="col-2"> <input type='text' name='changeNom'></div>
            </div>
            <div class="form-group d-flex justify-content-center"> <label class="col-2 text-right">Adresse mail :</label>
                <div class="col-2"><input type="email" id="email" size="30" placeholder="*****@***.com/fr" name="admail"></div>
            </div>
            <div class="d-flex justify-content-center"> <input class=" btn btn-secondary" type="submit" value="Appliquer les changements"></div>
        </form>
    </div>
</div>

<?php
$loginClient = $_SESSION['login_client'];
if ((isset($_POST['admail'])) || (isset($_POST['changeNom']))) {
    $adresseMail = $_POST['admail'];
    $changeNom = $_POST['changeNom'];
    if (isset($_POST['admail']) && empty($_POST['changeNom'])) {
        $this->maVideotheque->updateUnAdresseMail($adresseMail, $loginClient);
    }
    if (isset($_POST['changeNom']) && empty($_POST['admail'])) {
        $this->maVideotheque->updateUnNom($changeNom, $loginClient);
    }
}

if ((isset($_POST['nouveauMdp'])) && (isset($_POST["verifMdp"])) && (isset($_POST["verifAncienMdp"])) && (isset($ancienMdp))) {
    $nouveauMdp = $_POST['nouveauMdp'];
    $verifMdp = $_POST['verifMdp'];
    $verifAncienMdp = $_POST['verifAncienMdp'];
    if ($verifAncienMdp === $ancienMdp) {
        if ($verifAncienMdp !== $nouveauMdp) {
            if ($nouveauMdp === $verifMdp) {
                $this->maVideotheque->updateUnMdp($nouveauMdp, $loginClient);
                echo "\nLe changement de mot bien a bien été effectué. \n";
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
