<?php

namespace Drupal\service_club_event\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Event info entity entities.
 *
 * @ingroup service_club_event
 */
interface EventInfoEntityInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Event info entity name.
   *
   * @return string
   *   Name of the Event info entity.
   */
  public function getName();

  /**
   * Sets the Event info entity name.
   *
   * @param string $name
   *   The Event info entity name.
   *
   * @return \Drupal\service_club_event\Entity\EventInfoEntityInterface
   *   The called Event info entity entity.
   */
  public function setName($name);

  /**
   * Gets the Event info entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Event info entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Event info entity creation timestamp.
   *
   * @param int $timestamp
   *   The Event info entity creation timestamp.
   *
   * @return \Drupal\service_club_event\Entity\EventInfoEntityInterface
   *   The called Event info entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Event info entity published status indicator.
   *
   * Unpublished Event info entity are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Event info entity is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Event info entity.
   *
   * @param bool $published
   *   TRUE to set this Event info entity to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\service_club_event\Entity\EventInfoEntityInterface
   *   The called Event info entity entity.
   */
  public function setPublished($published);

  /**
   * Gets the Event info entity revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Event info entity revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\service_club_event\Entity\EventInfoEntityInterface
   *   The called Event info entity entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Event info entity revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Event info entity revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\service_club_event\Entity\EventInfoEntityInterface
   *   The called Event info entity entity.
   */
  public function setRevisionUserId($uid);

}
