<h1>Liste de vos emprunts :</h1>

<body>
  <?php
  $lesEmprunts = $this->maVideotheque->getLesEmprunts($_SESSION["login_client"]);
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