<?php

session_start();
//var_dump($_SESSION["language"]);
if (empty($_SESSION["language"])) {

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    $_SESSION["language"]=$lang;
    if ($lang!="es")
    {
     $_SESSION["language"]="es";   
    }
}
if (isset($_SESSION["language"])) {
$lang=$_SESSION["language"]; 
}

switch ($lang){
    case "fr":
        //echo "PAGE FR";
        include("language/fr.php");//include check session FR
        break;
    case "it":
        //echo "PAGE IT";
        include("language/en.php");
        break;
    case "es":
        //echo "PAGE ES";
        include("language/es.php");
        break;
    case "en":
       // echo "PAGE EN";
        include("language/en.php");
        break;        
    default:
      //  echo "PAGE ES - Setting Default";
        include("language/es.php");
        break;
}

//var_dump($lang);