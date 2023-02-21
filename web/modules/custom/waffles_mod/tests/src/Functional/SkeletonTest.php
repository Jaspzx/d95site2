<?php

namespace Drupal\Tests\waffles_mod\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 *  Skeleton functional test.
 *
 * @group waffles_mod
 *
 */
class SkeletonTest extends BrowserTestBase
{
  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

/**
   * This test method fails, so we can be sure our test is discovered.
   */
  public function testSomthingThatFailed(){
    $this->fail('The test runner found our test and failed it. Yay!');
  }
}
