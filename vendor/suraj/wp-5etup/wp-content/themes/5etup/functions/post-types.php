<?php
    function prefix_create_custom_post_type() {

        $labels_projects = array(
            'name'          => 'Projects', 
            'singular_name' => 'Project'   
        );

        $labels_portfolio = array(
        'name'          => 'Portfolio', 
        'singular_name' => 'Portfolio'   
        );

        $labels_references = array(
        'name'          => 'References', 
        'singular_name' => 'Reference'   
        );

        $labels_clients = array(
        'name'          => 'Clients', 
        'singular_name' => 'Client'   
        );

        $labels_faq = array(
        'name'          => 'FAQ', 
        'singular_name' => 'FAQ'   
        );

        $supports = array(
            'page-attributes',
            'title',       
            'editor',       
            'excerpt',      
            // 'author',      
            'thumbnail',    
            // 'comments',     
            // 'trackbacks',   
            // 'revisions',    
            'custom-fields' 
        );

        $args_projects = array(
        'labels'              => $labels_projects,
        'description'         => 'Post type post product', 
        'supports'            => $supports,
        'taxonomies'          => array( 'category', 'post_tag' ), 
        'hierarchical'        => true, 
        'pages'               => true, // added manualy
        'public'              => true,  
        'show_ui'             => true,  
        'show_in_menu'        => true,  
        'show_in_nav_menus'   => true,  
        'show_in_admin_bar'   => true,  
        'menu_position'       => 5,     
        'menu_icon'           => true,  
        'can_export'          => true,  
        'has_archive'         => true,  
        'exclude_from_search' => false, 
        'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
        'capability_type'     => 'post' // Allows read, edit, delete like “Post”
        );

        $args_references = array(
            'labels'              => $labels_references,
            'description'         => 'Post type post reference', // Description
            'supports'            => $supports,
            'taxonomies'          => array( 'category', 'post_tag' ), 
            'hierarchical'        => true, 
            'public'              => true,  
            'show_ui'             => true,  
            'show_in_menu'        => true,  
            'show_in_nav_menus'   => true,  
            'show_in_admin_bar'   => true,  
            'menu_position'       => 5,     
            'menu_icon'           => true,  
            'can_export'          => true,  
            'has_archive'         => true,  
            'exclude_from_search' => false, 
            'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
            'capability_type'     => 'post' // Allows read, edit, delete like “Post”
            );

        $args_portfolio = array(
        'labels'              => $labels_portfolio,
        'description'         => 'Post type post product', // Description
        'supports'            => $supports,
        'taxonomies'          => array( 'category', 'post_tag' ), 
        'hierarchical'        => true, 
        'public'              => true,  
        'show_ui'             => true,  
        'show_in_menu'        => true,  
        'show_in_nav_menus'   => true,  
        'show_in_admin_bar'   => true,  
        'menu_position'       => 5,     
        'menu_icon'           => true,  
        'can_export'          => true,  
        'has_archive'         => true,  
        'exclude_from_search' => false, 
        'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
        'capability_type'     => 'post' // Allows read, edit, delete like “Post”
        );

        $args_clients = array(
        'labels'              => $labels_clients,
        'description'         => 'Post type post product', // Description
        'supports'            => $supports,
        'taxonomies'          => array( 'category', 'post_tag' ), 
        'hierarchical'        => true, 
        'public'              => true,  
        'show_ui'             => true,  
        'show_in_menu'        => true,  
        'show_in_nav_menus'   => true,  
        'show_in_admin_bar'   => true,  
        'menu_position'       => 5,     
        'menu_icon'           => true,  
        'can_export'          => true,  
        'has_archive'         => true,  
        'exclude_from_search' => false, 
        'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
        'capability_type'     => 'post' // Allows read, edit, delete like “Post”
        );

        $args_faq = array(
        'labels'              => $labels_faq,
        'description'         => 'Post type post faq', // Description
        'supports'            => $supports,
        'taxonomies'          => array( 'category', 'post_tag' ), 
        'hierarchical'        => true, 
        'public'              => true,  
        'show_ui'             => true,  
        'show_in_menu'        => true,  
        'show_in_nav_menus'   => true,  
        'show_in_admin_bar'   => true,  
        'menu_position'       => 5,     
        'menu_icon'           => true,  
        'can_export'          => true,  
        'has_archive'         => true,  
        'exclude_from_search' => false, 
        'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
        'capability_type'     => 'post' // Allows read, edit, delete like “Post”
        );

        register_post_type('projects', $args_projects); 
        register_post_type('portfolio', $args_portfolio);  
        register_post_type('references', $args_references); 
        register_post_type('clients', $args_clients); 
        register_post_type('faq', $args_faq); 
    }
    add_action('init', 'prefix_create_custom_post_type');
?>