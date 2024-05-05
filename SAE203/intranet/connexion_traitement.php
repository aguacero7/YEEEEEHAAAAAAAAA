<?php
session_start();
//recupère le contenu du fichier users.json dans un tableau de tableau
$users_list = json_decode(file_get_contents('../data/users.json'), true);
//variable de controle
$controle = 1;

if(isset($_POST["submit"])){
    if($_POST["identifiant"] != "" && $_POST["mdp"] != ""){
        foreach($users_list as $user){
            if($_POST["identifiant"] == $user['idrh'] && password_verify($_POST["mdp"],$user["mdp"])){
                $_SESSION["name"] = $user["name"];
                $_SESSION["surname"] = $user["surname"];
                $_SESSION["idrh"] = $user["idrh"]; //=$_POST["identifiant"]
                $_SESSION["service"] = $user["service"];
                $_SESSION["telephone"] = $user["telephone"];
                $_SESSION["mail"] = $user["mail"];
                $_SESSION["role"] = $user["role"];
                //ne pas mettre mdp dans la session

                http_response_code(301);
                //header('location:/SAE203/intranet/accueil.php'); créer la page acceuil de l'intranet ! 
                break;
                
            }
    }
}
else{
    http_response_code(301);
    header('location:/SAE203/intranet/connexion_intranet.php?error=nopost');
    $controle = 0;
     //si il n'y a rien dans le $_POST, on renvoie une erreur
    // afficher une erreur "Tout les champs ne sont pas complet ! " 
}


if ($controle == 1){ //si la session est vide ==> mauvais mdp ou IDRH
    http_response_code(301);
    header('location:/SAE203/intranet/connexion_intranet.php?error=mdp'); 
    //afficher une erreur " Identifiant ou mot de passe incorrect ! " 
    }

}
?>
