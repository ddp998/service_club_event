<?php

namespace Drupal\service_club_event\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Event info entity entities.
 */
class EventInfoEntityViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
