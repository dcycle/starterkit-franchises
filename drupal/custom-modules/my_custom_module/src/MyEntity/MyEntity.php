<?php

namespace Drupal\my_custom_module\MyEntity;

use Drupal\Core\Entity\EntityInterface;
use Drupal\my_custom_module\traits\DependencyInjection;

/**
 * A generic entity.
 */
class MyEntity {

  use DependencyInjection;

  /**
   * The Drupal entity.
   *
   * @var \Drupal\Core\Entity\EntityInterface
   */
  protected $drupalEntity;

  /**
   * Constructor.
   *
   * @param \Drupal\Core\Entity\EntityInterface $drupalEntity
   *   The Drupal entity.
   */
  public function __construct(EntityInterface $drupalEntity) {
    $this->drupalEntity = $drupalEntity;
  }

  /**
   * Get a field value.
   *
   * @param string $name
   *   The name of of a field.
   * @param string $default
   *   A default value in case the value cannot be retrieved.
   *
   * @return string
   *   A value, or default.
   */
  public function fieldFirstVal(string $name, string $default = '') : string {
    try {
      return $this->drupalEntity()->$name->value;
    }
    catch (\Throwable $t) {
      return $default;
    }
  }

  /**
   * Get the Drupal entity.
   *
   * @return \Drupal\Core\Entity\EntityInterface
   *   The Drupal entity.
   */
  public function drupalEntity() : EntityInterface {
    return $this->drupalEntity;
  }

  /**
   * Get the Drupal entity id.
   *
   * @return int
   *   The Drupal entity ID.
   */
  public function entityId() : int {
    return $this->drupalEntity()->id();
  }

}
