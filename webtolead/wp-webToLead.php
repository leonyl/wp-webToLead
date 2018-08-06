<?php
/*
Plugin Name: WP - WebToLead
Plugin URI: http://wordpress.org
Description: A Web to lead plugin for sugarCRM using sugar API
Version: 1.0
Author: Leonyl Pantonial
Author URI: http://wordpress.org
License: GPLv2
*/


add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
    add_menu_page( 'WP-WebToLead', 'WP-WebToLead', 'manage_options', 'wp-webtolead', 'wp_webtolead_admin_page', 'dashicons-tickets' );
}

function wp_webtolead_admin_page(){
    ?>
    <div class="wrap">
        <h2>Welcome To My Plugin</h2>
    </div>
    <?php
}


?>