<?php ob_start() ;

$title="ACCUEIL | CFP-GETECH";

$style = SRC_PUBLIC_CSS."/style.css";
?>



<!-- the navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="m-auto">

            </div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">MISSION <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">QUI SOMMES NOUS ? </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FORMATION</a>
            </li>
          </ul>
        </div>
</nav>

<!-- the carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?= SRC_PUBLIC_IMG.'/1.jpg' ?>" class="d-block" alt="..."/>
        <div class="carousel-caption d-none d-md-block">
        <p>L'éducation est l'arme la plus puissante qu'on puisse utiliser pour changer le monde</p>
        <h5>NELSON MANDELA</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= SRC_PUBLIC_IMG.'/2.jpg' ?>" class="d-block" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <p>Divisés nous sommes faibles. Unie, l’Afrique pourrait devenir, et pour de bon, une des plus grandes forces de ce monde.</p>
        <h5>KWAME NKRUMAH</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= SRC_PUBLIC_IMG.'/4.jpeg' ?>" class="d-block" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <p>L'avenir de l'Afrique dependra du capital educatif et intellectuel que nous aurons legue a nos enfants </p>
        <h5>ESprit-transe</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= SRC_PUBLIC_IMG.'/fem.jpg' ?>" class="d-block" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <p>Quand les femmes sont eduquees , elles rendent leur pays plus forts  et plus prosperes </p>
        <h5>Michelle Obama</h5>
      </div>
    </div>
  </div>
</div>



<!-- the start of the main part -->


<main>
    <!-- ==================================section-1===================================== -->

        <div class="section-1">
          <div class="row container">
            <div class="col-md-12">
              <img src="<?= SRC_PUBLIC_IMG.'/hands.jpeg' ?>" alt=""/>
              <div class="_text">
              <h1>PARTENAIRES</h1>
              <p>Pensez une fois, pensez deux fois, pensez Solidarite.</p>
              <a href="">En savoir plus</a> <br>
              <button>DEVENIR PARTENAIRE</button> <button>FAIRE UN DON</button>
            </div>
            </div>
          
          </div>
        </div>

<!-- ==============================end section-1================================= -->

<!-- ========================start section-2=================================== -->

<div class="section-2">
  <div class="row container">
    <div class="col-md-6">
      <h1>DEVENIR PARTENAIRE ?</h1>
      <button>CONTACT US</button>
      </div>
    <div class="col-md-6">
      <p>
      <i class="fa fa-phone" aria-hidden="true"></i> (+221) 77 041 93 61
      </p>
      <p>
      <i class="fa fa-envelope-o" aria-hidden="true"></i> cfp.getech@gmail.com
      </p>
    </div>
  </div>
</div>
<!-- ======================end section-3====================================== -->


<div class="section-3">
  <h1>NOUS VOULONS FAIRE DE VOUS QUI VOUS ETES REELEMENT </h1>
  <h3>TRANSFORMER TATTAGUINE AVEC VOS CAPACITES </h3>
  <div class="row container">
    <div class="col-md-6">
      <img class="img-fluid" src="<?= SRC_PUBLIC_IMG.'/school.svg' ?>" alt="">
    </div>
    <div class="col-md-6">
      <div class="__textCible">
        <p>
          <i class="fa fa-bullseye" aria-hidden="true"></i>
          Collégiens, Lycéens, étudiants
        </p>
        <p>
          <i class="fa fa-bullseye" aria-hidden="true"></i>
          Jeunes et femmes diplômés au chômage ou à la recherche d’opportunités 
        </p>
        <p>
          <i class="fa fa-bullseye" aria-hidden="true"></i>
          Collectivités locales
        </p> <br/>
        <p>
          <i class="fa fa-bullseye" aria-hidden="true"></i>
          Entreprises, écoles, hôpitaux ,  PME et PMI 
        </p>
        <p>
          <i class="fa fa-bullseye" aria-hidden="true"></i>
          Porteurs de projet et entrepreneurs
        </p>
        <p>
          <i class="fa fa-bullseye" aria-hidden="true"></i>
          Jeunes et femmes non diplômés sans activité et à la recherche d’opportunités
        </p>
      </div>
      <a href="#" >S'INSCRIRE</a>   <a>PLUS D'INFORMATIONS</a>
    </div>

  </div>
</div>

</main>


<?php

$content = ob_get_clean() ;
require_once("layout.php");


?>