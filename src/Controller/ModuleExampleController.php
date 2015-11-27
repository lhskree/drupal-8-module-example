<?php

/**
 * @file
 * Contains \Drupal\module_example\Controller\ModuleExampleController.
 */

namespace Drupal\module_example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Routing\RouteMatchInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller routines for module_example routes.
 */
class ModuleExampleController extends ControllerBase {

  /**
   *
   */
  public function show() {
  	$output = [
  		"#type" => "markup",
  		"#theme" => "module__example",
  	];
  	return $output;
  }
}

?>