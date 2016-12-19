/*=======================================*/
/** Display 24 products per page **/
/** https://docs.woocommerce.com/document/change-number-of-products-displayed-per-page/ **/
/*=======================================*/
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );
