<?php wcsearch_renderTemplate('admin_header.tpl.php'); ?>

<h2><?php esc_html_e('Search Settings', 'WCSEARCH'); ?>
</h2>

<form method="POST" action="">
	<?php wp_nonce_field(WCSEARCH_PATH, 'wcsearch_settings_nonce');?>
	<table class="form-table">
		<tbody>
			<tr>
				<th scope="row">
					<label><?php esc_html_e('Purchase code', 'WCSEARCH'); ?><span class="wcsearch-red-asterisk">*</span></label>
					<p>Use purchase code from your codecanyon <a href="https://codecanyon.net/downloads" target="_blank">downloads page</a></p>
				</th>
				<td>
					<input
						name="wcsearch_purchase_code"
						id="wcsearch_purchase_code"
						type="text"
						class="regular-text"
						value="<?php echo get_option("wcsearch_purchase_code"); ?>" />
				</td>
			</tr>
			<tr>
				<th scope="row">
					<label><?php esc_html_e('Access token', 'WCSEARCH'); ?></label>
					<p>Required for automatic updates. Generate an Envato API Personal Token by clicking this <a href="https://build.envato.com/create-token/?purchase:download=t&purchase:verify=t&purchase:list=t" target="_blank">link</a></p>
				</th>
				<td>
					<input
						name="wcsearch_access_token"
						id="wcsearch_access_token"
						type="text"
						class="regular-text"
						value="<?php echo get_option("wcsearch_access_token"); ?>" />
				</td>
			</tr>
		</tbody>
	</table>
	
	<?php submit_button(esc_html__('Save changes', 'WCSEARCH')); ?>
</form>

<?php wcsearch_renderTemplate('admin_footer.tpl.php'); ?>