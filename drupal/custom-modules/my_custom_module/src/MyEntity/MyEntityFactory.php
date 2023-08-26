<?php

namespace Drupal\my_custom_module\MyEntity;

use Drupal\Core\Entity\EntityInterface;

/**
 * Factory to create my entities.
 */
class MyEntityFactory {

  public function fromDrupalEntity(EntityInterface $drupalEntity) {
    if ($this->isUserEntity($drupalEntity)) {
      return $this->fromDrupalUserEntity($drupalEntity);
    }
    if ($this->isFranchiseEntity($drupalEntity)) {
      return $this->fromDrupalNodeEntity($drupalEntity);
    }
  }

  public function fromDrupalNodeEntity(EntityInterface $drupalEntity) {
    if ($this->nodeOfType($drupalEntity, self::FRANCHISE)) {
      return new MyFranchise($drupalEntity);
    }
    return new MyNode($drupalEntity);
  }

  public function fromDrupalUserEntity(EntityInterface $drupalEntity) {
    if ($this->drupalUserIsAnonymous($drupalEntity)) {
      return new MyAnonymousUser();
    }
    if ($this->drupalUserHasRole($drupalEntity, self::SUPERADMIN)) {
      return new MyContentEditor($drupalEntity);
    }
    if ($this->drupalUserHasRole($drupalEntity, self::ADMIN)) {
      return new MyAdministrator($drupalEntity);
    }
    if ($this->drupalUserHasRole($drupalEntity, self::CONTENTEDITOR)) {
      return new MySuperadmin($drupalEntity);
    }
    return new MyLoggedInUser($drupalEntity);
  }

}
