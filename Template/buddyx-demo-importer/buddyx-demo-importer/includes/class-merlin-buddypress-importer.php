<?php
/**
 * Class for the widget importer.
 *
 * Code is mostly from the Widget Importer & Exporter plugin.
 *
 * @see https://wordpress.org/plugins/widget-importer-exporter/
 *
 * @package Merlin WP
 */

class Merlin_BuddyPress_Importer {
	/**
	 * Import widgets from WIE or JSON file.
	 *
	 * @param string $widget_import_file_path path to the widget import file.
	 */
	public static function import_buddypress_demo_data() {
		// Cound what we have just imported.
		$imported = array();

		// Check nonce before we do anything.
		include_once BDI_PLUGIN_PATH . '/bp-process.php';

		// Import users
		if ( ! buddyx_bp_is_imported( 'users', 'users' ) ) {
			$users             = buddyx_bp_import_users();
			$imported['users'] = sprintf( /* translators: formatted number. */
				esc_html__( '%s new users', 'buddyx-demo-Importer' ),
				number_format_i18n( count( $users ) )
			);
			buddyx_bp_update_import( 'users', 'users' );
		}

		if ( bp_is_active( 'xprofile' ) && ! buddyx_bp_is_imported( 'users', 'xprofile' ) ) {
			$profile             = buddyx_bp_import_users_profile();
			$imported['profile'] = sprintf( /* translators: formatted number. */
				esc_html__( '%s profile entries', 'buddyx-demo-Importer' ),
				number_format_i18n( $profile )
			);
			buddyx_bp_update_import( 'users', 'xprofile' );
		}

		if ( bp_is_active( 'friends' ) && ! buddyx_bp_is_imported( 'users', 'friends' ) ) {
			$friends             = buddyx_bp_import_users_friends();
			$imported['friends'] = sprintf( /* translators: formatted number. */
				esc_html__( '%s friends connections', 'buddyx-demo-Importer' ),
				number_format_i18n( $friends )
			);
			buddyx_bp_update_import( 'users', 'friends' );
		}
		

		if ( bp_is_active( 'activity' ) && ! buddyx_bp_is_imported( 'users', 'activity' ) ) {
			$activity             = buddyx_bp_import_users_activity();
			$imported['activity'] = sprintf( /* translators: formatted number. */
				esc_html__( '%s personal activity items', 'buddyx-demo-Importer' ),
				number_format_i18n( $activity )
			);
			buddyx_bp_update_import( 'users', 'activity' );
		}

		// Import groups
		if ( bp_is_active( 'groups' ) && ! buddyx_bp_is_imported( 'groups', 'groups' ) ) {
			$groups             = buddyx_bp_import_groups();
			$imported['groups'] = sprintf( /* translators: formatted number. */
				esc_html__( '%s new groups', 'buddyx-demo-Importer' ),
				number_format_i18n( count( $groups ) )
			/* translators: formatted number. */ );
			buddyx_bp_update_import( 'groups', 'groups' );
		}
		if ( bp_is_active( 'groups' ) && ! buddyx_bp_is_imported( 'groups', 'members' ) ) {
			$g_members             = buddyx_bp_import_groups_members();
			$imported['g_members'] = sprintf( /* translators: formatted number. */
				esc_html__( '%s groups members (1 user can be in several groups)', 'buddyx-demo-Importer' ),
				number_format_i18n( count( $g_members ) )
			);
			buddyx_bp_update_import( 'groups', 'members' );
		}

		

		if ( bp_is_active( 'activity' ) && bp_is_active( 'groups' ) && ! buddyx_bp_is_imported( 'groups', 'activity' ) ) {
			$g_activity             = buddyx_bp_import_groups_activity();
			$imported['g_activity'] = sprintf( /* translators: formatted number. */
				esc_html__( '%s groups activity items', 'buddyx-demo-Importer' ),
				number_format_i18n( $g_activity )
			);
			buddyx_bp_update_import( 'groups', 'activity' );
		}

		return true;
	}


	
}
