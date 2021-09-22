<?php

/**
 * Template Name: Register
 */
?>
<?php
acf_form_head();
get_header();
?>
    <?php
        acf_form( array(
            'id'				=> 'register_new_speaker',
            'post_id'			=> 'new_user',
            'field_groups'			=> array(
                'group_614775df15e81'
            )
        ));
    ?>
<?php
get_footer();
?>
