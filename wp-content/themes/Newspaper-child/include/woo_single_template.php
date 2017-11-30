<?php

add_filter( 'woocommerce_get_availability', 'custom_override_get_availability', 1, 2);
add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_filter( 'woocommerce_cross_sells_columns', 'change_cross_sells_columns' );
//add_filter("woocommerce_checkout_fields", "order_checkout_fields");

function custom_override_get_availability( $availability, $_product ) {
if ( $_product->is_in_stock() ) $availability['availability'] = __('In Stock', 'woocommerce');
return $availability;
}

function custom_variation_price( $price, $product ) {
     $price = '';
     $price .= wc_price($product->get_price());
     return $price;
}

 
function change_cross_sells_columns( $columns ) {
return 3;
}


function order_checkout_fields($fields) {

    $order = array(
        "billing_first_name", 
        "billing_last_name", 
        "billing_phone",
				"billing_email",
				"billing_city",
        "billing_address_1", 
        "billing_address_2", 
				"billing_country",
        "billing_postcode" 

    );
    foreach($order as $field)
    {
        $ordered_fields[$field] = $fields["billing"][$field];
    }

    $fields["billing"] = $ordered_fields;
    return $fields;

}
?>