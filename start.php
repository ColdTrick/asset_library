<?php
/**
 * Main file for this plugin
 */

// register default Elgg events
elgg_register_event_handler('init', 'system', 'asset_library_init');

/**
 * Gets called when the system initializes
 *
 * @return void
 */
function asset_library_init() {
}
