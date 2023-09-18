<?php

namespace Drupal\my_custom_module\MyEntity;

/**
 * A node which contains franchises.
 */
class MyEntityContainsFranchises extends MyNode implements MyEntityContainsFranchisesInterface {

  /**
   * {@inheritdoc}
   */
  public function hookPreprocessNode(&$variables) {
    $this->mapFactory()->populateNodePreprocessVariables($variables, $this);
  }

  /**
   * {@inheritdoc}
   */
  public function mapViewName() : string {
    return 'markers_map';
  }

  /**
   * {@inheritdoc}
   */
  public function mapDisplayName() : string {
    return 'block_1';
  }

  /**
   * {@inheritdoc}
   */
  public function mapArguments() : array {
    return [];
  }

}
