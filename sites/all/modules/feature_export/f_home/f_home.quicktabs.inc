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
  $quicktabs->machine_name = 'print_search_tabbed_menu';
  $quicktabs->ajax = 0;
  $quicktabs->hide_empty_tabs = FALSE;
  $quicktabs->default_tab = 0;
  $quicktabs->title = 'Print Search Tabbed Menu';
  $quicktabs->tabs = array(
    0 => array(
      'bid' => 'views_delta_-exp-print_search-business_card',
      'hide_title' => 0,
      'title' => 'Business Card',
      'weight' => '-100',
      'type' => 'block',
    ),
    1 => array(
      'bid' => 'views_delta_-exp-print_search-letterheads',
      'hide_title' => 0,
      'title' => 'Letterheads',
      'weight' => '-99',
      'type' => 'block',
    ),
    2 => array(
      'bid' => 'views_delta_ad1c50714daffed2afe0e726ac002891',
      'hide_title' => 0,
      'title' => 'Complimentary Slips',
      'weight' => '-98',
      'type' => 'block',
    ),
    3 => array(
      'bid' => 'views_delta_-exp-print_search-flyers',
      'hide_title' => 1,
      'title' => 'Flyers',
      'weight' => '-97',
      'type' => 'block',
    ),
  );
  $quicktabs->renderer = 'quicktabs';
  $quicktabs->style = 'Sky';
  $quicktabs->options = array();

  // Translatables
  // Included for use with string extractors like potx.
  t('Business Card');
  t('Complimentary Slips');
  t('Flyers');
  t('Letterheads');
  t('Print Search Tabbed Menu');

  $export['print_search_tabbed_menu'] = $quicktabs;

  return $export;
}
