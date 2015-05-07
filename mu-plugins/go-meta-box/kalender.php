<?php

$mb[] = array(
    'id' => 'dato',
    'title' => __( 'Dato og tid for begivenhed', 'rwmb' ),
    'pages' => array('kalender'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Startdato', 'rwmb' ),
            'id'    => "start_date",
            'type' => 'date',
            ),

        array(
            'name'  => __( 'Starttid', 'rwmb' ),
            'id'    => "start_time",
            'type' => 'time',
            ),

        array(
            'name'  => __( 'Slutdato', 'rwmb' ),
            'id'    => "end_date",
            'type' => 'date',
            ),

        array(
            'name'  => __( 'Sluttid', 'rwmb' ),
            'id'    => "end_time",
            'type' => 'time',
            ),
    ),
);

$mb[] = array(
    'id' => 'arrangoer',
    'title' => __( 'Arrangeres af en registreret organisation', 'rwmb' ),
    'pages' => array('kalender'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Vælg arrangør', 'rwmb' ),
            'id'    => "arr_org",
            'type' => 'post',
            'desc' => __('<br/><a class="button" href="'.get_bloginfo('url').'/wp-admin/post-new.php?post_type=organisation">Opret en ny organisation</a>','rwmb'),

            'post_type'   => 'organisation',
				'field_type'  => 'select_advanced',
				'placeholder' => __( 'Vælg en organisation', 'meta-box' ),
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				)
            ),

    ),
);



?>
