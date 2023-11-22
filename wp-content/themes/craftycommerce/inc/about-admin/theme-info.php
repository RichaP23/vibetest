<?php
/**
 * Add theme page
 */
function craftycommerce_menu() {
	add_theme_page( esc_html__( 'CraftyCommerce Theme', 'craftycommerce' ), esc_html__( 'CraftyCommerce Theme', 'craftycommerce' ), 'edit_theme_options', 'craftycommerce-info', 'craftycommerce_theme_page_display' );
}
add_action( 'admin_menu', 'craftycommerce_menu' );

/**
 * Display About page
 */
function craftycommerce_theme_page_display() {
    require get_parent_theme_file_path( '/inc/about-admin/templates/theme-info.php' );
}

function craftycommerce_admin_plugin_notice() {
    if ( ! get_option( 'craftycommerce_notice_dismissed' ) || ( time() - get_option( 'craftycommerce_notice_dismissed' ) > 30 * DAY_IN_SECONDS ) ) {
        require get_parent_theme_file_path( '/inc/about-admin/templates/admin-plugin-notice.php' );
    }
}
add_action( 'admin_notices', 'craftycommerce_admin_plugin_notice' );

/**
 * Enqueue admin scripts and styles.
 */
function craftycommerce_admin_scripts() {
	
    wp_enqueue_style(
        'craftycommerce-admin-message-style',
        get_template_directory_uri() . '/assets/css/admin-style.css',
        array(),
        craftycommerce_file_version( '/assets/css/admin-style.css' )
    );
    
}
add_action( 'admin_enqueue_scripts', 'craftycommerce_admin_scripts' );

function craftycommerce_admin_notice_script() {
    ?>
    <script>
        jQuery(document).ready(function($){
            $(document).on('click', '#craftycommerce-admin-notice .notice-dismiss', function(){
                $.ajax({
                    url: ajaxurl,
                    data: {
                        action: 'craftycommerce_dismiss_custom_notice'
                    }
                });
            });
        });
    </script>
    <?php
}
add_action( 'admin_footer', 'craftycommerce_admin_notice_script' );

function craftycommerce_dismiss_custom_notice() {
    update_option( 'craftycommerce_notice_dismissed', time() );
    wp_die();
}
add_action( 'wp_ajax_craftycommerce_dismiss_custom_notice', 'craftycommerce_dismiss_custom_notice' );

