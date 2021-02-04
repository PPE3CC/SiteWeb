    <div class="bg-transparent col-12">
        <h3>Ajout d'un emprunt</h3>
        <form action="" method="post">
            <div class="form-group d-flex justify-content-center"> <label class="col-2 text-right">Nom de l'emprunt :</label>
                <div class="col-2"> <input type='text' name='libEmprunt' required></div>
            </div>
            <div class="d-flex justify-content-center"> <input class=" btn btn-secondary" type="submit" value="Effectuer l'emprunt"></div>
        </form>
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
    echo '<table class="table table-bordered w-50">
    <thead>
      <tr>';
    if (is_array($lesFilms)) {
        foreach ($lesFilms as $leFilm) {
            echo '<tr>';
            echo '<th scope="col" class="table-active">' . $leFilm[0] . '</th>';
            echo '<th scope="col" class="table-light" id="ajoutDuFilm"><img src="check-square-regular.svg" alt="Valider lemprunt"></th>';
            echo '</tr>';
        }
    }
    echo ' </tr>
         </thead>';
    ?>