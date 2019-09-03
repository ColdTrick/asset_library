<?php

namespace ColdTrick\AssetLibrary;

/**
 * Menus
 */
class Menus {

	/**
	 * Add admin menu items
	 *
	 * @param \Elgg\Hook $hook 'register', 'menu:page'
	 *
	 * @return array
	 */
	public static function registerAdmin(\Elgg\Hook $hook) {
		if (!elgg_in_context('admin') || !elgg_is_admin_logged_in()) {
			return;
		}
		
		$returnvalue = $hook->getValue();
		$returnvalue[] = \ElggMenuItem::factory([
			'name' => 'configure_utilities:assets',
			'text' => elgg_echo('admin:configure_utilities:assets'),
			'href' => 'admin/configure_utilities/assets',
			'context' => 'admin',
			'parent_name' => 'configure_utilities',
			'section' => 'configure',
		]);
		
		return $returnvalue;
	}
}
