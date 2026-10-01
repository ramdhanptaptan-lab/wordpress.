<?php
/**
 * Banner markup.
 *
 * Printed on `in_admin_header` so it lands at the top of every admin page,
 * above the notices area, instead of being shuffled around by plugins that
 * relocate admin notices.
 *
 * @package filmmaker-production-studio
 */

defined( 'ABSPATH' ) || exit;

/**
 * Print the banner.
 *
 * The dismiss button only hides the banner for the current page view — nothing
 * is stored, so the banner is back on the next page load.
 */
function filmmaker_production_studio_banner_render() {
	if ( ! filmmaker_production_studio_banner_is_visible() ) {
		return;
	}

	$config = filmmaker_production_studio_banner_config();
	?>
	<div class="bwp-admin-banner" id="bwp-admin-banner">
		<div class="bwp-admin-banner__inner">
			<div class="bwp-admin-banner__body">
				<p class="bwp-admin-banner__eyebrow"><?php echo esc_html( $config['eyebrow'] ); ?></p>
				<h2 class="bwp-admin-banner__title"><?php echo esc_html( $config['title'] ); ?></h2>
				<p class="bwp-admin-banner__text"><?php echo esc_html( $config['text'] ); ?></p>

				<div class="bwp-admin-banner__actions">
					<?php foreach ( $config['buttons'] as $button ) : ?>
						<a class="bwp-admin-banner__btn bwp-admin-banner__btn--<?php echo esc_attr( $button['style'] ); ?>"
							href="<?php echo esc_url( $button['url'] ); ?>"
							target="_blank"
							rel="noopener noreferrer">
							<?php echo esc_html( $button['label'] ); ?>
						</a>
					<?php endforeach; ?>
				</div>
			</div>

			<?php if ( ! empty( $config['logo'] ) ) : ?>
				<div class="bwp-admin-banner__brand">
					<img src="<?php echo esc_url( $config['logo'] ); ?>"
						alt="<?php echo esc_attr( $config['eyebrow'] ); ?>"
						width="217" height="35" />
				</div>
			<?php endif; ?>

			<button type="button"
				class="bwp-admin-banner__close"
				aria-label="<?php echo esc_attr__( 'Dismiss this notice', 'filmmaker-production-studio' ); ?>">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
	<?php
}
add_action( 'in_admin_header', 'filmmaker_production_studio_banner_render' );
