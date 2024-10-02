<?php

namespace Drupal\usuario_formulario\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Entity\User;

/**
 * Class UsuarioAltaForm.
 *
 * @package Drupal\usuario_formulario\Form
 */
class UsuarioAltaForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'usuario_alta_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Campo para el nombre de usuario.
    $form['username'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Nombre de usuario'),
      '#required' => TRUE,
    ];

    // Campo para el correo electrónico.
    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Correo electrónico'),
      '#required' => TRUE,
    ];

    // Campo para la contraseña.
    $form['password'] = [
      '#type' => 'password',
      '#title' => $this->t('Contraseña'),
      '#required' => TRUE,
    ];

    // Botón de envío.
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Crear usuario'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Obtener los valores ingresados en el formulario.
    $username = $form_state->getValue('username');
    $email = $form_state->getValue('email');
    $password = $form_state->getValue('password');

    // Crear el nuevo usuario.
    $user = User::create([
      'name' => $username,
      'mail' => $email,
      'pass' => $password,
      'status' => 1,
    ]);

    // Guardar el nuevo usuario.
    $user->save();

    // Mostrar un mensaje de confirmación.
    \Drupal::messenger()->addStatus($this->t('El usuario %name ha sido creado.', ['%name' => $username]));
  }

}
