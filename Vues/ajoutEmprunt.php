 <div class="bg-transparent col-12">
     <h3>Ajout d'un emprunt</h3>
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
            echo '<th scope="col" class="table-active">' . $leFilm[1] . '</th>';
            echo '<th scope="col" class="table-light" ><button type="button" class="ajoutDuFilm btn btn-secondary" 
            value=idfilm=' . $leFilm["idSupport"] . '&idclient=' . $_SESSION['login_client'] . '>
            Emprunter</button></th>';
            echo '</tr>';
        }
    }
    echo ' </tr>
         </thead>';
    ?>

 <script src="JS/ajoutEmprunt.js"></script>