<?php
session_start();
if (empty($_SESSION["language"])) {
  $_SESSION["language"] = "en";
}
include "fragancias.php";