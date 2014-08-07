<?php
//$search["search_block_form"] = str_replace('value=""', 'value="search..." onblur="setTimeout(\'closeResults()\',2000); if (this.value == \'\') {this.value = \'\';}"  onfocus="if (this.value == \'search...\') {this.value = \'\';}" ', $search["search_block_form"]);


$search["actions"] = '<input id="search-submit-topbar" type="image" src="' .  base_path() . path_to_theme() . '/images/search.png"    />';
$search["search_block_form"] = str_replace('value=""', 'value="search..." onblur="setTimeout(\'closeResults()\',2000); if (this.value == \'\') {this.value = \'\';}"  onfocus="if (this.value == \'search...\') {this.value = \'\';}" ', $search["search_block_form"]);

?>

<div class="container-inline">
<?php
  print $search["search_block_form"];
  print $search['actions'];
  print $search["hidden"];  
  
  if (isset($search['extra_field'])): ?>
    <div class="extra-field">
      <?php print $search['extra_field']; ?>
    </div>
  <?php endif; ?>
</div>