<?php
$string = $content;	
				
// replace	
$string = str_replace('[row]', '<div class="row-fluid">', $string);
$string = str_replace('[/row]', '</div>', $string);

$string = str_replace('[one]', '<div class="span12">', $string);
$string = str_replace('[/one]', '</div>', $string);
	 
$string = str_replace('[oneHalf]', '<div class="span6">', $string);
$string = str_replace('[/oneHalf]', '</div>', $string);

$string = str_replace('[oneThird]', '<div class="span4">', $string);
$string = str_replace('[/oneThird]', '</div>', $string);

$string = str_replace('[oneFourth]', '<div class="span3">', $string);
$string = str_replace('[/oneFourth]', '</div>', $string);

$string = str_replace('[oneFifth]', '<div class="span2">', $string);
$string = str_replace('[/oneFifth]', '</div>', $string);

$string = str_replace('[oneSixth]', '<div class="span2">', $string);
$string = str_replace('[/oneSixth]', '</div>', $string);

$string = str_replace('[twoThird]', '<div class="span8">', $string);
$string = str_replace('[/twoThird]', '</div>', $string);

$string = str_replace('[threeFourth]', '<div class="span9">', $string);
$string = str_replace('[/threeFourth]', '</div>', $string);

$string = str_replace('[fiveSixth]', '<div class="span10">', $string);
$string = str_replace('[/fiveSixth]', '</div>', $string);

$string = str_replace('[color]', '<span class="color">', $string);
$string = str_replace('[/color]', '</span>', $string);

$string = str_replace('[h1 bordered]', '<h1 class="bordered">', $string);
$string = str_replace('[/h1]', '</h1>', $string);

$string = str_replace('[h2 bordered]', '<h2 class="bordered">', $string);
$string = str_replace('[/h2]', '</h2>', $string);

$string = str_replace('[h3 bordered]', '<h3 class="bordered">', $string);
$string = str_replace('[/h3]', '</h3>', $string);

$string = str_replace('[lineBorder center]', '<div class="border center"></div>', $string);

$string = str_replace('[lineBorder left]', '<div class="border left"></div>', $string);

$string = str_replace('[lineBorder right]', '<div class="border right"></div>', $string);

$content = $string;

?>

<?php
$close = t('close');
?>

<div tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="myModal" class="clearfix modal hide fade in <?php print $classes; ?>"<?php print $attributes; ?>>

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
		×
	</button>
	<?php print render($title_prefix); ?>
	<?php if (!empty($block->subject)): ?>
		<h3 class="blocktitle"><?php print $block->subject ?></h3>
	<?php endif;?>
	<?php print render($title_suffix); ?>
</div>


	<div class="modal-body content">
		<?php print $content; ?>
	</div>

	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">
			<?php print $close ?>
		</button>
	</div>

</div>
