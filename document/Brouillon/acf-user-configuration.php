<?php

function generate_new_user_id( $post_id, $form ) {
	// Check that we are targeting the right form. I do this by checking the acf_form ID.
	if ( ! isset( $form['id'] ) || 'register_new_speaker' != $form['id'] ) {
		return $post_id;
	}

	// Create an empty array to add user field data into
	$user_fields = array();

	// Check for the fields we need in our postdata, and add them to the $user_fields array if they exist
	if ( isset( $_POST['acf']['field_6147761148b9c'] ) ) {
		$user_fields['prenom'] = sanitize_text_field( $_POST['acf']['field_6147761148b9c'] );
	}

	if ( isset( $_POST['acf']['field_6147760448b9b'] ) ) {
		$user_fields['nom'] = sanitize_text_field( $_POST['acf']['field_6147760448b9b'] );
	}

	if ( isset( $_POST['acf']['field_614775eb48b9a'] ) ) {
		$user_fields['user_login'] = sanitize_user( $_POST['acf']['field_614775eb48b9a'] );
	}

	if ( isset( $_POST['acf']['field_61477a075bdc5'] ) ) {
		$user_fields['user_email'] = sanitize_email( $_POST['acf']['field_61477a075bdc5'] );
	}

	if ( isset( $_POST['acf']['field_6147761b48b9d'] ) ) {
		$user_fields['user_pass'] = $_POST['acf']['field_6147761b48b9d'];
	}

	if ( isset( $_POST['acf']['field_6147761148b9c'], $_POST['acf']['field_6147760448b9b'] ) ) {
		$user_fields['display_name'] = sanitize_text_field( $_POST['acf']['field_6147761148b9c'] . ' ' . $_POST['acf']['field_6147760448b9b'] );
	}

    if ( isset( $_POST['acf']['field_6147764348b9f'] ) ) {
		$user_fields['ajout_davatar'] = $_POST['acf']['field_6147764348b9f'];
	}

	$user_id = wp_insert_user( $user_fields );

	if ( is_wp_error( $user_id ) ) {
		// If adding this user failed, deliver an error message. I also do custom JS field validaiton before submit to check for proper email addresses, and to check for duplicate emails/existing usernames. But that code is beyond the scope of this thread
		wp_die( $user_id->get_error_message() );
	} else {
		// Set the 'post_id' to the newly created user_id, including the 'user_' ACF uses to target a user
		return 'user_' . $user_id;
	}
}
add_action( 'acf/pre_save_post', 'generate_new_user_id', 10, 2 );
