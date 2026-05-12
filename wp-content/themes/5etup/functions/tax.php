<?php 
    function add_custom_taxonomies_cases() {
        register_taxonomy('cases', ['post', 'projects', 'portfolio', 'references', 'proces'], array(
          'hierarchical' => true,
      
          // Options 
          'labels' => array(
            'name' => _x( 'Cases', 'taxonomy general name' ),
            'singular_name' => _x( 'Case', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Cases' ),
            'all_items' => __( 'All Cases' ),
            'parent_item' => __( 'Parent Case' ),
            'parent_item_colon' => __( 'Parent Case:' ),
            'edit_item' => __( 'Edit Case' ),
            'update_item' => __( 'Update Case' ),
            'add_new_item' => __( 'Add New Case' ),
            'new_item_name' => __( 'New Case Name' ),
            'menu_name' => __( 'Case' ),
          ),
          
          // Slug 
          'rewrite' => array(
            'slug' => 'cases', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
          ),
        ));
      }
      add_action( 'init', 'add_custom_taxonomies_cases', 0 );
      
    function add_custom_taxonomies_services() {
    register_taxonomy('services', ['post', 'projects', 'proces', 'clients'], array(
        'hierarchical' => true,
    
        // Options 
        'labels' => array(
        'name' => _x( 'Services', 'taxonomy general name' ),
        'singular_name' => _x( 'Service', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Service' ),
        'all_items' => __( 'All Services' ),
        'parent_item' => __( 'Parent Service' ),
        'parent_item_colon' => __( 'Parent Service:' ),
        'edit_item' => __( 'Edit Service' ),
        'update_item' => __( 'Update Service' ),
        'add_new_item' => __( 'Add New Service' ),
        'new_item_name' => __( 'New Service Name' ),
        'menu_name' => __( 'Service' ),
        ),
        
        // Slug 
        'rewrite' => array(
        'slug' => 'diensten', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
    }
    add_action( 'init', 'add_custom_taxonomies_services', 0 );

    function add_custom_taxonomies_solutions() {
    register_taxonomy('solutions', ['post', 'projects', 'proces', 'clients'], array(
        'hierarchical' => true,
    
        // Options 
        'labels' => array(
        'name' => _x( 'Solutions', 'taxonomy general name' ),
        'singular_name' => _x( 'Solution', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Solutions' ),
        'all_items' => __( 'All Solutions' ),
        'parent_item' => __( 'Parent Solution' ),
        'parent_item_colon' => __( 'Parent Solution:' ),
        'edit_item' => __( 'Edit Solution' ),
        'update_item' => __( 'Update Solution' ),
        'add_new_item' => __( 'Add New Solution' ),
        'new_item_name' => __( 'New Solution Name' ),
        'menu_name' => __( 'Solution' ),
        ),
        
        // Slug 
        'rewrite' => array(
        'slug' => 'solutions', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
    }
    add_action( 'init', 'add_custom_taxonomies_solutions', 0 );

    function add_custom_taxonomies_phases() {
    register_taxonomy('phases', ['post', 'projects', 'proces', 'clients'], array(
        'hierarchical' => true,
    
        // Options 
        'labels' => array(
        'name' => _x( 'Phases', 'taxonomy general name' ),
        'singular_name' => _x( 'Phase', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Phases' ),
        'all_items' => __( 'All Phases' ),
        'parent_item' => __( 'Parent Phase' ),
        'parent_item_colon' => __( 'Parent Phase:' ),
        'edit_item' => __( 'Edit Phase' ),
        'update_item' => __( 'Update Phase' ),
        'add_new_item' => __( 'Add New Phase' ),
        'new_item_name' => __( 'New Phase Name' ),
        'menu_name' => __( 'Phases' ),
        ),
        
        // Slug 
        'rewrite' => array(
        'slug' => '{Phases}', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
    }
    add_action( 'init', 'add_custom_taxonomies_phases', 0 );
?>