<?php

add_filter( 'wp_nav_menu_items', 'nav_menu_add_search', 10, 2 );
add_filter('login_redirect', 'admin_default_page');
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
add_action('after_setup_theme','dpm_supports');
add_filter('nav_menu_css_class', 'dpm_menu_class');
add_filter('nav_menu_link_attributes', 'dpm_menu_link_class');


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

function nav_menu_add_search( $items, $args ) {
	if ( in_array($args->theme_location,['header','header-mobile'])) {
		$menulink =  '
      <li> 
        <a href="http://localhost/apo/il-etait-plusieurs-doigts/public/panier/">
          <i class="fas fa-shopping-bag icon"></i>
          <span class="count">' . getProductCount() . '</span>
        </a>
      </li>';
    
		$items .= $menulink;
	}
	return $items;
}


function special_nav_class ($classes,$item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

// once connecter user redirect on home page
function admin_default_page() {
  return get_home_url();
}

add_image_size('product-card', 240, 240, true);
