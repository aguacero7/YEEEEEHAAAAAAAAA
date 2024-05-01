<?php
session_start();

?>
<!DOCTYPE html>

<html>
<body>

</br>
<?php
//recupère le contenu du fichier users.json dans un tableau de tableau
$users_list = json_decode(file_get_contents('../data/users.json'), true);


if(isset($_POST["identifiant"])){

    for ($i=0; $i< count($users_list); $i++){
            if(in_array($_POST["identifiant"], $users_list[$i]) and password_verify($_POST["mdp"],$users_list[$i]["mdp"],)){

                $_SESSION["name"] = $users_list[$i]["name"];
                $_SESSION["surname"] = $users_list[$i]["surname"];
                $_SESSION["idrh"] = $users_list[$i]["idrh"]; //=$_POST["identifiant"]
                $_SESSION["service"] = $users_list[$i]["service"];
                $_SESSION["telephone"] = $users_list[$i]["telephone"];
                $_SESSION["mail"] = $users_list[$i]["mail"];
                $_SESSION["role"] = $users_list[$i]["role"];
                //ne pas mettre mdp dans la session

                http_response_code(301);
                header('accueil.php');
                break;
                
            }
    }

    if (!isset($_SESSION["idrh"])){
    http_response_code(301);
    header('connexion_traitement.php?error=mdp'); //si malgré le traitement, il n'y a rien dans la sessions, c'est que le mdp ne correspond pas ou que l'identifiant est erroné alors on renvoie une erreur
    }
}
else {
    http_response_code(301);
    header('connexion_traitement.php?error=nopost'); //si il n'y a rien dans le $_POST, on renvoie une erreur
}

?>

</body>
</html>
