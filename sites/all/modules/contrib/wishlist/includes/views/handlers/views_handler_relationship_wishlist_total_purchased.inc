<?php
/**
 * @file
 * Views' relationship handlers.
 */

class views_handler_relationship_wishlist_total_purchased extends views_handler_relationship {
  /*
   function option_definition() {
   $options = parent::option_definition();
   $options['vids'] = array('default' => array());
   return $options;
   }
   */
  /**
   * Default options form that provides the label widget that all fields
   * should have.
   */
  /*
   function options_form(&$form, &$form_state) {
   parent::options_form($form, $form_state);
   $vocabularies = taxonomy_get_vocabularies();
   $options = array();
   foreach ($vocabularies as $voc) {
   $options[$voc->vid] = check_plain($voc->name);
   }

   $form['vids'] = array(
   '#type' => 'checkboxes',
   '#title' => t('Vocabularies'),
   '#options' => $options,
   '#default_value' => $this->options['vids'],
   '#description' => t('Choose which vocabularies you wish to relate. Remember that every term found will create a new record, so this relationship is best used on just one vocabulary that has only one term per node.'),
   );
   }
   */
  /**
   * Called to implement a relationship in a query.
   */
  function query() {
    $this->ensure_my_table();

    $def = $this->definition;
    $def['table'] = 'wishlist_total_purchased';

    // If required relationship, do an inner join
    if (!empty($this->options['required'])) {
      $def['type'] = 'INNER';
    }
    $def['left_table'] = $this->table_alias; // ???
    $def['left_field'] = 'nid'; // the field in the table 'wishlist'
    $def['field'] = 'wishlist_total_purch_nid'; // the field in the joined table (the table we are constructing)

    // Join wishlist_purchased, take the sum of all the purchases for one item.
    $tmp_query = "(SELECT\n";
    $tmp_query .= "  wl.nid as wishlist_total_purch_nid,\n";
    $tmp_query .= "  sum(wishlist_purch_quantity) AS sum_wishlist_purch_quantity,\n";
    $tmp_query .= "  item_quantity_requested\n";
    $tmp_query .= "  -sum(case when wishlist_purch_quantity>0 then wishlist_purch_quantity else 0 end)\n";
    $tmp_query .= "  as items_left_to_purchase\n";
    $tmp_query .= "FROM {wishlist} wl\n";
    $tmp_query .= "LEFT JOIN {wishlist_purchased} wp ON wp.wishlist_purch_nid=wl.nid ";
    $tmp_query .= "GROUP BY wl.nid)";
    $def['table formula'] = $tmp_query;

    $join = new views_join();

    $join->definition = $def;
    $join->construct();
    $join->adjusted = TRUE;

    // use a short alias for this:
    $alias = $def['table'] . '_' . $this->table; // def['table'] is defined in this function, this->table is 'wishlist'

    $this->alias = $this->query->add_relationship($alias, $join, $def['table'], $this->relationship);
  }
}

