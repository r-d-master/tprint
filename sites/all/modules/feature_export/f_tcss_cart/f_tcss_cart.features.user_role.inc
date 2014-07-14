<?php
/**
 * @file
 * f_tcss_cart.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function f_tcss_cart_user_default_roles() {
  $roles = array();

  // Exported role: Customer.
  $roles['Customer'] = array(
    'name' => 'Customer',
    'weight' => 5,
  );

  // Exported role: Seller.
  $roles['Seller'] = array(
    'name' => 'Seller',
    'weight' => 3,
  );

  // Exported role: Site Administrator.
  $roles['Site Administrator'] = array(
    'name' => 'Site Administrator',
    'weight' => 4,
  );

  // Exported role: administrator.
  $roles['administrator'] = array(
    'name' => 'administrator',
    'weight' => 2,
  );

  return $roles;
}
