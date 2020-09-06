<?php

$data = array(
	'store-hub' => array(
	  'categories'        => array( 'Store Hub' ),
	  'preview_url'     => 'https://demo.wpoperation.com/wpparallax/store-hub/',
	  'xml_file'        => 'content.xml',
	  'theme_settings'  => 'options.dat',
	  'widgets_file'    => 'widgets.wie',
	  'home_title'      => 'Home',
	  'blog_title'      => 'Blog',
	  'posts_to_show'   => '10',
	  'is_shop' => true,
	  'menus'         => array(
	      'menu-1' => 'Menu 1'
	  ),
	  'required_plugins'  => array(
	    'free' => array(
          array(
            'slug'    => 'elementor',
            'init'    => 'elementor/elementor.php',
            'name'    => 'Elementor',
          ),
          array(
            'slug'    => 'wpop-elementor-addons',
            'init'    => 'wpop-elementor-addons/wpop-elementor-addons.php',
            'name'    => 'WPOP Elementor Addons',
          ),
	      array(
	        'slug'    => 'ultra-companion',
	        'init'    => 'ultra-companion/ultra-companion.php',
	        'name'    => 'Ultra Companion',
	      ),
	      array(
	        'slug'    => 'woocommerce',
	        'init'    => 'woocommerce/woocommerce.php',
	        'name'    => 'WooCommerce',
	      ),
          array(
            'slug'    => 'salert',
            'init'    => 'salert/salert.php',
            'name'    => 'Salert',
          ),
	      array(
	        'slug'    => 'contact-form-7',
	        'init'    => 'contact-form-7/wp-contact-form-7.php',
	        'name'    => 'Contact Form 7',
	      ),

	    ),
	  ),
	),
);
print_r(json_encode($data));