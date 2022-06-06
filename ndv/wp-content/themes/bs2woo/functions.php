<?php
/**
 * bs2woo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bs2woo
 */

if ( ! function_exists( 'bs2woo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bs2woo_setup() {
 
	// TAOJ SIDEBAR 

		  register_sidebar(array('id'=>'quick_link_footer','name'          => __( 'Quick Link ở footer', 'theme_text_domain' ))); 
		  register_sidebar(array('id'=>'quick_link_footer_so2','name'          => __( 'Quick Link ở footer số 2', 'theme_text_domain' ))); 
		  register_sidebar(array('id'=>'thong_tin_mang_xa_hoi','name'          => __( 'Mạng xã hội  ', 'theme_text_domain' ))); 

		  register_sidebar(
		  	array('id'	=>'thong_tin_the_thanh_toan',
		  		  'name'=> __( 'Thẻ thanh toán footer', 'theme_text_domain'),
		  		  'before_widget' => '<ul>',
				  'after_widget'  => '</ul>'
		  			)); 
 

		  register_sidebar(
		  	array('id'	=>'thongtincopyright',
		  		  'name'=> __( 'Copyright ở footer', 'theme_text_domain'),
		  		  'before_widget' => '<ul>',
				  'after_widget'  => '</ul>'
		  			)); 
 
  register_sidebar(
		  	array('id'	=>'location',
		  		  'name'=> __( 'Location footer', 'theme_text_domain'),
		  		  'before_widget' => '<ul>',
				  'after_widget'  => '</ul>',
				  'before_title'  => '<h3 class="tdfoot text-xs-center text-sm-left">',
				  'after_title'   => '</h3>' 	
		  			)); 
 

 
	// XONG SIDEBAR 


	// KICH HOAT TINH NANG HO TRO WOOCOMMERCE, UPLOAD LOGO
	add_theme_support('woocommerce');
	add_theme_support('custom-logo');
	// HET PHAN KICH HOAT. 
	function them_class_cho_menu($ulclass) {
		$a = preg_replace('/<a /','<a class="nav-link"',$ulclass);
		return preg_replace('/<li /', '<li class="nav-item"', $a);
	}
	add_filter('wp_nav_menu','them_class_cho_menu');

	// BO PHAN NGOI SAO DANH GIA 
	remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);
	// XU LY PHAN LINK .DUOI
	function thaylink() {
		echo '<a href="' . get_the_permalink() . '" class="duoi">';
	}
	// removecai cu di 
	remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10);
	add_action('woocommerce_before_shop_loop_item','thaylink',10);
	// XU LAY ANH SAN PHAM 
	function thayanh( $size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0 ) {
		global $post;
		$image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );

		if ( has_post_thumbnail() ) {
			$props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
			$output = '<span class="anh1sp">';
			$output .= get_the_post_thumbnail( $post->ID, $image_size, array(
				'title'	 => $props['title'],
				'alt'    => $props['alt'],
			) );

			$output .="</span>";
			echo $output; 

		} elseif ( wc_placeholder_img_src() ) {
			return wc_placeholder_img( $image_size );
		}
	}

	remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10) ;
	add_action('woocommerce_before_shop_loop_item_title','thayanh',10) ;

	 // HET PHAN XU LY ANH 
	// VIET ACTION  XU LY DANH MUC SAN PHAM 
	function themdanhmuc() {
		global $product ; 
		$danhmuc = wp_get_post_terms($product->id, 'product_cat');

		foreach($danhmuc as $tungdanhmuc){
			echo '<span class="cat"> ';
			echo $tungdanhmuc->name ; 
			echo '</span>' ;
		}
		
	}
	add_action('woocommerce_after_shop_loop_item_title','themdanhmuc',1);
	// HET XU LY DANH MUC SAN PHAM 
	// XU LY PHAN HET HANG 
	function xulyhethang( $args = array() ) {
		global $product;

		// neu ma khong co hang 
		if(!$product->is_in_stock())
		{
			echo '<div class="tren ofs"><a href=""> Tạm hết hàng <i class="fa fa-long-arrow-right"></i> </a></div>' ; 

		}
		elseif ( $product ) {
			$defaults = array(
				'quantity' => 1,
				'class'    => implode( ' ', array_filter( array(
						'button',
						'product_type_' . $product->product_type,
						$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
						$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
				) ) )
			);

			$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );

			wc_get_template( 'loop/add-to-cart.php', $args );
		}
	}

	remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);
	add_action('woocommerce_after_shop_loop_item','xulyhethang',10);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bs2woo, use a find and replace
	 * to change 'bs2woo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bs2woo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'bs2woo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bs2woo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'bs2woo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bs2woo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bs2woo_content_width', 640 );
}
add_action( 'after_setup_theme', 'bs2woo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bs2woo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bs2woo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bs2woo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bs2woo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bs2woo_scripts() {
	wp_enqueue_style( 'bs2woo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bs2woo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bs2woo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bs2woo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
