<?php

/**
 * Plugin Name: Knowledge Base Document Types
 * Plugin URI:  https://rf.com
 * Description: Provides document types for my own private Knowledge Base. 
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
			add_action('init', [$this, 'productsTaxonomy'], 0);
			add_action('init', [$this, 'userTaxonomy'], 0);
			
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
			'taxonomies' 	      => ['post_tag', 'products', 'kb-categories'],
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
			'taxonomies' 	      => ['post_tag', 'products', 'kb-categories'],
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
			'taxonomies' 	      => ['post_tag', 'products', 'kb-categories'],
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
			'taxonomies' 	      => ['post_tag', 'products', 'kb-categories'],
			'publicly_queryable'  => true,
			'capability_type'     => 'post'
		];
		register_post_type('functionality', $args);
	}
 
	// Create Category Taxonomy for Knowledge Base
	function collectionsTaxonomy() {

	  $labels = array(
		'name' => _x( 'Knowledge Base Categories', 'Knowledge Base Categories'),
		'singular_name' => _x( 'Knowledge Base Category', 'Knowledge Base Category'),
		'search_items' =>  __( 'Search Knowledge Base Categories' ),
		'all_items' => __( 'All Knowledge Base Categories' ),
		'parent_item' => __( 'Parent Knowledge Base Category' ),
		'parent_item_colon' => __( 'Parent Knowledge Base Category:' ),
		'edit_item' => __( 'Edit Knowledge Base Category' ), 
		'update_item' => __( 'Update Knowledge Base Category' ),
		'add_new_item' => __( 'Add New Knowledge Base Category' ),
		'new_item_name' => __( 'New Knowledge Base Category Name' ),
		'menu_name' => __( 'Knowledge Base Categories' ),
	  );    

	// Now register the taxonomy
	  register_taxonomy('kb-categories',['post'], 
		[
        'hierarchical' => false,
		'has_archive' => true,
        'public' => true,
        'show_ui' => true,
		'capability_type'    => 'post',
		'show_in_menu' => false,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
		'labels' => $labels,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
	    ]);
	}
	
		// Create Product Taxonomy for PetPro Teleplus and PetPro Connect
	function productsTaxonomy() {

	  $labels = array(
		'name' => _x('products','Pawru Products'),
		'singular_name' => _x('Product','Pawru Product'),
		'search_items' =>  __( 'Search Products' ),
		'all_items' => __( 'All Products' ),
		'parent_item' => __( 'Parent Product' ),
		'parent_item_colon' => __( 'Parent Product:' ),
		'edit_item' => __( 'Edit Product' ), 
		'update_item' => __( 'Update Product' ),
		'add_new_item' => __( 'Add New Product' ),
		'new_item_name' => __( 'New Product' ),
		'menu_name' => __( 'Product' ),
	  );    

	// Now register the taxonomy
	  register_taxonomy('products',['post'], 
		[
        'hierarchical' => false,
		'has_archive' => true,
        'public' => true,
        'show_ui' => true,
		'capability_type'    => 'post',
		'show_in_menu' => false,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
		'labels' => $labels,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
	    ]);
	}
	
	public function userTaxonomy() {
		$labels = array(
		'name' => _x('User Type','Pawru Products'),
		'singular_name' => _x('User Type','Pawru Product'),
		'search_items' =>  __( 'Search User Types' ),
		'all_items' => __( 'All User Types' ),
		'parent_item' => __( 'Parent User Type' ),
		'parent_item_colon' => __( 'Parent User Type:' ),
		'edit_item' => __( 'Edit User Type' ), 
		'update_item' => __( 'Update User Type' ),
		'add_new_item' => __( 'Add New User Type' ),
		'new_item_name' => __( 'New User Type' ),
		'menu_name' => __( 'User Type' ),
	  );    

	// Now register the taxonomy
	  register_taxonomy('user-type',['post'], 
		[
        'hierarchical' => false,
		'has_archive' => true,
        'public' => true,
        'show_ui' => true,
		'capability_type'    => 'post',
		'show_in_menu' => false,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
		'labels' => $labels,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
	    ]);
	}

}


$postTypes = new CustomPostType();