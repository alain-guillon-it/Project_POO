<?php

global $_controller, $_action, $_id;

switch($_SERVER["REQUEST_URI"]) {
  case "/":
  case "/home":
    header("Location: /?page=home");
    break;

  case "/film":
  case "/movie":
    header("Location: /?page=film");
    break;

  case "/realisator":
    header("Location: /?page=realisator");
    break;

  case "/serie";
    header("Location: /?page=serie");
    break;

  case "/actor":
    header("Location: /?page=actor");
    break;

  default:
      $_controller = "error";
      break;
}

/**
 * ======================================================================
 * Check conditions $_GET["page"]
 * ======================================================================
 * PAGES possible : film, serie, actor, realisator
 * ======================================================================
 */
if (isset($_GET["page"]) && !empty($_GET["page"])) {
  $getPage = trim(htmlspecialchars(strtolower($_GET["page"])));
  $checkPageValue = ["home", "film", "serie", "actor", "realisator", "error"];
  $_controller = in_array($getPage, $checkPageValue) ? $getPage : header("Location: /?page=error&action=error");
} 

/**
 * ======================================================================
 * Check conditions $_GET["action"]
 * ======================================================================
 * ACTIONS possible : welcome, list, detail, create
 * ======================================================================
 */
if (isset($_GET["action"]) && !empty($_GET["action"])) {
  $getAction = trim(htmlspecialchars(strtolower($_GET["action"])));
  $checkActionValue = ["welcome", "list", "detail", "error"];

  $_action = in_array($getAction, $checkActionValue) ? $getAction : header("Location: /?page=error&action=error");
}

/**
 * ======================================================================
 * Check conditions $_GET["id"]
 * ======================================================================
 * https://www.php.net/manual/en/function.is-numeric.php
 * ======================================================================
 */

if (isset($_GET["id"]) && !empty($_GET["id"]) && is_numeric($_GET["id"])) {
  $_id = trim(htmlspecialchars($_GET["id"]));
}

// CHECK RESULT
// dump($_controller);
// dump($_action);
// dump($_id);