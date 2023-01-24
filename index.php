<?php

/**
 * ================================================================================================
 * COMPOSER
 * ================================================================================================
 */
require_once "./vendor/autoload.php";

/**
 * ================================================================================================
 * FUNCTIONS
 * ================================================================================================
 */
require_once "./config/_functions.php";

/**
 * ===============================================================================
 * VARIABLES
 * ===============================================================================
 */
$_controller = "home";
$_action = null;
$_id = null;

/**
 * ===============================================================================
 * ROUTING - CONTROLLER & ACTION
 * ===============================================================================
 */
require_once "./config/_router.php";

/**
 * ===============================================================================
 * INSTANTIATION
 * ===============================================================================
 */
$controller = "App\\" . ucfirst(strtolower($_controller)) . "Controller";
$page = new $controller;

/**
 * ===============================================================================
 * VIEW
 * ===============================================================================
 */
if ($_action !== null) {
  include_once "./public/partials/_header.php";
  include_once "./public/views/" . ucfirst(strtolower($_controller)) . "/" . ucfirst(strtolower($_action)) . "View.php";
  include_once "./public/partials/_footer.php";
} else {
  include_once "./public/partials/_header.php";
  include_once "./public/views/" . ucfirst(strtolower($_controller)) . "/" . ucfirst(strtolower($_controller)) . "View.php";
  include_once "./public/partials/_footer.php";
}
