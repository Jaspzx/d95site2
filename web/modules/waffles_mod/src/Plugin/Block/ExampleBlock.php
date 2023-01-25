<?php

namespace Drupal\waffles_mod\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "waffles_mod_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("waffles")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
