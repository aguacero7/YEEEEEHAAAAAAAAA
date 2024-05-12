<?php
#########################################################################################################################################
#                                                     VITRINE                                                                           #
#########################################################################################################################################
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
                            <a class="nav-link mx-2 active" aria-current="page" href="vitrine.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="equaris.php">Qui sommes nous ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" href="histoire.php">Notre Histoire</a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link mx-2" style="color: black;">
                                <img src="../image/logo.png" height="80" alt="Logo 2" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" href="offres.php">Nos Offres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="../intranet/connexion_intranet.php">Intranet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="#">Nous contacter</a>
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

function vitrine_equaris_body(){
echo "<body>
<div class='container mt-5 mb-5 rounded pb-5 pt-5' style='background-color: #62B6CB;'>
    <div class='row'>
        <div class='col-sm-1'></div>
        <div class='col-sm-4'>
            <img src='./../image/logo.png' alt='logo'>
        </div>
        <div class='col-sm-2'></div>
        <div class='col-sm-4 mt-5 mb-5'>
            <h5>Equaris à la volition d'offrir à tous les individus des logements ou des infrastructures pour leur vie ou pour leurs projets. Depuis 1983, Equaris s'engage dans la construction, la vente et la location de logement moderne et de qualité tout en assurant des prix raisonnables et accessibles. </h5>
        </div>
        <div class='col-sm-1'></div>
    </div>
</div>
<div class='container-fluid pb-5 pt-5 pl-5' style='background-color: #BEE9E8;'>
    <div class='row'>
        <div class='col-sm-2'></div>
        <div class='col-sm-4 pt-5'>
            <h1 class='display-4 pb-3'>Pour qui ?</h1>
            <p>Equaris s'engage à offir une solution à chaque individu et à leur besoin. Que vous soyez des particuliers, des professionnels ou des collectivités, Equaris vous accompagnera dans la réalisation de vos projet.</p>
        </div>
        <div class='col-sm-5'>
            <img src='./../image/img1.png' alt='img1' width='500px'>
        </div>
    </div>
</div>
<div class='container-fluid pb-5 pt-5 pl-5'>
    <div class='row'>
        <div class='col-sm-1'></div>
        <div class='col-sm-9'>
            <h1 class='display-4 pb-3'>Quel type de logements ?</h1> 
            <span>Nous construisons,louons et vendons des logements de toutes sortes. En passant de la maison individuelle à l'école ou aux locaux d'entreprise, vous trouverez forcément votre bonheur avec Equaris</span>
        </div>
    </div>
    <div class='row mt-3 ml-3 text-center'>
        <div class='col-sm-1'></div>
        <div class='col-sm-3'>
        <div class='card' style='width:400px'>
            <img class='card-img-top' src='./../image/maison.jpg' alt='Card image'>
            <div class='card-body'>
              <h4 class='card-title'>Pour les particuliers</h4>
              <p class='card-text'>Vous êtes à la recherche d'un logement en location ou pour devenir propriétaire ? Nous avons ce qu'il vous faut.</p>
            </div>
          </div>
          </div>
        <div class='col-sm-3'>
          <div class='card' style='width:400px'>
            <img class='card-img-top' src='./../image/immeuble.jpg' alt='Card image'>
            <div class='card-body'>
              <h4 class='card-title'>Pour les entreprises</h4>
              <p class='card-text'>Vous souhaitez faire passer votre activité au niveau supérieur ? Equaris est là pour vous aider.</p>
            </div>
          </div>
          </div>
          <div class='col-sm-3'>
          <div class='card' style='width:400px'>
            <img class='card-img-top' src='./../image/maison_medicale.jpg' alt='Card image'>
            <div class='card-body'>	
              <h4 class='card-title'>Pour les collectivités</h4>
              <p class='card-text'>Vous êtes maires, préfet ou élu et vous shouaitez développer l'activité ou les services de votre territoire ? Notre entrprise est là pour vous accompagner tout le long de votre projet.</p>
            </div>
          </div>
          </div>
        <div class='col-sm-1'></div>
    </div>
</div>
<div class='container text-center'>
<a href='#' class='btn btn-primary'>Découvrir nos offres</a>
</div>
<div class='container-fluid mt-5 pt-5 pb-5' style='background-color: #1B4965;'> 
        <h3 class='pt-3 pb-5 text-center text-white'>Ils nous ont fait confiance...</h3>
<div id='demo' class='carousel slide' data-bs-ride='carousel'>

    <!-- Indicators/dots -->
    <div class='carousel-indicators'>
      <button type='button' data-bs-target='#demo' data-bs-slide-to='0' class='active'></button>
      <button type='button' data-bs-target='#demo' data-bs-slide-to='1'></button>
      <button type='button' data-bs-target='#demo' data-bs-slide-to='2'></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class='container'>
    <div class='carousel-inner'>
      <div class='carousel-item active'>
        <div class='card'>
            <div class='card-body mt-5 mb-5'>
            <div class='row'>
                <div class='col-sm-1'></div>
                <div class='col-sm-3'>
                <img class='img-circle' src='./../image/bretagne.png' alt='user' width='100px'/>
                </div>
                <div class='col-sm-5'>
                <span style='font-style: italic;'>'Une entreprise qui nous accompagne maintenant depuis des années dans l'aménagement du territoire avec un sérieux et une qualité exemplaire'</span>
                </div>
            </div>
            </div>
          </div>
      </div>
      <div class='carousel-item '>
        <div class='card'>
            <div class='card-body mt-5 mb-5'>
            <div class='row'>
                <div class='col-sm-1'></div>
                <div class='col-sm-3'>
                <img class='img-circle' src='./../image/ile et vilaine.png' alt='user' width='125px'/>
                </div>
                <div class='col-sm-5'>
                <span style='font-style: italic;'>'Nous travaillons avec Equaris depuis plus d'une décénnie maintenant et nous n'avons jamais été déçu par la qualité du travail et des infrastructures fournies'</span>
                </div>
            </div>
            </div>
          </div>
      </div>
      <div class='carousel-item'>
        <div class='card'>
            <div class='card-body mt-5 mb-5'>
            <div class='row'>
            <div class='col-sm-1'></div>
            <div class='col-sm-3'>
                <img class='img-circle' src='./../image/IUT-de-Saint-Malo-logo.png' alt='user' width='110px'/>
            </div>
            <div class='col-sm-5'>
                <span style='font-style: italic;'>'Nos locaux ont été construit par Equaris il y a 20 ans, les locaux sont toujours aussi pratiques et durables dans le temps. Une entreprise au sérieux exemplaire.'</span>
            </div>
            </div>
          </div>
          </div>
      </div>
    </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class='carousel-control-prev' type='button' data-bs-target='#demo' data-bs-slide='prev'>
      <span class='carousel-control-prev-icon'></span>
    </button>
    <button class='carousel-control-next' type='button' data-bs-target='#demo' data-bs-slide='next'>
      <span class='carousel-control-next-icon'></span>
    </button>
  </div>
</div>
</body>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>";
}


// contient les scripts pour le menu deroulant de la navbar + l\'icon du site
function vitrine_head(){
    echo '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Equaris</title>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <link rel="icon" type="image/x-icon" href="../image/icon.ico">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    		<link rel="stylesheet" href="/SAE203/vitrine/CSS/colors.css">
        </head>
    ';
}

function vitrine_footer() {
    echo '
    <footer class="bg-test text-white pb-4">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <span><img src="../image/logo.png" alt="logo" width="200px"></span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quae maxime expedita sequi maiores quibusdam.
                </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-2">
                <h5 class="text-uppercase mb-4 font-weight-bold text-grey">
                    Products
                </h5>
                <p>
                    <a href="" class="text-white" style="text-decoration: none;">SAE23</a>
                </p>
                <p>
                    <a href="" class="text-white" style="text-decoration: none;">Creativity</a>
                </p>
                <p>
                    <a href="" class="text-white" style="text-decoration: none;">Sources</a>
                </p>
                <p>
                    <a href="" class="text-white" style="text-decoration: none;">Bootsrap</a>
                </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-grey">
                    Products
                </h5>
                <p>
                    <a href="" class="text-white" style="text-decoration: none;">SAE23</a>
                </p>
                <p>
                    <a href="" class="text-white" style="text-decoration: none;">Creativity</a>
                </p>
                <p>
                    <a href="" class="text-white" style="text-decoration: none;">Sources</a>
                </p>
                <p>
                    <a href="" class="text-white" style="text-decoration: none;">Bootsrap</a>
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-grey">
                    Nous Trouver
                </h5>
                <p>
                    <i class="fas fa-home mr-3"> test</i>
                </p>
                <p>
                    <i class="fas fa-phone mr-3"> test</i>
                </p>
                <p>
                    <i class="fas fa-envelope mr-3">test</i>
                </p>
                <p>
                    <i class="fas fa-print mr-3">test</i>
                </p>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row align-items-center">
            <div class="col-md-3 col-lg-5">
                <p>
                    © All Rights Reserved
                    <a href="#" style="text-decoration: none;"><strong class="text-grey">Equaris</strong></a>
                </p>
            </div>
            <div class="col-md-4 col-lg-5">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item ">
                            <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
    ';
}

function vitrine_offres_body(){
    echo '
        <div class="p-5 text-black" style="background: url(\'../image/bg.jpg\') no-repeat center fixed; background-size: cover; height: 100vh; display: flex; justify-content: center; align-items: center;">  
            <div class="row">
                <div class="col-sm-3">
                    <div class="card mb-3" style="width:400px">
                        <img class="card-img-top" src="../image/card1.png" alt="" style="width:100%">
                        <div class="card-text" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px;">
                            TYPE DE BATIMENT: Maison<br>
                            <br>
                            MONTANT DE L\'OPÉRATION: 200 123 € HT<br>
                            <br>
                            MAÎTRE D\'OUVRAGE: Région Nouvelle Aquitaine<br>
                            <br>
                            ARCHITECTE: Clermont Ferrand<br>
                            <br>
                            LIEU: Limoges<br>
                            <br>
                            MISSION: Gros Oeuvre
                        </div>
                    </div>
                    <div class="card mb-3" style="width:400px">
                        <img class="card-img-top" src="../image/card2.png" alt="" style="width:100%">
                        <div class="card-text" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px;">
                            TYPE DE BATIMENT: Immeuble<br>
                            <br>
                            MONTANT DE L\'OPÉRATION: 2 123 567 € HT<br>
                            <br>
                            MAÎTRE D\'OUVRAGE: Société Mercure<br>
                            <br>
                            ARCHITECTE: Pierre Goasduff<br>
                            <br>
                            LIEU: Bordeaux<br>
                            <br>
                            MISSION: Second Oeuvre
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3" style="width:400px">
                        <img class="card-img-top" src="../image/card3.png" alt="" style="width:100%">
                        <div class="card-text" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px;">
                            TYPE DE BATIMENT: Maison<br>
                            <br>
                            MONTANT DE L\'OPÉRATION: 366 000 € HT<br>
                            <br>
                            MAÎTRE D\'OUVRAGE: La Poste<br>
                            <br>
                            ARCHITECTE: Mathis Brindejonc<br>
                            <br>
                            LIEU: Limoges<br>
                            <br>
                            MISSION: Gros Oeuvre
                        </div>
                    </div>
                    <div class="card mb-3" style="width:400px">
                        <img class="card-img-top" src="../image/card4.png" alt="" style="width:100%">
                        <div class="card-text" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px;">
                            TYPE DE BATIMENT: Ecole Primaire<br>
                            <br>
                            MONTANT DE L\'OPÉRATION: 1 414 124 € HT<br>
                            <br>
                            MAÎTRE D\'OUVRAGE: LIMOGES HABITAT<br>
                            <br>
                            ARCHITECTE: Florian Lacruz<br>
                            <br>
                            LIEU: Beaune-les-Mines<br>
                            <br>
                            MISSION: Gros Oeuvre
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3" style="width:400px">
                        <img class="card-img-top" src="../image/card5.png" alt="" style="width:100%">
                        <div class="card-text" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px;">
                            TYPE DE BATIMENT: Cabinet Médical<br>
                            <br>
                            MONTANT DE L\'OPÉRATION: 414 124 € HT<br>
                            <br>
                            MAÎTRE D\'OUVRAGE: Entreprise NovaBuild<br>
                            <br>
                            ARCHITECTE: Benjamin Cardaut-Vivier<br>
                            <br>
                            LIEU: Ville-sur-Mer<br>
                            <br>
                            MISSION: Gros Oeuvre
                        </div>
                    </div>
                    <div class="card mb-3" style="width:400px">
                        <img class="card-img-top" src="../image/card6.png" alt="" style="width:100%">
                        <div class="card-text" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px;">
                            TYPE DE BATIMENT: Maison de Retraite<br>
                            <br>
                            MONTANT DE L\'OPÉRATION: 1 000 000 € HT<br>
                            <br>
                            MAÎTRE D\'OUVRAGE: Société Nouvelle Horizon<br>
                            <br>
                            ARCHITECTE: Mike Hock<br>
                            <br>
                            LIEU: Saint-Malo<br>
                            <br>
                            MISSION: Gros Oeuvre
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card mb-3" style="width:400px">
                        <img class="card-img-top" src="../image/card7.png" alt="" style="width:100%">
                        <div class="card-text" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px;">
                            TYPE DE BATIMENT: Maison<br>
                            <br>
                            MONTANT DE L\'OPÉRATION: 150 000 € HT<br>
                            <br>
                            MAÎTRE D\'OUVRAGE: Bricolo Bricolage<br>
                            <br>
                            ARCHITECTE: Quentin Soichet<br>
                            <br>
                            LIEU: Rennes<br>
                            <br>
                            MISSION: Gros Oeuvre
                        </div>
                    </div>
                    <div class="card mb-3" style="width:400px">
                        <img class="card-img-top" src="../image/card8.png" alt="" style="width:100%">
                        <div class="card-text" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px;">
                            TYPE DE BATIMENT: Maison<br>
                            <br>
                            MONTANT DE L\'OPÉRATION: 170 000 € HT<br>
                            <br>
                            MAÎTRE D\'OUVRAGE: Constructions Harmonie<br>
                            <br>
                            ARCHITECTE: Baptiste Marilleau<br>
                            <br>
                            LIEU: Vannes<br>
                            <br>
                            MISSION: Gros Oeuvre
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/offres.js"></script>
    ';
}



#########################################################################################################################################
#                                                     INTRANET                                                                          #
#########################################################################################################################################

//**************************************************Pour administrer.php***************************************************************//

if(isset($_POST['action'])){
    if($_POST['action'] == 'supprimer'){
        funcsuppression($_POST['index']);
    }
    elseif($_POST['action'] == 'ajouter'){
        funcajouter();
    }
    elseif($_POST['action'] == 'changerole'){
        funcchangerole();
    }
}


function funcsuppression($index){
    $users_list = json_decode(file_get_contents('data/users.json'), true);
    unset($users_list[$index]);
    file_put_contents("data/users.json",json_encode($users_list, JSON_PRETTY_PRINT));
    http_response_code(301);
    header('location:/intranet/administrer.php');
}


function funcajouter(){
    $users_list = json_decode(file_get_contents('data/users.json'), true);
    $newuser = array(
        "name" => $_POST["name"],
        "surname" => $_POST["surname"],
        "service" => $_POST["service"],
        "telephone" => $_POST["telephone"],
        "mail" => $_POST["mail"],
        "idrh" => $_POST["idrh"],
        "mdp" => password_hash($_POST["motdepasse"], PASSWORD_DEFAULT),
        "role" => $_POST["role"]
    );
    array_push($users_list, $newuser);
    file_put_contents("data/users.json",json_encode($users_list, JSON_PRETTY_PRINT));
    http_response_code(301);
    header('location:/intranet/administrer.php');

}


function funcchangerole(){
    $users_list = json_decode(file_get_contents('data/users.json'), true);
    $users_list[$_POST['index']]["role"] = $_POST["role"];

    file_put_contents("data/users.json",json_encode($users_list, JSON_PRETTY_PRINT));
    http_response_code(301);
    header('location:/intranet/administrer.php');

}


//***********************************************************************************************************************//

function intranet_navbar(){
    echo "
<body>
<div>
"; 
//début de la navbar
echo" 
<nav class='navbar navbar-expand-sm bg-test text-white '>
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
}






function intranet_footer() {
    echo '
    <footer class="bg-test text-white pt-5 pb-4 mt-5">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <span><img src="../image/logo.png" alt="logo" width="200px"></span>
                <p>
                    <a class="buttonAction" href="/SAE203/SAE203-dev/SAE203/intranet/accueil.php" target="_blank" rel="noopener">
                        Accès au site internet 
                    </a>
                </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-2">
                <h5 class="text-uppercase mb-4 font-weight-bold text-grey">
                    Equaris
                </h5>
                <p>
                    <a class="text-white" style="text-decoration: none;">2 Rue de null part</a>
                </p>
                <p>
                    <a  class="text-white" style="text-decoration: none;">35000 Rennes</a>
                </p>
                <p>
                    <a class="text-white" style="text-decoration: none;">Tél: 02 99 78 56 34</a>
                </p>
                <p>
                    <a class="text-white" style="text-decoration: none;">N° de SIRET : 28345355884615</a>
                </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-grey">
                    Consultez également
                </h5>
                <p>
                    <a href="/SAE203/SAE203-dev/SAE203/intranet/organigramme.php" class="text-white" style="text-decoration: none;">Notre Organigramme</a>
                </p>
                <p>
                    <a href="/SAE203/SAE203-dev/SAE203/intranet/annuaire.php" class="text-white" style="text-decoration: none;">Notre annuaire</a>
                </p>
                <p>
                    <a href="" class="text-white" style="text-decoration: none;">Notre actualité</a>
                </p>
                <p>
                    <a href="" class="text-white" style="text-decoration: none;">Nos évènements</a>
                </p>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row align-items-center">
            <div class="col-md-3 col-lg-5">
                <p>
                    © All Rights Reserved
                    <a href="#" style="text-decoration: none;"><strong class="text-grey">Equaris</strong></a>
                </p>
            </div>
            <div class="col-md-4 col-lg-5">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item ">
                            <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
    ';
}
?>
