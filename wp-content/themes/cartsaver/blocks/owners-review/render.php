<?php
/**
 * Owners Review block template.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $block */

$section_id      = get_field( 'section_id' );
$average_rating  = get_field( 'average_rating' );
$heading         = get_field( 'heading' );
$subheading      = get_field( 'subheading' );
$button_label    = get_field( 'button_label' );
$button_url      = get_field( 'button_url' );
$testimonials    = get_field( 'testimonials' );

// Defaults.
if ( ! is_string( $section_id ) || $section_id === '' ) {
	$section_id = 'owners-review';
}
if ( ! is_string( $average_rating ) || $average_rating === '' ) {
	$average_rating = '5.0';
}
if ( ! is_string( $heading ) || $heading === '' ) {
	$heading = 'Loved by Shopify Store Owners';
}
if ( ! is_string( $subheading ) || $subheading === '' ) {
	$subheading = 'See what our customers are saying about Cartsaver on the Shopify marketplace';
}
if ( ! is_string( $button_label ) || $button_label === '' ) {
	$button_label = 'View All Reviews on Shopify';
}
if ( ! is_string( $button_url ) || $button_url === '' ) {
	$button_url = 'https://apps.shopify.com/cartsaver-otp-cod/reviews?sort_by=newest&utm_source=cartsaver.net';
}

$anchor = $section_id ? ' id="' . esc_attr( $section_id ) . '"' : '';

// Default testimonials (from your HTML).
$default_testimonials = array(
	array(
		'name'      => 'Mina Femme',
		'date'      => 'December 24, 2025',
		'rating'    => 5,
		'content'   => '<p>Excellent App – Highly Recommended</p><p>CartSaver is one of the best apps we’ve used on Shopify. It helped us reduce abandoned carts and increase conversions noticeably also increase delivery rate and avoid fake orders for COD orders. Very easy to use, and the support team is responsive and professional. Highly recommended for any store owner looking to boost sales. Great job, CartSaver team!</p>',
	),
	array(
		'name'      => 'Chic Homz',
		'date'      => 'December 8, 2025',
		'rating'    => 5,
		'content'   => '<p>Amazing Egyptian tool! The app is very useful, easy to use, and really adds value to our store. Customer support is excellent — fast responses, helpful team, and very professional communication. Highly recommended!</p>',
	),
	array(
		'name'      => 'Glint',
		'date'      => 'November 29, 2025',
		'rating'    => 5,
		'content'   => '<p>this app is extremly perfect and it helps me to reduce the fake orders there are multiple versions and huge features iam highly recommend to everyone who is suffered from this problem espically the feature called ” post orders ” also thank’s to the customer service they’re very helpful.</p>',
	),
	array(
		'name'      => 'My Turtle',
		'date'      => 'November 19, 2025',
		'rating'    => 5,
		'content'   => '<p>This app is incredibly helpful for managing COD orders! The team is very smart and responsive – they customized it perfectly for the Egyptian market, which shows they really understand local needs. The OTP verification works flawlessly and has reduced fake orders significantly. Outstanding customer service and a great product. Highly recommended!</p>',
	),
	array(
		'name'      => 'AugustSa Shop',
		'date'      => 'November 19, 2025',
		'rating'    => 5,
		'content'   => '<p>very nice solution for a major problem waiting for more features</p>',
	),
	array(
		'name'      => 'Bmzag',
		'date'      => 'November 19, 2025',
		'rating'    => 5,
		'content'   => '<p>very goooood application</p>',
	),
	array(
		'name'      => 'Homix',
		'date'      => 'November 19, 2025',
		'rating'    => 5,
		'content'   => '<p>I recommend this app for OTP service it’s the best and cheapest app ever</p>',
	),
	array(
		'name'      => 'Fraghead store',
		'date'      => 'November 19, 2025',
		'rating'    => 5,
		'content'   => '<p>We’ve struggled with fake Cash on Delivery orders, but OTP Verification completely solved the problem. The app instantly verifies customer phone numbers through SMS in Egypt, helping us confirm real buyers before shipping and saving both time and money. The support team is very responsive and always willing to help.</p>',
	),
	array(
		'name'      => 'Sh3ban Car Accessories',
		'date'      => 'November 19, 2025',
		'rating'    => 5,
		'content'   => '<p>Thank you so much, Xtnd, for your excellent service. We truly appreciate your friendly cooperation and quick support. The OTP service works perfectly, and every time we contact you, you are always ready to help and solve any concerns. I would highly recommend Xtend to anyone who wants to work locally in Egypt.</p>',
	),
	array(
		'name'      => 'GC Shop Egypt',
		'date'      => 'November 19, 2025',
		'rating'    => 5,
		'content'   => '<p>This app is excellent — it helped us eliminate fake COD orders with easy OTP verification via WhatsApp, SMS, or Email. It supports all major Egyptian networks and keeps customers updated with order notifications. Special thanks to Moustafa from the support team — he was incredibly helpful in registering our sender name for SMS.</p>',
	),
);

if ( empty( $testimonials ) || ! is_array( $testimonials ) ) {
	$testimonials = $default_testimonials;
}

/**
 * Star SVG (single).
 */
if ( ! function_exists( 'cartsaver_star_svg' ) ) {
	function cartsaver_star_svg() {
		echo '<svg class="w-4 h-4 fill-primary text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

?>

<section<?php echo $anchor; ?> class="py-20 px-4 sm:px-6 lg:px-8 bg-muted/30 m-0">
	<div class="container mx-auto max-w-6xl">
		<div class="text-center mb-12">
			<div class="inline-flex items-center gap-2 mb-4">
				<div class="flex gap-1">
					<?php
					// Always show 5 stars visually.
					for ( $i = 0; $i < 5; $i++ ) {
						cartsaver_star_svg();
					}
					?>
				</div>
				<span class="text-2xl font-bold text-foreground">
					<?php echo esc_html( $average_rating ); ?>
				</span>
			</div>
			<h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">
				<?php echo esc_html( $heading ); ?>
			</h2>
			<p class="text-lg text-muted-foreground max-w-2xl mx-auto">
				<?php echo esc_html( $subheading ); ?>
			</p>
		</div>

		<div class="embla w-full max-w-5xl mx-auto relative" data-autoplay="1" data-autoplay-delay="4000">
			<div class="embla__viewport overflow-hidden">
				<div class="embla__container flex">
					<?php foreach ( $testimonials as $testimonial ) : ?>
						<?php
						$name    = isset( $testimonial['name'] ) ? $testimonial['name'] : '';
						$date    = isset( $testimonial['date'] ) ? $testimonial['date'] : '';
						$rating  = isset( $testimonial['rating'] ) ? (int) $testimonial['rating'] : 5;
						$content = isset( $testimonial['content'] ) ? $testimonial['content'] : '';
						if ( $rating < 1 ) {
							$rating = 1;
						}
						if ( $rating > 5 ) {
							$rating = 5;
						}
						?>
						<div class="embla__slide flex-[0_0_100%] md:flex-[0_0_50%] lg:flex-[0_0_33.333%] min-w-0 pl-0 sm:pl-4">
							<div class="rounded-lg border-b-gray-200 bg-card text-card-foreground shadow-lg h-full">
								<div class="p-6 flex flex-col h-full">
									<div class="mb-4">
										<div class="flex items-center justify-between mb-2">
											<h6 class="font-bold text-md">
												<?php echo esc_html( $name ); ?>
											</h6>
										</div>
										<?php if ( $date ) : ?>
											<p class="text-xs text-muted-foreground mt-1">
												<?php echo esc_html( $date ); ?>
											</p>
										<?php endif; ?>
									</div>

									<div class="flex gap-1 mb-4">
										<?php
										for ( $i = 0; $i < $rating; $i++ ) {
											cartsaver_star_svg();
										}
										?>
									</div>

									<div class="text-sm text-foreground leading-relaxed flex-grow">
										<?php echo wp_kses_post( $content ); ?>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="embla__dots flex justify-center gap-2 mt-8 xl:hidden"></div>
		</div>

		<div class="text-center mt-8">
			<a
				href="<?php echo esc_url( $button_url ); ?>"
				target="_blank"
				rel="noopener noreferrer"
				class="inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 px-8"
			>
				<?php echo esc_html( $button_label ); ?>
				<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
					<path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
					<polyline points="15 3 21 3 21 9"></polyline>
					<line x1="10" x2="21" y1="14" y2="3"></line>
				</svg>
			</a>
		</div>
	</div>
</section>