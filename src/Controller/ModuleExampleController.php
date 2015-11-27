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
      "#firstVar" => $firstVar,
      "#secondVar" => $secondVar,
      "#attached" => [
        "library" => ['module_example/module_example_main']
      ]
  	];
  	return $output;
  }

  /**
   *
   */
  public function getJson() {
    // We could use the JSONResponse object, as well
    $response = new Response();
    $content = [
      "random" => "content",
      "nested" => [
      1 => true,
      2 => false
      ]
    ];
    // Set content, header, statusCode
    $response->setContent(json_encode($content));
    $response->headers->set("Content-type", "application/json");
    $response->setStatusCode(200);
    return $response;
  }
}

?>