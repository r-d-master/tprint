<?php
/**
 * @file
 * f_tprint_block.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function f_tprint_block_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['panels_mini-footer_1'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => 'footer_1',
    'module' => 'panels_mini',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'bootstrap' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bootstrap',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'tprint' => array(
        'region' => 'footer',
        'status' => 1,
        'theme' => 'tprint',
        'weight' => -16,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['panels_mini-footer_2'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => 'footer_2',
    'module' => 'panels_mini',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'bootstrap' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bootstrap',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'tprint' => array(
        'region' => 'footer',
        'status' => 1,
        'theme' => 'tprint',
        'weight' => -15,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['quicktabs-print_search_tabbed_menu'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => 'print_search_tabbed_menu',
    'module' => 'quicktabs',
    'node_types' => array(),
    'pages' => '<front>
letterheads
complimentary-slips
flyers
business-cards',
    'roles' => array(
      'administrator' => 3,
      'Customer' => 6,
    ),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'bootstrap' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bootstrap',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'tprint' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'tprint',
        'weight' => -14,
      ),
    ),
    'title' => '<none>',
    'visibility' => 1,
  );

  $export['tcss_login-bootstrap-login'] = array(
    'cache' => 1,
    'custom' => 0,
    'delta' => 'bootstrap-login',
    'module' => 'tcss_login',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'bootstrap' => array(
        'region' => 'navigation',
        'status' => 1,
        'theme' => 'bootstrap',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'tprint' => array(
        'region' => 'navigation',
        'status' => 1,
        'theme' => 'tprint',
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['views--exp-print_search-business_card'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => '-exp-print_search-business_card',
    'module' => 'views',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'bootstrap' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bootstrap',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'tprint' => array(
        'region' => 'form_first',
        'status' => 1,
        'theme' => 'tprint',
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['views--exp-print_search-flyers'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => '-exp-print_search-flyers',
    'module' => 'views',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'bootstrap' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bootstrap',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'tprint' => array(
        'region' => 'form_fourth',
        'status' => 1,
        'theme' => 'tprint',
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['views--exp-print_search-letterheads'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => '-exp-print_search-letterheads',
    'module' => 'views',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'bootstrap' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bootstrap',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'tprint' => array(
        'region' => 'form_second',
        'status' => 1,
        'theme' => 'tprint',
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  $export['views-ad1c50714daffed2afe0e726ac002891'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => 'ad1c50714daffed2afe0e726ac002891',
    'module' => 'views',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'bootstrap' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bootstrap',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'tprint' => array(
        'region' => 'form_third',
        'status' => 1,
        'theme' => 'tprint',
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  return $export;
}
