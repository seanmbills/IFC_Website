<?php 
	
	add_theme_support('menus');

	function fantom_register_theme_menus() {
        register_nav_menus(
            array(
                'primary-menu' => __('Primary Menu'),
            )
        );
    }

    add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
    function enqueue_load_fa() {
        wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    }

    add_action('init', 'fantom_register_theme_menus');

	function b2w_theme_styles() {
		wp_enqueue_style('style_css', get_template_directory_uri() . "/style.css");
		wp_enqueue_style('modern_business', get_template_directory_uri() . "/css/modern-business.css");
        wp_enqueue_style('bootstrap_min_css', get_template_directory_uri() . "/css/bootstrap.min.css");
	}

	add_action('wp_enqueue_scripts', 'b2w_theme_styles');

	function b2w_theme_js() {
		wp_enqueue_script('jquery_js', get_template_directory_uri() . "/js/jquery.js", array('jquery'), null, true);
		wp_enqueue_script('bootstrap_js', get_template_directory_uri() . "/js/bootstrap.min.js");
	}

	add_action('wp_enqueue_scripts', 'b2w_theme_js');
 ?>