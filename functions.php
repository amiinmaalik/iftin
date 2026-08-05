<?php
/**
 * Iftin functions and definitions
 *
 * @package Iftin
 * @since 1.0.0
 */

/**
 * Theme setup.
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'iftin_setup' ) ) :

	function iftin_setup() {

		// Enable core block styles.
		add_theme_support( 'wp-block-styles' );

		// Disable WordPress core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}

endif;

add_action( 'after_setup_theme', 'iftin_setup' );

/**
 * Enqueue theme stylesheet.
 *
 * @since 1.0.0
 */
function iftin_enqueue_styles() {

	wp_enqueue_style(
		'iftin-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

}

add_action( 'wp_enqueue_scripts', 'iftin_enqueue_styles' );

/**
 * Register custom block pattern categories.
 *
 * @since 1.0.0
 */
function iftin_register_pattern_categories() {

	register_block_pattern_category(
		'iftin-headers',
		array(
			'label' => __( 'Headers', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-heroes',
		array(
			'label' => __( 'Heroes', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-features',
		array(
			'label' => __( 'Features', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-services',
		array(
			'label' => __( 'Services', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-about',
		array(
			'label' => __( 'About', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-stats',
		array(
			'label' => __( 'Stats', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-pricing',
		array(
			'label' => __( 'Pricing', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-testimonials',
		array(
			'label' => __( 'Testimonials', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-faq',
		array(
			'label' => __( 'FAQ', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-blog',
		array(
			'label' => __( 'Blog', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-cta',
		array(
			'label' => __( 'Call To Action', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-footers',
		array(
			'label' => __( 'Footers', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-team',
		array(
			'label' => __( 'Team', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-utility',
		array(
			'label' => __( 'Utility', 'iftin' ),
		)
	);

	register_block_pattern_category(
		'iftin-logos',
		array(
			'label' => __( 'Logos', 'iftin' ),
		)
	);

}

add_action( 'init', 'iftin_register_pattern_categories' );