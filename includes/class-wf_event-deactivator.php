<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WF-Event Calendar
 * @subpackage WF-Event Calendar/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    WF-Event Calendar
 * @subpackage WF-Event Calendar/includes
 * @author     Satyanarayan Verma<http://www.matictechnology.com>
 */
class Wf_event_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		// TODO:Something here
		global $wpdb;	//required global declaration of WP variable
		$table_name = $wpdb->prefix.'wf_event';
		$sql = "DROP TABLE ". $table_name;
		$wpdb->query($sql);
	}

}
