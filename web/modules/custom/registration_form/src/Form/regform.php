<?php
/**
 * @file
 * Contains \Drupal\registration_form\Form\regform.
 */
namespace Drupal\registration_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class regform extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'regform';
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
    // $form['skip_validation'] = [
    //   '#type' => 'checkbox',
    //   '#title' => $this->t('Skip validation'),
    //   '#description' => $this->t('Allow the use of a title with fewer than 5 characters.'),
    // ];
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
    // $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Register'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    if(strlen($form_state->getValue('mobile_number')) < 8) {
      $form_state->setErrorByName('mobile_number', $this->t('Please enter a valid Mobile Number'));
    }
    // $form_state->setErrorByName($name, $message)
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    \Drupal::messenger()->addMessage(t("Student Registration Done!! Registered Values are:"));
  foreach ($form_state->getValues() as $key => $value) {
    \Drupal::messenger()->addMessage($key . ': ' . $value);
    }
  }
}
