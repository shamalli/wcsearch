<?php 

function wcsearch_install_search() {
	global $wpdb;
	
	if (!get_option('wcsearch_installed_search')) {
		
		$wpdb->query("
				CREATE TABLE {$wpdb->wcsearch_cache} (
					`hash` varchar(64) NOT NULL,
					`val` text NOT NULL,
					KEY `hash` (`hash`)
				) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;");
	
		add_option('wcsearch_installed_search', true);
		add_option('wcsearch_installed_search_version', WCSEARCH_VERSION);
		add_option('wcsearch_force_include_js_css', true);
		
	} elseif (get_option('wcsearch_installed_search_version') != WCSEARCH_VERSION) {
		$upgrades_list = array(
				'1.0.1',
				'1.0.6',
		);

		$old_version = get_option('wcsearch_installed_search_version');
		foreach ($upgrades_list AS $upgrade_version) {
			if (!$old_version || version_compare($old_version, $upgrade_version, '<')) {
				$upgrade_function_name = 'wcsearch_upgrade_to_' . str_replace('.', '_', $upgrade_version);
				if (function_exists($upgrade_function_name))
					$upgrade_function_name();
				do_action('wcsearch_version_upgrade', $upgrade_version);
			}
		}

		update_option('wcsearch_installed_search_version', WCSEARCH_VERSION);
		
		echo '<script>location.reload();</script>';
		exit;
	}
	
	global $wcsearch_instance;
	$wcsearch_instance->loadClasses();
}

function wcsearch_upgrade_to_1_0_1() {
	global $wpdb;
	
	$wpdb->query("CREATE TABLE {$wpdb->wcsearch_cache} (
			`hash` varchar(64) NOT NULL,
			`val` text NOT NULL,
			KEY `hash` (`hash`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;");
}

function wcsearch_upgrade_to_1_0_6() {
	add_option('wcsearch_force_include_js_css', true);
}

?>