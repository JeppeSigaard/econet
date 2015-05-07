<?php

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    require 'kalender.php';

    require 'organisation.php';

    return $mb;
}
?>
