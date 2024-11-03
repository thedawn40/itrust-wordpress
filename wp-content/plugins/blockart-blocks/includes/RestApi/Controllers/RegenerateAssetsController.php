<?php
/**
 * RegenCSS controller.
 *
 * @package BlockArt
 */

namespace BlockArt\RestApi\Controllers;

defined( 'ABSPATH' ) || exit;

/**
 * RegenCSS controller.
 */
class RegenerateAssetsController extends \WP_REST_Controller {

	/**
	 * The namespace of this controller's route.
	 *
	 * @var string The namespace of this controller's route.
	 */
	protected $namespace = 'blockart/v1';

	/**
	 * The base of this controller's route.
	 *
	 * @var string The base of this controller's route.
	 */
	protected $rest_base = 'regenerate-assets';

	/**
	 * {@inheritDoc}
	 *
	 * @return void
	 */
	public function register_routes() {
		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base,
			array(
				array(
					'methods'             => \WP_REST_Server::CREATABLE,
					'callback'            => array( $this, 'regenerate_assets' ),
					'permission_callback' => array( $this, 'regenerate_assets_permissions_check' ),
				),
			)
		);
	}

	/**
	 * Check if a given request has access to get items.
	 *
	 * @param \WP_REST_Request $request Full data about the request.
	 *
	 * @return true|\WP_Error
	 */
	public function regenerate_assets_permissions_check( $request ) {
		if ( ! current_user_can( 'manage_options' ) ) {
			return new \WP_Error(
				'rest_forbidden',
				esc_html__( 'You are not allowed to access this resource.', 'blockart' ),
				array( 'status' => rest_authorization_required_code() )
			);
		}
		return true;
	}

	/**
	 * Regenerate assets.
	 *
	 * @param \WP_REST_Request $request Full data about the request.
	 *
	 * @return \WP_REST_Response
	 */
	public function regenerate_assets( $request ): \WP_REST_Response {
		delete_option( '_blockart_blocks_css' );
		delete_post_meta_by_key( '_blockart_blocks_css' );

		$filesystem = blockart_get_filesystem();

		if ( $filesystem ) {
			$filesystem->delete( BLOCKART_UPLOAD_DIR, true );
		}
		return new \WP_REST_Response( array( 'success' => true ), 200 );
	}
}
