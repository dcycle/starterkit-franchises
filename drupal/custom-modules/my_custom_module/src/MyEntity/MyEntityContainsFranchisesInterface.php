<?php

namespace Drupal\my_custom_module\MyEntity;

/**
 * A node which contains franchises.
 */
interface MyEntityContainsFranchisesInterface {

  /**
   * Get the view name to generate the map.
   *
   * @return string
   *   The view name, for example 'markers_map'.
   */
  public function mapViewName() : string;

  /**
   * Get the view display name to generate the map.
   *
   * @return string
   *   The view display name, for example 'block_1'.
   */
  public function mapDisplayName() : string;

  /**
   * Get the view arguments to generate the map.
   *
   * @return array
   *   The view arguments, for example [].
   */
  public function mapArguments() : array;

}
