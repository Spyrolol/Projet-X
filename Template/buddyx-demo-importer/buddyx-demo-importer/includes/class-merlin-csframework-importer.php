<?php
/**
 * Class for the Merlin_CSFramework_Importer importer.
 *
 * @package Merlin WP
 */

class Merlin_CSFramework_Importer {
	/**
	 * Import CSFramework from text file.
	 *
	 * @param string $csframework_import_file_path path to the CSFramework import file.
	 */
	public static function import( $csframework_import_file_path ) {
		if ( empty( $csframework_import_file_path ) ) {
			return false;
		}
		
		$results = self::import_csframework( $csframework_import_file_path );
		
		if ( is_wp_error( $results ) ) {
			Merlin_Logger::get_instance()->error( $results->get_error_message() );

			return false;
		}

		ob_start();
			self::format_results_for_log( $results );
		$message = ob_get_clean();

		Merlin_Logger::get_instance()->debug( $message );

		return true;
	}


	/**
	 * Imports widgets from a json file.
	 *
	 * @param string $data_file path to json file with WordPress widget export data.
	 */
	private static function import_csframework( $data_file ) {
		// Get widgets data from file.
		$data = self::process_import_file( $data_file );
		
		$decode_string = cs_decode_string( $data );
		
		$data = $decode_string['framework_options'];
		
		update_option( 'framework_option', $decode_string['framework_options'] );
		
		// Return from this function if there was an error.
		if ( is_wp_error( $data ) ) {
			return $data;
		}

		// Import the widget data and save the results.
		return  $data ;
	}

	/**
	 * Process import file - this parses the widget data and returns it.
	 *
	 * @param string $file path to json file.
	 * @return WP_Error|object
	 */
	private static function process_import_file( $file ) {
		// File exists?
		if ( ! file_exists( $file ) ) {
			return new \WP_Error(
				'csframework_import_file_not_found',
				__( 'Error: CSFramework import file could not be found.', 'merlin-wp' )
			);
		}

		// Get file contents and decode.
		$data = file_get_contents( $file );

		// Return from this function if there was an error.
		if ( empty( $data ) ) {
			return new \WP_Error(
				'csframework_import_file_missing_content',
				__( 'Error: CSFramework import file does not have any content in it.', 'merlin-wp' )
			);
		}

		return $data;
	}
}
