<?php

add_action( 'init', 'smamo_add_bibliotek' );

function smamo_add_bibliotek() {
	register_post_type( 'bibliotek', array(

        'menu_icon' 		 => 'dashicons-book-alt',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'bibliotek' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 18,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(

            'name'               => _x( 'Bibliotek', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Medie', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Bibliotek', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Bibliotek', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'medie', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny medie', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se medie', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find medie', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt medie.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}

?>
