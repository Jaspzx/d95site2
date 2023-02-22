<?php

namespace Drupal\Tests\waffles_mod\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * @group waffles_mod
 */
class CustomDependTest extends BrowserTestBase
{

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';
  // protected $profile = 'standard';
  //
  protected static $modules = ['node', 'block', 'user', 'modules', 'custommod_test'];

  protected function setUp() : void{
    // Always call the parent setUp().
    parent::setUp();

    $assert = $this->assertSession();

    // Log in an admin user.
    // $admin_user = $this->drupalCreateUser([
    //   'administer content types',
    //   'administer modules',
    //   'access module'
    // ]);
    // , $name = NULL, $admin = FALSE, array $values = []
    $admin_user = $this->drupalCreateUser([
      'administer content types',
      'administer modules', 'administer site configuration'], NULL, TRUE, []);
    $this->drupalLogin($admin_user);

    // Plugin name to be placed.
    $this->placeBlock('system_menu_block:tools');
    // $this->contentType = $this->createContentType();
    // $this->contentType = $this->createContentType(['type' => 'article']);
    // $this->contentType = $this->createContentType(['type' => 'climbing_type']);

    // $this->content = $this->drupalCreateNode(array(
    //   'title' => t('Falling!'),
    //   'type' => 'climbing_type',
    // ));
  }

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
    // $this->drupalLogin(
    //   $this->createUser(['create ' . $this->contentType->id() . ' content'])
    // );
    // $this->drupalGet($this->buildUrl(''));
    // $this->assertSession()->linkExists('Add content');

    // $this->pageTextContainsOnce('Congratulations');
    //
    $assert = $this
      ->assertSession();

    // Log in an admin user.
    $admin_user = $this
      ->drupalCreateUser([
      'administer content types',
    ]);
    $this
      ->drupalLogin($admin_user);

    // Get a list of content types.
    $this->drupalGet('/admin/structure/types');
    $this->drupalGet('/admin/structure/types/manage/climbing_type');

    // $regex = '/' . preg_quote('Save content type', '/');
    // $this->pageTextMatchesCount(1, $regex);

    $this->drupalGet('/admin/structure/types/manage/article/fields');
    $this->drupalGet('/admin/modules');


    // Verify that these content types show up in the user interface.
    // $assert->pageTextContains('Climbing', 'found it.');

    // $assert->pageTextContains('Save content type', 'found it.');

  }
}
