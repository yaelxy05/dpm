<?php

// ==========================================================================================
// display title tag 
// ==========================================================================================
function dpm_supports() 
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'en tête du menu');
    register_nav_menu('header-mobile', 'en tête du menu mobile');
}

function dpm_menu_class($classes) 
{
    $classes[]= 'nav-items';
    return $classes;
}

function dpm_menu_link_class($attrs)
{
    $attrs['class'] = 'header_link';
    return $attrs;
}

/**
 * Add icons
 */
add_filter( 'wp_nav_menu_items', 'nav_menu_add_search', 10, 2 );
function nav_menu_add_search( $items, $args ) {
	if ( in_array($args->theme_location,['header','header-mobile'])) {
		$menulink = '<li><i class="fas fa-shopping-cart header_link"></i></li>';
		$items .= $menulink;
	}
	return $items;
}

add_action('after_setup_theme','dpm_supports');
add_filter('nav_menu_css_class', 'dpm_menu_class');
add_filter('nav_menu_link_attributes', 'dpm_menu_link_class');