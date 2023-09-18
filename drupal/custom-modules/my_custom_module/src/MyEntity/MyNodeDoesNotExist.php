<?php

namespace Drupal\my_custom_module\MyEntity;

/**
 * A node which does not exist.
 */
class MyNodeDoesNotExist implements MyNodeEntityInterface {

  /**
   * {@inheritdoc}
   */
  public function hookPreprocessNode(&$variables) {}

}
