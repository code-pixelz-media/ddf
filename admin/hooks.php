<?php

/**
 * Admin Dashboard Page tabbed menu.
 */

function ddf_settings_tab_menu() {
    ?>
        <li class="nav-tab"><a href="#general" class="dashicons-before dashicons-editor-alignleft"><?php _e( 'General', 'ddf' ); ?></a></li>
        <li class="nav-tab"><a href="#options" class="dashicons-before dashicons-admin-generic"><?php _e( 'Options', 'ddf' ); ?></a></li>
        <li class="nav-tab"><a href="#advanced" class="dashicons-before dashicons-admin-settings"><?php _e( 'Advanced', 'ddf' ); ?></a></li>
        <li class="nav-tab"><a href="#extra" class="dashicons-before dashicons-admin-tools"><?php _e( 'Extra', 'ddf' ); ?></a></li>
    <?php
	do_action('ddf_settings_tab_menu');
}

function ddf_settings_tab_content(){
    do_action('ddf_settings_tab_content');
}