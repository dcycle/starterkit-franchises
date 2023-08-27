<?php

namespace Drupal\my_custom_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the frontpage.
 */
class Frontpage extends ControllerBase {

  /**
   * Return the front page.
   */
  public function content() {
    $build = [
      '#theme' => 'frontpage',
      // https://pixelthis.gr/content/drupal-8-views-render-view-programmatically
      '#map' => [
        '#type' => 'view',
        '#name' => 'markers_map',
        '#display_id' => 'block_1',
        '#arguments' => [],
      ],
    ];
    return $build;
  }

}
