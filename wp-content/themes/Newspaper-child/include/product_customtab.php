<?php
// variable for checking current page language from wpml constant
$current_language = ( defined( 'ICL_LANGUAGE_CODE' ) ) ?  ICL_LANGUAGE_CODE : '';

add_filter( 'woocommerce_product_tabs', 'custom_product_tabs' );
add_filter( 'loop_shop_columns', 'wc_loop_shop_columns', 1, 10 );
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
add_filter('woocommerce_show_page_title', create_function('$result', 'return false;'), 20);

function custom_product_tabs( $tabs ) {
	// remove tab that not needed in custom data tabs table
	unset( $tabs['additional_information'] );
	// rename tab title
	$tabs['description']['title'] = __( 'PRODUCT DETAILS' );
  // ensure ACF is available
  if ( !function_exists( 'get_field' ) )
    return;

  $content = get_field( 'washing_instruction' );

  if ( !empty( $content ) ) {

    $tabs['washing_instruction'] = array(
      'title' => 'WASHING INSTRUCTION',
      'priority' => 15,
      'callback' => 'get_wash_info_tab'
    );

  }

  return $tabs;
}

function get_wash_info_tab() {
	echo get_field( 'washing_instruction' );
}

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 9;
  return $cols;
}

function wc_loop_shop_columns( $number_columns ) {
	return 3;
}
?>
