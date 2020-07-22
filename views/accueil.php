<?php ob_start() ;

$title="ACCUEIL | CFP-GETECH";

$style = SRC_PUBLIC_CSS."/style.css";
?>




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
    


<!-- ======================start section-3====================================== -->
<div class="section-3">
  <h1>AIDEZ NOUS A FAIRE DE VOUS QUI VOUS ETES REELEMENT </h1>
  <h3>VOUS POUVEZ TRANSFORMER TATTAGUINE AVEC VOS CAPACITES </h3>
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
      <a href="https://www.cfp-getech.com/candidature/" target="_blank">S'INSCRIRE</a>  
       <a href="https://www.cfp-getech.com/la-cible-de-nos-programmes-de-formation/" target="_blank">PLUS D'INFORMATIONS</a>
    </div>
  </div>
</div>
<!-- ======================end section-3====================================== -->



<!-- =======================section-5========================== -->

<div class="section-5">
  <div class="row container">
    <div class="col-md-6">
      <img src="<?= SRC_PUBLIC_IMG.'/enfant.jpg' ?>" alt="">
    </div>
    <div class="col-md-6">
      <h1>POURQUOI NOUS AVONS BESOIN DE VOUS ?</h1>
    <p>
    Le numérique, aujourd’hui, est un moteur d’employabilité pour les jeunes dans un secteur en pleine expansion. Cela passe entre autre par des parcours d’accompagnement bien structurés, la consolidation des acquis et la validation des compétences. 

Notre projet à pour but la mise en place d’un centre de formation pour les populations de la localité et un centre d’incubation pour les jeunes et les femmes porteurs de projet et  contribuer ainsi au de développement de la région de Fatick.
    
    </p>
    <a href="https://www.cfp-getech.com/contexte/" target="_blank">LIRE PLUS</a>
   </div>
  </div>

</div>



<!-- =====================end section-5========================== -->


<!-- =========================start section-4========================= -->

<div class="section-4">
  <h1>NOS FORMATIONS</h1>
  <div class="row ">
    <div class="col-md-3">
      <img src="<?= SRC_PUBLIC_DEP.'/tertiaire.jpg' ?>" alt="">
      <div class="___text">
      <p>METIERS DU TERTIAIRE</p>
      </div>
    </div>
    <div class="col-md-3">
    <img src="<?= SRC_PUBLIC_IMG.'/dev-web.jpg' ?>" alt="">
    <div class="___text">
      <p>METIERS DU NUMERIQUE</p>
      </div>
    </div>
    <div class="col-md-3">
    <img src="<?= SRC_PUBLIC_DEP.'/industrie.jpg' ?>" alt="">
    <div class="___text">
      <p>METIERS DE L'INDUSTRIE</p>
      </div>
     
    </div>
    <div class="col-md-3">
    <img src="<?= SRC_PUBLIC_IMG.'/design.png' ?>" alt="">
    <div class="___text">
      <p>METIERS DE LA GESTION</p>
      </div>
    </div>
  </div>
  <a href="index.php?prog=yes">VOIR PLUS</a>
</div>

<!-- =====================end section-4 ========================= -->


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

<!-- ==================end section-2============================== -->


<!-- ==============================start section-6=================== -->
<div class="section-6">
  <h1>VOUS AVEZ UN ROLE A JOUER</h1>
  <span></span>
  <h3>ENSEMBLE NOUS POUVONS CONSTRUIRE UN TATTAGUINE <br/> FIER ET SE DEVELOPPANT AVEC SES FILS ET SES FILLES </h3>
  <h6>ENJEUX DE NOTRE PROJET</h6>
  <div class="__row container">
    <div class="__col-md-1">
      <p>
      Fournir des programmes de formation en phase avec la demande sur le marché du travail
      </p>
    </div>
    <div  class="__col-md-1">
      <p>
      Aider les membres a avoir une qualification dans les métiers du numérique
      </p>
    </div>
    <div  class="__col-md-1">
      <p>
      Aider les membres a entrer dans la vie active par l’intermédiaire des entreprises partenaires et des autorités locales
      </p>
    </div>
    <div  class="__col-md-1">
      <p>
      Nous voulons accompagner les porteurs de projet 
      </p>
    </div>
  </div>
</div>

<div class="section-6">
    <div class="__row container">
  <div  class="__col-md-1">
      <p>
      Inciter les jeunes et femmes à l’entrepreneuriat
      </p>
    </div>
    <div  class="__col-md-1">
      <p>
      Etre des partenaires pour l’appui à l’éducation
       de base des jeunes et des adultes et au développement des compétences professionnelles.
      </p>
    </div>
    <div  class="__col-md-1">
      <p>
      Assister les autorités locales dans la mise en place de programmes de formation
      </p>
    </div>
    <div  class="__col-md-1">
      <p>
      Impliquer la population dans les programmes de formation menés par les autorités locales
      </p>
    </div>
  </div>
</div>


<!-- ==============================end section-6==================== -->



<section class="section-10 container-fluid p-0">
        <div class="cover">
            <div class="content text-center">
                <h1>POURQUOI NOUS CROYONS EN CE PROJET </h1>
                <p>LES STATISTIQUES NOUS ENCOURAGENT </p>
            </div>
        </div>
        <div class="container-fluid text-center">
            <div class="numbers d-flex flex flex-md-row flex-wrap justify-content-center">
                 <div class="rect">
                        <h1>36%</h1>
                        <p>taux d'activite</p>
                 </div>
                 <div class="rect">
                     <h1>28,5%</h1>
                     <p>taux de chomage </p>
                </div>
                <div class="rect">
                     <h1>40,9%</h1>
                     <p>secteur informel</p>
                </div>
                <div class="rect">
                     <h1>67,3%</h1>
                     <p>secteur formel</p>
                </div>
            </div>
        </div>
</section>


<!-- =============================end section-10============================ -->


  <div class="section-11">
    <div class="row container">
      <div class="col-md-3">
        <p>
          <img src="<?= SRC_PUBLIC_ICONS.'/facebook.svg'?>" alt="facebook"/>
        </p>
      </div>

      <div class="col-md-3">
      <p>
        <img src="<?= SRC_PUBLIC_ICONS.'/insta.svg'?>" alt="insta"/>
      </p>
      </div>

      <div class="col-md-3">
      <p>
        <img src="<?= SRC_PUBLIC_ICONS.'/linkedin.svg'?>" alt="linkedin"/>
       </p>
      </div>

      <div class="col-md-3">
      <p>
        <img src="<?= SRC_PUBLIC_ICONS.'/twitter.svg'?>" alt="twitter"/>
        </p>
      </div>
       
       
       
      </div>
    </div>
  </div>


<!--==============================start fixed app==========================-->


<!-- end fixed app-->




</main>


<?php

$content = ob_get_clean() ;
require_once("layout.php");


?>