<?php
/**
 * Pre Submit CTA block template.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $block */

$section_id          = get_field( 'section_id' );
$badge_icon          = get_field( 'badge_icon' ); // simple select, not used for now (we keep current shield icon).
$badge_text          = get_field( 'badge_text' );
$heading             = get_field( 'heading' );
$subheading          = get_field( 'subheading' );
$form_action         = get_field( 'form_action' );
$store_placeholder   = get_field( 'store_placeholder' );
$install_button_text = get_field( 'install_button_text' );
$view_link_url       = get_field( 'view_link_url' );
$view_link_text      = get_field( 'view_link_text' );

$bullet_1_text       = get_field( 'bullet_1_text' );
$bullet_2_text       = get_field( 'bullet_2_text' );
$bullet_3_text       = get_field( 'bullet_3_text' );

// Defaults.
if ( ! is_string( $section_id ) || $section_id === '' ) {
	$section_id = 'pre-sub';
}
if ( ! is_string( $badge_text ) || $badge_text === '' ) {
	$badge_text = 'Trusted Security Solution';
}
if ( ! is_string( $heading ) || $heading === '' ) {
	$heading = 'Ready to stop shopify fake orders?';
}
if ( ! is_string( $subheading ) || $subheading === '' ) {
	$subheading = 'Join hundreds of successful stores using Cartsaver to verify every order and eliminate fraud before shipping.';
}
if ( ! is_string( $form_action ) || $form_action === '' ) {
	$form_action = 'https://apps.shopify.com/cartsaver-otp-cod?utm_source=cartsaver.net';
}
if ( ! is_string( $store_placeholder ) || $store_placeholder === '' ) {
	$store_placeholder = 'domain.com';
}
if ( ! is_string( $install_button_text ) || $install_button_text === '' ) {
	$install_button_text = 'Install App';
}
if ( ! is_string( $view_link_url ) || $view_link_url === '' ) {
	$view_link_url = 'https://apps.shopify.com/cartsaver-otp-cod?utm_source=cartsaver.net';
}
if ( ! is_string( $view_link_text ) || $view_link_text === '' ) {
	$view_link_text = 'View on Shopify';
}
if ( ! is_string( $bullet_1_text ) || $bullet_1_text === '' ) {
	$bullet_1_text = 'No credit card required';
}
if ( ! is_string( $bullet_2_text ) || $bullet_2_text === '' ) {
	$bullet_2_text = '3-minute setup';
}
if ( ! is_string( $bullet_3_text ) || $bullet_3_text === '' ) {
	$bullet_3_text = 'Cancel anytime';
}

$anchor = $section_id ? ' id="' . esc_attr( $section_id ) . '"' : '';

?>
<section<?php echo $anchor; ?> class="relative py-24 px-4 sm:px-6 lg:px-8 overflow-hidden">
	<div class="absolute inset-0 bg-gradient-to-br from-secondary via-secondary to-secondary/90"></div>
	<div class="absolute inset-0 bg-[#46433E]"></div>

	<div class="container mx-auto relative z-10">
		<div class="max-w-4xl mx-auto text-center">
			<div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/20 text-primary-foreground mb-6 animate-fade-in">
				<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
					<polyline points="9 12 11 14 15 10"></polyline>
				</svg>
				<span class="text-sm font-medium">
					<?php echo esc_html( $badge_text ); ?>
				</span>
			</div>

			<h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-secondary-foreground mb-6 animate-fade-in">
				<?php echo esc_html( $heading ); ?>
			</h2>

			<p class="text-lg sm:text-xl text-secondary-foreground/90 mb-10 max-w-3xl mx-auto animate-fade-in">
				<?php echo esc_html( $subheading ); ?>
			</p>

			<div class="mb-12 animate-fade-in">
				<form
					id="store-input-form"
					class="w-full max-w-md mx-auto"
					action="<?php echo esc_url( $form_action ); ?>"
					method="get"
					target="_blank"
				>
					<div class="flex flex-col sm:flex-row gap-3">
						<div class="flex-1">
							<input
								type="text"
								id="store-name-input"
								name="store"
								placeholder="<?php echo esc_attr( $store_placeholder ); ?>"
								class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm h-12"
								aria-label="Shopify store name or domain"
							/>
							<p id="store-input-error" class="text-sm text-destructive mt-1 hidden"></p>
						</div>

						<button
							type="submit"
							class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-11 rounded-md px-8 bg-primary text-primary-foreground hover:bg-primary/90 shadow-[var(--shadow-glow)] h-12"
						>
							<?php echo esc_html( $install_button_text ); ?>
							<svg class="w-4 h-4 ml-2 pointer-events-none shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<line x1="5" y1="12" x2="19" y2="12"></line>
								<polyline points="12 5 19 12 12 19"></polyline>
							</svg>
						</button>
					</div>
				</form>
			</div>

			<div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12 animate-fade-in">
				<a
					href="<?php echo esc_url( $view_link_url ); ?>"
					target="_blank"
					rel="noopener noreferrer"
					class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-lg font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 h-14 px-8 py-2 min-w-[200px] text-lg bg-transparent border-2 border-primary text-secondary-foreground hover:bg-primary/10"
				>
					<?php echo esc_html( $view_link_text ); ?>
					<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<line x1="5" y1="12" x2="19" y2="12"></line>
						<polyline points="12 5 19 12 12 19"></polyline>
					</svg>
				</a>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16 max-w-3xl mx-auto">
				<div class="flex items-center gap-3 text-secondary-foreground/90">
					<svg class="w-7 h-7 text-primary flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
						<polyline points="22 4 12 14.01 9 11.01"></polyline>
					</svg>
					<span class="text-sm">
						<?php echo esc_html( $bullet_1_text ); ?>
					</span>
				</div>

				<div class="flex items-center gap-3 text-secondary-foreground/90">
					<svg class="w-7 h-7 text-primary flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
					</svg>
					<span class="text-sm">
						<?php echo esc_html( $bullet_2_text ); ?>
					</span>
				</div>

				<div class="flex items-center gap-3 text-secondary-foreground/90">
					<svg class="w-7 h-7 text-primary flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
						<polyline points="9 12 11 14 15 10"></polyline>
					</svg>
					<span class="text-sm">
						<?php echo esc_html( $bullet_3_text ); ?>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>