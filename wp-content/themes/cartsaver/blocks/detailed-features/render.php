<?php
/**
 * Detailed Features block template.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $block */

$section_id          = get_field( 'section_id' );
$section_heading     = get_field( 'section_heading' );
$section_description = get_field( 'section_description' );
$items               = get_field( 'items' );

// Defaults.
if ( ! is_string( $section_id ) || $section_id === '' ) {
	$section_id = 'detailed-features';
}
if ( ! is_string( $section_heading ) || $section_heading === '' ) {
	$section_heading = 'Complete Feature Breakdown';
}
if ( ! is_string( $section_description ) || $section_description === '' ) {
	$section_description = 'Discover everything Cartsaver can do to protect your store and verify every order';
}

$anchor = $section_id ? ' id="' . esc_attr( $section_id ) . '"' : '';

// Default accordion items if none provided.
$default_items = array(
	array(
		'item_icon'  => 'lock',
		'item_title' => 'Order Verification & Checkout Flows',
		'item_body'  => '<p><strong>1. OTP Verification System</strong></p><p>Secure every order with multi-channel verification:</p><p>• Supports SMS, Email, and WhatsApp OTPs<br>• Fully configurable resend and expiration times<br>• Auto-verification support for a smooth experience</p><p><strong>2. Checkout Flow Options</strong></p><p>Choose from three unique verification flows — only one active at a time:</p><p><strong>A. Pre-Checkout OTP</strong></p><p>Verify customers before checkout:<br>• OTP modal on product/cart page<br>• Customizable UI (gradient colors, background, button colors)<br>• Multi-language support (English & Arabic)<br>• Custom title & description per language<br>• Theme App Extension for standard checkout</p><p><strong>B. Post-Checkout OTP</strong></p><p>Verify orders after checkout on the Thank You page:<br>• Detect and handle high-risk orders<br>• Option to cancel unverified orders<br>• Configurable delay time before actions trigger<br>• Integrated UI Extensions on Thank You and Order Status pages</p><p><strong>C. Fast Checkout</strong></p><p>A full checkout alternative designed for speed:<br>• Contact verification via phone or email<br>• Shipping zone management & sync<br>• COD (Cash on Delivery) order support<br>• Online payment option<br>• Real-time shipping rate calculation<br>• Location detection<br>• Geo-based i18n and full multi-language support<br>• Custom primary color/branding</p>',
	),
	array(
		'item_icon'  => 'bell',
		'item_title' => 'Order Notifications',
		'item_body'  => '<p>Keep your customers informed across all channels:</p><p>• Automated notifications via SMS and WhatsApp<br>• Triggers: Order Created, Order Fulfilled, Order Cancelled<br>• Optional order tracking URL with short link support<br>• Fully multi-language<br>• Available on Free, Advanced, and Unlimited plans</p>',
	),
	array(
		'item_icon'  => 'card',
		'item_title' => 'Payment Method Control',
		'item_body'  => '<p>• Shopify Function to transform or restrict payment methods at checkout<br>• Run on: <code>cart.payment-methods.transform.run</code></p>',
	),
	array(
		'item_icon'  => 'cube',
		'item_title' => 'Order Management',
		'item_body'  => '<p>• Manually verify/unverify orders<br>• Detect COD orders<br>• Create test orders for easy app testing<br>• Order history and tracking<br>• Advanced COD configuration options</p>',
	),
	array(
		'item_icon'  => 'chart',
		'item_title' => 'Analytics & Statistics',
		'item_body'  => '<p>Gain insight into your store performance:</p><ul><li>Post-Order statistics (verification rates, order metrics)</li><li>Pre-Checkout metrics (conversion and engagement)</li><li>Credit overview for SMS & Email usage</li><li>SMS provider health/status</li></ul>',
	),
	array(
		'item_icon'  => 'document',
		'item_title' => 'Logs & Monitoring',
		'item_body'  => '<p>Full visibility into all app activities:</p><ul><li>OTP Logs: View and export attempts</li><li>Notification Logs: Track sent messages and delivery status</li></ul>',
	),
);

if ( empty( $items ) || ! is_array( $items ) ) {
	$items = $default_items;
}

/**
 * Output SVG icon based on a simple key.
 *
 * @param string $key Icon key.
 */


?>

<section<?php echo $anchor; ?> class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
	<div class="container mx-auto max-w-5xl">
		<div class="text-center mb-12">
			<h2 class="text-3xl sm:text-4xl font-bold mb-4">
				<?php echo esc_html( $section_heading ); ?>
			</h2>
			<p class="text-lg text-muted-foreground max-w-2xl mx-auto">
				<?php echo esc_html( $section_description ); ?>
			</p>
		</div>

		<div class="w-full space-y-4" data-accordion="single">
			<?php
			$index = 0;
			foreach ( $items as $item ) :
				$index++;
				$item_title = isset( $item['item_title'] ) ? $item['item_title'] : '';
				$item_body  = isset( $item['item_body'] ) ? $item['item_body'] : '';
				$item_icon  = isset( $item['item_icon'] ) ? $item['item_icon'] : 'lock';
				$is_open    = $index === 1; // first open by default.
				$state      = $is_open ? 'open' : 'closed';
				$max_height = $is_open ? 'max-height: 999px;' : 'max-height: 0;';
				$chevron    = $is_open ? 'rotate(180deg)' : 'rotate(0deg)';
				$expanded   = $is_open ? 'true' : 'false';
				?>
				<div class="border border-gray-200 rounded-lg px-6 bg-card accordion-item" data-state="<?php echo esc_attr( $state ); ?>">
					<button
						class="py-4 w-full cursor-pointer flex items-center justify-between hover:opacity-80 accordion-trigger"
						type="button"
						aria-expanded="<?php echo esc_attr( $expanded ); ?>"
					>
						<div class="flex items-center gap-3">
							<div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
								<?php cartsaver_detailed_features_icon( $item_icon ); ?>
							</div>
							<span class="font-semibold text-left">
								<?php echo esc_html( $item_title ); ?>
							</span>
						</div>
						<svg
							class="w-5 h-5 text-muted-foreground transition-transform duration-200 accordion-chevron"
							fill="none"
							stroke="currentColor"
							viewBox="0 0 24 24"
							style="transform: <?php echo esc_attr( $chevron ); ?>;"
						>
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
						</svg>
					</button>
					<div
						class="accordion-content overflow-hidden transition-all duration-200"
						style="<?php echo esc_attr( $max_height ); ?>"
					>
						<div class="pt-4 pb-6 text-muted-foreground">
							<?php
							// Allow basic HTML.
							echo wp_kses_post( $item_body );
							?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const containers = document.querySelectorAll('[data-accordion="single"]');
  containers.forEach(function (container) {
    const items = container.querySelectorAll('.accordion-item');
    items.forEach(function (item) {
      const trigger = item.querySelector('.accordion-trigger');
      const content = item.querySelector('.accordion-content');
      const chevron = item.querySelector('.accordion-chevron');

      trigger.addEventListener('click', function () {
        const isOpen = item.dataset.state === 'open';

        // Close all items in this container.
        items.forEach(function (otherItem) {
          const otherContent = otherItem.querySelector('.accordion-content');
          const otherChevron = otherItem.querySelector('.accordion-chevron');
          const otherTrigger = otherItem.querySelector('.accordion-trigger');

          otherItem.dataset.state = 'closed';
          otherContent.style.maxHeight = '0';
          otherChevron.style.transform = 'rotate(0deg)';
          otherTrigger.setAttribute('aria-expanded', 'false');
        });

        if (!isOpen) {
          item.dataset.state = 'open';
          content.style.maxHeight = content.scrollHeight + 'px';
          chevron.style.transform = 'rotate(180deg)';
          trigger.setAttribute('aria-expanded', 'true');
        }
      });
    });
  });
});
</script>