<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

	<?php
	do_action( 'woocommerce_before_add_to_cart_quantity' );?>

    <div class="product-quantity-choice number-input">
        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="product-quantity-choice_down">-</button>
        <?php

	woocommerce_quantity_input(
		array(
			'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
			'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
			'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
		)
	);
        ?>
        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="product-quantity-choice_up">+</button>
    </div>


    <?php
	do_action( 'woocommerce_after_add_to_cart_quantity' );
	?>

	<button type="submit" class="single_add_to_cart_button button btn alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?>
        <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                    d="M36.9924 7.06247C37.303 6.75183 37.303 6.24817 36.9924 5.93753L31.9301 0.875287C31.6195 0.564643 31.1158 0.564643 30.8052 0.875287C30.4945 1.18593 30.4945 1.68959 30.8052 2.00023L35.305 6.5L30.8052 10.9998C30.4945 11.3104 30.4945 11.8141 30.8052 12.1247C31.1158 12.4354 31.6195 12.4354 31.9301 12.1247L36.9924 7.06247ZM0 7.29545H36.4299V5.70455H0V7.29545Z"
                    fill="#343434" />
        </svg>
    </button>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>
