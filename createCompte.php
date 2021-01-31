<?php
$data = array();
$erreur = array();
$data["success"] = false;
$nom = $_POST['nomClient'];
$prenom = $_POST['prenomClient'];
$email = $_POST['emailClient'];
$dateAbonnement = $_POST['dateAbonnementClient'];
$login = $_POST['login'];
$password = $_POST['password'];
$loginDifferent = false;

$hote = "localhost";
$port = "";
$loginBDD = "root";
$passwd = "";
$base = "videoppe3";
$conn = new PDO("mysql:dbname=$base;host=$hote", $loginBDD, $passwd);

$lesLogins = $conn->prepare("SELECT login FROM client");
$lesLogins->execute();
$lesLogins = $lesLogins->fetchAll();
foreach ($lesLogins as $leLogin) {
    if ($leLogin != $login) {
        $loginDifferent = true;
    }
}

try {
    if ($loginDifferent) {
        $requete = $conn->prepare("INSERT INTO CLIENT (nomClient, prenomClient, emailClient, dateAbonnementClient, login, pwd, actif) VALUES (?,?,?,?,?,?,?)");
        //définition de la requête SQL
        $requete->bindValue(1, $nom);
        $requete->bindValue(2, $prenom);
        $requete->bindValue(3, $email);
        $requete->bindValue(4, $dateAbonnement);
        $requete->bindValue(5, $login);
        $requete->bindValue(6, $password);
        $requete->bindValue(7, 0);

        if ($requete)
            //exécution de la requête SQL
            if (!$requete->execute()) {
                die("Erreur dans insertClient : " . $requete->errorCode());
                $errors["message"] = "Erreur requete dans InsertClient";
            } else {
                $data["success"] = true;
                $data["message"] = "Vous avez bien creer votre compte";
            }
    } else {
        $errors['message'] = 'Ce login existe déjà';
    }
} catch (PDOException $e) {
    $errors["message"] = "Erreur requete dans accès BDD";
}

if (!empty($errors)) {
    $data["success"] = false;
    $data["errors"] = $errors;
}

echo json_encode($data);
