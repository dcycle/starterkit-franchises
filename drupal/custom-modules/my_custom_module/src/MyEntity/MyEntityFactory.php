<?php

namespace Drupal\my_custom_module\MyEntity;

use Drupal\my_custom_module\traits\Environment;
use Drupal\node\NodeInterface;

/**
 * A factory for our entity wrappers.
 *
 * Entity wrappers provide extra site-specific functionality for entities.
 */
class MyEntityFactory {

  use Environment;

  /**
   * Extract a node entity from node preprocess variables.
   *
   * @param array $variables
   *   A variables array which, normally, includes a "node" item.
   *
   * @return \Drupal\my_custom_module\MyEntity\MyNodeEntityInterface
   *   A node entity.
   */
  public function fromPreprocessNodeVariables(array $variables) : MyNodeEntityInterface {
    if (array_key_exists('node', $variables)) {
      try {
        return $this->fromDrupalNode($variables['node']);
      }
      catch (\Throwable $t) {
        $this->watchdogThrowable($t);
      }
    }

    return new MyNodeDoesNotExist();
  }

  /**
   * Extract a node entity from Drupal node.
   *
   * @param \Drupal\node\NodeInterface $node
   *   A Drupal node.
   *
   * @return \Drupal\my_custom_module\MyEntity\MyNodeEntityInterface
   *   A node entity.
   */
  public function fromDrupalNode(NodeInterface $node) : MyNodeEntityInterface {
    switch ($node->getType()) {
      case 'franchise':
        return new MyFranchise($node);

      case 'franchise_group':
        return new MyFranchiseGroup($node);

      default:
        return new MyNode($node);
    }
  }

}
