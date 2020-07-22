<?php ob_start();

$title="PROGRAMME | CFP-GETECH";


$style = SRC_PUBLIC_CSS."/programme.css";

$script = SRC_PUBLIC_JS."/style_page_programme.js";
?>






<!-- =====================numerique part======================= -->

<div class="section-4">
  <h1>METIERS DU NUMERIQUE</h1>
  <div class="row ">
    <div class="col-md-2">
      <img src="<?= SRC_PUBLIC_IMG.'/maint.png' ?>" alt="">
      <div class="___text">
      <p>MAINTENANCE INFORMATIQUE</p>
          <a href="https://www.cfp-getech.com/un-centre-quatre-departements/" target="_blank">VOIR PLUS</a>
      </div>
     
    </div>
    <div class="col-md-2">
    <img src="<?= SRC_PUBLIC_IMG.'/dev-web.jpg' ?>" alt="">
    <div class="___text">
      <p>DEVELOPPEMENT WEB</p>
      <a href="https://www.cfp-getech.com/un-centre-quatre-departements/" target="_blank">VOIR PLUS</a>
      </div>
      
    </div>
    <div class="col-md-2">
    <img src="<?= SRC_PUBLIC_IMG.'/comDigi.jpg' ?>" alt="">
    <div class="___text">
      <p>RESEAUX INFORMATIQUE</p>
      <a href="https://www.cfp-getech.com/un-centre-quatre-departements/" target="_blank">VOIR PLUS</a>
      </div>
     
    </div>
    <div class="col-md-2">
    <img src="<?= SRC_PUBLIC_IMG.'/design.png' ?>" alt="">
    <div class="___text">
      <p>DESIGN</p>
      <a href="https://www.cfp-getech.com/un-centre-quatre-departements/">VOIR PLUS</a>
      </div>
     
    </div>
    <div class="col-md-2">
    <img src="<?= SRC_PUBLIC_IMG.'/digital-marketing.jpg' ?>" alt="">
    <div class="___text">
      <p>MARKETING DIGITAL</p>
        <a href="https://www.cfp-getech.com/un-centre-quatre-departements/">VOIR PLUS</a>
      </div>
     
    </div>
    <div class="col-md-2">
    <img src="<?= SRC_PUBLIC_IMG.'/comunic.jpg' ?>" alt="">
      <div class="___text">
      <p>COMMUNICATION DIGITALE</p>
      <a href="https://www.cfp-getech.com/un-centre-quatre-departements/">VOIR PLUS</a>
      </div>
      
    </div>
  </div>
</div>

<!-- =====================end numerique part===================== -->





<!-- =======================start project part===================== -->

<div class="project-area">
    <div class="container">
      <div class="project-title">
      </div>

      <div class="button-group">
        <button  type="button" id="all" >All</button>
        <button  type="button" id="popular"  >NUMERIQUE</button>
        <button  type="button" id="latest"  >TERTIAIRE</button>
        <button  type="button" id="follow">GESTION</button>
        <button type="button" id="upcom">INDUSTRIE</button> 
      </div>

      <div class="row grid">

        <div class="col-lg-4 col-md-6 col-12 element-item latest">
          <div class="our-project">
            <div class="img">
              <a href="<?= SRC_PUBLIC_DEP.'/tertiaire.jpg' ?>" class="test-popup-link">
                <img src="<?= SRC_PUBLIC_DEP.'/tertiaire.jpg' ?>" alt="">
              </a>
              
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 element-item latest">
          <div class="our-project">
            <div class="img">
              <a href="<?= SRC_PUBLIC_DEP.'/first.jpg' ?>" class="test-popup-link">
                <img src="<?= SRC_PUBLIC_DEP.'/first.jpg' ?>" alt="">
              </a>
              
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 element-item popular">
          <div class="our-project">
            <div class="img">
              <a href="<?= SRC_PUBLIC_DEP.'/num.jpeg' ?>" class="test-popup-link">
                <img src="<?= SRC_PUBLIC_DEP.'/num.jpeg' ?>" alt="">
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 element-item popular">
          <div class="our-project">
            <div class="img">
              <a href="<?= SRC_PUBLIC_DEP.'/preu.jpg' ?>" class="test-popup-link">
                <img src="<?= SRC_PUBLIC_DEP.'/preu.jpg' ?>" alt="">
              </a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 col-12 element-item following">
          <div class="our-project">
            <div class="img">
              <a href="<?= SRC_PUBLIC_DEP.'/num.jpeg' ?>" class="test-popup-link">
                <img src="<?= SRC_PUBLIC_DEP.'/num.jpeg' ?>" alt=""/>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 element-item following">
          <div class="our-project">
            <div class="img">
            <a href="<?= SRC_PUBLIC_DEP.'/indus.jpg' ?>" class="test-popup-link">
              <img src="<?= SRC_PUBLIC_DEP.'/indus.jpg' ?>" alt=""/>
            </a>
            </div>
          
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 element-item upcoming">
          <div class="our-project">
            <div class="img">
              <a href="<?= SRC_PUBLIC_DEP.'/indus.jpg' ?>" class="test-popup-link">
                <img src="<?= SRC_PUBLIC_DEP.'/indus.jpg' ?>" alt=""/>
              </a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 col-12 element-item upcoming">
          <div class="our-project">
            <div class="img">
              <a href="<?= SRC_PUBLIC_DEP.'/industrie.jpg' ?>" class="test-popup-link">
                <img src="<?= SRC_PUBLIC_DEP.'/industrie.jpg' ?>" alt=""/>
              </a>
            </div>
          </div>


        </div>

       
      </div>
    </div>
</div>




<!-- =======================end project part===================== -->

<?php 

$content = ob_get_clean();
require_once("layout.php");

?>