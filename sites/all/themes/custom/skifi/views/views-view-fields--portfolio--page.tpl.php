<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

if(isset($row->field_field_image)){
	if(array_key_exists('0', $row->field_field_image)){
		if(array_key_exists('rendered', $row->field_field_image[0])){
			if(array_key_exists('#item', $row->field_field_image[0]['rendered'])){
				if(array_key_exists('uri', $row->field_field_image[0]['rendered']['#item'])){
				
					$image =  $row->field_field_image[0]['rendered']['#item']['uri'];
					$image_url = image_style_url('portfolio_thumb_1', $image);
                    $large_image_url = image_style_url('large', $image);
								
				}
			}
		}
	}
} 


if(isset($row->_field_data)){
	if(array_key_exists('nid', $row->_field_data)){
		if(array_key_exists('entity', $row->_field_data['nid'])){
			if(isset($row->_field_data['nid']['entity']->body)){
				if(array_key_exists('und', $row->_field_data['nid']['entity']->body)){
					if(array_key_exists('0', $row->_field_data['nid']['entity']->body['und'])){
						if(array_key_exists('safe_value', $row->_field_data['nid']['entity']->body['und'][0])){
								
							$body_text = $row->_field_data['nid']['entity']->body['und'][0]['safe_value'];
							$body_text = substr($body_text,0,50).'...';
							$body_text = strip_tags($body_text);
						}						
					}					
				}
			}			
		}
	}
}

$enlarge = t('Zoom');
$view_text = t('View Full');
$node_path = "node/".$row->nid;
$path = drupal_get_path_alias($node_path);
$path_link = l(t('View Project'), $path, array('title' => t('View Project')));
$click = t('Click to view project');
$full_node = " <a class='label label-theme ' href='$path'>$view_text</a>";


/*
 Implementing portfolio effect 
 Credit: http://tympanus.net/codrops/2012/08/08/circle-hover-effects-with-css-transitions/
*/

?>
<div class="img-mask-hover">
	<a class="cboxElement" href="<?php if(isset($large_image_url))  print $large_image_url ?>" title="<?php print '<strong>'. $row->node_title . '</strong>'; print ' - '; if(isset($body_text))  print $body_text . $full_node ?> " ><img class="portfolio-enlarge" alt="zoom" src="<?php print base_path() . path_to_theme() ?>/images/icons/magnifier_zoom_in.png"  /></a> 
	<a href='<?php print $path ?>'><img class="portfolio-link" alt="zoom" src="<?php print base_path() . path_to_theme() ?>/images/icons/link.png"  /></a>
</div> 


<?php //print "<a href='$path'>View</a>" ?>

<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php  print $field->content; ?>
    <?php  // print_r($row); ?>
    
  <?php print $field->wrapper_suffix; ?>
<?php endforeach; ?>











