<?php
	
// Adding WP Functions & Theme Support
function makechild_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
    add_image_size( 'hero', 1800, 450, true ); // hard crop mode
    add_image_size( 'special-grid-image', 480, 640, true ); // hard crop mode
    add_image_size( 'square-image', 760, 760, true ); // hard crop mode
    add_image_size( 'page-image', 1024, 768, true ); // hard crop mode
    add_image_size( 'third-page-image', 760, 480, true ); // hard crop mode
    add_image_size( 'tiny-thumb', 80, 80, true ); // hard crop mode
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	add_filter( 'image_size_names_choose', 'my_custom_sizes' );
    function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'hero' => ( 'Hero' ),
        'special-grid-image' => ( 'Specal Grid Image' ),
        'square-image' => ( 'Square Image' ),
        'page-image' => ( 'Page Image' ),
        'third-page-image' => ( 'Third Page Image' ),
        'tiny-thumb' => ( 'Tiny Thumb' ),
        // 'page-featured-image' => ( 'Page Featured Image' ),

    ) );
	}

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	// Adding post format support
	/* add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); */	
	

// acf options page
// 	if( function_exists('acf_add_options_page') ) {
	
// 		acf_add_options_page();
		
// 		acf_add_options_sub_page('General');
// 		acf_add_options_sub_page('Sidebar');
// 		acf_add_options_sub_page('Footer');
	
// }



} /* end theme support */



//Hide editor on certain templates
add_action( 'admin_head', 'hide_editor' );
function hide_editor() {
	// Get the Post ID.
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if( !isset( $post_id ) ) return;
	// Hide the editor on a page with a specific page template
	// Get the name of the Page Template file.
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
	if($template_file == 'template-list-pages.php'){ // the filename of the page template
	remove_post_type_support('page', 'editor');
	}
}