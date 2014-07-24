<?php
/**
 * @file
 * f_menu.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function f_menu_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-quick-links.
  $menus['menu-quick-links'] = array(
    'menu_name' => 'menu-quick-links',
    'title' => 'Quick Links',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Quick Links');


  return $menus;
}