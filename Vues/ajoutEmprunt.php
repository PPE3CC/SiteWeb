 <div class="form-group d-flex justify-content-center">
     <h3>Ajout d'un emprunt</h3>
 </div>

 <?php
    echo '<table class="table tableau w-50">
    <thead>
      <tr>';
    if (is_array($lesFilms)) {
        foreach ($lesFilms as $leFilm) {

            echo '<tr>';
            echo '<th scope="col" class="">' . $leFilm[1] . '</th>';
            echo '<th scope="col" class="" ><button type="button" class="ajoutDuFilm btn-design" 
            value=idfilm=' . $leFilm["idSupport"] . '&idclient=' . $_SESSION['login_client'] . '>
            Emprunter</button></th>';
            echo '</tr>';
        }
    }
    echo ' </tr>
         </thead>';
    ?>

 <script src="JS/ajoutEmprunt.js"></script>