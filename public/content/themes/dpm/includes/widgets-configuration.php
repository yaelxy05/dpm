<?php

// Creates a Widget Zone
function gymfitness_widgets() {
    register_sidebar( array(
        'name' => 'Sidebar', 
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-primary">',
        'after_title' => '</h3>'
    ) );
}
add_action('widgets_init', 'gymfitness_widgets');
