<?php
function fb_wp_insert_user() {
    for ($i = 0; $i <= 100; $i+=1) {
        //This is to initialize the proper date and time the user was registered
        $current_time = new DateTime();

        //Need to create an array of all the emails or something to read off the emails
        //Need to create an if condition if the user is already registered

        //This is the real work where the user is automatically registered
        $user_data = array(
        'ID' => '',
        'user_pass' => wp_generate_password(),
        'user_login' => //this should be without emails'',
        'user_nicename' => 'Dummy',
        'user_url' => 'https://www.skipclasses.com/wp-login.php',
        'user_email' => 'dummy@example.com' //need email for this section as well,
        'display_name' => 'Dummy',
        'first_name' => 'Dummy',
        'user_registered' => $current_time,
        'role' => get_option('default_role') // Use default role or another role, e.g. 'editor'. May need to see what the user roles are in the Wordpress website first.
        );
    $user_id = wp_insert_user( $user_data );
    }
}
add_action( 'admin_init', 'fb_wp_insert_user' );