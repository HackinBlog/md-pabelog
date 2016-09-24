<?php

// ensures [shortcodes] work in text widgets
add_filter( 'widget_text', 'do_shortcode' );


/**
 * Loads main MD stylesheet + your custom stylesheet.
 *
 * @since 1.0
 */

function md_child_theme_enqueue_style() {
    wp_enqueue_style( 'marketers-delight', MD_URL . 'style.css' );
    wp_enqueue_style( 'md-child-theme', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'md_child_theme_enqueue_style' );


/**
 * Add MD meta options to any Custom Post Type.
 * Uncomment add_filter() and set proper IDs for your post type(s).
 * Read more: https://kolakube.com/guides/metaboxes-custom-post-types-taxonomies/
 *
 * @since 1.1
 */

function md_add_post_type_meta() {
	return array( 'download', 'product' );
}

//add_filter( 'md_post_type_meta', 'md_add_post_type_meta' );


/**
 * Add MD meta options to any Custom Taxonomy.
 * Uncomment add_filter() and set proper IDs for your taxonomies.
 * Read more: https://kolakube.com/guides/metaboxes-custom-post-types-taxonomies/
 *
 * @since 1.1
 */

function md_add_taxonomy_meta() {
	return array( 'download_category', 'product_cat' );
}

//add_filter( 'md_taxonomy_meta', 'md_add_taxonomy_meta' );