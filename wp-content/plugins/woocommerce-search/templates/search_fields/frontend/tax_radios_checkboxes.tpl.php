<div class="wcsearch-search-input wcsearch-search-input-<?php echo esc_attr($mode); ?> <?php echo $search_model->openedClosedClass(); ?>" <?php echo $search_model->getOptionsString(); ?>>
	<label class="wcsearch-search-input-label"><?php echo esc_html($title); ?></label>
	<div class="wcsearch-search-input-terms-columns" <?php if ($height_limit): ?>style="height: <?php echo $height_limit; ?>px;"<?php endif; ?>>
	<?php
	if ($selection_items):
		$i = 1;
		while ($i <= $columns): ?>
		<div class="wcsearch-search-input-terms-column wcsearch-search-input-<?php echo esc_attr($mode); ?>-column wcsearch-search-input-<?php echo esc_attr($mode); ?>-column-<?php echo esc_attr($columns); ?>">
			<?php $j = 1; ?>
			<?php foreach ($selection_items AS $key=>$item): ?>
				<?php if ($i == $j): ?>
				<div class="<?php if ($mode =='checkboxes'): ?>wcsearch-checkbox<?php elseif ($mode =='radios'): ?>wcsearch-radio<?php endif; ?>">
					<label>
					<?php if ($mode =='checkboxes'): ?>
						<input type="checkbox" name="<?php echo esc_attr($slug); ?>" value="<?php echo esc_attr($item->term_id); ?>" <?php if ($values && in_array($item->term_id, explode(',', $values)))  echo 'checked'; ?> />
					<?php elseif ($mode =='radios'): ?>
						<input type="radio" name="<?php echo esc_attr($slug); ?>" value="<?php echo esc_attr($item->term_id); ?>" <?php if ($values && in_array($item->term_id, explode(',', $values)))  echo 'checked'; ?> />
					<?php endif; ?>
					<?php echo esc_html($item->name); ?><?php if ($counter): echo ' ('.wcsearch_get_count(array('mode' => $mode, 'term' => $item, 'used_by' => $used_by)).')'; endif; ?>
					</label>
				</div>
				<?php endif; ?>
				<?php $j++; ?>
				<?php if ($j == ($columns+1)) $j = 1; ?>
			<?php endforeach; ?>
		</div>
		<?php $i++; ?>
		<?php endwhile; ?>
	<?php else: ?>
	<?php esc_html_e("No items in this taxonomy yet", "WCSEARCH"); ?>
	<?php endif; ?>
	</div>
</div>