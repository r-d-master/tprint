<?php
/**
 * @file
 * f_tcss_cart.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function f_tcss_cart_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function f_tcss_cart_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function f_tcss_cart_node_info() {
  $items = array(
    'product_image' => array(
      'name' => t('Product Image'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Product Image'),
      'help' => '',
    ),
    'user_requirement' => array(
      'name' => t('User Requirement'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implements hook_uc_product_default_classes().
 */
function f_tcss_cart_uc_product_default_classes() {
  $items = array(
    'business_card' => array(
      'name' => t('Business Card'),
      'base' => 'uc_product',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'compliment_slips' => array(
      'name' => t('Complimentry Slips'),
      'base' => 'uc_product',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'flyers' => array(
      'name' => t('Flyers'),
      'base' => 'uc_product',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'letterheads' => array(
      'name' => t('Letterheads'),
      'base' => 'uc_product',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'product' => array(
      'name' => t('Product'),
      'base' => 'uc_product',
      'description' => t('Use <em>products</em> to represent items for sale on the website, including all the unique information that can be attributed to a specific model number.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
  );
  return $items;
}
