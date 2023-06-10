<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage corporate-blocks
 * @since corporate-blocks 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since corporate-blocks 1.0
	 *
	 * @return void
	 */
	function corporate_blocks_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'corporate-blocks-border',
				'label' => esc_html__( 'Borders', 'corporate-blocks' ),
			)
		);

		
	}
	add_action( 'init', 'corporate_blocks_register_block_styles' );
}