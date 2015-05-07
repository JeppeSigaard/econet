<?php

// Set title
add_filter( 'the_title', 'smartmonkey_title' );
function smartmonkey_title( $title ) {if ( $title == '' ) {return '&rarr;';} else {return $title;}}
add_filter( 'wp_title', 'smartmonkey_filter_wp_title' );
function smartmonkey_filter_wp_title( $title ){return $title . esc_attr( get_bloginfo( 'name' ) );}
