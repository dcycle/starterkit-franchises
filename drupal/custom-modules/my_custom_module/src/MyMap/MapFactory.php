<?php

namespace Drupal\my_custom_module\MyMap;

use Drupal\my_custom_module\MyEntity\MyEntityContainsFranchisesInterface;

/**
 * Generates a map based on an array of franchises.
 */
class MapFactory {

  /**
   * Populate node preprocess variables with a map.
   *
   * @param array $variables
   *   An array which will be populated, if possible.
   * @param \Drupal\my_custom_module\MyEntity\MyEntityContainsFranchisesInterface $entity
   *   An entity which is the source of the locations.
   */
  public function populateNodePreprocessVariables(array &$variables, MyEntityContainsFranchisesInterface $entity) {
    $variables['map'] = [
      '#type' => 'view',
      '#name' => $entity->mapViewName(),
      '#display_id' => $entity->mapDisplayName(),
      '#arguments' => $entity->mapArguments(),
    ];
  }

}
