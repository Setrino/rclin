<?php
/**
 * Additional Information tab
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$heading = apply_filters( 'woocommerce_product_additional_information_heading', esc_html__( 'Additional Information', 'woocommerce' ) );

?>

<?php 
	
if ( $heading ) {
	echo boldthemes_get_heading_html( '', $heading, '', 'small', '', '', '' ) ;
}
$product->list_attributes(); 

?>
