    <?php
    include('../functions.php');
    ?>
    <?php
     echo "
    <!DOCTYPE html>
    <html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='./CSS/timeline.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'>
		<link rel='stylesheet' href='./CSS/colors.css'>
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>
    ";
    ?>


    <body>
    <?php
    echo vitrine_navbar();
    echo "<body>
    <br>
    <div class='container-fluid  timeline_color text-center '>
        <h1>L'Histoire d'Equaris</h1>
        <p>
            Découvrez comment notre entreprise a été créée et a évoluée au fil des années.
        </p>
        <div class='box-timeline'><!-- création de la timeline -->
            <div class='ligne'></div>
            <div class='rond r1' data-anim='1'><!-- on créé les ronds, en les spécifiant avec un attribut différent -->
                ⚒
            </div>
            <div class='rond r2' data-anim='2'>
                💼
            </div>
            <div class='rond r3' data-anim='3'>
                💰
            </div>
            <div class='rond r4' data-anim='4'>
                🎓
            </div>
            <div class='rond r5' data-anim='5'>
                🖊
            </div>
            <div class='rond r6' data-anim='6'>
                🤝
            </div>
            <div class='rond r7' data-anim='7'>
                🏷
            </div>
            <div class='rond r8' data-anim='8'>
                🗓
            </div>
            <div class='box b1' data-anim='1' style='background-color: #BEE9E8;'><!-- on créé les boxs, en les spécifiant avec un attribut différent -->
                <h2>Fondation</h2>
                <p>
                    Habitat35 a été fondé en 1983 dans l'objectif de répondre à une demande d'hébergement croissante en Ille et Vilaine. Nous nous sommes donnés pour missions d'offrir des logements de qualités à prix raisonnables pour tous les individus et collectivités nécessitant un besoin d'infrastructures en fonction de leurs activités.
                </p>
            </div>
            <div class='box b2' data-anim='2' style='background-color: #62B6CB;'>
                <h2>Première location</h2>
                <p>
                    En 1984, Habitat35 concrétise son projet en accueillant ses premiers locataires dans une infrastructure fraîchement construite de a à z par nos soins.
                </p>
            </div>
            <div class='box b3' data-anim='3' style='background-color: #1B4965;'>
                <h2>Habitat35 accomplit son objectif</h2>
                <p>
                    Habitat35 dépasse le million de chiffre d'affaire en 1993 et devient le bailleur social le plus important de l'Ille et Vilaine.
                </p>
            </div>
            <div class='box b4' data-anim='4' style='background-color: #CAE9FF;'>
                <h2>Habitat35 récompensé</h2>
                <p>
                    En 1995, Habitat35 reçoit la récompense 'd'entité essentielle au développement du département' par la préfecture d'Ille et Vilaine. Cela montre notre engagement et nous encourage à continuer notre activité pour répondre à un besoin toujours aussi présent. 
                </p>
            </div>
            <div class='box b5' data-anim='5' style='background-color: #5FA8D3;'>
                <h2>Habitat35 devient Equaris</h2>
                <p>
                    L'année 2000 marque un tournant dans notre histoire. En effet Habitat35 décide de changer de nom pour devenir Equaris, ce changement de nom assure une volonté de diversification de nos activités et d'expansions sur le territoire.
                </p>
            </div>
            <div class='box b6' data-anim='6' style='background-color: #BEE9E8;'>
                <h2>Equaris s'agrandit</h2>
                <p>
                    En 2011, Equaris intègre Habitat22, SeLoger2, MonHabitation56 afin d'intervenir sur l'ensemble de la Bretagne.  
                </p>
            </div>
            <div class='box b7' data-anim='7' style='background-color: #62B6CB;'>
                <h2>Diversification des activités</h2>
                <p>
                    Equaris décide de ne plus se concentrer uniquement sur la location de logement mais aussi de concevoir et de vendre ses propre logement.
                </p>
            </div>
            <div class='box b8' data-anim='8' style='background-color: #1B4965;'>
                <h2>Aujourd'hui</h2>
                <p>
                    Equaris est aujourd'hui le principal bailleur et vendeur de logements et d'infrastructures sur l'ensemble de la Bretagne. Notre activité est devenue indispensable à notre région et nous sommes fières de ce qu'est devenu Equaris et des valeurs que nous promouvons.
                </p>
            </div>
        </div>
    </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js'></script>
    <script src='JS/timelinejs.js'></script>
    </body>";
    echo vitrine_footer();
    ?>
    </body>
