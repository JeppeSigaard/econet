<?php

add_action( 'wp_enqueue_scripts', 'smartmonkey_load_scripts' );
function smartmonkey_load_scripts()
{
	// Stylesheets
	wp_enqueue_style( 'dashicons');
    wp_enqueue_style( 'opoen-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,300,400', false, false, 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri().'/style/main.css', false, false, 'all' );

	// Scripts
    wp_enqueue_script('jq','http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',array(),'1',true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.min.js', array('jq'), '1.0.0', true );
}



// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

?>
