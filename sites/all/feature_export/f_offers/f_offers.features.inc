<?php
/**
 * @file
 * f_offers.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function f_offers_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function f_offers_node_info() {
  $items = array(
    'offers' => array(
      'name' => t('offers'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
