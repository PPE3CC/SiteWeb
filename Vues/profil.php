        <h3>Vos emprunts</h3>
        <?php
        $loginClient = $_SESSION['login_client'];

        if ((isset($_POST["lesEmprunts"]))) {
            $lesEmprunts = $_POST['lesEmprunts'];
        }
        echo "La date de votre abonnement est : ", $laDateAbonnement;
        echo "
            <table class='table w-50'>
                                <thead>
                                <tr>
                                <th class='head-table-genre text-white'>Titre</th>
                                <th class='head-table-genre text-white'>Realisation</th>
                                </tr>";
        foreach ($lesEmprunts as $emprunt) {
            echo "<tr><td class ='text white'> $emprunt[0]</td>";
            echo "<td class ='text white'> $emprunt[1]</td></tr>";
        }

        echo "</thead>";
        ?>