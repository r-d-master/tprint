<?php
/**
 * @file
 * f_theme_layout.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function f_theme_layout_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "panels_mini" && $api == "panels_default") {
    return array("version" => "1");
  }
}
