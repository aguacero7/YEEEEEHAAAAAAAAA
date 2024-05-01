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
                            <a class="nav-link mx-2 active" aria-current="page" href="../intranet/connexion_intranet.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="vitrine.php">Intranet</a>
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
                </div>
            </div>
        </nav>
    ';
}




function vitrine_body() {
    echo '
    <div class="p-5 text-black text-center" style="background: url(\'../image/bg.jpg\') no-repeat center fixed; background-size: cover; height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="card" style="width: 70%;">
            <div class="card-body">
                <h5 class="card-title">Titre</h5>
                <p class="card-text">
        
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum integer enim neque volutpat ac tincidunt. Egestas purus viverra accumsan in nisl nisi scelerisque. Amet risus nullam eget felis eget nunc lobortis mattis. Ac feugiat sed lectus vestibulum mattis. Purus non enim praesent elementum facilisis. Neque volutpat ac tincidunt vitae semper quis. Ipsum suspendisse ultrices gravida dictum fusce ut. Suscipit adipiscing bibendum est ultricies integer quis auctor elit. Platea dictumst quisque sagittis purus sit amet volutpat consequat mauris.

                    ravida neque convallis a cras semper auctor. Egestas erat imperdiet sed euismod. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Nisi scelerisque eu ultrices vitae auctor eu augue ut lectus. Ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Faucibus in ornare quam viverra orci sagittis eu. In fermentum et sollicitudin ac orci phasellus egestas tellus. Arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales. Volutpat lacus laoreet non curabitur gravida arcu.
                </p>
                <a href="#" class="btn btn-primary">Bouton</a>
            </div>
        </div>
    </div>';
}





?>
