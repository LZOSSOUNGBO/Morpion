<?php 
require("database.php");

if (isset($_POST["submit"])){
    $joueur1=$_POST["player1"];
    $joueur2=$_POST["player2"];
    echo $joueur1;
    echo $joueur2;
    
    header('Location: index.php');

    $req_Add_joueur = $mysql->prepare('INSERT INTO joueurs(joueur1,joueur2) VALUES(?, ?)');
            $req_Add_joueur->execute(array($joueur1, $joueur2));
}



?>