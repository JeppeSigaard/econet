<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Topmenu' ),
      'main-menu' => __( 'hovedmenu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
