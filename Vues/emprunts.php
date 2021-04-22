<h3 class='form-group d-flex justify-content-center'>Vos emprunts</h3>

<body>
  <?php
  echo "<div  class='form-group d-flex justify-content-center'> La date du début d'abonnement est le  &nbsp<B>", $laDateAbonnement, "</B></div>";

  echo "<div class='form-group justify-content-center'>";
  echo '<table class="table tableau w-50">
    <thead>
      <tr>';
  echo '<th scope="col" class=""> Date Emprunt </th>';
  echo '<th scope="col" class="">Nom Emprunt </th>';
  foreach ($lesEmprunts as $unEmprunt) {
    echo '<tr>';
    echo '<td scope="col" class="" style="text-decoration: underline;">' . $unEmprunt[1] . '</td>';
    echo '<td scope="col" class="">' . $unEmprunt[0] . '</td>';
    echo '</tr>';
  }
  echo ' </tr>
         </thead>';
  ?>
</body>