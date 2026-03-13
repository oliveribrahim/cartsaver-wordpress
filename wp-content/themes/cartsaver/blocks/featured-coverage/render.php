<?php
/**
 * Featured Coverage block template.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $block */

$section_id          = get_field( 'section_id' );
$section_badge_label = get_field( 'section_badge_label' );
$section_heading     = get_field( 'section_heading' );
$section_description = get_field( 'section_description' );

$article_date        = get_field( 'article_date' );
$article_title       = get_field( 'article_title' );
$article_excerpt     = get_field( 'article_excerpt' );
$article_url         = get_field( 'article_url' );
$article_cta_label   = get_field( 'article_cta_label' );
$logo_url            = get_field( 'logo_url' );
$logo_alt            = get_field( 'logo_alt' );
$logo_bg_color       = get_field( 'logo_bg_color' );

// Defaults.
if ( ! is_string( $section_id ) || $section_id === '' ) {
	$section_id = '';
}
if ( ! is_string( $section_badge_label ) || $section_badge_label === '' ) {
	$section_badge_label = 'In the Press';
}
if ( ! is_string( $section_heading ) || $section_heading === '' ) {
	$section_heading = 'Featured Coverage';
}
if ( ! is_string( $section_description ) || $section_description === '' ) {
	$section_description = 'Leading publications are talking about how we\'re revolutionizing COD verification in Egypt';
}

if ( ! is_string( $article_date ) || $article_date === '' ) {
	$article_date = 'July 13, 2025';
}
if ( ! is_string( $article_title ) || $article_title === '' ) {
	$article_title = 'Egyptian Startup Tackles Fake Cash on Delivery Orders with Shopify OTP Verification App';
}
if ( ! is_string( $article_excerpt ) || $article_excerpt === '' ) {
	$article_excerpt = 'Egyptian Streets features how our innovative solution is helping local e-commerce businesses combat the growing challenge of fraud orders Shopify, saving merchants time and money while improving customer verification through automated OTP systems.';
}
if ( ! is_string( $article_url ) || $article_url === '' ) {
	$article_url = 'https://egyptianstreets.com/2025/07/13/egyptian-startup-tackles-fake-cash-on-delivery-orders-new-shopify-app/';
}
if ( ! is_string( $article_cta_label ) || $article_cta_label === '' ) {
	$article_cta_label = 'Read Full Article';
}
if ( ! is_string( $logo_url ) || $logo_url === '' ) {
	$logo_url = 'https://cartsaver.net/wp-content/themes/cartsaver/assets/images/press/egyptianstreets-logo.svg';
}
if ( ! is_string( $logo_alt ) || $logo_alt === '' ) {
	$logo_alt = 'Egyptian Streets';
}
if ( ! is_string( $logo_bg_color ) || $logo_bg_color === '' ) {
	$logo_bg_color = '#122D3D';
}

$anchor = $section_id ? ' id="' . esc_attr( $section_id ) . '"' : '';

?>

<section<?php echo $anchor; ?> class="py-20 px-4 bg-gradient-to-b from-white to-gray-50">
	<div class="max-w-6xl mx-auto">
		<div class="text-center mb-12">
			<div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-2 rounded-full mb-4">
				<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
				</svg>
				<span class="text-sm font-medium">
					<?php echo esc_html( $section_badge_label ); ?>
				</span>
			</div>

			<h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">
				<?php echo esc_html( $section_heading ); ?>
			</h2>

			<p class="text-gray-600 max-w-2xl mx-auto">
				<?php echo esc_html( $section_description ); ?>
			</p>
		</div>

		<div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
			<div class="p-8">
				<div class="flex flex-col md:flex-row gap-8 items-start">
					<div class="flex-shrink-0">
						<div
							class="w-32 h-20 rounded-xl flex items-center justify-center p-4 shadow-lg"
							style="background-color: <?php echo esc_attr( $logo_bg_color ); ?>;"
						>
							<img
								src="<?php echo esc_url( $logo_url ); ?>"
								alt="<?php echo esc_attr( $logo_alt ); ?>"
								class="w-full h-full object-contain"
							/>
						</div>
					</div>

					<div class="flex-1">
						<div class="text-sm text-gray-600 mb-2">
							<?php echo esc_html( $article_date ); ?>
						</div>

						<h3 class="text-2xl font-bold mb-4 text-gray-900">
							<?php echo esc_html( $article_title ); ?>
						</h3>

						<p class="text-gray-600 mb-6 leading-relaxed">
							<?php echo esc_html( $article_excerpt ); ?>
						</p>

						<a
							href="<?php echo esc_url( $article_url ); ?>"
							target="_blank"
							rel="noopener noreferrer"
							class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90 transition-colors group"
						>
							<?php echo esc_html( $article_cta_label ); ?>
							<svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>