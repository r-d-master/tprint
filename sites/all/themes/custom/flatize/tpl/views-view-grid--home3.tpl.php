<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */

$col_classes = array(
  array('two-col', 'one-col', 'one-col'),
  array('one-col', 'two-col', 'one-col'),
);
?>
<?php if (!empty($title)) : ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
<div class="<?php print $class; ?>"<?php print $attributes; ?>>
  <?php foreach ($rows as $row_number => $columns): ?>
    <div class="views-row <?php print $row_classes[$row_number]; ?> clearfix">
      <?php foreach ($columns as $column_number => $item): ?>
        <?php if (!empty($item)):?>
          <div class="grid <?php print $col_classes[$row_number][$column_number]; ?> <?php print $column_classes[$row_number][$column_number]; ?>">
            <div class="grid-inner col-inner clearfix">
              <?php print $item; ?>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>
