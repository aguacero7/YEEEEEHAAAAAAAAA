<?php
session_start();
include('../functions.php');
vitrine_head();
intranet_navbar();
?>


<div class="container">
<div class="container mt-5 mb-5" id="mama">
  <div class="d-flex justify-content-center">
    <div class="card" style="width: 25rem;">
      <img class="card-img-top" src="../image/homer.gif" alt="Goat du site">
      <div class="card-body">
        <h5 class="card-title">UGHHH AGHJHHH</h5>
        <p class="card-text">q locura es eso</p>
        <a href="#mama" onclick="alert('WEEEE WEEEE WEE WEEEEE')" class="btn btn-primary">WYHAHA</a>
      </div>
    </div>
  </div>
</div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../image/image1.jpg" class="d-block w-100" alt="Image 1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Journée cohésion</h5>
          <p>Une superbe journée sous le soleil !</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../image/image2.jpg" class="d-block w-100" alt="Image 2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Nouveau contrat</h5>
          <p>Signature d'un contrat à 2M !!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../image/image3.jpg" class="d-block w-100" alt="Image 3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Borne de recharge</h5>
          <p>Mise à disposition de nouvelles bornes gratuites</p>
        </div>
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

<div class="row">
  <div class="col-md-6">
    <h1> Découverte de notre nouveau fournisseur de béton</h1>
    <p>
      Nous sommes fiers de vous annoncer la découverte d'un nouveau fournisseur de béton, "concrete", qui répond parfaitement à nos exigences en matière de qualité, de durabilité et de service client. Ce partenariat marque une étape importante dans notre engagement à offrir à nos clients les meilleurs produits et services possibles.

      concrete est une entreprise renommée dans le secteur du béton, connue pour ses produits innovants et son engagement envers le développement durable. Leurs produits sont fabriqués avec des matériaux de la plus haute qualité et selon des processus rigoureux, garantissant ainsi une résistance et une durabilité optimales.
    </p>
  </div>
  <div class="col-md-6">
    <h1> Equaris partenaire des JOP 2024</h1>
    <p>
      Equaris est fier d'annoncer son partenariat officiel avec les Jeux Olympiques et Paralympiques de Paris 2024. En tant que constructeur de bâtiments, Equaris est ravi de contribuer à la réussite de cet événement historique.

      Equaris est un leader dans la construction. L'entreprise est passionnée par le sport et s'engage à soutenir les athlètes et les communautés du monde entier. Ce partenariat avec les Jeux Olympiques et Paralympiques de Paris 2024 est une occasion unique de partager cette passion avec le monde entier.

      Equaris apportera son expertise et son savoir-faire pour soutenir les Jeux de plusieurs façons.
    </p>
  </div>
</div>
</div>

<script src="https://jquery.com/"></script>
<script src=" https://getbootstrap.com/docs/5.2/getting-started/introduction/"></script>
</body>


<?php
intranet_footer();

?>