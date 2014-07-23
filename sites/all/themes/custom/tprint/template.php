<?php

/**
 * @file
 * Theme template customizations.
 */

/**
 * Implements template_preprocess_page().
 */
function tprint_preprocess_page(&$variables) {

  // Set background image product search form
  if ($variables['is_front']) {
    $product_classes = uc_product_class_load();
    foreach ($product_classes as $key => $value) {
      $fid = variable_get('slider_image_' . $key, NULL);
      $bg_image = file_load($fid);
      if ($bg_image != '' || $bg_image != NULL) {
        $variables['page']['search_bg'][] = file_create_url($bg_image->uri);
      }
      else {
        $variables['page']['search_bg'][] = '';
      }
    }
  }
}
