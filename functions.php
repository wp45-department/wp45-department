<?php
/*
 * This is the child theme for Astra theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'where_wear_child_enqueue_styles' );
function where_wear_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/*
 * Your code goes below
 */

/* 05-07-2022*/

add_action( 'init', 'register_new_item_endpoint');

/**
 * Register New Endpoint.
 *
 * @return void.
 */
function register_new_item_endpoint() {
	add_rewrite_endpoint( 'new-item', EP_ROOT | EP_PAGES );
}

add_filter( 'query_vars', 'new_item_query_vars' );

/**
 * Add new query var.
 *
 * @param array $vars vars.
 *
 * @return array An array of items.
 */
function new_item_query_vars( $vars ) {

	$vars[] = 'new-item';
	return $vars;
}

add_filter( 'woocommerce_account_menu_items', 'add_new_item_tab' );

/**
 * Add New tab in my account page.
 *
 * @param array $items myaccount Items.
 *
 * @return array Items including New tab.
 */
function add_new_item_tab( $items ) {

	$items['new-item'] = 'Favourite';
	return $items;
}

add_action( 'woocommerce_account_new-item_endpoint', 'add_new_item_content' );

/**
 * Add content to the new tab.
 *
 * @return  string.
 */
function add_new_item_content() {
	echo do_shortcode('[yith_wcwl_wishlist]');
}

/*  05.07.2022 end  */

/*  08.07.2022 start  theme option for header and footer */


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();
    

    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}

/*  08.07.2022 end  */
register_nav_menus( array(  

    'topmenu' => __('Top Navigation', 'Your-theme-name') ,
    'policy_provision' => __('Policy & Provision Navigation', 'Your-theme-name'),
    'customer_services' => __('Customer Services Navigation', 'Your-theme-name') 
    
    ) ); 

/*  header cart icon start  */


add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    ?>
    <div id="mini-cart-count">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </div>
    <?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}

add_shortcode('wc_refresh_mini_cart_count','wc_refresh_mini_cart_count');

/*  header cart icon end  */

function get_cart_count() {
    //Check if WooCommerce is active
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        global $woocommerce;
        $cart_url = $woocommerce->cart->get_cart_url();
        $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
        $cart_contents_count = $woocommerce->cart->cart_contents_count;
        $cart_contents = sprintf(_n('%d item', '%d items', $cart_contents_count, 'FreshySites'), $cart_contents_count);
        $cart_total = $woocommerce->cart->get_cart_total();
        
        // link for cart with icon
        $the_cart_data = '<a class="fs-cart-contents" href="'. $cart_url .'" title="View your shopping cart"><i class="fa fa-shopping-cart"></i>';
        // If more than one item in the cart, then show the qty and cost
        if ( $cart_contents_count > 0 ) {
            $the_cart_data .= ' <span class="cart-quantity">'. $cart_contents_count .'</span> <span class="cart-total">'. $cart_total .'</span>';
        }
        // close the cart link
        $the_cart_data .= '</a>';
      
        return $the_cart_data;
    }
}
add_shortcode( 'cart_count', 'get_cart_count' );

function my_shortcode() {
    ob_start();
    ?> <section class="shop-product-section">
    <div class="shop-product-details">
            <div class="shop-product-background">
        <div class="shop-product-content">
                            <div class="shop-image">
                    <a href="">
                    <img src="https://projectspace.in/work/project/wherewear/wp-content/uploads/2022/07/img.png"/>
                    </a>
                </div>
                <div class="shop-product-heading">
                    <h3>
                        PRODUCTS
                    </h3>
                    <p>
            This is where you can browse products in this store.
                    </p>
                </div>
                </div>
        </div>
    </div>

</section> <?php
    return ob_get_clean();
}

add_shortcode('shop_banner_sec', 'my_shortcode');

/* 16-07-2022 start */


// Creating the widget
class wpb_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget', 
 
// Widget name will appear in UI
__('WPBeginner Widget', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output
echo __( 'Hello, World!', 'wpb_widget_domain' );
echo $args['after_widget'];
}
 
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_widget ends here
} 
 
// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );


/*  16-07-2022 end */