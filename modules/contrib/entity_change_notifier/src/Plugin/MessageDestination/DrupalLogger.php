<?php

namespace Drupal\entity_change_notifier\Plugin\MessageDestination;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Logger\RfcLogLevel;
use Drupal\Core\Plugin\PluginFormInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * A DrupalLogger destination.
 *
 * This class supports any logger backend, such as the default Drupal database
 * log or Monolog. The plugin allows the channel and priority to be configured
 * as well.
 *
 * @MessageDestination(
 *   id = "drupal_logger",
 *   label = @Translation("Logger"),
 * )
 */
class DrupalLogger extends MessageDestinationBase implements PluginFormInterface {

  /**
   * The system logger.
   *
   * @var \Psr\Log\LoggerInterface
   */
  protected $logger;

  /**
   * Constructs a DrupalLogger object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance
   *   containing:
   *     - channel: The logger channel name to write to.
   *     - level: The severity level for logged messages.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\entity_change_notifier\Plugin\MessageDestination\MessageGenerator $generator
   *   The class used to generate the message body.
   * @param \Drupal\Core\Logger\LoggerChannelFactoryInterface $logger_factory
   *   The logger factory used to retrieve the configured logger channel from.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, MessageGenerator $generator, LoggerChannelFactoryInterface $logger_factory) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $generator);
    $this->logger = $logger_factory->get($this->getConfiguration()['channel']);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      new MessageGenerator($container->get('jsonapi.link_manager')),
      $container->get('logger.factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'channel' => 'entity_change_notifier',
      'level' => RfcLogLevel::DEBUG,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function notify($action, EntityInterface $entity) {
    // @todo We should create an interface, and then have a LogMessage generator.
    $data = $this->generator->createMessage($action, $entity);
    foreach ($data as $key => $value) {
      $data['%' . $key] = $value;
    }

    if ($action != MessageDestinationInterface::ENTITY_DELETE) {
      $data['link'] = $this->t('<a href="@link">View</a>', ['@link' => $data['%uri']]);
    }

    $this->notifyDirect($data);
  }

  /**
   * {@inheritdoc}
   */
  public function notifyDirect(array $data) {
    try {
      $this->logger->log($this->configuration['level'], 'Entity %action on %entity_type %bundle %entity_id.', $data);
    }
    catch (\Exception $e) {
      throw new NotifyException($data, $e, $this->destinationEntityId, 'Unable to log the notification.', $e->getCode());
    }
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form['note'] = [
      '#prefix' => '<p>',
      '#markup' => $this->t('All publishing actions are logged by default. In general, sites will not need to use this plugin except for testing the Entity Change Notifier module itself.'),
      '#suffix' => '</p>',
    ];

    $form['channel'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Logger channel'),
      '#description' => $this->t('The channel to log notifications to. Can be any string, but machine names like %module are recommended.', ['%module' => 'entity_change_notifier']),
      '#default_value' => $this->getConfiguration()['channel'],
    ];

    $form['level'] = [
      '#type' => 'select',
      '#title' => $this->t('Log level'),
      '#description' => $this->t('The level to log notifications as.'),
      '#options' => RfcLogLevel::getLevels(),
      '#default_value' => $this->getConfiguration()['level'],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    // No additional validation is required.
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    $this->configuration = $form_state->getValues();
  }

}
