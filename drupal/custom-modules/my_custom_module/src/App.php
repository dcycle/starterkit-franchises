<?php

namespace Drupal\my_custom_module;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\my_custom_module\traits\Environment;
use Drupal\my_custom_module\traits\Singleton;

/**
 * Module-wide functionality.
 */
class App {

  use StringTranslationTrait;
  use Singleton;
  use Environment;

  /**
   * Testable implementation of hook_cron().
   */
  public function hookCron() {
    // Just an example of where you'd implement testable hooks.
  }

  /**
   * Testable implementation of hook_theme().
   */
  public function hookTheme($existing = [], $type = '', $theme = '', $path = '') : array {
    return [
      'frontpage' => [
        'variables' => [
          // Map is a placeholder for the actual map, which should be added
          // as a render array. See
          // ./drupal/custom-modules/my_custom_module/src/Controller/Frontpage.php
          // for an example.
          'map' => NULL,
        ],
      ],
      'node__franchise' => [
        'base hook' => 'node',
      ],
      'node__franchise_group' => [
        'base hook' => 'node',
      ],
    ];
  }

  function hookPreprocessNode(&$variables) {
    $node = $variables['node'];


    die(print_r(get_class($variables['node'])));
  }

}
