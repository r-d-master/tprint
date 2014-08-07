<!-- Place somewhere in the <body> of your page -->
<?php
$flex_img1 = theme_get_setting('flex_img1');
$flex_img2 = theme_get_setting('flex_img2');
$flex_img3 = theme_get_setting('flex_img3');
$flex_img4 = theme_get_setting('flex_img4');
$flex_img5 = theme_get_setting('flex_img5');
$flex_img6 = theme_get_setting('flex_img6');
?>

<?php if($flex_img1 || $flex_img2 || $flex_img3 || $flex_img4 || $flex_img5 || $flex_img6){ ?>
<div class="flexslider" style="max-width: <?php print theme_get_setting('flex_width')?>">
  <ul class="slides">
  	
  	<?php if($flex_img1 != ''){ ?>
    <li>
      <img src="<?php print $flex_img1 ?>" />
    </li>
    <?php } ?>
    
    <?php if($flex_img2 != ''){ ?>
    <li>
      <img src="<?php print $flex_img2 ?>" />
    </li>
    <?php } ?>
    
    <?php if($flex_img3 != ''){ ?>
    <li>
      <img src="<?php print $flex_img3 ?>" />
    </li>
    <?php } ?>
    
    <?php if($flex_img4 != ''){ ?>
    <li>
      <img src="<?php print $flex_img4 ?>" />
    </li>
    <?php } ?>
    
    <?php if($flex_img5 != ''){ ?>
    <li>
      <img src="<?php print $flex_img5 ?>" />
    </li>
    <?php } ?>
    
    <?php if($flex_img6 != ''){ ?>
    <li>
      <img src="<?php print $flex_img6 ?>" />
    </li>
    <?php } ?>
    
  </ul>
</div>
<?php } ?>