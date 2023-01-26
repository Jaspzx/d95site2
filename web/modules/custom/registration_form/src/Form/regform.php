<?php
/**
 * @file
 * Contains \Drupal\registration_form\Form\regform.
 */
namespace Drupal\registration_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TempStore\PrivateTempStoreFactory;

class regform extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'regform';
  }

  /**
   * Private temporary storage factory.
   *
   * @var \Drupal\Core\TempStore\PrivateTempStoreFactory
   */
  private $tempStoreFactory;

  public function __construct(PrivateTempStoreFactory $tempStoreFactory) {
    $this->tempStoreFactory = $tempStoreFactory;
  }

  /**
   * Element specific validation callback.
   */
  public function validateLength($element, FormStateInterface $form_state, $form) {
    $name = $form_state->getValue('full_name');
    if (strlen($name) < 5) {
      // Set an error for the form element with a key of "title".
      $form_state->setError($element, $this->t('Full name must be at least 5 characters long.'));
    }
  }


  public function buildForm(array $form, FormStateInterface $form_state) {

    $tempstore = $this->tempStoreFactory('tempstore.private')->get('registration_form');
    $nickname = $tempstore->get('nickname');

    $form['full_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Enter Name:'),
      '#required' => TRUE,
      '#element_validate' => [[$this, 'validateLength']],
    );
    $form['nickname'] = array(
      '#type' => 'textfield',
      '#title' => t('Enter nickname:'),
      '#required' => TRUE,
    );
    $form['skip_validation'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Skip validation'),
      '#description' => $this->t('Allow the use of a title with fewer than 5 characters.'),
    ];
    $form['mobile_number'] = array(
      '#type' => 'textfield',
      '#title' => t('Enter Mobile Number:'),
      '#required' => TRUE,
    );
    $form['participant_type'] = array(
      '#type' => 'select',
      '#title' => t('Participant Type:'),
      '#options' => array(
        'Student' => t('Student'),
        'Public' => t('Public'),
        'Affiliate' => t('Affiliate')
      ),
      '#required' => TRUE,
    );
    $form['gender'] = array (
      '#type' => 'select',
      '#title' => ('Select Gender:'),
      '#options' => array(
        'Male' => t('Male'),
        'Female' => t('Female'),
        'Other' => t('Other'),
      ),
      '#description' => t('Something')
    );
    // $form['entityyy'] = array(
    //   '#type' => 'entity_autocomplete',
    //   '#title' => t('Select:'),
    //   '#description' => t('Something')
    // );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Register'),
      '#button_type' => 'primary',
    );
    // This callback is only called if the button that it is attached to
    // is the one used to submit the form.
    $form['alternate_button'] = [
      '#type' => 'submit',
      '#value' => $this->t('Do alternate thing'),
      // Note that when you specify a submit handler like this only those defined
      // in this array of callbacks will be called. If it's not specified, the default
      // ::submitForm() method will not be called.
      '#submit' => ['::alternateFormSubmit']
    ];
    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    if(strlen($form_state->getValue('mobile_number')) < 8) {
      $form_state->setErrorByName('mobile_number', $this->t('Please enter a valid Mobile Number'));
    }
    // $form_state->setErrorByName($name, $message)
  }

  public function alternateFormSubmit(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addStatus($this->t('The alternate submit button was pressed.'));
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    \Drupal::messenger()->addMessage(t("Student Registration Done!! Registered Values are:"));
    // \Drupal::messenger()->addStatus(t('Your record has been saved. Please add another record.'));
    foreach ($form_state->getValues() as $key => $value) {
      \Drupal::messenger()->addMessage($key . ': ' . $value);
    }
    $tempstore = $this->tempStoreFactory->get('registration_form');
    $tempstore->set('nickname', $nickname);

    $node = $this->entity;
    $form_state->setRedirect(
      'entity.node.canonical',
      ['node' => 13]
    );
  }
}
