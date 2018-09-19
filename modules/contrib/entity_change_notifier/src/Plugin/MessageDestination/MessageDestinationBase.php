<?php

namespace Drupal\entity_change_notifier\Plugin\MessageDestination;

use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Plugin\PluginBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Base class for Message Destination plugins.
 */
abstract class MessageDestinationBase extends PluginBase implements MessageDestinationInterface, ContainerFactoryPluginInterface {

  /**
   * The plugin configuration.
   *
   * @var array
   */
  protected $configuration;

  /**
   * The class used to generate the message body.
   *
   * @var \Drupal\entity_change_notifier\Plugin\MessageDestination\MessageGenerator
   */
  protected $generator;

  /**
   * The destination config entity ID, if one was used for this instance.
   *
   * @var string
   */
  protected $destinationEntityId;

  /**
   * Constructs a DrupalQueue object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\entity_change_notifier\Plugin\MessageDestination\MessageGenerator $generator
   *   The class used to generate the message body.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, MessageGenerator $generator) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->setConfiguration($configuration);
    $this->generator = $generator;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      new MessageGenerator($container->get('jsonapi.link_manager'))
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getConfiguration() {
    return $this->configuration;
  }

  /**
   * {@inheritdoc}
   */
  public function setConfiguration(array $configuration) {
    $this->configuration = NestedArray::mergeDeep(
      $this->defaultConfiguration(),
      $configuration
    );
  }

  /**
   * {@inheritdoc}
   */
  public function calculateDependencies() {
    // This plugin has no additional dependencies.
  }

  /**
   * {@inheritdoc}
   */
  public function setDestinationConfigurationEntity($entity_id) {
    $this->destinationEntityId = $entity_id;
  }

}
