<h1>Liste de vos emprunts :</h1>

<body>
    <?php
    $lesEmprunts = $this->maVideotheque->getLesEmprunts($_SESSION["login_client"]);
    // var_dump($lesEmprunts);
    echo '<table class="table table-bordered w-50">
    <thead>
      <tr>';
    echo '<th scope="col" class="table-active"> Date Emprunt </th>';
    echo '<th scope="col" class="table-active">Nom Emprunt </th>';
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