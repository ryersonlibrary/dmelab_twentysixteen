<?php
/**
 * Ninja Forms customization
 *
 * Custom stuff for RULA :D
 */

// Register custom sidebar for ninja forms :D
function ninja_forms_register_sidebar_rula_google_sheets(){
  $args = array(
    'name' => __( 'RULA Google Sheets', 'ninja-forms' ),
    'page' => 'ninja-forms', 
    'tab' => 'builder',
    'display_function' => 'ninja_forms_sidebar_display_fields'
  );
  ninja_forms_register_sidebar('rula_google_sheets', $args);
}
add_action('admin_init', 'ninja_forms_register_sidebar_rula_google_sheets');
