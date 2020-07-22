<?php 

$title="PROGRAMME | CFP-GETECH";


$style = SRC_PUBLIC_CSS."/programme.css";


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

<?php 

$content = ob_get_clean();
require_once("layout.php");

?>