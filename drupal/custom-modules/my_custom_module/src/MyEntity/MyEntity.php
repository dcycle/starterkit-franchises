<?php

namespace Drupal\my_custom_module\MyEntity;

use Drupal\Core\Entity\EntityInterface;

/**
 * Factory to create my entities.
 */
class EntityFactory {

  public function presave() {
    // Do nothing. Subclasses can override.
  }

}
