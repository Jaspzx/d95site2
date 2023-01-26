<?php

namespace Drupal\registration_form\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class regController extends ControllerBase {

  // use DescriptionTemplateTrait;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
  return new static(
      $container->get('tempstore.private')
    );
  }
}
