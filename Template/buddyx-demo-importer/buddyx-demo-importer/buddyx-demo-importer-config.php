<?php
/**
 * Merlin WP configuration file.
 *
 * @package   Merlin WP
 * @version   @@pkg.version
 * @link      https://merlinwp.com/
 * @author    Rich Tabor, from ThemeBeans.com & the team at ProteusThemes.com
 * @copyright Copyright (c) 2018, Merlin WP of Inventionn LLC
 * @license   Licensed GPLv3 for Open Source Use
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and settings.
 */
$wizard = new Merlin(

	$config = array(
		'directory'            => '', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'           => 'buddyx-sample-demo-import', // The wp-admin page slug where Merlin WP loads.
		'parent_slug'          => 'themes.php', // The wp-admin parent page slug for the admin menu item.
		'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
		'child_action_btn_url' => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/', // URL for the 'child-action-link'.
		'dev_mode'             => true, // Enable development mode for testing.
		'license_step'         => false, // EDD license activation step.
		'license_required'     => false, // Require the license activation step.
		'license_help_url'     => '', // URL for the 'license-tooltip'.
		'edd_remote_api_url'   => '', // EDD_Theme_Updater_Admin remote_api_url.
		'edd_item_name'        => '', // EDD_Theme_Updater_Admin item_name.
		'edd_theme_slug'       => '', // EDD_Theme_Updater_Admin item_slug.
		'ready_big_button_url' => site_url(''), // Link for the big button on the ready step.
	),
	$strings = array(
		'admin-menu'               => esc_html__( 'Theme Setup', 'buddyx-demo-Importer' ),

		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'buddyx-demo-Importer' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'buddyx-demo-Importer' ),
		'ignore'                   => esc_html__( 'Disable this wizard', 'buddyx-demo-Importer' ),

		'btn-skip'                 => esc_html__( 'Skip', 'buddyx-demo-Importer' ),
		'btn-next'                 => esc_html__( 'Next', 'buddyx-demo-Importer' ),
		'btn-start'                => esc_html__( 'Start', 'buddyx-demo-Importer' ),
		'btn-no'                   => esc_html__( 'Cancel', 'buddyx-demo-Importer' ),
		'btn-plugins-install'      => esc_html__( 'Install', 'buddyx-demo-Importer' ),
		'btn-child-install'        => esc_html__( 'Install', 'buddyx-demo-Importer' ),
		'btn-content-install'      => esc_html__( 'Install', 'buddyx-demo-Importer' ),
		'btn-import'               => esc_html__( 'Import', 'buddyx-demo-Importer' ),
		'btn-license-activate'     => esc_html__( 'Activate', 'buddyx-demo-Importer' ),
		'btn-license-skip'         => esc_html__( 'Later', 'buddyx-demo-Importer' ),

		/* translators: Theme Name */
		'license-header%s'         => esc_html__( 'Activate %s', 'buddyx-demo-Importer' ),
		/* translators: Theme Name */
		'license-header-success%s' => esc_html__( '%s is Activated', 'buddyx-demo-Importer' ),
		/* translators: Theme Name */
		'license%s'                => esc_html__( 'Enter your license key to enable remote updates and theme support.', 'buddyx-demo-Importer' ),
		'license-label'            => esc_html__( 'License key', 'buddyx-demo-Importer' ),
		'license-success%s'        => esc_html__( 'The theme is already registered, so you can go to the next step!', 'buddyx-demo-Importer' ),
		'license-json-success%s'   => esc_html__( 'Your theme is activated! Remote updates and theme support are enabled.', 'buddyx-demo-Importer' ),
		'license-tooltip'          => esc_html__( 'Need help?', 'buddyx-demo-Importer' ),

		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Welcome to %s', 'buddyx-demo-Importer' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'buddyx-demo-Importer' ),
		'welcome%s'                => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.', 'buddyx-demo-Importer' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'buddyx-demo-Importer' ),

		'child-header'             => esc_html__( 'Install Child Theme', 'buddyx-demo-Importer' ),
		'child-header-success'     => esc_html__( 'You\'re good to go!', 'buddyx-demo-Importer' ),
		'child'                    => esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.', 'buddyx-demo-Importer' ),
		'child-success%s'          => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.', 'buddyx-demo-Importer' ),
		'child-action-link'        => esc_html__( 'Learn about child themes', 'buddyx-demo-Importer' ),
		'child-json-success%s'     => esc_html__( 'Awesome. Your child theme has already been installed and is now activated.', 'buddyx-demo-Importer' ),
		'child-json-already%s'     => esc_html__( 'Awesome. Your child theme has been created and is now activated.', 'buddyx-demo-Importer' ),

		'plugins-header'           => esc_html__( 'Install Plugins', 'buddyx-demo-Importer' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'buddyx-demo-Importer' ),
		'plugins'                  => esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.', 'buddyx-demo-Importer' ),
		'plugins-success%s'        => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'buddyx-demo-Importer' ),
		'plugins-action-link'      => esc_html__( 'Advanced', 'buddyx-demo-Importer' ),

		'import-header'            => esc_html__( 'Import Content', 'buddyx-demo-Importer' ),
		'import'                   => esc_html__( 'Let\'s import content to your website, to help you get familiar with the theme.', 'buddyx-demo-Importer' ),
		'import-demo'              => esc_html__( 'Select Import Demo', 'buddyx-demo-Importer' ),
		'import-demo-content'      => esc_html__( 'Please select import demo and Let\'s import content to your website, to help you get familiar with the theme.', 'buddyx-demo-Importer' ),
		'import-action-link'       => esc_html__( 'Advanced', 'buddyx-demo-Importer' ),

		'ready-header'             => esc_html__( 'All done. Have fun!', 'buddyx-demo-Importer' ),

		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your theme has been all set up. Enjoy your new theme by Wbcom Designs.', 'buddyx-demo-Importer' ),
		'ready-action-link'        => esc_html__( 'Extras', 'buddyx-demo-Importer' ),
		'ready-big-button'         => esc_html__( 'View your website', 'buddyx-demo-Importer' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://wordpress.org/support/', esc_html__( 'Explore WordPress', 'buddyx-demo-Importer' ) ),
		'ready-link-2'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://wbcomdesigns.com/support/', esc_html__( 'Get Theme Support', 'buddyx-demo-Importer' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'customize.php' ), esc_html__( 'Start Customizing', 'buddyx-demo-Importer' ) ),
	)
);



function bdi_import_files() {
	return array(
		array(
			'import_file_name'           	=> 'BuddyX with BuddyPress',
			'import_file_url'            	=> BDI_PLUGIN_URL . '/demos/buddyx/demo-content.xml',
			'import_page_file_url'          => BDI_PLUGIN_URL . '/demos/buddyx/demo-page-content.xml',
			'import_products_file_url'          => BDI_PLUGIN_URL . '/demos/buddyx/demo-products-content.xml',
			'import_widget_file_url'     	=> BDI_PLUGIN_URL . '/demos/buddyx/widgets.json',
			'import_customizer_file_url' 	=> BDI_PLUGIN_URL . '/demos/buddyx/customizer.dat',
			'import_redux'               	=> array(),
			'import_preview_image_url'   	=> 'https://www.example.com/merlin/preview_import_image1.jpg',
			'import_notice'              	=> __( 'A special note for this import.', 'buddyx-demo-Importer' ),
			'preview_url'                	=> 'https://www.example.com/my-demo-1',
			'import_plugins'               => array( 'elementor', 'classic-widgets', 'kirki', 'buddypress', 'woocommerce', 'wbcom-essential' ),
		),
		array(
			'import_file_name'           	=> 'BuddyX with BB Platform',
			'import_file_url'            	=> BDI_PLUGIN_URL . '/demos/buddyx/demo-content.xml',
			'import_page_file_url'          => BDI_PLUGIN_URL . '/demos/buddyx/demo-bb-page-content.xml',
			'import_products_file_url'          => BDI_PLUGIN_URL . '/demos/buddyx/demo-products-content.xml',
			'import_widget_file_url'     	=> BDI_PLUGIN_URL . '/demos/buddyx/widgets.json',
			'import_customizer_file_url' 	=> BDI_PLUGIN_URL . '/demos/buddyx/customizer.dat',
			'import_redux'               	=> array(),
			'import_preview_image_url'   	=> 'https://www.example.com/merlin/preview_import_image1.jpg',
			'import_notice'              	=> __( 'A special note for this import.', 'buddyx-demo-Importer' ),
			'preview_url'                	=> 'https://www.example.com/my-demo-1',
			'import_plugins'               => array( 'elementor', 'classic-widgets', 'kirki', 'buddyboss-platform', 'woocommerce', 'wbcom-essential' ),
		),

	);
}
add_filter( 'merlin_import_files', 'bdi_import_files' );

/* remove Admin init function on Theme Setup wizard start */
add_action( 'admin_init', 'bdi_remove_admin_init', 0 );
function bdi_remove_admin_init() {
	if ( isset($_GET['page']) && ( $_GET['page'] == 'buddyx-sample-demo-import' || $_GET['page'] == 'tgmpa-install-plugins' )) {
		remove_action('admin_init', 'is_admin_init');
		add_filter( 'woocommerce_enable_setup_wizard', function() { return false; } );
		update_option( 'wpforms_activation_redirect', true );
		if ( did_action( 'elementor/loaded' ) ) {
			remove_action( 'admin_init', [ \Elementor\Plugin::$instance->admin, 'maybe_redirect_to_getting_started' ] );
		}

	}
}
