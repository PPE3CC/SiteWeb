<?php
$data=array();
$erreur=array();
$data["success"]=false;
$nom=$_POST['nomClient'];
$prenom=$_POST['prenomClient'];
$email=$_POST['emailClient'];
$dateAbonnement=$_POST['dateAbonnementClient'];
$login=$_POST['login'];
$password=$_POST['password'];
$verifIdentifiant = false;
$idExistant;
// $verifIdentifiant=$maVideotheque->VerifIdentifiant($login);
// if($verifIdentifiant==0)
// {
    $hote = "localhost";
    $port = "";
    $loginBDD = "root";
    $passwd = "";
    $base = "videoppe3";
        try {
    
            $conn = new PDO("mysql:dbname=$base;host=$hote", $loginBDD, $passwd);
    if ()
    
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
            $errors["message"]="Erreur requete dans InsertClient";
        }
        else{
            $data["success"]=true;
            $data["message"]="Vous avez bien creer votre compte";
        }

        } catch (PDOException $e) {
            // die("Connection à la base de données échouée" . $e->getMessage());
            $errors["message"]="Erreur requete dans accès BDD";
        }



// }
// else{
// $errors["message"]="Identifiants deja utilise";
// $data["errors"]=$errors;
// }
if(!empty($errors)){
    $data["success"]= false;
    $data["errors"]=$errors;
}

echo json_encode($data);




