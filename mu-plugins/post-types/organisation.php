<?php

add_action( 'init', 'smamo_add_organisation' );

function smamo_add_organisation() {
	register_post_type( 'organisation', array(

        'menu_icon' 		 => 'dashicons-businessman',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'de-gronne-sider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 18,
		'supports'           => array( 'title', 'thumbnail','editor','excerpt'),
        'labels'             => array(

            'name'               => _x( 'De grønne sider', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Organisation', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'De grønne sider', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'De grønne sider', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'organisation', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny organisation', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se organisation', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find organisation', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny organisation.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}


?>
