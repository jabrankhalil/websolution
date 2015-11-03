<?php
add_action('init','post_type');
function post_type()
{


    $service = array(

        'name' => 'services',
        'singular_name' => 'service',
        'add_new' => 'Add New service',
        'add_new_item' => 'Add New service',
        'edit_item' => 'Edit service',
        'new_item' => 'New service',
        'all_items' => 'All services',
        'view_item' => 'View service',
        'search_items' => 'Search services',
        'not_found' => 'No services Found',
        'not_found_in_trash' => 'No services found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Services',


    );
    $services = array(
        'labels' => $service,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'services'),
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'editor', 'author','thumbnail'),
        'menu_position' => 5
    );
    register_post_type('service', $services);

    $ecommerce = array(

        'name' => 'Ecommerce',
        'singular_name' => 'Ecommerce',
        'add_new' => 'Add New Ecommerce',
        'add_new_item' => 'Add New Ecommerce',
        'edit_item' => 'Edit Ecommerce',
        'new_item' => 'New Ecommerce',
        'all_items' => 'All Ecommerce',
        'view_item' => 'View Ecommerce',
        'search_items' => 'Search Ecommerce',
        'not_found' => 'No Ecommerce Found',
        'not_found_in_trash' => 'No Ecommerce found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Ecommerce',


    );
    $Ecommerce = array(
        'labels' => $ecommerce,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'ecommerce'),
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'editor'),
        'menu_position' => 5
    );
    register_post_type('ecommerce', $Ecommerce);

    $webapp = array(

        'name' => 'Web Application',
        'singular_name' => 'Web Application',
        'add_new' => 'Add New Web Application',
        'add_new_item' => 'Add New Web Application',
        'edit_item' => 'Edit Web Application',
        'new_item' => 'New Web Application',
        'all_items' => 'All Web Application',
        'view_item' => 'View Web Application',
        'search_items' => 'Search Web Application',
        'not_found' => 'No Web Applications Found',
        'not_found_in_trash' => 'No Web Application found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Web Application',


    );
    $Webapp = array(
        'labels' => $webapp,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'rewrite' => array('slug' => 'abouts'),
        'menu_icon' => 'dashicons-editor-paste-word',
        'supports' => array('title', 'editor'),
        'menu_position' => 5
    );
    register_post_type('webapp', $Webapp);

    $team = array(

        'name' => 'Team',
        'singular_name' => 'Team',
        'add_new' => 'Add New Team',
        'add_new_item' => 'Add New Team',
        'edit_item' => 'Edit Team',
        'new_item' => 'New Team',
        'all_items' => 'All Team',
        'view_item' => 'View Team',
        'search_items' => 'Search Team',
        'not_found' => 'No Team Found',
        'not_found_in_trash' => 'No Team found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Team',


    );
    $Team = array(
        'labels' => $team,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'rewrite' => array('slug' => 'teams'),
        'menu_icon' => 'dashicons-smiley',
        'supports' => array('title', 'editor'),
        'menu_position' => 5
    );
    register_post_type('team', $Team);




    $clients = array(

        'name' => 'Clients',
        'singular_name' => 'Clients',
        'add_new' => 'Add New Client',
        'add_new_item' => 'Add New Client',
        'edit_item' => 'Edit Client',
        'new_item' => 'New Client',
        'all_items' => 'All Client',
        'view_item' => 'View Client',
        'search_items' => 'Search Clients',
        'not_found' => 'No Team Found',
        'not_found_in_trash' => 'No Clients found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Clients',


    );
    $client = array(
        'labels' => $clients,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'rewrite' => array('slug' => 'clients'),
        'menu_icon' => 'dashicons-businessman',
        'supports' => array('title', 'editor','thumbnail'),
        'menu_position' => 5
    );
    register_post_type('client', $client);

    $wordpress= array(

        'name' => 'wordpress',
        'singular_name' => 'wordpress',
        'add_new' => 'Add New wordpress',
        'add_new_item' => 'Add New wordpress',
        'edit_item' => 'Edit wordpress',
        'new_item' => 'New wordpress',
        'all_items' => 'All wordpress',
        'view_item' => 'View wordpress',
        'search_items' => 'Search wordpress',
        'not_found' => 'No wordpress Found',
        'not_found_in_trash' => 'No wordpress found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'wordpress',


    );
    $Wordpress = array(
        'labels' => $wordpress,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => false,
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'wordpress'),
        'menu_icon' => 'dashicons-wordpress',
        'supports' => array('title', 'editor', 'author','thumbnail'),
        'menu_position' => 5
    );
    register_post_type('wordpress', $Wordpress);

}

