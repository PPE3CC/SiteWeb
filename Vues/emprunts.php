<h1>Liste de vos emprunts :</h1>

<body>
    <?php
    echo $this->maVideotheque->envoielesEmprunt($_SESSION["login_client"])
    ?>
</body>