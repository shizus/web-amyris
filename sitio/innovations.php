<?php
session_start();
if (empty($_SESSION["language"])) {
  $_SESSION["language"] = "en";
}
include "innovaciones.php";