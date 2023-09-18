<?php

namespace Drupal\my_custom_module;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\my_custom_module\traits\DependencyInjection;
use Drupal\my_custom_module\traits\Environment;
use Drupal\my_custom_module\traits\Singleton;

/**
 * Module-wide functionality.
 */
class App {

  use DependencyInjection;
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
      'node__franchise__full' => [
        'base hook' => 'node',
        'variables' => [
          // Map is a placeholder for the actual map, which should be added
          // as a render array. See
          // ./drupal/custom-modules/my_custom_module/src/Controller/Frontpage.php
          // for an example.
          'map' => NULL,
        ],
      ],
      'node__franchise_group__full' => [
        'base hook' => 'node',
        'variables' => [
          // Map is a placeholder for the actual map, which should be added
          // as a render array. See
          // ./drupal/custom-modules/my_custom_module/src/Controller/Frontpage.php
          // for an example.
          'map' => NULL,
        ],
      ],
    ];
  }

  /**
   * Testable implementation of hook_preprocess_node().
   */
  public function hookPreprocessNode(&$variables) {
    $this->entityFactory()
      ->fromPreprocessNodeVariables($variables)
      ->hookPreprocessNode($variables);
  }

}
