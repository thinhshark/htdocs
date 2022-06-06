<?php

function tn_enqueue(){
    $uri = get_theme_file_uri();
    $ver = TN_DEV_MODE ? time() : false;

    wp_register_style( 'tn_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver );
    wp_register_style('tn_bootstrap', $uri . '/assets/css/bootstrap.css', [], $ver );
    wp_register_style('tn_style', $uri . '/assets/css/style.css', [], $ver );
    wp_register_style('tn_dark', $uri . '/assets/css/dark.css', [], $ver );
    wp_register_style('tn_font-icons', $uri . '/assets/css/font-icons.css', [], $ver );
    wp_register_style('tn_magnific-popup', $uri . '/assets/css/magnific-popup.css', [], $ver );
    wp_register_style('tn_custom', $uri . '/assets/css/custom.css', [], $ver );
    wp_register_style('tn_responsive', $uri . '/assets/css/responsive.css', [], $ver );

    wp_enqueue_style( 'tn_google_fonts' );
    wp_enqueue_style( 'tn_bootstrap' );
    wp_enqueue_style( 'tn_style' );
    wp_enqueue_style( 'tn_dark' );
    wp_enqueue_style( 'tn_font-icons' );
    wp_enqueue_style( 'tn_magnific-popup' );
    wp_enqueue_style( 'tn_custom' );
    wp_enqueue_style( 'tn_responsive' );

    wp_register_script('tn_plugins', $uri . '/assets/js/plugins.js', [], $ver, true);
    wp_register_script('tn_functions', $uri . '/assets/js/functions.js', [], $ver, true);

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'tn_plugins' );
    wp_enqueue_script( 'tn_functions' );
}