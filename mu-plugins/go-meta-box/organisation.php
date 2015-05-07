<?php

$mb[] = array(
    'id' => 'contact_info',
    'title' => __( 'Kontaktoplysninger', 'rwmb' ),
    'pages' => array('organisation'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'ID', 'rwmb' ),
            'id'    => "org_id",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'Valideret', 'rwmb' ),
            'id'    => "org_val",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'Organisationens navn', 'rwmb' ),
            'id'    => "org_name",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'Kontaktpersons titel', 'rwmb' ),
            'id'    => "cp_title",
            'type' => 'text',
            ),
        array(
            'name'  => __( 'Kontaktpersons Fornavn', 'rwmb' ),
            'id'    => "cp_fname",
            'type' => 'text',
            ),
        array(
            'name'  => __( 'Kontaktpersons Efternavn', 'rwmb' ),
            'id'    => "cp_lname",
            'type' => 'text',
            ),
    ),

    'validation' => array(
        'rules'    => array(

            "cp_fname" => array(
                'required'  => false,
                'minlength' => 2,
            ),

            "cp_lname" => array(
                'required'  => false,
                'minlength' => 2,
            ),
        ),
    ),
);

$mb[] = array(
    'id' => 'address',
    'title' => __( 'Adresse', 'rwmb' ),
    'pages' => array('organisation'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'C/O', 'rwmb' ),
            'id'    => "addr_co",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'Gade', 'rwmb' ),
            'id'    => "addr_gade",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'Sted', 'rwmb' ),
            'id'    => "addr_sted",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'Postnummer', 'rwmb' ),
            'id'    => "addr_postnr",
            'type' => 'text',
            ),

        array(
            'name'  => __( 'By', 'rwmb' ),
            'id'    => "addr_by",
            'type' => 'text',
            ),

    ),

    'validation' => array(
        'rules'    => array(
            "addr_co" => array(
                'required'  => false,
                'minlength' => 7,
            ),

            "addr_gade" => array(
                'required'  => true,
                'minlength' => 2,
            ),

            "addr_sted" => array(
                'required'  => false,
                'minlength' => 2,
            ),

            "addr_postnr" => array(
                'required'  => true,
                'minlength' => 4,
            ),
        ),
    ),
);


$mb[] = array(
    'id' => 'other_contact',
    'title' => __( 'Andre kontaktoplysninger', 'rwmb' ),
    'pages' => array('organisation'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Telefonnumre', 'rwmb' ),
            'id'    => "tlf",
            'type'  => 'text',
            'clone' => 'true',
            ),

        array(
            'name'  => __( 'Emails', 'rwmb' ),
            'id'    => "email",
            'type' => 'email',
            'clone' => 'true',
            ),

        array(
            'name'  => __( 'Hjemmesider', 'rwmb' ),
            'id'    => "website",
            'type'  => 'url',
            'clone' => 'true',
            ),

         array(
            'name'  => __( 'Fax', 'rwmb' ),
            'id'    => "fax",
            'type' => 'text',
            ),
    ),
);


$mb[] = array(
    'id' => 'socials',
    'title' => __( 'Sociale medier', 'rwmb' ),
    'pages' => array('organisation'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Facebook', 'rwmb' ),
            'id'    => "facebook",
            'type' => 'url',
            ),

        array(
            'name'  => __( 'Twitter', 'rwmb' ),
            'id'    => "twitter",
            'type' => 'url',
            ),

        array(
            'name'  => __( 'Instagram', 'rwmb' ),
            'id'    => "instragram",
            'type' => 'url',
            ),

        array(
            'name'  => __( 'Linkedin', 'rwmb' ),
            'id'    => "linkedin",
            'type' => 'url',
            ),

        array(
            'name'  => __( 'Skype', 'rwmb' ),
            'id'    => "skype",
            'type' => 'url',
            ),
    ),
);


?>
