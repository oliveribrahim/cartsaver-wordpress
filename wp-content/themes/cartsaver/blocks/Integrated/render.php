<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $block */

// ACF fields.
$heading   = get_field( 'integrated_heading' );
$providers = get_field( 'integrated_providers' );

// Allow anchor from block settings.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '"';
}

// Fallback heading.
if ( ! $heading ) {
	$heading = 'Integrated with Leading SMS Network Providers in Egypt';
}
?>

<section <?php echo $anchor; ?> class="bg-white py-12 px-4 sm:px-6 lg:px-8 bg-muted/30 border-y border-border m-0">
	<div class="container mx-auto max-w-6xl">
		<div class="text-center">
			<p class="text-lg font-medium text-muted-foreground mb-10">
				<?php echo esc_html( $heading ); ?>
			</p>

			<?php if ( ! empty( $providers ) && is_array( $providers ) ) : ?>
				<div class="flex flex-wrap items-center justify-center gap-16 md:gap-16">
					<?php foreach ( $providers as $provider ) : ?>
						<?php
						$logo = isset( $provider['provider_logo'] ) ? $provider['provider_logo'] : null;
						$name = isset( $provider['provider_name'] ) ? $provider['provider_name'] : '';

						$logo_url = '';
						$logo_alt = $name;

						if ( $logo && is_array( $logo ) ) {
							$logo_url = isset( $logo['url'] ) ? $logo['url'] : '';
							if ( ! empty( $logo['alt'] ) ) {
								$logo_alt = $logo['alt'];
							}
						}
						?>
						<div class="flex items-center justify-center transition-all duration-300 hover:scale-110 w-32 h-20">
							<?php if ( $logo_url ) : ?>
								<img
									decoding="async"
									src="<?php echo esc_url( $logo_url ); ?>"
									alt="<?php echo esc_attr( $logo_alt ); ?>"
									class="w-auto object-contain w-64 h-auto"
								/>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>