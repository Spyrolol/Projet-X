<?php
/**
 * Plugin Name: BuddyX Demo Importer
 * Plugin URI: https://wbcomdesigns.com/
 * Description: BuddyX Theme Demo Importer
 * Version: 2.0.0
 * Author: Wbcom Designs
 * Author URI: https://wbcomdesigns.com/
 * Requires at least: 4.0
 * Tested up to: 5.3.2
 *
 * Text Domain: buddyx-demo-Importer
 * Domain Path: /i18n/languages/
 *
 * @package BuddyX_Theme_Demo_Importer
 * @category Core
 * @author Wbcom Designs
 */
define( 'BDI_DIR', dirname( __FILE__ ) );
define( 'BDI_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'BDI_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/*
 * Include Merlin related Files.
 */

if ( ! function_exists( 'bdi_file_includes' ) ) {

	add_action( 'init', 'bdi_file_includes' );

	function bdi_file_includes() {
		require_once BDI_PLUGIN_PATH . 'vendor/autoload.php';
		require_once BDI_PLUGIN_PATH . 'class-merlin.php';
		require_once BDI_PLUGIN_PATH . 'includes/buddyx-demo-functions.php';
		require_once BDI_PLUGIN_PATH . 'buddyx-demo-importer-config.php';
	}
}


/*
 * redirect Theme Setup Wizard setting page after plugin activated
 */


add_action( 'activated_plugin', 'bdi_activated_plugin_redirect' );

function bdi_activated_plugin_redirect( $plugin ) {

	if ( $plugin == plugin_basename( __FILE__ ) ) {

		if ( isset( $_GET['page'] ) && $_GET['page'] == 'tgmpa-install-plugins' ) {
			?>
			<script>
				window.location = "<?php echo admin_url( 'themes.php?page=buddyx-sample-demo-import' ); ?>";
			</script>
			<?php
			wp_die();
		} else {
			wp_redirect( admin_url( 'themes.php?page=buddyx-sample-demo-import' ) );
			exit;
		}
	}
}

add_filter( 'buddyx_plugin_install', 'buddyx_demo_plugin_installer' );

function buddyx_demo_plugin_installer( $plugins ) {
	if ( ( isset($_GET['page']) && ( $_GET['page'] == 'buddyx-sample-demo-import' || $_GET['page'] == 'tgmpa-install-plugins' ) ) || ( defined( 'DOING_AJAX' ) && DOING_AJAX == true ) )  {
		$plugins[] = array(
			'name'     => 'BuddyPress',
			'slug'     => 'buddypress',
			'required' => false,
		);
		$plugins[] = array(
			'name'     => 'WooCommerce',
			'slug'     => 'woocommerce',
			'required' => false,
		);
		$plugins[] = array(
			'name'     => 'BuddyBoss Platform',
			'slug'     => 'buddyboss-platform',
			'source'   => 'https://demos.wbcomdesigns.com/exporter/plugins/buddyboss-platform/1.7.6/buddyboss-platform.zip',
			'required' => false,
		);
		$plugins[] = array(
			'name'     => 'Wbcom Essential',
			'slug'     => 'wbcom-essential',
			'source'   => 'https://demos.wbcomdesigns.com/exporter/plugins/wbcom-essential/3.4.1/wbcom-essential.zip',
			'required' => false,
		);
	}
	return $plugins;
}

/*
 * Added Groups, Friends and Messages components activate when BuddyPress Plugin activate.
 */
add_action( 'bp_new_install_default_components', 'buddyx_demo_bp_default_components', 99, 1 );
function buddyx_demo_bp_default_components( $components  ) {
	$components['groups'] 	= 1;
	$components['friends'] 	= 1;
	$components['messages'] = 1;		
	return $components;
		
}
