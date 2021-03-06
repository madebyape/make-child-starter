<?php
/**
 * @package Make Child
 */

/**
 * The theme version.
 */
define( 'TTFMAKE_CHILD_VERSION', '1.1.0' );

/**
 * Turn off the parent theme styles.
 *
 * If you would like to use this child theme to style Make from scratch, rather
 * than simply overriding specific style rules, simply remove the '//' from the
 * 'add_filter' line below. This will tell the theme not to enqueue the parent
 * stylesheet along with the child one.
 */
//add_filter( 'make_enqueue_parent_stylesheet', '__return_false' );

/**
 * Add your custom theme functions here.
 */


// Register scripts and stylesheets
require_once('functions/enqueue-scripts.php'); 
// require_once('functions/editor-styles.php'); 
// require_once('functions/login.php'); 
// require_once('functions/menu.php'); 
// require_once('functions/page-navi.php'); 
// require_once('functions/related-posts.php'); 
// require_once('functions/sidebar.php'); 
// require_once('functions/theme-support.php'); 




