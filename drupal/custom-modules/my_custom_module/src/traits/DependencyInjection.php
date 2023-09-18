<?php

namespace Drupal\my_custom_module\traits;

/**
 * Dependency injection as a trait.
 */
trait DependencyInjection {

  /**
   * Mockable wrapper around \Drupal::service('mymodule.entity_factory').
   */
  public function entityFactory() {
    return \Drupal::service('mymodule.entity_factory');
  }

  /**
   * Mockable wrapper around \Drupal::service('mymodule.map_factory').
   */
  public function mapFactory() {
    return \Drupal::service('mymodule.map_factory');
  }

}
