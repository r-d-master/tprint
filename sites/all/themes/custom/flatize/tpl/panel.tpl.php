<?php
/**
 * @file
 * Flatize's theme implementation to display a single Drupal pagel.
 */
?>
<?php if(!$empty_panel):?>
  <?php foreach ($panels_list as $panel): ?>
    <?php if ($panel_width[$panel]) :?>
      <div class="<?php print $panel_classes[$panel];?>">
        <div class="grid-inner clearfix">
          <?php if ($panel_content = render($page[$panel])): ?>
            <?php print $panel_content; ?>
          <?php else:?>
            &nbsp;
          <?php endif;?>
        </div>
      </div>
    <?php endif;?>
  <?php endforeach;?>
<?php endif;?>
