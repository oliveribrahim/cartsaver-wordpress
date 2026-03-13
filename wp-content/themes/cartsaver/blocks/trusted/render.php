<?php
/**
 * Trusted Brands Carousel ACF Block template.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Section fields.
$trusted_title        = get_field( 'trusted_title' );
$trusted_description  = get_field( 'trusted_description' );
$trusted_bottom_text  = get_field( 'trusted_bottom_text' );

// Repeater: trusted_companies.
$trusted_companies = get_field( 'trusted_companies' );

// Unique ID for Embla instance and dots (supports multiple blocks per page).
$carousel_id = 'trusted-companies-carousel-' . uniqid();
$dots_id     = $carousel_id . '-dots';

?>

<section class="py-20 px-4 sm:px-6 lg:px-8 bg-white from-background to-muted/20">
	<div class="container mx-auto max-w-7xl">

		<div class="text-center mb-16">
			<?php if ( $trusted_title ) : ?>
				<h2 class="text-3xl md:text-5xl !leading-[1.1] font-bold mb-6 bg-gradient-to-r from-foreground to-foreground/70 bg-clip-text text-transparent">
					<?php echo esc_html( $trusted_title ); ?>
				</h2>
			<?php endif; ?>

			<?php if ( $trusted_description ) : ?>
				<p class="text-muted-foreground text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
					<?php echo wp_kses_post( $trusted_description ); ?>
				</p>
			<?php endif; ?>
		</div>

		<?php if ( ! empty( $trusted_companies ) && is_array( $trusted_companies ) ) : ?>
			<div
				id="<?php echo esc_attr( $carousel_id ); ?>"
				class="embla w-full relative"
				data-autoplay="1"
				data-autoplay-delay="2500"
			>
				<div class="embla__viewport overflow-hidden">
					<div class="embla__container flex -ml-6">
						<?php
						foreach ( $trusted_companies as $company ) :
							$logo      = isset( $company['company_logo'] ) ? $company['company_logo'] : null;
							$name      = isset( $company['company_name'] ) ? $company['company_name'] : '';
							$category  = isset( $company['company_category'] ) ? $company['company_category'] : '';

							$logo_url = '';
							$logo_alt = '';

							if ( $logo && is_array( $logo ) ) {
								$logo_url = isset( $logo['url'] ) ? $logo['url'] : '';
								$logo_alt = isset( $logo['alt'] ) ? $logo['alt'] : '';
							}

							?>
							<div class="embla__slide flex-[0_0_50%] md:flex-[0_0_33.333%] lg:flex-[0_0_20%] min-w-0 pl-6">
								<div class="group text-center space-y-3">
									<div class="flex items-center justify-center h-24 px-4 rounded-lg bg-card/50 border border-border/30 hover:border-primary/30 hover:bg-card transition-all duration-300">
										<?php if ( $logo_url ) : ?>
											<img
												decoding="async"
												src="<?php echo esc_url( $logo_url ); ?>"
												alt="<?php echo esc_attr( $logo_alt ? $logo_alt : $name ); ?>"
												class="max-h-16 w-auto object-contain opacity-70 group-hover:opacity-100 transition-opacity duration-300"
											/>
										<?php endif; ?>
									</div>

									<div>
										<?php if ( $name ) : ?>
											<p class="font-medium text-sm text-foreground/80 group-hover:text-foreground transition-colors">
												<?php echo esc_html( $name ); ?>
											</p>
										<?php endif; ?>

										<?php if ( $category ) : ?>
											<p class="text-xs text-muted-foreground mt-0.5">
												<?php echo esc_html( $category ); ?>
											</p>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<?php
						endforeach;
						?>
					</div>
				</div>

				<div
					id="<?php echo esc_attr( $dots_id ); ?>"
					class="embla__dots flex justify-center gap-2 mt-8"
				>
					<?php
					$company_count = count( $trusted_companies );
					for ( $i = 0; $i < $company_count; $i++ ) :
						?>
						<button
							class="embla__dot"
							type="button"
							aria-label="<?php echo esc_attr( sprintf( 'Go to slide %d', $i + 1 ) ); ?>"
							style="min-width: 24px; min-height: 24px; width: auto; height: auto; padding: 8px; border-radius: 9999px; background-color: transparent; transition: 0.3s; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; box-sizing: border-box;"
						>
							<span
								class="embla__dot-inner"
								style="width: 8px; height: 8px; border-radius: 9999px; background-color: rgb(209, 213, 219); transition: 0.3s; flex-shrink: 0;"
							></span>
						</button>
						<?php
					endfor;
					?>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( $trusted_bottom_text ) : ?>
			<div class="mt-12 text-center">
				<p class="text-sm text-muted-foreground">
					<?php echo esc_html( $trusted_bottom_text ); ?>
				</p>
			</div>
		<?php endif; ?>

	</div>
</section>