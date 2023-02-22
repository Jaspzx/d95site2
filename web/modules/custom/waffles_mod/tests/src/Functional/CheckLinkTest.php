<?php

namespace Drupal\Tests\waffles_mod\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * @group waffles_mod
 */
class CheckLinkTest extends BrowserTestBase
{

  /**
   * {@inheritdoc}
   */
  // protected $defaultTheme = 'stark';
  protected $profile = 'standard';

  /**
   * Test to see if the Capacity of the gym shows up.
   * 1. open page
   * 2. Test if capacity value text shows up.
   */
  public function testCheckLink(){
    // $this->fail('The test runner found our test and failed it. Yay!');
    //
    // 1. Log in a user
    // 2. Open page
    // 3. Test if capacity value text shows up.
    //
    $this->drupalLogin(
      $this->createUser(['access content'], NULL, TRUE, [])
    );

    $this->drupalGet($this->buildUrl(''));
    $this->assertSession()->linkExists('Add content');

    // $this->pageTextContainsOnce('Congratulations');
  }
}
