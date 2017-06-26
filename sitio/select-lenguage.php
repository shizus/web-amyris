<?php

session_start();
$idioma = $_GET["lang"];

if (isset($idioma)) {
  $_SESSION["language"] = $idioma;
} else {
  $_SESSION["language"]="es";
}
//var_dump($idioma);
//var_dump($_SESSION["language"]);
header("Location: " . $_SERVER['HTTP_REFERER']);
die();