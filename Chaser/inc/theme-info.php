<?php
/**
 * Theme Info
 *
 * Adds a simple Theme Info page to the Appearance section of the WordPress Dashboard.
 *
 * @package Chaser
 */

/**
 * Add Theme Info page to admin menu
 */
function chaser_theme_info_menu_link() {

	// Get theme details.
	$theme = wp_get_theme();

	add_theme_page(
		sprintf( esc_html__( 'Welcome to %1$s %2$s', 'chaser' ), $theme->display( 'Name' ), $theme->display( 'Version' ) ),
		esc_html__( 'Theme Info', 'chaser' ),
		'edit_theme_options',
		'chaser',
		'chaser_theme_info_page'
	);

}
add_action( 'admin_menu', 'chaser_theme_info_menu_link' );

/**
 * Display Theme Info page
 */
function chaser_theme_info_page() {

	// Get theme details.
	$theme = wp_get_theme();
	?>

	<div class="wrap theme-info-wrap">

		<h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'chaser' ), $theme->display( 'Name' ), $theme->display( 'Version' ) ); ?></h1>

		<div class="theme-description"><?php echo $theme->display( 'Description' ); ?></div>

		<hr>
		<div class="important-links clearfix">
			<p><strong><?php esc_html_e( 'Theme Links', 'chaser' ); ?>:</strong>
				<a href="<?php echo esc_url( __( 'https://themezee.com/themes/chaser/', 'chaser' ) . '?utm_source=theme-info&utm_medium=textlink&utm_campaign=chaser&utm_content=theme-page' ); ?>" target="_blank"><?php esc_html_e( 'Theme Page', 'chaser' ); ?></a>
				<a href="http://preview.themezee.com/?demo=chaser&utm_source=theme-info&utm_campaign=chaser" target="_blank"><?php esc_html_e( 'Theme Demo', 'chaser' ); ?></a>
				<a href="<?php echo esc_url( __( 'https://themezee.com/docs/chaser-documentation/', 'chaser' ) . '?utm_source=theme-info&utm_medium=textlink&utm_campaign=chaser&utm_content=documentation' ); ?>" target="_blank"><?php esc_html_e( 'Theme Documentation', 'chaser' ); ?></a>
				<a href="<?php echo esc_url( __( 'https://themezee.com/changelogs/?action=themezee-changelog&type=theme&slug=chaser', 'chaser' ) ); ?>" target="_blank"><?php esc_html_e( 'Theme Changelog', 'chaser' ); ?></a>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/support/theme/chaser/reviews/', 'chaser' ) ); ?>" target="_blank"><?php esc_html_e( 'Rate this theme', 'chaser' ); ?></a>
			</p>
		</div>
		<hr>

		<div id="getting-started">

			<h3><?php printf( esc_html__( 'Getting Started with %s', 'chaser' ), $theme->display( 'Name' ) ); ?></h3>

			<div class="columns-wrapper clearfix">

				<div class="column column-half clearfix">

					<div class="section">
						<h4><?php esc_html_e( 'Theme Documentation', 'chaser' ); ?></h4>

						<p class="about">
							<?php esc_html_e( 'You need help to setup and configure this theme? We got you covered with an extensive theme documentation on our website.', 'chaser' ); ?>
						</p>
						<p>
							<a href="<?php echo esc_url( __( 'https://themezee.com/docs/chaser-documentation/', 'chaser' ) . '?utm_source=theme-info&utm_medium=button&utm_campaign=chaser&utm_content=documentation' ); ?>" target="_blank" class="button button-secondary">
								<?php printf( esc_html__( 'View %s Documentation', 'chaser' ), 'Chaser' ); ?>
							</a>
						</p>
					</div>

					<div class="section">
						<h4><?php esc_html_e( 'Theme Options', 'chaser' ); ?></h4>

						<p class="about">
							<?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'chaser' ), $theme->display( 'Name' ) ); ?>
						</p>
						<p>
							<a href="<?php echo wp_customize_url(); ?>" class="button button-primary"><?php esc_html_e( 'Customize Theme', 'chaser' ); ?></a>
						</p>
					</div>

				</div>

				<div class="column column-half clearfix">

					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.jpg" />

				</div>

			</div>

		</div>

		<hr>

		<div id="more-features">

			<h3><?php esc_html_e( 'Get more features', 'chaser' ); ?></h3>

			<div class="columns-wrapper clearfix">

				<div class="column column-half clearfix">

					<div class="section">
						<h4><?php esc_html_e( 'Pro Version Add-on', 'chaser' ); ?></h4>

						<p class="about">
							<?php printf( esc_html__( 'Purchase the %s Pro Add-on and get additional features and advanced customization options.', 'chaser' ), 'Chaser' ); ?>
						</p>
						<p>
							<a href="<?php echo esc_url( __( 'https://themezee.com/addons/chaser-pro/', 'chaser' ) . '?utm_source=theme-info&utm_medium=button&utm_campaign=chaser&utm_content=pro-version' ); ?>" target="_blank" class="button button-secondary">
								<?php printf( esc_html__( 'Learn more about %s Pro', 'chaser' ), 'Chaser' ); ?>
							</a>
						</p>
					</div>

				</div>

				<div class="column column-half clearfix">

					<div class="section">
						<h4><?php esc_html_e( 'Recommended Plugins', 'chaser' ); ?></h4>

						<p class="about">
							<?php esc_html_e( 'Extend the functionality of your WordPress website with our free and easy to use plugins.', 'chaser' ); ?>
						</p>
						<p>
							<a href="<?php echo esc_url( admin_url( 'plugin-install.php?tab=search&type=tag&s=themezee' ) ); ?>" class="button button-secondary">
								<?php esc_html_e( 'Install Plugins', 'chaser' ); ?>
							</a>
						</p>
					</div>

				</div>

			</div>

		</div>

		<hr>

		<div id="theme-author">

			<p><?php printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'chaser' ),
				$theme->display( 'Name' ),
				'<a target="_blank" href="' . __( 'https://themezee.com/', 'chaser' ) . '?utm_source=theme-info&utm_medium=footer&utm_campaign=chaser" title="ThemeZee">ThemeZee</a>',
				'<a target="_blank" href="' . __( 'https://wordpress.org/support/theme/chaser/reviews/', 'chaser' ) . '" title="' . esc_attr__( 'Review Chaser', 'chaser' ) . '">' . esc_html__( 'rate it', 'chaser' ) . '</a>'); ?>
			</p>

		</div>

	</div>

	<?php
}

/**
 * Enqueues CSS for Theme Info page
 *
 * @param int $hook Hook suffix for the current admin page.
 */
function chaser_theme_info_page_css( $hook ) {

	// Load styles and scripts only on theme info page.
	if ( 'appearance_page_chaser' != $hook ) {
		return;
	}

	// Embed theme info css style.
	wp_enqueue_style( 'chaser-theme-info-css', get_template_directory_uri() . '/assets/css/theme-info.css' );

}
add_action( 'admin_enqueue_scripts', 'chaser_theme_info_page_css' );
