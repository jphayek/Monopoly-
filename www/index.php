<?php
// require_once("../models/Generic/Dice.php");
// require_once("../models/Monopoly/Game.php");
// require_once("../models/Generic/Player.php");
// require_once("../src/autoload.php");
session_start();

$controller_query = $_GET["controller"] ?? "index";
$action = $_GET["action"] ?? "home";

$controllerName = ucfirst($controller_query)."Controller";

// require("../controllers/".$controllerName.".php");

$controller = new $controllerName;

$controller->$action();