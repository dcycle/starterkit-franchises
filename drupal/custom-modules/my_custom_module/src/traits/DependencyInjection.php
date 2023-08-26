<?php

namespace Drupal\my_custom_module\traits;

/**
 * Dependency injection as a trait.
 */
trait DependencyInjection {

  public function myEntityFactory() {
    return \Drupal::service('mymodule.entity_factory');
  }

}
