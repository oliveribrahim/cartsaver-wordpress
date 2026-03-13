<?php
/**
 * Why Cartsaver block template.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $block */

$section_heading    = get_field( 'section_heading' );
$section_description = get_field( 'section_description' );
$section_id         = get_field( 'section_id' );
$features           = get_field( 'features' );

// Defaults when no data.
if ( ! is_string( $section_heading ) || $section_heading === '' ) {
	$section_heading = 'Why Cartsaver?';
}
if ( ! is_string( $section_description ) || $section_description === '' ) {
	$section_description = 'Stop losing money on Shopify fake orders in Cash on Delivery orders. Verify every customer before you ship and reduce costly returns.';
}
if ( ! is_string( $section_id ) || $section_id === '' ) {
	$section_id = 'features';
}

$anchor = $section_id ? ' id="' . esc_attr( $section_id ) . '"' : '';

// Default feature cards if repeater is empty.
$default_features = array(
	array(
		'feature_icon'        => 'clock',
		'feature_title'       => '3-Minute Setup',
		'feature_description' => 'Install and start verifying orders instantly. No complex configuration needed.',
	),
	array(
		'feature_icon'        => 'shield',
		'feature_title'       => 'Fraud Prevention',
		'feature_description' => 'Stop fake COD orders before they ship. Verify customers via OTP instantly.',
	),
	array(
		'feature_icon'        => 'message',
		'feature_title'       => 'Multi-Channel OTP',
		'feature_description' => 'Send verification codes via WhatsApp, SMS, or Email in seconds.',
	),
	array(
		'feature_icon'        => 'lightning',
		'feature_title'       => 'Real-Time Updates',
		'feature_description' => 'Keep customers informed with automatic order status notifications.',
	),
);

if ( empty( $features ) || ! is_array( $features ) ) {
	$features = $default_features;
}


?>
<section<?php echo $anchor; ?> class="py-20 px-4 sm:px-6 lg:px-8 bg-muted/30 m-0 bg-white">
	<div class="container mx-auto max-w-6xl">
		<div class="text-center mb-16">
			<h2 class="text-3xl sm:text-4xl font-bold mb-4">
				<?php echo esc_html( $section_heading ); ?>
			</h2>
			<p class="text-lg text-muted-foreground max-w-2xl mx-auto">
				<?php echo esc_html( $section_description ); ?>
			</p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
			<?php foreach ( $features as $feature ) : ?>
				<?php
				$icon_key  = isset( $feature['feature_icon'] ) ? $feature['feature_icon'] : 'clock';
				$title     = isset( $feature['feature_title'] ) ? $feature['feature_title'] : '';
				$desc      = isset( $feature['feature_description'] ) ? $feature['feature_description'] : '';
				?>
				<div class="card rounded-xl bg-white shadow">
					<div class="p-6">
						<div class="w-12 h-12 bg-primary/10 flex items-center justify-center mb-4">
							<?php cartsaver_why_cartsaver_icon( $icon_key ); ?>
						</div>
						<?php if ( $title !== '' ) : ?>
							<h3 class="font-semibold text-xl mb-2"><?php echo esc_html( $title ); ?></h3>
						<?php endif; ?>
						<?php if ( $desc !== '' ) : ?>
							<p class="text-sm text-muted-foreground"><?php echo esc_html( $desc ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>