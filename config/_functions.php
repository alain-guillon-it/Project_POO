<?php

/**
 * This function check if the "controller" as been a 
 * "actor", "film", "serie" or "realisator".
 *
 * @param string $controllerParam
 * @param string $actionParam
 * @param string $idParam
 * @return void
 */
function checkControllerByID(
  string $controllerParam,
  string $idParam,
  string $actionParam = "detail"
): void {
  
  global $_controller, $_action, $_id;

  if (is_numeric($idParam)) {
    $_controller = $controllerParam;
    $_action = $actionParam;
    $_id = $idParam;
  } else {
    $_controller = "ErrorController";
    $_action = "error";
    $_id = false;
  }
}
