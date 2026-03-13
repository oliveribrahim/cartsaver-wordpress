<?php
/**
 * Pricing block template.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $block */

$section_id          = get_field( 'section_id' );
$section_heading     = get_field( 'section_heading' );
$section_subheading  = get_field( 'section_subheading' );
$plans               = get_field( 'plans' );
$pricing_note        = get_field( 'pricing_note' );

// Defaults.
if ( ! is_string( $section_id ) || $section_id === '' ) {
	$section_id = 'pricing';
}
if ( ! is_string( $section_heading ) || $section_heading === '' ) {
	$section_heading = 'Simple, transparent pricing';
}
if ( ! is_string( $section_subheading ) || $section_subheading === '' ) {
	$section_subheading = 'Start free. Upgrade as you grow. Cancel anytime.';
}
if ( ! is_string( $pricing_note ) || $pricing_note === '' ) {
	$pricing_note = 'All charges are billed in USD. Recurring and usage-based charges are billed every 30 days.';
}

$anchor = $section_id ? ' id="' . esc_attr( $section_id ) . '"' : '';

// Default plans if repeater is empty.
$default_plans = array(
	array(
		'plan_name'        => 'Free',
		'plan_price'       => 'Free',
		'plan_price_suffix'=> '',
		'plan_highlight'   => 0,
		'plan_button_label'=> 'Get Started',
		'plan_button_url'  => 'https://apps.shopify.com/cartsaver-otp-cod?utm_source=cartsaver.net',
		'plan_button_style'=> 'outline',
		'plan_features'    => array(
			'10 SMS (Egypt Networks Only) or WhatsApp',
			'Fast Checkout',
			'Customize banner text & colors',
			'RealTime Order Updates by SMS & WhatsApp',
		),
	),
	array(
		'plan_name'        => 'Advanced',
		'plan_price'       => '$9.99',
		'plan_price_suffix'=> '/month',
		'plan_highlight'   => 0,
		'plan_button_label'=> 'Get Started',
		'plan_button_url'  => 'https://apps.shopify.com/cartsaver-otp-cod?utm_source=cartsaver.net',
		'plan_button_style'=> 'outline',
		'plan_features'    => array(
			'No additional costs for sending messages',
			'450 SMS (Egypt Networks Only)or WhatsApp',
			'Fast Checkout',
			'Customize banner text & colors',
			'Real-Time Order Updates by SMS/WhatsApp',
			'Cross Selling (Beta)',
		),
	),
	array(
		'plan_name'        => 'Unlimited',
		'plan_price'       => '$29.99',
		'plan_price_suffix'=> '/month',
		'plan_highlight'   => 1,
		'plan_button_label'=> 'Get Started',
		'plan_button_url'  => 'https://apps.shopify.com/cartsaver-otp-cod?utm_source=cartsaver.net',
		'plan_button_style'=> 'primary',
		'plan_features'    => array(
			'No additional costs for sending messages',
			'Send 5000 SMS (Egypt Networks Only)',
			'Send 5000 WhatsApp',
			'Fast Checkout',
			'Customize banner text & colors',
			'RealTime Order Updates by SMS/WhatsApp',
			'Cross Selling (Beta)',
		),
	),
	array(
		'plan_name'        => 'Scale',
		'plan_price'       => '$79.99',
		'plan_price_suffix'=> '/month',
		'plan_highlight'   => 0,
		'plan_button_label'=> 'Get Started',
		'plan_button_url'  => 'https://apps.shopify.com/cartsaver-otp-cod?utm_source=cartsaver.net',
		'plan_button_style'=> 'outline',
		'plan_features'    => array(
			'No additional costs for sending messages',
			'Send 15000 SMS (Egypt Networks Only)',
			'Send 15000 WhatsApp',
			'Fast Checkout',
			'Customize banner text & colors',
			'Send SMS using custom sender name',
			'RealTime Order Updates by SMS/WhatsApp',
			'Cross Selling (Beta)',
		),
	),
);

if ( empty( $plans ) || ! is_array( $plans ) ) {
	$plans = $default_plans;
}

?>

<section<?php echo $anchor; ?> class="py-20 px-4 sm:px-6 lg:px-8 bg-muted/30">
	<div class="container mx-auto max-w-6xl">
		<div class="text-center mb-16">
			<h2 class="text-3xl sm:text-4xl font-bold mb-4">
				<?php echo esc_html( $section_heading ); ?>
			</h2>
			<p class="text-lg text-muted-foreground">
				<?php echo esc_html( $section_subheading ); ?>
			</p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
			<?php foreach ( $plans as $plan ) :
				$name        = isset( $plan['plan_name'] ) ? $plan['plan_name'] : '';
				$price       = isset( $plan['plan_price'] ) ? $plan['plan_price'] : '';
				$suffix      = isset( $plan['plan_price_suffix'] ) ? $plan['plan_price_suffix'] : '';
				$highlight   = ! empty( $plan['plan_highlight'] );
				$btn_label   = isset( $plan['plan_button_label'] ) ? $plan['plan_button_label'] : 'Get Started';
				$btn_url     = isset( $plan['plan_button_url'] ) ? $plan['plan_button_url'] : '#';
				$btn_style   = isset( $plan['plan_button_style'] ) ? $plan['plan_button_style'] : 'outline';
				$features    = isset( $plan['plan_features'] ) && is_array( $plan['plan_features'] ) ? $plan['plan_features'] : array();
				$card_classes = 'rounded-lg border bg-card text-card-foreground shadow-sm flex flex-col border-border';

				if ( $highlight ) {
					$card_classes = 'rounded-lg border bg-card text-card-foreground shadow-sm flex flex-col border-primary border-2 shadow-[var(--shadow-glow)]';
				}

				$btn_classes = 'btn w-full mt-6 border h-10 btn-outline';
				if ( $btn_style === 'primary' ) {
					$btn_classes = 'btn w-full mt-6 border h-10 btn-navy';
				}
				?>
				<div class="<?php echo esc_attr( $card_classes ); ?>">
					<?php if ( $highlight ) : ?>
						<div class="bg-primary text-primary-foreground text-center py-2 text-sm font-semibold rounded-t-lg">
							<?php esc_html_e( 'Most Popular', 'cartsaver' ); ?>
						</div>
					<?php endif; ?>

					<div class="card-header p-8">
						<h3 class="text-2xl font-semibold leading-none tracking-tight">
							<?php echo esc_html( $name ); ?>
						</h3>
						<?php if ( $price !== '' ) : ?>
							<div class="mt-4">
								<span class="text-4xl font-bold"><?php echo esc_html( $price ); ?></span>
								<?php if ( $suffix !== '' ) : ?>
									<span class="text-muted-foreground"><?php echo esc_html( $suffix ); ?></span>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="card-content p-8">
						<?php if ( ! empty( $features ) ) : ?>
							<ul class="space-y-3">
								<?php foreach ( $features as $feature ) : ?>
									<li class="flex items-start gap-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary flex-shrink-0 mt-0.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
										<span class="text-sm"><?php echo esc_html( $feature ); ?></span>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>

					<div class="card-footer p-8">
						<a href="<?php echo esc_url( $btn_url ); ?>" target="_blank" rel="noopener noreferrer" class="<?php echo esc_attr( $btn_classes ); ?>">
							<?php echo esc_html( $btn_label ); ?>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<?php if ( $pricing_note !== '' ) : ?>
			<p class="text-center text-sm text-muted-foreground mt-8">
				<?php echo esc_html( $pricing_note ); ?>
			</p>
		<?php endif; ?>
	</div>
</section>