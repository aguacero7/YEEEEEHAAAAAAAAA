<?php 
session_start();
include('../functions.php');
vitrine_head();
intranet_navbar();
$users_list = json_decode(file_get_contents('../data/users.json'), true);
$controle = 0; 
$trouve = 0;
echo "<body>";
if(isset($_POST['recherche']) && $_POST['recherche'] != ""){
    echo"
<div class='text-center'>
    <h1> Annuaire des employés de l'entreprise </h1>
</div>";
echo "
<div class='text-center'>
<br>
<a href='annuaire.php' class='btn btn-info'> Retour </a> 
</div>";
    $varia = $_POST['recherche'] ; 
    foreach($users_list as $users){
        if(strpos($users['name'], $varia) !== false || strpos($users['surname'], $varia) !== false || strpos($users['service'], $varia) !== false ){ //recherche sur le nom, prenom ou service
            $trouve = 1;            // variable pour annoncer si personne n'a été trouvé
            if($controle == 0){
                echo"<div class=row>";
            }
                $controle +=1; 
                echo"
                <div class='col p-3 text-center'>
                    <div class='card' style='width:400px'>
                        <div class='card-body bg-info'>
                            <h4 class='card-title'>$users[name] $users[surname]</h4>
                            <p class='card-text'>
                                Service : $users[service] <br>
                                Mail : $users[mail] <br>
                                Téléphone : $users[telephone]
                            </p>
                        </div>
                    </div>
                    <br>
                </div>
                ";
            if($controle ==3){
                $controle = 0;
                echo"
                </div>
                <br>
                <br>
                ";
            }

        }
        }
        if($controle !=0){
            echo "</div>"; // on ferme la div row même si la ligne n'est pas complète
        }
        if($trouve != 1){
            echo "
            <br>
            <div class='text-center'>
            <p> Aucun employé trouvé </p>
            </div>";
        }
    }
else{
echo"
<div class='text-center'>
    <h1> Annuaire des employés de l'entreprise </h1>
</div>";
echo "
<div class='text-center'>
<br>
<form action='annuaire.php' method='POST'>
<input type='text' placeholder='Rechercher' name='recherche'>
<input type='submit' value='rechercher'>
</form> 
</div>";


foreach($users_list as $users){
    if($controle == 0){
        echo"<div class=row>";
    }
        $controle +=1; 
        echo"
        <div class='col p-3 text-center'>
            <div class='card' style='width:400px'>
                <div class='card-body bg-info'>
                    <h4 class='card-title'>$users[name] $users[surname]</h4>
                    <p class='card-text'>
                        Service : $users[service] <br>
                        Mail : $users[mail] <br>
                        Téléphone : $users[telephone]
                    </p>
                </div>
            </div>
            <br>
        </div>
        ";
    if($controle ==3){
        $controle = 0;
        echo"
        </div>
        <br>
        <br>
        ";
    }
    }
if($controle !=0){
    echo "</div>"; // on ferme la div row même si la ligne n'est pas complète
}
}
echo "</body>";
intranet_footer();
?>
