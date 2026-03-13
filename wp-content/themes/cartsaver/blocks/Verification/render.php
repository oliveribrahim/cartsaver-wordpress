<?php
/**
 * Cartsaver vs Manual Verification comparison block.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** @var array $block */

$section_id      = get_field( 'section_id' );
$pill_text       = get_field( 'pill_text' );
$heading         = get_field( 'heading' );
$subheading      = get_field( 'subheading' );
$cartsaver_title = get_field( 'cartsaver_title' );
$cartsaver_tag   = get_field( 'cartsaver_tagline' );
$manual_title    = get_field( 'manual_title' );
$manual_tag      = get_field( 'manual_tagline' );
$rows            = get_field( 'rows' );

// Defaults.
if ( ! is_string( $section_id ) || $section_id === '' ) {
	$section_id = 'verification-comparison';
}
if ( ! is_string( $pill_text ) || $pill_text === '' ) {
	$pill_text = 'See the Difference';
}
if ( ! is_string( $heading ) || $heading === '' ) {
	$heading = 'Cartsaver vs Manual Verification';
}
if ( ! is_string( $subheading ) || $subheading === '' ) {
	$subheading = 'Why waste time with manual processes when automation is just 3 minutes away?';
}
if ( ! is_string( $cartsaver_title ) || $cartsaver_title === '' ) {
	$cartsaver_title = 'Cartsaver';
}
if ( ! is_string( $cartsaver_tag ) || $cartsaver_tag === '' ) {
	$cartsaver_tag = 'Automated & Efficient';
}
if ( ! is_string( $manual_title ) || $manual_title === '' ) {
	$manual_title = 'Manual Process';
}
if ( ! is_string( $manual_tag ) || $manual_tag === '' ) {
	$manual_tag = 'Time-consuming';
}

$anchor = $section_id ? ' id="' . esc_attr( $section_id ) . '"' : '';

// Default rows if none set.
$default_rows = array(
	array(
		'feature_label'          => 'Setup Time',
		'cartsaver_text'         => '3 minutes',
		'cartsaver_icon'         => 'check',
		'manual_text'            => 'Hours of configuration',
		'manual_icon'            => 'cross',
	),
	array(
		'feature_label'          => 'OTP Verification',
		'cartsaver_text'         => 'WhatsApp, SMS & Email',
		'cartsaver_icon'         => 'check',
		'manual_text'            => 'SMS only (limited)',
		'manual_icon'            => 'cross',
	),
	array(
		'feature_label'          => 'Order Notifications',
		'cartsaver_text'         => 'Automated real-time',
		'cartsaver_icon'         => 'check',
		'manual_text'            => 'Manual setup required',
		'manual_icon'            => 'cross',
	),
	array(
		'feature_label'          => 'Fraud Prevention',
		'cartsaver_text'         => 'Built-in auto-cancel',
		'cartsaver_icon'         => 'check',
		'manual_text'            => 'Manual monitoring',
		'manual_icon'            => 'cross',
	),
);

if ( empty( $rows ) || ! is_array( $rows ) ) {
	$rows = $default_rows;
}

/**
 * Check icon (green) or cross icon (red).
 *
 * @param string $type 'check' or 'cross'.
 */
?>

<section<?php echo $anchor; ?> class="relative py-24 px-4 sm:px-6 lg:px-8 overflow-hidden bg-muted/0">
	<div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(233,162,59,0.05),transparent_50%)]"></div>
	<div class="container mx-auto relative z-10">
		<div class="text-center mb-16 max-w-3xl mx-auto">
			<div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6 animate-fade-in">
				<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
				</svg>
				<span><?php echo esc_html( $pill_text ); ?></span>
			</div>
			<h2 class="text-4xl sm:text-5xl font-bold mb-4 animate-fade-in">
				<?php echo esc_html( $heading ); ?>
			</h2>
			<p class="text-lg text-muted-foreground animate-fade-in">
				<?php echo esc_html( $subheading ); ?>
			</p>
		</div>

		<div class="max-w-5xl mx-auto">
			<div class="card overflow-hidden bg-card/50 backdrop-blur-sm border-gray-300 rounded-md shadow-sm">
				<div class="grid grid-cols-1 md:grid-cols-3 gap-0">
					<div class="bg-muted/50 p-6 md:col-span-1">
						<h3 class="font-bold text-lg mb-2"><?php esc_html_e( 'Feature', 'cartsaver' ); ?></h3>
					</div>
					<div class="bg-primary/10 p-6 md:col-span-1">
						<h3 class="font-bold text-lg text-primary mb-2">
							<?php echo esc_html( $cartsaver_title ); ?>
						</h3>
						<p class="text-xs text-muted-foreground">
							<?php echo esc_html( $cartsaver_tag ); ?>
						</p>
					</div>
					<div class="bg-muted/30 p-6 md:col-span-1">
						<h3 class="font-bold text-lg mb-2">
							<?php echo esc_html( $manual_title ); ?>
						</h3>
						<p class="text-xs text-muted-foreground">
							<?php echo esc_html( $manual_tag ); ?>
						</p>
					</div>
				</div>

				<div class="p-0">
					<?php
					$last_index = count( $rows );
					$current    = 0;
					foreach ( $rows as $row ) :
						$current++;
						$feature_label  = isset( $row['feature_label'] ) ? $row['feature_label'] : '';
						$cartsaver_text = isset( $row['cartsaver_text'] ) ? $row['cartsaver_text'] : '';
						$cartsaver_icon = isset( $row['cartsaver_icon'] ) ? $row['cartsaver_icon'] : 'check';
						$manual_text    = isset( $row['manual_text'] ) ? $row['manual_text'] : '';
						$manual_icon    = isset( $row['manual_icon'] ) ? $row['manual_icon'] : 'cross';

						$row_classes = 'grid grid-cols-1 md:grid-cols-3 gap-0';
						if ( $current < $last_index ) {
							$row_classes .= ' border-b border-border';
						}
						?>
						<div class="<?php echo esc_attr( $row_classes ); ?>">
							<div class="p-6 font-semibold text-foreground border-r border-border bg-background/50">
								<?php echo esc_html( $feature_label ); ?>
							</div>
							<div class="p-6 border-r border-border bg-primary/5">
								<div class="flex items-start gap-3">
									<?php cartsaver_verification_icon( $cartsaver_icon ); ?>
									<span class="text-foreground font-medium">
										<?php echo esc_html( $cartsaver_text ); ?>
									</span>
								</div>
							</div>
							<div class="p-6 bg-muted/20">
								<div class="flex items-start gap-3">
									<?php cartsaver_verification_icon( $manual_icon ); ?>
									<span class="text-muted-foreground">
										<?php echo esc_html( $manual_text ); ?>
									</span>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

			</div>
		</div>
	</div>
</section>