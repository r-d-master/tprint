<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>

<div class="slideshow" id="slideshow">
             <?php print $rows; ?>
      </div><!-- /slideshow -->
<script>
      new TiltSlider( document.getElementById( 'slideshow' ) );
      jQuery(document).ready(function($){
var el=1;
repeat(7000,function(){
if(el==7){
$('#slideshow nav span:nth-child(1)').click();
el=2;
}
else{
$('#slideshow nav span:nth-child('+el+')').click();
el=el+1;
}
});
});
    </script>

