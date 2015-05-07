<?php
/**
 * Plugin Name: Images by SmartMonkey
 * Plugin URI: http://smartmonkey.dk
 * Description: A brief description of the plugin.
 * Version: 0.1
 * Author: Jeppe Sigaard
 * Author URI: smartmonkey.dk/jeppe-sigaard
 * License: None
 */

// Opskaler
add_filter( 'image_resize_dimensions', 'smamo_thumbnail_upscale', 10, 6 );

function smamo_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
    if ( !$crop ) return null;

    $aspect_ratio = $orig_w / $orig_h;
    $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

    $crop_w = round($new_w / $size_ratio);
    $crop_h = round($new_h / $size_ratio);

    $s_x = floor( ($orig_w - $crop_w) / 2 );
    $s_y = floor( ($orig_h - $crop_h) / 2 );

    return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}



add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

?>
