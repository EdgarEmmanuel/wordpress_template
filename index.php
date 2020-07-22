<?php

// POUR STYLE
define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
define("SRC_PUBLIC_CSS",WEBROOT."lib");
define("SRC_PUBLIC_JS",WEBROOT."lib_js");
define("SRC_PUBLIC_IMG",WEBROOT."img");
define("SRC_PUBLIC_ICONS",WEBROOT."icons");
define('SRC_PUBLIC_DEP',WEBROOT."dep");

// POUR DOSSIER controllers , views and Models.
define("ROOT",str_replace("index.php","",$_SERVER['SCRIPT_FILENAME']));
define("SRC_VIEWS",ROOT."views");
define("SRC_CONTROLLERS",ROOT."controllers");
define("SRC_MODELS",ROOT."models"); 


if(isset($_GET["prog"])){
    include_once(SRC_VIEWS."/programme.php");
}else{
    include_once(SRC_VIEWS."/accueil.php");
}

?>