<?php

/**
 * @file
 * Theme template customizations.
 */

/**
 * Implements template_preprocess_page().
 */
function tprint_preprocess_page(&$variables) {
  $variables['page']['footer']['panels_mini_footer_1']['#prefix'] = '<div class="tprint-footer-1"><div class="container">';
  $variables['page']['footer']['panels_mini_footer_1']['#suffix'] = '</div></div>';
  $variables['page']['footer']['panels_mini_footer_2']['#prefix'] = '<div class="tprint-footer-2"><div class="container">';
  $variables['page']['footer']['panels_mini_footer_2']['#suffix'] = '</div></div>';
  // Set background image product search form[]
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

/**
 * Make checkout form responsive.
 */
function tprint_uc_cart_checkout_form($variables) {
  $variables['form']['panes']['cart']['#prefix'] = '<div class="row tprint-cart-pane">';
  $variables['form']['panes']['customer']['#suffix'] = '</div>';
  $variables['form']['panes']['cart']['#attributes']['class'] = array('col-sm-5', 'tprint-cart-pane-left');
  $variables['form']['panes']['customer']['#attributes']['class'] = array('col-sm-5', 'tprint-cart-pane-right');

  $variables['form']['panes']['delivery']['#prefix'] = '<div class="row tprint-cart-pane">';
  $variables['form']['panes']['billing']['#suffix'] = '</div>';
  $variables['form']['panes']['delivery']['#attributes']['class'] = array('col-sm-5', 'tprint-cart-pane-left');
  $variables['form']['panes']['billing']['#attributes']['class'] = array('col-sm-5', 'tprint-cart-pane-right');

  $variables['form']['panes']['payment']['#prefix'] = '<div class="row tprint-cart-pane">';
  $variables['form']['panes']['comments']['#suffix'] = '</div>';
  $variables['form']['panes']['payment']['#attributes']['class'] = array('col-sm-5', 'tprint-cart-pane-left');
  $variables['form']['panes']['comments']['#attributes']['class'] = array('col-sm-5', 'tprint-cart-pane-right');

  return drupal_render_children($variables['form']);
}
