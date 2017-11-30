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
 */require_once('include/product_customtab.php');require_once('include/woo_single_template.php');// Hook inadd_action( 'woocommerce_single_variation' , 'addthis_product_share', 100 );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 1000);add_action( 'wp_enqueue_scripts','theme_dequeue_styles', 1002);add_action( 'wp_enqueue_scripts','cust_wootheme_enqueue_styles', 1000);add_filter( 'gettext', 'my_text_strings', 20, 3 );
function theme_enqueue_styles() {
    wp_enqueue_style('td-theme', get_template_directory_uri() . '/style.css', '', '6.1c', 'all' );
    wp_enqueue_style('td-theme-child', get_stylesheet_directory_uri() . '/style.css', array('td-theme'), '6.1c', 'all' );		wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', '','4.7.0', 'all' );
}function cust_wootheme_enqueue_styles(){	if ( function_exists( 'is_woocommerce' ) ) {			if(is_woocommerce() || is_cart() || is_checkout()){				wp_enqueue_style('cust-wootheme', get_stylesheet_directory_uri() . '/cust-wootheme.css', '1.0', 'all');			}	}}function theme_dequeue_styles(){		wp_dequeue_style('td-theme-woo', get_template_directory_uri() . '/style-woocommerce.css');}// Our hooked in function !function addthis_product_share() {	?>	<div class="addthis_inline_share_toolbox_a14x"></div><?php	}function my_text_strings( $translated_text, $text, $domain ) {	switch ( $translated_text ) {		case 'Related products' :			$translated_text = __( 'YOU MAY ALSO LIKE...', 'woocommerce' );			break;		case 'Filter' :			$translated_text = __( 'SEARCH', 'woocommerce' );			break;						}	return $translated_text;}