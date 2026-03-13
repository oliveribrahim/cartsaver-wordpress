<?php
///**
// * Cartsaver Header block template.
// *
// * @package cartsaver
// */
//
//if ( ! defined( 'ABSPATH' ) ) {
//	exit;
//}
//
///** @var array $block */
//
//// Top-level fields.
//$logo_url        = get_field( 'logo_url' );
//$logo_alt        = get_field( 'logo_alt' );
//$site_title      = get_field( 'site_title' );
//$site_url        = get_field( 'site_url' );
//$cta_text        = get_field( 'cta_text' );
//$cta_url         = get_field( 'cta_url' );
//$cta_target      = get_field( 'cta_target' );
//$navigation_items = get_field( 'navigation_items' );
//
//// Defaults from your original HTML.
//if ( ! is_string( $logo_url ) || $logo_url === '' ) {
//	$logo_url = 'https://cartsaver.net/wp-content/uploads/2025/12/cartsaver.png';
//}
//if ( ! is_string( $logo_alt ) || $logo_alt === '' ) {
//	$logo_alt = 'Cartsaver';
//}
//if ( ! is_string( $site_title ) || $site_title === '' ) {
//	$site_title = 'Cartsaver';
//}
//if ( ! is_string( $site_url ) || $site_url === '' ) {
//	$site_url = 'https://cartsaver.net';
//}
//if ( ! is_string( $cta_text ) || $cta_text === '' ) {
//	$cta_text = 'Start Free Trial';
//}
//if ( ! is_string( $cta_url ) || $cta_url === '' ) {
//	$cta_url = 'https://apps.shopify.com/cartsaver-otp-cod?utm_source=cartsaver.net';
//}
//if ( ! is_string( $cta_target ) || $cta_target === '' ) {
//	$cta_target = '_blank';
//}
//
//// Default nav items if repeater empty.
//$default_navigation_items = array(
//	array(
//		'label' => 'Why Cartsaver?',
//		'url'   => '#features',
//	),
//	array(
//		'label' => 'Features',
//		'url'   => '#detailed-features',
//	),
//	array(
//		'label' => 'Pricing',
//		'url'   => '#pricing',
//	),
//	array(
//		'label' => 'Support',
//		'url'   => '#support',
//	),
//);
//
//if ( empty( $navigation_items ) || ! is_array( $navigation_items ) ) {
//	$navigation_items = $default_navigation_items;
//}
//
//?>
<!---->
<!--<header class="wp-block-template-part">-->
<!--	<div class="wp-block-group fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-lg border-b border-border is-layout-flow wp-block-group-is-layout-flow">-->
<!--		<div class="wp-block-group container mx-auto px-4 sm:px-6 lg:px-8 is-layout-flow wp-block-group-is-layout-flow">-->
<!--			<div class="wp-block-group flex items-center justify-between h-16 is-content-justification-space-between is-nowrap is-layout-flex wp-block-group-is-layout-flex">-->
<!--				<div class="wp-block-group flex items-center gap-2 header-logo is-nowrap is-layout-flex wp-block-group-is-layout-flex">-->
<!--					<div class="is-default-size h-8 w-8 wp-block-site-logo">-->
<!--						<a href="--><?php //echo esc_url( $site_url ); ?><!--" class="custom-logo-link" rel="home">-->
<!--							<img-->
<!--								src="--><?php //echo esc_url( $logo_url ); ?><!--"-->
<!--								alt="--><?php //echo esc_attr( $logo_alt ); ?><!--"-->
<!--								class="custom-logo"-->
<!--								decoding="async"-->
<!--								fetchpriority="high"-->
<!--							/>-->
<!--						</a>-->
<!--					</div>-->
<!--					<p class="text-xl font-bold text-foreground m-0 wp-block-site-title">-->
<!--						<a href="--><?php //echo esc_url( $site_url ); ?><!--" target="_self" rel="home">-->
<!--							--><?php //echo esc_html( $site_title ); ?>
<!--						</a>-->
<!--					</p>-->
<!--				</div>-->
<!---->
<!--				<nav class="no-wrap hidden md:flex items-center gap-8 wp-block-navigation is-nowrap is-layout-flex wp-block-navigation-is-layout-flex" aria-label="Main Navigation">-->
<!--					<ul class="wp-block-navigation__container no-wrap hidden md:flex items-center gap-8 wp-block-navigation">-->
<!--						--><?php //foreach ( $navigation_items as $item ) : ?>
<!--							--><?php
//							$label = isset( $item['label'] ) ? $item['label'] : '';
//							$url   = isset( $item['url'] ) ? $item['url'] : '#';
//							if ( $label === '' ) {
//								continue;
//							}
//							?>
<!--							<li class="wp-block-navigation-item wp-block-navigation-link">-->
<!--								<a class="wp-block-navigation-item__content" href="--><?php //echo esc_url( $url ); ?><!--">-->
<!--									<span class="wp-block-navigation-item__label">--><?php //echo esc_html( $label ); ?><!--</span>-->
<!--								</a>-->
<!--							</li>-->
<!--						--><?php //endforeach; ?>
<!--					</ul>-->
<!--				</nav>-->
<!---->
<!--				<div class="wp-block-buttons header-btn is-layout-flex wp-block-buttons-is-layout-flex">-->
<!--					<div class="wp-block-button">-->
<!--						<a-->
<!--							class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-link-color wp-element-button"-->
<!--							href="--><?php //echo esc_url( $cta_url ); ?><!--"-->
<!--							target="--><?php //echo esc_attr( $cta_target ); ?><!--"-->
<!--							rel="noopener noreferrer"-->
<!--						>-->
<!--							--><?php //echo esc_html( $cta_text ); ?>
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!---->
<!--				<button-->
<!--					id="mobile-menu-toggle"-->
<!--					class="mobile-menu-toggle inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10"-->
<!--					aria-label="Toggle mobile menu"-->
<!--				>-->
<!--					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">-->
<!--						<line x1="4" x2="20" y1="12" y2="12"></line>-->
<!--						<line x1="4" x2="20" y1="6" y2="6"></line>-->
<!--						<line x1="4" x2="20" y1="18" y2="18"></line>-->
<!--					</svg>-->
<!--				</button>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</header>-->