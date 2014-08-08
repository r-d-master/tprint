<?php

/**
 * @file
 * Flatize's theme implementation for template functions
 */

include_once drupal_get_path('theme', 'flatize') . '/common.inc';

/**
 * Hook theme.
 */
function flatize_theme() {
  $items = array();
  $items['render_panel'] = array(
    "variables" => array(
      'page' => array(),
      'panels_list' => array(),
      'panel_regions_width' => array(),
    ),
    'preprocess functions' => array(
      'flatize_preprocess_render_panel',
    ),
    'template' => 'panel',
    'path' => drupal_get_path('theme', 'flatize') . '/tpl',
  );
  return $items;
}

/**
 * Hook process html.
 */
function flatize_process_html(&$vars) {
  $current_skin = theme_get_setting('skin');
  if (isset($_COOKIE['weebpal_skin'])) {
    $current_skin = $_COOKIE['weebpal_skin'];
  }
  if (!empty($current_skin) && $current_skin != 'default') {
    $vars['classes'] .= " skin-$current_skin";
  }
}

/**
 * Hook preprocess page.
 */
function flatize_preprocess_page(&$vars) {
  global $theme_key;
  $vars['regions_width'] = flatize_regions_width($vars['page']);
  $panel_regions = flatize_panel_regions();
  if (count($panel_regions)) {
    foreach ($panel_regions as $panel_name => $panels_list) {
      $panel_markup = theme("render_panel", array(
        'page' => $vars['page'],
        'panels_list' => $panels_list,
        'regions_width' => $vars['regions_width'],
      ));
      $panel_markup = trim($panel_markup);
      $vars['page'][$panel_name] = empty($panel_markup) ? FALSE : array('content' => array('#markup' => $panel_markup));
    }
  }
  $current_skin = theme_get_setting('skin');
  if (isset($_COOKIE['weebpal_skin'])) {
    $current_skin = $_COOKIE['weebpal_skin'];
  }

  $vars['page']['show_skins_menu'] = $show_skins_menu = theme_get_setting('show_skins_menu');
  if ($show_skins_menu) {
    $skins = flatize_get_predefined_param('skins', array("default" => t("Default Style")));
    $current_skin = theme_get_setting('skin');
    if (isset($_COOKIE['weebpal_skin'])) {
      $current_skin = $_COOKIE['weebpal_skin'];
    }
    $str = array();
    $str[] = '<div id="change_skin_menu_wrapper" class="change-skin-menu-wrapper wrapper">';
    $str[] = '<div class="container">';
    $str[] = '<ul class="change-skin-menu">';

    foreach ($skins as $skin => $skin_title) {
      $li_class = ($skin == $current_skin ? ($skin . ' active') : $skin);
      $str[] = '<li class="' . $li_class . '"><a href="#change-skin/' . $skin . '" class="change-skin-button color-' . $skin . '">' . $skin_title . '</a></li>';
    }
    $str[] = '</ul></div></div>';
    $vars['page']['show_skins_menu'] = implode("", $str);
  }
  drupal_add_js('
    (function ($) {
      Drupal.behaviors.skinMenuAction = {
        attach: function (context) {
          jQuery(".change-skin-button").click(function() {
            parts = this.href.split("/");
            style = parts[parts.length - 1];
            jQuery.cookie("weebpal_skin", style, {path: "' . base_path() . '"});
            window.location.reload();
            return false;
          });
        }
      }
    })(jQuery);
  ', 'inline');
  $vars['page']['weebpal_skin_classes'] = !empty($current_skin) ? ($current_skin . "-skin") : "";
  if (!empty($current_skin) && $current_skin != 'default' && theme_get_setting("default_logo") && theme_get_setting("toggle_logo")) {
    $vars['logo'] = file_create_url(drupal_get_path('theme', $theme_key)) . "/css/colors/" . $current_skin . "/images/logo.png";
  }
  $vars['titlebg'] = theme_get_setting('titlebg');
}

/**
 * Hook preprocess render panel.
 */
function flatize_preprocess_render_panel(&$variables) {
  $page = $variables['page'];
  $panels_list = $variables['panels_list'];
  $regions_width = $variables['regions_width'];
  $variables = array();
  $variables['page'] = array();
  $variables['panel_width'] = $regions_width;
  $variables['panel_classes'] = array();
  $variables['panels_list'] = $panels_list;
  $is_empty = TRUE;
  $panel_keys = array_keys($panels_list);

  foreach ($panels_list as $panel) {
    $variables['page'][$panel] = $page[$panel];
    $panel_width = $regions_width[$panel];
    if (render($page[$panel])) {
      $is_empty = FALSE;
    }
    $classes = array("panel-column");
    // $classes[] = "col-lg-$panel_width";
    // $classes[] = "col-md-$panel_width";
    $classes[] = "col-sm-$panel_width";
    // $classes[] = "col-xs-$panel_width";
    $classes[] = str_replace("_", "-", $panel);
    $variables['panel_classes'][$panel] = implode(" ", $classes);
  }
  $variables['empty_panel'] = $is_empty;
}

/**
 * Css alter.
 */
function flatize_css_alter(&$css) {
  global $theme_key;
  $skin = theme_get_setting('skin');
  if (isset($_COOKIE['weebpal_skin'])) {
    $skin = $_COOKIE['weebpal_skin'] == 'default' ? '' : $_COOKIE['weebpal_skin'];
  }
  if (!empty($skin) && file_exists(drupal_get_path('theme', $theme_key) . "/css/colors/" . $skin . "/style.css")) {
    $css = drupal_add_css(drupal_get_path('theme', $theme_key) . "/css/colors/" . $skin . "/style.css", array(
      'group' => CSS_THEME,
    ));
  }
}

/**
 * Hook process view fields.
 */
function flatize_preprocess_views_view_fields(&$vars) {
  $view = $vars['view'];
  foreach ($vars['fields'] as $id => $field) {
    if (isset($field->handler->field_info) && $field->handler->field_info['type'] === 'image') {
      $prefix = $field->wrapper_prefix;
      if (strpos($prefix, "views-field ") !== FALSE) {
        $parts = explode("views-field ", $prefix);
        $type = str_replace("_", "-", $field->handler->field_info['type']);
        $prefix = implode("views-field views-field-type-" . $type . " ", $parts);
      }
      $vars['fields'][$id]->wrapper_prefix = $prefix;
    }
  }
}

/**
 * Hook node view alter.
 */
function flatize_node_view_alter(&$build) {
  global $user;
  if ($build['#bundle'] == 'product' && $user->uid) {
    unset($build['links']['comment']);
  }
}

/**
 * Hook comment view alter.
 */
function flatize_comment_view_alter(&$build) {
  global $user;
  if ($build['#bundle'] == 'comment_node_product' && !$user->uid) {
    unset($build['links']['comment']);
  }
}

/**
 * Get predefined param.
 */
function _get_predefined_param($param, $pre_array = array(), $suf_array = array()) {
  global $theme_key;
  $theme_data = list_themes();
  $result = isset($theme_data[$theme_key]->info[$param]) ? $theme_data[$theme_key]->info[$param] : array();
  return $pre_array + $result + $suf_array;
}

/**
 * Hook preprocess node.
 */
function flatize_preprocess_node(&$vars) {
  $skins = _get_predefined_param('skins', array('default' => t("Default skin")));
  foreach ($skins as $key => $val) {
    if ($vars['node_url'] == base_path() . 'skins/' . $key && (!isset($_COOKIE['light_skin']) || $_COOKIE['light_skin'] != $key)) {
      setcookie('light_skin', $key, time() + 100000, base_path());
      header('Location: ' . $vars['node_url']);
    }
  }
  $node = $vars['node'];
  if (variable_get('node_submitted_' . $node->type, TRUE)) {
    $vars['submitted'] = t('<span class="author">By !username</span> <span class="created"><i class="fa fa-clock-o"></i>!datetime</span><span class="comment-count"><i class="fa fa-comment-o"></i>!comment Comments</span>',
      array(
        '!username' => $vars['name'],
        '!datetime' => date('F d, Y', $vars['created']),
        '!comment' => $vars['comment_count'],
      ));
  }
}

/**
 * Hook preprocess field.
 */
function flatize_preprocess_field(&$vars) {
  $name = $vars['element']['#field_name'];
  $bundle = $vars['element']['#bundle'];
  if ($bundle == 'blog' && $name == 'field_blog_tags') {
    $vars['classes_array'][] = 'field-name-field-tags';
  }
}
