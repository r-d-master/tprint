<?php

/**
 * @file
 * Theme setting callbacks for the theme.
 */

include_once drupal_get_path('theme', 'flatize') . '/common.inc';

/**
 * Reset settings.
 */
function flatize_reset_settings() {
  global $theme_key;
  variable_del('theme_' . $theme_key . '_settings');
  variable_del('theme_settings');
  $cache = &drupal_static('theme_get_setting', array());
  $cache[$theme_key] = NULL;
}

/**
 * Hook form system theme settings.
 */
function flatize_form_system_theme_settings_alter(&$form, $form_state) {
  if (theme_get_setting('flatize_use_default_settings')) {
    flatize_reset_settings();
  }
  $form['#attached']['js'][] = array(
    'data' => drupal_get_path('theme', 'flatize') . '/js/weebpal.js',
    'type' => 'file',
  );
  $form['flatize']['flatize_version'] = array(
    '#type' => 'hidden',
    '#default' => '1.0',
  );
  flatize_settings_layout_tab($form);
  flatize_feedback_form($form);
  $form['#submit'][] = 'flatize_form_system_theme_settings_submit';
}

/**
 * Settings layout tab.
 */
function flatize_settings_layout_tab(&$form) {
  global $theme_key;
  $skins = flatize_get_predefined_param('skins', array('' => t("Default skin")));
  $form['flatize']['settings'] = array(
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#title' => t('Settings'),
    '#weight' => 0,
  );

  $titlebgs = flatize_get_predefined_param('titlebgs', array('' => t('Default')));
  if (count($skins) > 1 || count($titlebgs) > 1) {
    $form['flatize']['settings']['configs'] = array(
      '#type' => 'fieldset',
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
      '#title' => t('Configs'),
      '#weight' => 0,
    );
  }

  if (count($skins) > 1) {
    $form['flatize']['settings']['configs']['skin'] = array(
      '#type' => 'select',
      '#title' => t('Skin'),
      '#default_value' => theme_get_setting('skin'),
      '#options' => $skins,
    );
  }

  if (count($titlebgs) > 1) {
    $form['flatize']['settings']['configs']['titlebg'] = array(
      '#type' => 'select',
      '#title' => t('Title Background'),
      '#default_value' => theme_get_setting('titlebg'),
      '#options' => $titlebgs,
    );
  }

  $form['theme_settings']['toggle_logo']['#default_value'] = theme_get_setting('toggle_logo');
  $form['theme_settings']['toggle_name']['#default_value'] = theme_get_setting('toggle_name');
  $form['theme_settings']['toggle_slogan']['#default_value'] = theme_get_setting('toggle_slogan');
  $form['theme_settings']['toggle_node_user_picture']['#default_value'] = theme_get_setting('toggle_node_user_picture');
  $form['theme_settings']['toggle_comment_user_picture']['#default_value'] = theme_get_setting('toggle_comment_user_picture');
  $form['theme_settings']['toggle_comment_user_verification']['#default_value'] = theme_get_setting('toggle_comment_user_verification');
  $form['theme_settings']['toggle_favicon']['#default_value'] = theme_get_setting('toggle_favicon');
  $form['theme_settings']['toggle_secondary_menu']['#default_value'] = theme_get_setting('toggle_secondary_menu');
  $form['theme_settings']['show_skins_menu'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Skins Menu'),
    '#default_value' => theme_get_setting('show_skins_menu'),
  );

  $form['logo']['default_logo']['#default_value'] = theme_get_setting('default_logo');
  $form['logo']['settings']['logo_path']['#default_value'] = theme_get_setting('logo_path');
  $form['favicon']['default_favicon']['#default_value'] = theme_get_setting('default_favicon');
  $form['favicon']['settings']['favicon_path']['#default_value'] = theme_get_setting('favicon_path');
  $form['theme_settings']['#collapsible'] = TRUE;
  $form['theme_settings']['#collapsed'] = FALSE;
  $form['logo']['#collapsible'] = TRUE;
  $form['logo']['#collapsed'] = FALSE;
  $form['favicon']['#collapsible'] = TRUE;
  $form['favicon']['#collapsed'] = FALSE;
  $form['flatize']['settings']['theme_settings'] = $form['theme_settings'];
  $form['flatize']['settings']['logo'] = $form['logo'];
  $form['flatize']['settings']['favicon'] = $form['favicon'];

  unset($form['theme_settings']);
  unset($form['logo']);
  unset($form['favicon']);

  $form['flatize']['flatize_use_default_settings'] = array(
    '#type' => 'hidden',
    '#default_value' => 0,
  );
  $form['actions']['flatize_use_default_settings_wrapper'] = array(
    '#markup' => '<input type="submit" value="' . t('Reset theme settings') . '" class="form-submit form-reset" onclick="return Drupal.Light.onClickResetDefaultSettings();" style="float: right;">',
  );
}

/**
 * Feedback form.
 */
function flatize_feedback_form(&$form) {
  $form['flatize']['about_flatize'] = array(
    '#type' => 'fieldset',
    '#title' => t('Feedback Form'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#weight' => 40,
  );

  $form['flatize']['about_flatize']['about_flatize_wrapper'] = array(
    '#type' => 'container',
    '#attributes' => array('class' => array('about-flatize-wrapper')),
  );

  $form['flatize']['about_flatize']['about_flatize_wrapper']['about_flatize_content'] = array(
    '#markup' => '<iframe width="100%" height="650" scrolling="no" class="nucleus_frame" frameborder="0" src="http://www.weebpal.com/static/feedback/"></iframe>',
  );
}

/**
 * Form system theme settings submit.
 */
function flatize_form_system_theme_settings_submit($form, &$form_state) {
  if (isset($form_state['input']['skin']) && $form_state['input']['skin'] != $form_state['complete form']['flatize']['settings']['configs']['skin']['#default_value']) {
    setcookie('weebpal_skin', $form_state['input']['skin'], time() + 100000, base_path());
  }
}
