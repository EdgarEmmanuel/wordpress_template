<?php

// POUR STYLE
define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
define("SRC_PUBLIC_CSS",WEBROOT."lib");
define("SRC_PUBLIC_JS",WEBROOT."lib_js");
define("SRC_PUBLIC_IMG",WEBROOT."img");

// POUR DOSSIER controllers , views and Models.
define("ROOT",str_replace("index.php","",$_SERVER['SCRIPT_FILENAME']));
define("SRC_VIEWS",ROOT."views");
define("SRC_CONTROLLERS",ROOT."controllers");
define("SRC_MODELS",ROOT."models"); 



include_once(SRC_VIEWS."/accueil.php");

?>