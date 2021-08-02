<?php

// ===========================================================================================
// load assets
require __DIR__ . '/includes/load-assets.php';
// ===========================================================================================
// theme configuration
require __DIR__ . '/includes/theme-configuration.php';


// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=image_du_produit', 'acf_set_clothing_featured_image', 1, 3);
function acf_set_clothing_featured_image( $value, $post_id, $field  ){
    
    if($value != ''){
      //Add the value which is the image ID to the _thumbnail_id meta data for the current post
      update_post_meta($post_id, '_thumbnail_id', $value);
    }
 
    return $value;
}

// Vu qu'on a ajouté l'image via ACF, on supprime la metabox par défaut pour l'image mise en avant
add_action('do_meta_boxes', 'remove_thumbnail_box');
function remove_thumbnail_box($post_type) {
    remove_meta_box( 'postimagediv','clothing','side' );
}
