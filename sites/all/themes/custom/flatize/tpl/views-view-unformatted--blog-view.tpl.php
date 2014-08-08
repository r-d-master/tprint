<?php
/**
 * @file
 * Flatize's theme implementation to display a view unformatted -- blog view.
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <?php $ntype = isset($view->result[$id]->_field_data) ? $view->result[$id]->_field_data['nid']['entity']->type : ''; ?>
  <div class="<?php print $ntype ? 'wp-' . $ntype . ' ' : ''; ?><?php print $classes_array[$id] ? $classes_array[$id] : ''; ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
