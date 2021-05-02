<?php
$loginclient = $_GET['idclient'];
$idfilm = $_GET['idfilm'];

$hote = "localhost";
$port = "";
$loginBDD = "root";
$passwd = "";
$base = "videoppe3";
$conn = new PDO("mysql:dbname=$base;host=$hote", $loginBDD, $passwd);

$mailClient = $conn->prepare("INSERT INTO `emprunt`(`dateEmprunt`, `idClient` , `idSupport` )
 VALUES ( NOW() , (SELECT idClient FROM client WHERE client.login like :loginclient) , :idfilm)");

$mailClient->bindParam(':loginclient', $loginclient);
$mailClient->bindParam(':idfilm', $idfilm);
$mailClient->execute();
