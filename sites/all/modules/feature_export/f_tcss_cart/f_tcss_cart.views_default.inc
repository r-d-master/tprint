<?php
/**
 * @file
 * f_tcss_cart.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function f_tcss_cart_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'print_search';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Print Search';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Product Search';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['exposed_form']['options']['submit_button'] = 'Search';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = 'Printer Name';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  /* Field: Content: Product */
  $handler->display->display_options['fields']['field_product']['id'] = 'field_product';
  $handler->display->display_options['fields']['field_product']['table'] = 'field_data_field_product';
  $handler->display->display_options['fields']['field_product']['field'] = 'field_product';
  $handler->display->display_options['fields']['field_product']['element_label_colon'] = FALSE;
  /* Field: Content: Quantity */
  $handler->display->display_options['fields']['field_quantity']['id'] = 'field_quantity';
  $handler->display->display_options['fields']['field_quantity']['table'] = 'field_data_field_quantity';
  $handler->display->display_options['fields']['field_quantity']['field'] = 'field_quantity';
  $handler->display->display_options['fields']['field_quantity']['element_label_colon'] = FALSE;
  /* Field: Content: Paper Stock */
  $handler->display->display_options['fields']['field_paper_stock']['id'] = 'field_paper_stock';
  $handler->display->display_options['fields']['field_paper_stock']['table'] = 'field_data_field_paper_stock';
  $handler->display->display_options['fields']['field_paper_stock']['field'] = 'field_paper_stock';
  $handler->display->display_options['fields']['field_paper_stock']['element_label_colon'] = FALSE;
  /* Field: Content: Paper Weight */
  $handler->display->display_options['fields']['field_paper_weight']['id'] = 'field_paper_weight';
  $handler->display->display_options['fields']['field_paper_weight']['table'] = 'field_data_field_paper_weight';
  $handler->display->display_options['fields']['field_paper_weight']['field'] = 'field_paper_weight';
  $handler->display->display_options['fields']['field_paper_weight']['element_label_colon'] = FALSE;
  /* Field: Content: Delivery */
  $handler->display->display_options['fields']['field_delivery']['id'] = 'field_delivery';
  $handler->display->display_options['fields']['field_delivery']['table'] = 'field_data_field_delivery';
  $handler->display->display_options['fields']['field_delivery']['field'] = 'field_delivery';
  $handler->display->display_options['fields']['field_delivery']['element_label_colon'] = FALSE;
  /* Field: Content: Price */
  $handler->display->display_options['fields']['field_price']['id'] = 'field_price';
  $handler->display->display_options['fields']['field_price']['table'] = 'field_data_field_price';
  $handler->display->display_options['fields']['field_price']['field'] = 'field_price';
  $handler->display->display_options['fields']['field_price']['settings'] = array(
    'thousand_separator' => ' ',
    'prefix_suffix' => 1,
  );
  /* Field: Content: Colour Options */
  $handler->display->display_options['fields']['field_colour_options']['id'] = 'field_colour_options';
  $handler->display->display_options['fields']['field_colour_options']['table'] = 'field_data_field_colour_options';
  $handler->display->display_options['fields']['field_colour_options']['field'] = 'field_colour_options';
  /* Field: Content: Side */
  $handler->display->display_options['fields']['field_side']['id'] = 'field_side';
  $handler->display->display_options['fields']['field_side']['table'] = 'field_data_field_side';
  $handler->display->display_options['fields']['field_side']['field'] = 'field_side';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'print' => 'print',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Product (field_product) */
  $handler->display->display_options['filters']['field_product_value']['id'] = 'field_product_value';
  $handler->display->display_options['filters']['field_product_value']['table'] = 'field_data_field_product';
  $handler->display->display_options['filters']['field_product_value']['field'] = 'field_product_value';
  $handler->display->display_options['filters']['field_product_value']['value'] = array(
    'Business Cards' => 'Business Cards',
  );
  $handler->display->display_options['filters']['field_product_value']['group'] = 1;
  /* Filter criterion: Content: Quantity (field_quantity) */
  $handler->display->display_options['filters']['field_quantity_value']['id'] = 'field_quantity_value';
  $handler->display->display_options['filters']['field_quantity_value']['table'] = 'field_data_field_quantity';
  $handler->display->display_options['filters']['field_quantity_value']['field'] = 'field_quantity_value';
  $handler->display->display_options['filters']['field_quantity_value']['value'] = array(
    100 => '100',
  );
  $handler->display->display_options['filters']['field_quantity_value']['group'] = 1;
  $handler->display->display_options['filters']['field_quantity_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_quantity_value']['expose']['operator_id'] = 'field_quantity_value_op';
  $handler->display->display_options['filters']['field_quantity_value']['expose']['operator'] = 'field_quantity_value_op';
  $handler->display->display_options['filters']['field_quantity_value']['expose']['identifier'] = 'field_quantity_value';
  $handler->display->display_options['filters']['field_quantity_value']['expose']['required'] = TRUE;
  $handler->display->display_options['filters']['field_quantity_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Stock (field_paper_stock) */
  $handler->display->display_options['filters']['field_paper_stock_value']['id'] = 'field_paper_stock_value';
  $handler->display->display_options['filters']['field_paper_stock_value']['table'] = 'field_data_field_paper_stock';
  $handler->display->display_options['filters']['field_paper_stock_value']['field'] = 'field_paper_stock_value';
  $handler->display->display_options['filters']['field_paper_stock_value']['group'] = 1;
  $handler->display->display_options['filters']['field_paper_stock_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_paper_stock_value']['expose']['operator_id'] = 'field_paper_stock_value_op';
  $handler->display->display_options['filters']['field_paper_stock_value']['expose']['operator'] = 'field_paper_stock_value_op';
  $handler->display->display_options['filters']['field_paper_stock_value']['expose']['identifier'] = 'field_paper_stock_value';
  $handler->display->display_options['filters']['field_paper_stock_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Weight (field_paper_weight) */
  $handler->display->display_options['filters']['field_paper_weight_value']['id'] = 'field_paper_weight_value';
  $handler->display->display_options['filters']['field_paper_weight_value']['table'] = 'field_data_field_paper_weight';
  $handler->display->display_options['filters']['field_paper_weight_value']['field'] = 'field_paper_weight_value';
  $handler->display->display_options['filters']['field_paper_weight_value']['value'] = array(
    350 => '350',
  );
  $handler->display->display_options['filters']['field_paper_weight_value']['group'] = 1;
  $handler->display->display_options['filters']['field_paper_weight_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_paper_weight_value']['expose']['operator_id'] = 'field_paper_weight_value_op';
  $handler->display->display_options['filters']['field_paper_weight_value']['expose']['operator'] = 'field_paper_weight_value_op';
  $handler->display->display_options['filters']['field_paper_weight_value']['expose']['identifier'] = 'field_paper_weight_value';
  $handler->display->display_options['filters']['field_paper_weight_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Delivery (field_delivery) */
  $handler->display->display_options['filters']['field_delivery_value']['id'] = 'field_delivery_value';
  $handler->display->display_options['filters']['field_delivery_value']['table'] = 'field_data_field_delivery';
  $handler->display->display_options['filters']['field_delivery_value']['field'] = 'field_delivery_value';
  $handler->display->display_options['filters']['field_delivery_value']['group'] = 1;
  $handler->display->display_options['filters']['field_delivery_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_delivery_value']['expose']['operator_id'] = 'field_delivery_value_op';
  $handler->display->display_options['filters']['field_delivery_value']['expose']['operator'] = 'field_delivery_value_op';
  $handler->display->display_options['filters']['field_delivery_value']['expose']['identifier'] = 'field_delivery_value';
  $handler->display->display_options['filters']['field_delivery_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );

  /* Display: Business Card */
  $handler = $view->new_display('page', 'Business Card', 'page');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Business Card';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'nid' => 'nid',
    'title_1' => 'title_1',
    'field_product' => 'field_product',
    'field_quantity' => 'field_quantity',
    'field_paper_stock' => 'field_paper_stock',
    'field_paper_weight' => 'field_paper_weight',
    'field_side' => 'field_side',
    'field_colour_options' => 'field_colour_options',
    'field_delivery' => 'field_delivery',
    'field_price' => 'field_price',
    'php' => 'php',
    'add_to_cart' => 'add_to_cart',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'nid' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title_1' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_product' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_quantity' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_paper_stock' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_paper_weight' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_side' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_colour_options' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_delivery' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_price' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'php' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'add_to_cart' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['label'] = '';
  $handler->display->display_options['fields']['nid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = 'Product';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  /* Field: Product: Package quantity */
  $handler->display->display_options['fields']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['fields']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['fields']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['fields']['pkg_qty']['label'] = 'Quantity';
  /* Field: Content: Paper Stock */
  $handler->display->display_options['fields']['field_bc_paper_stock']['id'] = 'field_bc_paper_stock';
  $handler->display->display_options['fields']['field_bc_paper_stock']['table'] = 'field_data_field_bc_paper_stock';
  $handler->display->display_options['fields']['field_bc_paper_stock']['field'] = 'field_bc_paper_stock';
  /* Field: Content: Paper Weight */
  $handler->display->display_options['fields']['field_bc_paper_weight']['id'] = 'field_bc_paper_weight';
  $handler->display->display_options['fields']['field_bc_paper_weight']['table'] = 'field_data_field_bc_paper_weight';
  $handler->display->display_options['fields']['field_bc_paper_weight']['field'] = 'field_bc_paper_weight';
  /* Field: Content: Color Option */
  $handler->display->display_options['fields']['field_bc_color_option']['id'] = 'field_bc_color_option';
  $handler->display->display_options['fields']['field_bc_color_option']['table'] = 'field_data_field_bc_color_option';
  $handler->display->display_options['fields']['field_bc_color_option']['field'] = 'field_bc_color_option';
  /* Field: Content: Side */
  $handler->display->display_options['fields']['field_bc_sides']['id'] = 'field_bc_sides';
  $handler->display->display_options['fields']['field_bc_sides']['table'] = 'field_data_field_bc_sides';
  $handler->display->display_options['fields']['field_bc_sides']['field'] = 'field_bc_sides';
  /* Field: Content: Delivery */
  $handler->display->display_options['fields']['field_uc_delivery']['id'] = 'field_uc_delivery';
  $handler->display->display_options['fields']['field_uc_delivery']['table'] = 'field_data_field_uc_delivery';
  $handler->display->display_options['fields']['field_uc_delivery']['field'] = 'field_uc_delivery';
  /* Field: Product: Display price */
  $handler->display->display_options['fields']['display_price']['id'] = 'display_price';
  $handler->display->display_options['fields']['display_price']['table'] = 'uc_products';
  $handler->display->display_options['fields']['display_price']['field'] = 'display_price';
  /* Field: Product: Add to cart form */
  $handler->display->display_options['fields']['addtocartlink']['id'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['table'] = 'uc_products';
  $handler->display->display_options['fields']['addtocartlink']['field'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['label'] = 'Add to cart';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'business_card' => 'business_card',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Product: Package quantity */
  $handler->display->display_options['filters']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['filters']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['group'] = 1;
  $handler->display->display_options['filters']['pkg_qty']['exposed'] = TRUE;
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator_id'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['label'] = 'Quantity';
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['identifier'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Side (field_bc_sides) */
  $handler->display->display_options['filters']['field_bc_sides_value']['id'] = 'field_bc_sides_value';
  $handler->display->display_options['filters']['field_bc_sides_value']['table'] = 'field_data_field_bc_sides';
  $handler->display->display_options['filters']['field_bc_sides_value']['field'] = 'field_bc_sides_value';
  $handler->display->display_options['filters']['field_bc_sides_value']['group'] = 1;
  $handler->display->display_options['filters']['field_bc_sides_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_bc_sides_value']['expose']['operator_id'] = 'field_bc_sides_value_op';
  $handler->display->display_options['filters']['field_bc_sides_value']['expose']['label'] = 'Side';
  $handler->display->display_options['filters']['field_bc_sides_value']['expose']['operator'] = 'field_bc_sides_value_op';
  $handler->display->display_options['filters']['field_bc_sides_value']['expose']['identifier'] = 'field_bc_sides_value';
  $handler->display->display_options['filters']['field_bc_sides_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Stock (field_bc_paper_stock) */
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['id'] = 'field_bc_paper_stock_value';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['table'] = 'field_data_field_bc_paper_stock';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['field'] = 'field_bc_paper_stock_value';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['group'] = 1;
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['expose']['operator_id'] = 'field_bc_paper_stock_value_op';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['expose']['label'] = 'Paper Stock';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['expose']['operator'] = 'field_bc_paper_stock_value_op';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['expose']['identifier'] = 'field_bc_paper_stock_value';
  $handler->display->display_options['filters']['field_bc_paper_stock_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Weight (field_bc_paper_weight) */
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['id'] = 'field_bc_paper_weight_value';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['table'] = 'field_data_field_bc_paper_weight';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['field'] = 'field_bc_paper_weight_value';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['group'] = 1;
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['expose']['operator_id'] = 'field_bc_paper_weight_value_op';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['expose']['label'] = 'Paper Weight';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['expose']['operator'] = 'field_bc_paper_weight_value_op';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['expose']['identifier'] = 'field_bc_paper_weight_value';
  $handler->display->display_options['filters']['field_bc_paper_weight_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: UV Coating (field_bc_uv_coating) */
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['id'] = 'field_bc_uv_coating_value';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['table'] = 'field_data_field_bc_uv_coating';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['field'] = 'field_bc_uv_coating_value';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['group'] = 1;
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['expose']['operator_id'] = 'field_bc_uv_coating_value_op';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['expose']['label'] = 'UV Coating';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['expose']['operator'] = 'field_bc_uv_coating_value_op';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['expose']['identifier'] = 'field_bc_uv_coating_value';
  $handler->display->display_options['filters']['field_bc_uv_coating_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Delivery (field_uc_delivery) */
  $handler->display->display_options['filters']['field_uc_delivery_value']['id'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['table'] = 'field_data_field_uc_delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['field'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['group'] = 1;
  $handler->display->display_options['filters']['field_uc_delivery_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator_id'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['label'] = 'Delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['identifier'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  $handler->display->display_options['path'] = 'print-search';

  /* Display: Flyers */
  $handler = $view->new_display('page', 'Flyers', 'page_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Flyers';
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['exclude'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Flyers';
  /* Field: Product: Package quantity */
  $handler->display->display_options['fields']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['fields']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['fields']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['fields']['pkg_qty']['label'] = 'Quantity';
  /* Field: Product: Sell price */
  $handler->display->display_options['fields']['sell_price']['id'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['table'] = 'uc_products';
  $handler->display->display_options['fields']['sell_price']['field'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['label'] = 'Price';
  $handler->display->display_options['fields']['sell_price']['precision'] = '0';
  /* Field: Product: Add to cart form */
  $handler->display->display_options['fields']['addtocartlink']['id'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['table'] = 'uc_products';
  $handler->display->display_options['fields']['addtocartlink']['field'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['label'] = 'Add to cart';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'flyers' => 'flyers',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Product: Package quantity */
  $handler->display->display_options['filters']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['filters']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['group'] = 1;
  $handler->display->display_options['filters']['pkg_qty']['exposed'] = TRUE;
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator_id'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['label'] = 'Quantity';
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['identifier'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Color Option (field_f_color_option) */
  $handler->display->display_options['filters']['field_f_color_option_value']['id'] = 'field_f_color_option_value';
  $handler->display->display_options['filters']['field_f_color_option_value']['table'] = 'field_data_field_f_color_option';
  $handler->display->display_options['filters']['field_f_color_option_value']['field'] = 'field_f_color_option_value';
  $handler->display->display_options['filters']['field_f_color_option_value']['group'] = 1;
  $handler->display->display_options['filters']['field_f_color_option_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_f_color_option_value']['expose']['operator_id'] = 'field_f_color_option_value_op';
  $handler->display->display_options['filters']['field_f_color_option_value']['expose']['label'] = 'Color';
  $handler->display->display_options['filters']['field_f_color_option_value']['expose']['operator'] = 'field_f_color_option_value_op';
  $handler->display->display_options['filters']['field_f_color_option_value']['expose']['identifier'] = 'field_f_color_option_value';
  $handler->display->display_options['filters']['field_f_color_option_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Delivery (field_uc_delivery) */
  $handler->display->display_options['filters']['field_uc_delivery_value']['id'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['table'] = 'field_data_field_uc_delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['field'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['group'] = 1;
  $handler->display->display_options['filters']['field_uc_delivery_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator_id'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['label'] = 'Delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['identifier'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Size (field_f_paper_size) */
  $handler->display->display_options['filters']['field_f_paper_size_value']['id'] = 'field_f_paper_size_value';
  $handler->display->display_options['filters']['field_f_paper_size_value']['table'] = 'field_data_field_f_paper_size';
  $handler->display->display_options['filters']['field_f_paper_size_value']['field'] = 'field_f_paper_size_value';
  $handler->display->display_options['filters']['field_f_paper_size_value']['group'] = 1;
  $handler->display->display_options['filters']['field_f_paper_size_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_f_paper_size_value']['expose']['operator_id'] = 'field_f_paper_size_value_op';
  $handler->display->display_options['filters']['field_f_paper_size_value']['expose']['label'] = 'Paper Size';
  $handler->display->display_options['filters']['field_f_paper_size_value']['expose']['operator'] = 'field_f_paper_size_value_op';
  $handler->display->display_options['filters']['field_f_paper_size_value']['expose']['identifier'] = 'field_f_paper_size_value';
  $handler->display->display_options['filters']['field_f_paper_size_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Side (field_f_side) */
  $handler->display->display_options['filters']['field_f_side_value']['id'] = 'field_f_side_value';
  $handler->display->display_options['filters']['field_f_side_value']['table'] = 'field_data_field_f_side';
  $handler->display->display_options['filters']['field_f_side_value']['field'] = 'field_f_side_value';
  $handler->display->display_options['filters']['field_f_side_value']['group'] = 1;
  $handler->display->display_options['filters']['field_f_side_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_f_side_value']['expose']['operator_id'] = 'field_f_side_value_op';
  $handler->display->display_options['filters']['field_f_side_value']['expose']['label'] = 'Side';
  $handler->display->display_options['filters']['field_f_side_value']['expose']['operator'] = 'field_f_side_value_op';
  $handler->display->display_options['filters']['field_f_side_value']['expose']['identifier'] = 'field_f_side_value';
  $handler->display->display_options['filters']['field_f_side_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  $handler->display->display_options['path'] = 'print-search';

  /* Display: Letterheads */
  $handler = $view->new_display('page', 'Letterheads', 'page_2');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Letterheads';
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['exclude'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = 'Printer Name';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  /* Field: Product: Sell price */
  $handler->display->display_options['fields']['sell_price']['id'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['table'] = 'uc_products';
  $handler->display->display_options['fields']['sell_price']['field'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['label'] = 'Price';
  $handler->display->display_options['fields']['sell_price']['precision'] = '0';
  /* Field: Content: Paper Stock */
  $handler->display->display_options['fields']['field_f_paper_stock']['id'] = 'field_f_paper_stock';
  $handler->display->display_options['fields']['field_f_paper_stock']['table'] = 'field_data_field_f_paper_stock';
  $handler->display->display_options['fields']['field_f_paper_stock']['field'] = 'field_f_paper_stock';
  /* Field: Product: Package quantity */
  $handler->display->display_options['fields']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['fields']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['fields']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['fields']['pkg_qty']['label'] = 'Quantity';
  /* Field: Content: Paper Weight */
  $handler->display->display_options['fields']['field_lh_paper_weight']['id'] = 'field_lh_paper_weight';
  $handler->display->display_options['fields']['field_lh_paper_weight']['table'] = 'field_data_field_lh_paper_weight';
  $handler->display->display_options['fields']['field_lh_paper_weight']['field'] = 'field_lh_paper_weight';
  /* Field: Product: Add to cart form */
  $handler->display->display_options['fields']['addtocartlink']['id'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['table'] = 'uc_products';
  $handler->display->display_options['fields']['addtocartlink']['field'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['label'] = 'Add to cart';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Product: Package quantity */
  $handler->display->display_options['filters']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['filters']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['group'] = 1;
  $handler->display->display_options['filters']['pkg_qty']['exposed'] = TRUE;
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator_id'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['label'] = 'Quantity';
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['identifier'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'letterheads' => 'letterheads',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Size (field_lh_size) */
  $handler->display->display_options['filters']['field_lh_size_value']['id'] = 'field_lh_size_value';
  $handler->display->display_options['filters']['field_lh_size_value']['table'] = 'field_data_field_lh_size';
  $handler->display->display_options['filters']['field_lh_size_value']['field'] = 'field_lh_size_value';
  $handler->display->display_options['filters']['field_lh_size_value']['group'] = 1;
  $handler->display->display_options['filters']['field_lh_size_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_lh_size_value']['expose']['operator_id'] = 'field_lh_size_value_op';
  $handler->display->display_options['filters']['field_lh_size_value']['expose']['label'] = 'Size';
  $handler->display->display_options['filters']['field_lh_size_value']['expose']['operator'] = 'field_lh_size_value_op';
  $handler->display->display_options['filters']['field_lh_size_value']['expose']['identifier'] = 'field_lh_size_value';
  $handler->display->display_options['filters']['field_lh_size_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Stock (field_lh_paper_stock) */
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['id'] = 'field_lh_paper_stock_value';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['table'] = 'field_data_field_lh_paper_stock';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['field'] = 'field_lh_paper_stock_value';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['group'] = 1;
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['expose']['operator_id'] = 'field_lh_paper_stock_value_op';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['expose']['label'] = 'Paper Stock';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['expose']['operator'] = 'field_lh_paper_stock_value_op';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['expose']['identifier'] = 'field_lh_paper_stock_value';
  $handler->display->display_options['filters']['field_lh_paper_stock_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Weight (field_lh_paper_weight) */
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['id'] = 'field_lh_paper_weight_value';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['table'] = 'field_data_field_lh_paper_weight';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['field'] = 'field_lh_paper_weight_value';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['group'] = 1;
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['expose']['operator_id'] = 'field_lh_paper_weight_value_op';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['expose']['label'] = 'Paper Weight';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['expose']['operator'] = 'field_lh_paper_weight_value_op';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['expose']['identifier'] = 'field_lh_paper_weight_value';
  $handler->display->display_options['filters']['field_lh_paper_weight_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Delivery (field_uc_delivery) */
  $handler->display->display_options['filters']['field_uc_delivery_value']['id'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['table'] = 'field_data_field_uc_delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['field'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['group'] = 1;
  $handler->display->display_options['filters']['field_uc_delivery_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator_id'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['label'] = 'Delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['identifier'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  $handler->display->display_options['path'] = 'print-search';

  /* Display: Complementary Slips */
  $handler = $view->new_display('page', 'Complementary Slips', 'page_3');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Complementary Slips';
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = 'Printer Name';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  /* Field: Content: Product */
  $handler->display->display_options['fields']['field_product']['id'] = 'field_product';
  $handler->display->display_options['fields']['field_product']['table'] = 'field_data_field_product';
  $handler->display->display_options['fields']['field_product']['field'] = 'field_product';
  $handler->display->display_options['fields']['field_product']['label'] = 'Complimentary Slips ';
  $handler->display->display_options['fields']['field_product']['element_label_colon'] = FALSE;
  /* Field: Content: Paper Stock */
  $handler->display->display_options['fields']['field_cs_paper_stock']['id'] = 'field_cs_paper_stock';
  $handler->display->display_options['fields']['field_cs_paper_stock']['table'] = 'field_data_field_cs_paper_stock';
  $handler->display->display_options['fields']['field_cs_paper_stock']['field'] = 'field_cs_paper_stock';
  /* Field: Content: Paper Weight */
  $handler->display->display_options['fields']['field_cs_paper_weight']['id'] = 'field_cs_paper_weight';
  $handler->display->display_options['fields']['field_cs_paper_weight']['table'] = 'field_data_field_cs_paper_weight';
  $handler->display->display_options['fields']['field_cs_paper_weight']['field'] = 'field_cs_paper_weight';
  /* Field: Content: Size */
  $handler->display->display_options['fields']['field_cs_size']['id'] = 'field_cs_size';
  $handler->display->display_options['fields']['field_cs_size']['table'] = 'field_data_field_cs_size';
  $handler->display->display_options['fields']['field_cs_size']['field'] = 'field_cs_size';
  /* Field: Product: Package quantity */
  $handler->display->display_options['fields']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['fields']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['fields']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['fields']['pkg_qty']['label'] = 'Quantity';
  /* Field: Product: Sell price */
  $handler->display->display_options['fields']['sell_price']['id'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['table'] = 'uc_products';
  $handler->display->display_options['fields']['sell_price']['field'] = 'sell_price';
  $handler->display->display_options['fields']['sell_price']['label'] = 'Price';
  $handler->display->display_options['fields']['sell_price']['precision'] = '0';
  /* Field: Product: Add to cart form */
  $handler->display->display_options['fields']['addtocartlink']['id'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['table'] = 'uc_products';
  $handler->display->display_options['fields']['addtocartlink']['field'] = 'addtocartlink';
  $handler->display->display_options['fields']['addtocartlink']['label'] = 'Add to cart';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'compliment_slips' => 'compliment_slips',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Product: Package quantity */
  $handler->display->display_options['filters']['pkg_qty']['id'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['table'] = 'uc_products';
  $handler->display->display_options['filters']['pkg_qty']['field'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['group'] = 1;
  $handler->display->display_options['filters']['pkg_qty']['exposed'] = TRUE;
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator_id'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['label'] = 'Quantity';
  $handler->display->display_options['filters']['pkg_qty']['expose']['operator'] = 'pkg_qty_op';
  $handler->display->display_options['filters']['pkg_qty']['expose']['identifier'] = 'pkg_qty';
  $handler->display->display_options['filters']['pkg_qty']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Stock (field_cs_paper_stock) */
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['id'] = 'field_cs_paper_stock_value';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['table'] = 'field_data_field_cs_paper_stock';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['field'] = 'field_cs_paper_stock_value';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['group'] = 1;
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['expose']['operator_id'] = 'field_cs_paper_stock_value_op';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['expose']['label'] = 'Paper Stock';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['expose']['operator'] = 'field_cs_paper_stock_value_op';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['expose']['identifier'] = 'field_cs_paper_stock_value';
  $handler->display->display_options['filters']['field_cs_paper_stock_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Paper Weight (field_cs_paper_weight) */
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['id'] = 'field_cs_paper_weight_value';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['table'] = 'field_data_field_cs_paper_weight';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['field'] = 'field_cs_paper_weight_value';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['group'] = 1;
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['expose']['operator_id'] = 'field_cs_paper_weight_value_op';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['expose']['label'] = 'Paper Weight';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['expose']['operator'] = 'field_cs_paper_weight_value_op';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['expose']['identifier'] = 'field_cs_paper_weight_value';
  $handler->display->display_options['filters']['field_cs_paper_weight_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Size (field_cs_size) */
  $handler->display->display_options['filters']['field_cs_size_value']['id'] = 'field_cs_size_value';
  $handler->display->display_options['filters']['field_cs_size_value']['table'] = 'field_data_field_cs_size';
  $handler->display->display_options['filters']['field_cs_size_value']['field'] = 'field_cs_size_value';
  $handler->display->display_options['filters']['field_cs_size_value']['group'] = 1;
  $handler->display->display_options['filters']['field_cs_size_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_cs_size_value']['expose']['operator_id'] = 'field_cs_size_value_op';
  $handler->display->display_options['filters']['field_cs_size_value']['expose']['label'] = 'Size';
  $handler->display->display_options['filters']['field_cs_size_value']['expose']['operator'] = 'field_cs_size_value_op';
  $handler->display->display_options['filters']['field_cs_size_value']['expose']['identifier'] = 'field_cs_size_value';
  $handler->display->display_options['filters']['field_cs_size_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  /* Filter criterion: Content: Delivery (field_uc_delivery) */
  $handler->display->display_options['filters']['field_uc_delivery_value']['id'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['table'] = 'field_data_field_uc_delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['field'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['group'] = 1;
  $handler->display->display_options['filters']['field_uc_delivery_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator_id'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['label'] = 'Delivery';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['operator'] = 'field_uc_delivery_value_op';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['identifier'] = 'field_uc_delivery_value';
  $handler->display->display_options['filters']['field_uc_delivery_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );
  $handler->display->display_options['path'] = 'print-search';
  $export['print_search'] = $view;

  return $export;
}
