<?php
$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_craftycommerce-info' === $screen->base ) {
	return false;
}

?>
<div class="notice notice-info is-dismissible craftycommerce-admin-notice" id="craftycommerce-admin-notice">
	<div class="craftycommerce-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, Welcome to', 'craftycommerce' ); ?> <?php esc_html_e( 'CraftyCommerce!', 'craftycommerce' ); ?></h2>
		<p><?php esc_html_e( 'Do you know you can get more features in CraftyCommerce? Upgrade to CraftyCommerce Pro!!!', 'craftycommerce' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=craftycommerce-info' ) ); ?>" class="craftycommerce-admin-notice-primary-button"><?php esc_html_e( 'CraftyCommerce Pro Details', 'craftycommerce' ); ?></a>
		<a class="button" href="<?php echo esc_url( 'https://fireflythemes.com/themes/craftycommerce-pro'); ?>" target="_blank"><?php esc_html_e( 'Learn more about CraftyCommerce Pro Theme', 'craftycommerce' ); ?></a>
	</div>
</div>
<?php
