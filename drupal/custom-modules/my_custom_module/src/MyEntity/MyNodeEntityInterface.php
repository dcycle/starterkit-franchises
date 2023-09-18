<?php

namespace Drupal\my_custom_module\MyEntity;

/**
 * Represents our own node.
 */
interface MyNodeEntityInterface {

  /**
   * Preprocess node for display.
   */
  public function hookPreprocessNode(&$variables);

}
