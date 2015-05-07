<?php

// vi skal ikke bruger header, men WP's funktionsbibliotek
define('WP_USE_THEMES', false);

// Vores retur encodes til json, så det er nemt at bruge i javascript.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: text/html; charset=utf-8');

// Hent wp-load, så vi får mulighed for at bruge wordpress' funktionsarkiv
require '../../../../wp-load.php';


echo 'loaded';


/* DB oplysninger */
/*
$host=		"localhost";
$db_user=	"root";
$db_pswd=	"root";
$db_name=	"eco-net";

/// Forbind
$connect = mysql_connect($host,$db_user,$db_pswd)or die(mysqli_error());

/// Vælg DB
$select_db = mysql_select_db($db_name,$connect) or die(mysql_error());

$input = mysql_query("select * from eiorg_maindata")or die(mysql_error());

$org_array = array();

while($row = mysql_fetch_array($input)){



    $org_array[] = array(

        'org_id' => $row['id'],
        'org_name' => utf8_encode($row['name']),
        'cp_title'  => utf8_encode($row['title']),
        'cp_fname'  => utf8_encode($row['firstname'].''.$row['middlename']),
        'cp_lname'  => utf8_encode($row['lastname']),

        'addr_gade' => utf8_encode($row['street1']),
        'addr_sted' => utf8_encode($row['street2']),
        'addr_postnr' => utf8_encode($row['zip']),
        'addr_by' => utf8_encode($row['city']),

        'tlf' => array(

            0 => utf8_encode($row['phone1']),
            1 => utf8_encode($row['phone2']),

        ),

        'email' => array(

            0 => utf8_encode($row['emailaddress1']),
            1 => utf8_encode($row['emailaddress2']),

        ),

        'website' => array(

            0 => utf8_encode($row['www']),
            1 => utf8_encode($row['www2']),

        ),

        'fax'   => utf8_encode($row['fax']),

        'desc_long' => utf8_encode($row['description']),

        'desc_short' => utf8_encode($row['shortdescription']),

        'created_date' => $row['createdate'],

        'org_val' => $row['validated'],

    );

}

$i = 0;
foreach($org_array as $org){
    $i++;

    if($i >= 3000 && $i < 4000){

        $post_title = '';
        if($org['org_name'] !== ''){
            $post_title = $org['org_name'];
        }
        else{
            $post_title = $org['cp_fname'].' '.$org['cp_lname'];
        }

        $post_vars = array(
            'post_content'   => apply_filters('the_content',$org['desc_long']),
            'post_title'     => $post_title,
            'post_status'    => 'publish',
            'post_type'      => 'organisation',
            'post_excerpt'   => wp_strip_all_tags($org['desc_short']),
            'post_date'      => date('Y-m-d H:i:s',strtotime($org['created_date'])),
        );

        $post = wp_insert_post($post_vars,true);

        if(is_wp_error($post)){

            echo 'Fejl ved oprettelse: '.$post->get_error_message();

        }

        else{

            update_post_meta($post,'org_name',$org['org_name']);
            update_post_meta($post,'cp_title',$org['cp_title']);
            update_post_meta($post,'cp_fname',$org['cp_fname']);
            update_post_meta($post,'cp_lname',$org['cp_lname']);
            update_post_meta($post,'addr_gade',$org['addr_gade']);
            update_post_meta($post,'addr_sted',$org['addr_sted']);
            update_post_meta($post,'addr_postnr',$org['addr_postnr']);
            update_post_meta($post,'addr_by',$org['addr_by']);
            update_post_meta($post,'tlf',$org['tlf']);
            update_post_meta($post,'email',$org['email']);
            update_post_meta($post,'website',$org['website']);
            update_post_meta($post,'fax',$org['fax']);
            update_post_meta($post,'org_id',$org['org_id']);
            update_post_meta($post,'org_val',$org['org_val']);

            echo 'inserted: '.$org['org_id'].'<br/>';
        }

    }

}


?>
