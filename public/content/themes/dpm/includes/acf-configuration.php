<?php

// ==========================================================================================
// ACF Configuration
// ==========================================================================================

// once connecter user redirect on home page
function admin_default_page() {
  return get_home_url();
}

// Modify ACF Form Label for Post Title Field
function wd_post_title_acf_name( $field ) {
          $field['label'] = 'Titre du produit';
     return $field;
}
add_filter('acf/load_field/name=_post_title', 'wd_post_title_acf_name');

// Modify ACF Form Label for Post Content Field
function wd_post_content_acf_name( $field ) {
     
          $field['label'] = 'Description';
     return $field;
}
add_filter('acf/load_field/name=_post_content', 'wd_post_content_acf_name');

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
