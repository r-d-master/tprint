<?php
/**
 * @file
 * f_home.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function f_home_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "quicktabs" && $api == "quicktabs") {
    return array("version" => "1");
  }
}
