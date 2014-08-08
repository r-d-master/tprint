<?php
/**
 * @file
 * f_home.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function f_home_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['quicktabs-products'] = array(
    'cache' => -1,
    'css_class' => '',
    'custom' => 0,
    'delta' => 'products',
    'module' => 'quicktabs',
    'node_types' => array(),
    'pages' => '<front>',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'flatize' => array(
        'region' => 'panel_third',
        'status' => 1,
        'theme' => 'flatize',
        'weight' => -22,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'tprint' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'tprint',
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 1,
  );

  return $export;
}
