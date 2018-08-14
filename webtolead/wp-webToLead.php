<?php
/*
Plugin Name: WP - WebToLead
Plugin URI: http://wordpress.org
Description: A Web to lead plugin for sugarCRM using sugar API
Version: 1.0
Author: Leonyl
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
        <h2>SugarCRM Settings</h2>
        <?php
            include "Admin/Settings.php"
        ?>
    </div>
    <?php
}


?>