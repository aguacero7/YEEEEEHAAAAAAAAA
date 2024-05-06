<?php

function vitrine_navbar() {
    echo '
        <nav class="navbar navbar-expand-lg navbar-dark p-3" style="background-color: #5FA8D3;" id="headerNav"> 
            <div class="container-fluid">
                <a class="navbar-brand d-block d-lg-none" href="#">
                    <img src="../image/logo.png" height="80" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="../intranet/connexion_intranet.php">Intranet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="vitrine.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" href="exemple.php">Produits</a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link mx-2" style="color: black;">
                                <img src="../image/logo.png" height="80" alt="Logo 2" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" href="avis.php">Avis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" href="histoire.hp">Entreprise</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+33783930456">
                                <img src="../image/tel.svg" alt="Téléphone" height="24" style="margin-right: 5px;">
                                +33 07 83 93 04 56
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    ';
}

function vitrine_body() {
    echo '
    <div class="p-5 text-black" style="background: url(\'../image/bg.jpg\') no-repeat center fixed; background-size: cover; height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="margin-bottom: 20px; background-color: #CAE9FF;">
                    <div class="card-body">
                        <h5 class="card-title">Vous souhaitez faire construire ou réaliser une extension pour votre maison ?</h5>
                        <p class="card-text">
                            Pour un tel projet, il est possible de faire appel à une entreprise de construction. Mais qu\'entend-on réellement par “entreprise de construction” ? Quels sont les autres professionnels capables de construire une habitation ou de superviser de tels travaux ? À quel prix s\'attendre pour votre projet ? Nous allons tenter de vous éclairer sur ces sujets.
                        </p>
                    </div>
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../image/slide1.jpg" alt="1" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../image/slide2.jpg" alt="2" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../image/slide3.jpg" alt="3" class="d-block w-100">
                        </div>
                    </div>
                
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="margin-bottom: 20px; background-color: #CAE9FF;">
                    <div class="card-body">
                        <h5 class="card-title">Pourquoi choisir Equarris pour vos travaux de construction ?</h5>
                        <p class="card-text">
                            Si vous souhaitez faire construire ou agrandir votre maison, Equarris est la solution rassurante pour maximiser la réussite de vos travaux :
                            <ul>
                                <li>Entreprises de construction et architectes audités : nos professionnels partenaires sont reconnus pour leur expertise, appréciés par leurs anciens clients, et possèdent les assurances nécessaires à l\'exercice de leur métier.</li>
                                <li>Accompagnement à la carte : vous bénéficiez d\'un suivi personnalisé par l\'un de nos conseillers dédiés, qui peut être relayé sur le terrain par un travaux planner, dont le rôle sera notamment de vérifier l\'avancement et la qualité de vos travaux, ou un architecte, qui vous assistera à chaque étape de votre projet jusqu\'à sa livraison.</li>
                                <li>Sécurisation des transactions : vos versements sont bloqués sur un compte séquestre, et ne sont transmis à l\'entreprise de construction ou à l\'architecte qu\'une fois que la progression du chantier aura été validée.</li>
                                <li>Pénalités de retard : en cas de dépassement des délais de livraison fixés, nos entrepreneurs s\'engagent à vous reverser des pénalités.</li>
                                <li>Assistance en cas de litige : nous vous assistons en cas de conflit afin d\'aboutir à un accord à l\'amiable. Vous pouvez également, si nécessaire, avoir recours à la protection juridique AXA comprise dans toutes nos offres.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}











// contient les scripts pour le menu deroulant de la navbar + l\'icon du site
function vitrine_head(){
    echo '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Equarris</title>
            <!-- Utilisez uniquement Bootstrap 4.5.2 -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            <!-- Utilisez uniquement jQuery 3.5.1.slim.min.js pour Bootstrap 4.5.2 -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <link rel="icon" type="image/x-icon" href="../image/icon.ico">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    		<link rel="stylesheet" href="./CSS/colors.css">
        </head>
    ';
}

function vitrine_footer() {
    echo '
        <footer class="navbar navbar-expand-lg navbar-dark p-3" style="background-color: #5FA8D3;" id="footerNav">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-lg-none" href="#">
                    <img src="../image/logo.png" height="80" alt="Logo" />
                </a>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <span class="nav-link mx-2 active" aria-current="page">Equarris</span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link mx-2">Créée en 1984, Equarris est le spécialiste de l’aménagement de combles, de la rénovation, de l’extension et de l’amélioration de l’habitat en France.</span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link mx-2">© All Rights Reserved.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    ';
}

function intranet_navbar(){
    echo "
<body>
<div>
"; 
//début de la navbar
echo" 
<nav class='navbar navbar-expand-sm bg-primary'>
    <ul class='navbar-nav mr-auto'> "; //le mr-auto permet d'aligner à droite tout ce qui ne possède pas mr-auto (donc la deconnexion ci-dessous)
  echo "
        <li class='nav-item'>
            <a class='nav-link text-dark' href='accueil.php'>Accueil</a>
         </li>
         <li class='nav-item'>
            <a class='nav-link text-dark' href='organigramme.php'>Organigramme</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link text-dark' href='annuaire.php'>Annuaire</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link text-dark' href='espace.php'>Mon espace</a>
        </li>
    </ul>
    <ul class='navbar-nav'>
        <li>
            <form action='deconnexion_intranet.php' method='POST'>
                <input type='submit' class='btn btn-dark' value='Se déconnecter'>
            </form>
        </li>
    </ul>
</nav>";
}

function body_annuaire(){
    echo"
<div class='text-center'>
    <h1> Annuaire des employés de l'entreprise </h1>
</div>";

$users_list = json_decode(file_get_contents('../data/users.json'), true);
$controle = 0; 
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






?>
