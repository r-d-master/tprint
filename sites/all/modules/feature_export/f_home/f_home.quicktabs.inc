<?php
/**
 * @file
 * f_home.quicktabs.inc
 */

/**
 * Implements hook_quicktabs_default_quicktabs().
 */
function f_home_quicktabs_default_quicktabs() {
  $export = array();

  $quicktabs = new stdClass();
  $quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
  $quicktabs->api_version = 1;
  $quicktabs->machine_name = 'products';
  $quicktabs->ajax = 1;
  $quicktabs->hide_empty_tabs = FALSE;
  $quicktabs->default_tab = 0;
  $quicktabs->title = 'Products';
  $quicktabs->tabs = array(
    0 => array(
      'vid' => 'product_list',
      'display' => 'block_1',
      'args' => '',
      'title' => 'Business Card',
      'weight' => '-100',
      'type' => 'view',
    ),
    1 => array(
      'vid' => 'product_list',
      'display' => 'block_2',
      'args' => '',
      'title' => 'Letterheads',
      'weight' => '-99',
      'type' => 'view',
    ),
    2 => array(
      'vid' => 'product_list',
      'display' => 'block_3',
      'args' => '',
      'title' => 'Complimentary Slips',
      'weight' => '-98',
      'type' => 'view',
    ),
    3 => array(
      'vid' => 'product_list',
      'display' => 'block_4',
      'args' => '',
      'title' => 'Flyers',
      'weight' => '-97',
      'type' => 'view',
    ),
  );
  $quicktabs->renderer = 'quicktabs';
  $quicktabs->style = 'default';
  $quicktabs->options = array();

  // Translatables
  // Included for use with string extractors like potx.
  t('Business Card');
  t('Complimentary Slips');
  t('Flyers');
  t('Letterheads');
  t('Products');

  $export['products'] = $quicktabs;

  return $export;
}
