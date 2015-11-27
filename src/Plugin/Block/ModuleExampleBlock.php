<?php
/**
 * Provides a 'Module Example' Block
 *
 * @Block(
 *   id = "module_example",
 *   admin_label = @Translation("Module Example Block"),
 * )
 */

namespace Drupal\module_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class ModuleExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $firstVar = "";
    $secondVar = "";
    $output = [
      '#type' => 'markup',
      '#theme' => 'module__example',
      '#firstVar' => $firstVar,
      '#secondVar' => $secondVar,
      '#attached' => [
        'library' => ['module_example/module_example_main']
      ]
    ];
    return $output;
  }
  
}
?>