<?php

namespace Drupal\lei_core\Form;

use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Class RestaurantSettingsForm.
 *
 * @ingroup lei_core
 */
class RestaurantSettingsForm extends EntityTypeSettingsFormBase {
  public function __construct(EntityTypeManagerInterface $entity_type_manager)
  {
    parent::__construct($entity_type_manager, 'restaurant');
  }
}
