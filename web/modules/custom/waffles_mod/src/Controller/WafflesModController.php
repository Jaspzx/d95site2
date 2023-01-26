<?php

namespace Drupal\waffles_mod\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for waffles routes.
 */
class WafflesModController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
