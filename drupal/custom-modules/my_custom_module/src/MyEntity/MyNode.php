<?php

namespace Drupal\my_custom_module\MyEntity;

/**
 * A generic node.
 */
class MyNode extends MyEntity implements MyNodeEntityInterface {

  /**
   * {@inheritdoc}
   */
  public function hookPreprocessNode(&$variables) {}

}
