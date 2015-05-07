<?php

add_action('init','add_categories');

function add_categories(){
$types = array('bibliotek','opslagstavle','kalender','organisation');

foreach($types as $type){

    register_taxonomy_for_object_type('category', $type);
    register_taxonomy_for_object_type('post_tag', $type);



    global $wp_taxonomies;

    $wp_taxonomies['post_tag']->labels = (object)array(
        'name' => 'Emner',
        'menu_name' => 'Emner',
        'singular_name' => 'Emne',
        'search_items' => 'Søg emner',
        'popular_items' => 'Populære emner',
        'all_items' => 'Alle emner',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Rediger emner',
        'update_item' => 'Opdater emner',
        'add_new_item' => 'Tilføj  nyt emner',
        'new_item_name' => 'Nyt Emner',
        'separate_items_with_commas' => 'Separer emner med komma',
        'add_or_remove_items' => 'Tilføj eller fjern emner',
        'choose_from_most_used' => 'Vælg fra mest brugte emner',
    );

    $wp_taxonomies['post_tag']->label = 'Stikord';


}

}

?>
