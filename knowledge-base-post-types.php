<?php

/**
 * Plugin Name: Knowledge Base Document Types
 * Plugin URI:  https://rf.com
 * Description: Provides document types for a custom WP Knowledge Base. Admin menu and submenu document types can be created currently via Bitbucket
 * Version:     1.0.0
 * Author:      Rosie Faulkner
 * Author URI:  http://www.rf.com/
 * License:     GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: knowledge-base-doc-types
 * Domain Path: /plugins/
 *
 * @package        Knowledge_Base_Doc_Types
 */


//Creating a Procedure Custom Post Type
class CustomPostType {
	
		function __construct(){
			add_action('init', [$this, 'knowledge_base_how_to'], 0);
			add_action('init', [$this, 'knowledge_base_procedure'], 0);
			add_action('init', [$this, 'knowledge_base_troubleshooting'], 0);
			add_action('init', [$this, 'knowledge_base_functionalities'], 0);
			add_action('init', [$this, 'collectionsTaxonomy'], 0);
		}

	//Creating a How-To Custom Post Type
	public function knowledge_base_how_to()
	{
		$labels = [
			'name'                => __('How-To'),
			'singular_name'       => __('How-To'),
			'menu_name'           => __('How-To'),
			'parent_item_colon'   => __('Parent How-To'),
			'all_items'           => __('All How-To'),
			'view_item'           => __('View How-To'),
			'add_new_item'        => __('Add New How-To'),
			'add_new'             => __('Add New'),
			'edit_item'           => __('Edit How-To'),
			'update_item'         => __('Update How-To'),
			'search_items'        => __('Search How-To'),
			'not_found'           => __('Not Found'),
			'not_found_in_trash'  => __('Not found in Trash')
		];
		$args = [
			'label'               => __('How-To'),
			'description'         => __('Pawru Knowledge Base How-Tos'),
			'labels'              => $labels,
			'supports'            => ['title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'],
			'public'              => true,
			'hierarchical'        => true,
			'show_ui'             => true,
			'show_in_menu'        => 'edit.php',
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'has_archive'         => true,
			'can_export'          => true,
			'exclude_from_search' => true,
			'yarpp_support'       => true,
			'taxonomies' 	      => ['post_tag', 'Article'],
			'publicly_queryable'  => true,
			'capability_type'     => 'post'
		];
		register_post_type('how_to', $args);
	}

		public function knowledge_base_procedure()
	{
		$labels = [
			'name'                => __('Procedure'),
			'singular_name'       => __('Procedure'),
			'menu_name'           => __('Procedure'),
			'parent_item_colon'   => __('Parent Procedure'),
			'all_items'           => __('All Procedures'),
			'view_item'           => __('View Procedure'),
			'add_new_item'        => __('Add New Procedure'),
			'add_new'             => __('Add New'),
			'edit_item'           => __('Edit Procedure'),
			'update_item'         => __('Update Procedure'),
			'search_items'        => __('Search Procedure'),
			'not_found'           => __('Not Found'),
			'not_found_in_trash'  => __('Not found in Trash')
		];
		$args = [
			'label'               => __('Procedure'),
			'description'         => __('Pawru Knowledge Base Procedures'),
			'labels'              => $labels,
			'supports'            => ['title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'],
			'public'              => true,
			'hierarchical'        => true,
			'show_ui'             => true,
			'show_in_menu'        => 'edit.php',
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'has_archive'         => true,
			'can_export'          => true,
			'exclude_from_search' => false,
			'yarpp_support'       => true,
			'taxonomies' 	      => ['post_tag', 'Article'],
			'publicly_queryable'  => true,
			'capability_type'     => 'post'
		];
		register_post_type('procedure', $args);
	}


	//Creating a Troubleshooting Custom Post Type
	public function knowledge_base_troubleshooting()
	{
		$labels = [
			'name'                => __('Troubleshooting'),
			'singular_name'       => __('Troubleshooting'),
			'menu_name'           => __('Troubleshooting'),
			'parent_item_colon'   => __('Parent Troubleshooting'),
			'all_items'           => __('All Troubleshooting'),
			'view_item'           => __('View Troubleshooting'),
			'add_new_item'        => __('Add New Troubleshooting'),
			'add_new'             => __('Add New'),
			'edit_item'           => __('Edit Troubleshooting'),
			'update_item'         => __('Update Troubleshooting'),
			'search_items'        => __('Search Troubleshooting'),
			'not_found'           => __('Not Found'),
			'not_found_in_trash'  => __('Not found in Trash')
		];
		$args = [
			'label'               => __('Troubleshooting'),
			'description'         => __('Pawru Knowledge Base Troubleshooting'),
			'labels'              => $labels,
			'supports'            => ['title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'],
			'public'              => true,
			'hierarchical'        => true,
			'show_ui'             => true,
			'show_in_menu'        => 'edit.php',
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'has_archive'         => true,
			'can_export'          => true,
			'exclude_from_search' => false,
			'yarpp_support'       => true,
			'taxonomies' 	      => ['post_tag', 'Article'],
			'publicly_queryable'  => true,
			'capability_type'     => 'post'
		];
		register_post_type('troubleshooting', $args);
	}


	//Creating a Functionality Custom Post Type
	public function knowledge_base_functionalities()
	{
		$labels = [
			'name'                => __('Functionality'),
			'singular_name'       => __('Functionality'),
			'menu_name'           => __('Functionalities'),
			'parent_item_colon'   => __('Parent Functionality'),
			'all_items'           => __('All Functionalities'),
			'view_item'           => __('View Functionality'),
			'add_new_item'        => __('Add New Functionality'),
			'add_new'             => __('Add New'),
			'edit_item'           => __('Edit Functionality'),
			'update_item'         => __('Update Functionality'),
			'search_items'        => __('Search Functionality'),
			'not_found'           => __('Not Found'),
			'not_found_in_trash'  => __('Not found in Trash')
		];
		$args = [
			'label'               => __('Functionality'),
			'description'         => __('Pawru Knowledge Base Functionality'),
			'labels'              => $labels,
			'supports'            => ['title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'],
			'public'              => true,
			'hierarchical'        => true,
			'show_ui'             => true,
			'show_in_menu'        => 'edit.php',
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'has_archive'         => true,
			'can_export'          => true,
			'exclude_from_search' => false,
			'yarpp_support'       => true,
			'taxonomies' 	      => ['post_tag', 'Article'],
			'publicly_queryable'  => true,
			'capability_type'     => 'post'
		];
		register_post_type('functionality', $args);
	}
 
	// Create Category Taxonomy for Knowledge Base
	function collectionsTaxonomy() {

	  $labels = array(
		'name' => _x( 'Collections', 'Knowledge Base Collections' ),
		'singular_name' => _x( 'Collection', 'Knowledge Base Collection' ),
		'search_items' =>  __( 'Search Collections' ),
		'all_items' => __( 'All Collections' ),
		'parent_item' => __( 'Parent Collection' ),
		'parent_item_colon' => __( 'Parent Collection:' ),
		'edit_item' => __( 'Edit Collection' ), 
		'update_item' => __( 'Update Collection' ),
		'add_new_item' => __( 'Add New Collection' ),
		'new_item_name' => __( 'New Collection Name' ),
		'menu_name' => __( 'Collections' ),
	  );    

	// Now register the taxonomy
	  register_taxonomy('collections',['functionality, troubleshooting', 'procedure', 'how_to'], 
		['hierarchical' => true,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => false,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
		'labels' => $labels,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' =>  ['slug' => 'collection' ],
	    ]);

	}

}


$postTypes = new CustomPostType();