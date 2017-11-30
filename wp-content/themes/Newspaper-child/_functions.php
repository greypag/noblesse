<?php
/*  ----------------------------------------------------------------------------
    Newspaper 6 Child theme - Please do not use this child theme with older versions of Newspaper Theme

    What can be overwritten via the child theme:
     - everything from /parts folder
     - all the loops (loop.php loop-single-1.php) etc

     - the rest of the theme has to be modified via the theme api:
       http://forum.tagdiv.com/the-theme-api/

 */




/*  ----------------------------------------------------------------------------
    add the parent style + style.css from this folder
 */require_once('include/product_customtab.php');
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 1000);
function theme_enqueue_styles() {
    wp_enqueue_style('td-theme', get_template_directory_uri() . '/style.css', '', '6.1c', 'all' );
    wp_enqueue_style('td-theme-child', get_stylesheet_directory_uri() . '/style.css', array('td-theme'), '6.1c', 'all' );

}// Our hooked in function !function addthis_product_share() {	?>	<div class="addthis_inline_share_toolbox_a14x"></div><?php	}// Hook inadd_action( 'woocommerce_share' , 'addthis_product_share' );