<?php
/**
 * @file
 * f_tcss_cart.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function f_tcss_cart_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'access administration menu'.
  $permissions['access administration menu'] = array(
    'name' => 'access administration menu',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'admin_menu',
  );

  // Exported permission: 'access comments'.
  $permissions['access comments'] = array(
    'name' => 'access comments',
    'roles' => array(
      'administrator' => 'administrator',
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'comment',
  );

  // Exported permission: 'access user profiles'.
  $permissions['access user profiles'] = array(
    'name' => 'access user profiles',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'user',
  );

  // Exported permission: 'administer autoassignrole'.
  $permissions['administer autoassignrole'] = array(
    'name' => 'administer autoassignrole',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'autoassignrole',
  );

  // Exported permission: 'administer comments'.
  $permissions['administer comments'] = array(
    'name' => 'administer comments',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'comment',
  );

  // Exported permission: 'administer credit cards'.
  $permissions['administer credit cards'] = array(
    'name' => 'administer credit cards',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'uc_credit',
  );

  // Exported permission: 'administer order workflow'.
  $permissions['administer order workflow'] = array(
    'name' => 'administer order workflow',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'uc_order',
  );

  // Exported permission: 'administer store'.
  $permissions['administer store'] = array(
    'name' => 'administer store',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'uc_store',
  );

  // Exported permission: 'administer users'.
  $permissions['administer users'] = array(
    'name' => 'administer users',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'user',
  );

  // Exported permission: 'create business_card content'.
  $permissions['create business_card content'] = array(
    'name' => 'create business_card content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'create compliment_slips content'.
  $permissions['create compliment_slips content'] = array(
    'name' => 'create compliment_slips content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'create flyers content'.
  $permissions['create flyers content'] = array(
    'name' => 'create flyers content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'create letterheads content'.
  $permissions['create letterheads content'] = array(
    'name' => 'create letterheads content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any business_card content'.
  $permissions['delete any business_card content'] = array(
    'name' => 'delete any business_card content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any compliment_slips content'.
  $permissions['delete any compliment_slips content'] = array(
    'name' => 'delete any compliment_slips content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any flyers content'.
  $permissions['delete any flyers content'] = array(
    'name' => 'delete any flyers content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any letterheads content'.
  $permissions['delete any letterheads content'] = array(
    'name' => 'delete any letterheads content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete orders'.
  $permissions['delete orders'] = array(
    'name' => 'delete orders',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'uc_order',
  );

  // Exported permission: 'delete own business_card content'.
  $permissions['delete own business_card content'] = array(
    'name' => 'delete own business_card content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own compliment_slips content'.
  $permissions['delete own compliment_slips content'] = array(
    'name' => 'delete own compliment_slips content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own flyers content'.
  $permissions['delete own flyers content'] = array(
    'name' => 'delete own flyers content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own letterheads content'.
  $permissions['delete own letterheads content'] = array(
    'name' => 'delete own letterheads content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any business_card content'.
  $permissions['edit any business_card content'] = array(
    'name' => 'edit any business_card content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any compliment_slips content'.
  $permissions['edit any compliment_slips content'] = array(
    'name' => 'edit any compliment_slips content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any flyers content'.
  $permissions['edit any flyers content'] = array(
    'name' => 'edit any flyers content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any letterheads content'.
  $permissions['edit any letterheads content'] = array(
    'name' => 'edit any letterheads content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit orders'.
  $permissions['edit orders'] = array(
    'name' => 'edit orders',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'uc_order',
  );

  // Exported permission: 'edit own business_card content'.
  $permissions['edit own business_card content'] = array(
    'name' => 'edit own business_card content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own compliment_slips content'.
  $permissions['edit own compliment_slips content'] = array(
    'name' => 'edit own compliment_slips content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own flyers content'.
  $permissions['edit own flyers content'] = array(
    'name' => 'edit own flyers content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own letterheads content'.
  $permissions['edit own letterheads content'] = array(
    'name' => 'edit own letterheads content',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'flush caches'.
  $permissions['flush caches'] = array(
    'name' => 'flush caches',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'admin_menu',
  );

  // Exported permission: 'process credit cards'.
  $permissions['process credit cards'] = array(
    'name' => 'process credit cards',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'uc_credit',
  );

  // Exported permission: 'view all orders'.
  $permissions['view all orders'] = array(
    'name' => 'view all orders',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'uc_order',
  );

  // Exported permission: 'view cc details'.
  $permissions['view cc details'] = array(
    'name' => 'view cc details',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'uc_credit',
  );

  // Exported permission: 'view customers'.
  $permissions['view customers'] = array(
    'name' => 'view customers',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'uc_order',
  );

  // Exported permission: 'view own invoices'.
  $permissions['view own invoices'] = array(
    'name' => 'view own invoices',
    'roles' => array(
      'administrator' => 'administrator',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'uc_order',
  );

  // Exported permission: 'view own orders'.
  $permissions['view own orders'] = array(
    'name' => 'view own orders',
    'roles' => array(
      'administrator' => 'administrator',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'uc_order',
  );

  // Exported permission: 'view payments'.
  $permissions['view payments'] = array(
    'name' => 'view payments',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'uc_payment',
  );

  // Exported permission: 'view reports'.
  $permissions['view reports'] = array(
    'name' => 'view reports',
    'roles' => array(
      'Site Administrator' => 'Site Administrator',
      'administrator' => 'administrator',
    ),
    'module' => 'uc_store',
  );

  return $permissions;
}
