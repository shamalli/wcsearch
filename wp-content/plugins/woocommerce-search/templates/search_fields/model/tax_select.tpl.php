<div class="wcsearch-search-model-input wcsearch-search-model-input-tax-select" <?php echo $search_model->getOptionsString(); ?>>
	<label class="wcsearch-search-model-input-label"><?php echo esc_html($title); ?></label>
	
	<?php
	if ($mode == 'multi_dropdown') {
	
		$term_id = 0;
		
		if (is_numeric($values)) {
			$term_id = $values;
		} else {
			$term_id = explode(',', $values);
		}
		$functionality_class = 'wcsearch-multiselect-dropdown';
		
		$params = array(
				'tax' => $tax_name,
				'field_name' => $slug,
				'depth' => $depth,
				'term_id' => $term_id,
				'count' => $counter,
				'uID' => null,
				'hide_empty' => $hide_empty,
				'functionality' => $functionality_class,
				'orderby' => $orderby,
				'order' => $order,
		);
		wcsearch_tax_dropdowns_menu_init($params);
	} else {
	?>
	<select name="field_<?php echo esc_attr($slug); ?>" name="field_<?php echo esc_attr($slug); ?>" class="wcsearch-form-control">
		<option value=""><?php printf(esc_html('Select %s', 'WCSEARCH'), $taxonomy->labels->singular_name); ?></option>
		<?php foreach ($selection_items AS $key=>$item): ?>
		<option value="<?php echo esc_attr($item->term_id); ?>" <?php selected($values, $item->term_id); ?>><?php esc_html_e($item->name); ?> <?php if ($counter): echo ' ('.$item->count.')'; endif; ?></option>
		<?php endforeach; ?>
	</select>
	<?php } ?>
	
	<?php if ($mode == "dropdown_address") wcsearch_print_suggestions_code($suggestions); ?>
</div>