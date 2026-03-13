<?php
/**
 * Hero Section ACF Block template.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Fetch ACF fields.
$hero_badge_text             = get_field( 'hero_badge_text' );
$hero_title                  = get_field( 'hero_title' );
$hero_highlight_text         = get_field( 'hero_highlight_text' );
$hero_description            = get_field( 'hero_description' );
$demo_button_text            = get_field( 'demo_button_text' );
$demo_video_url              = get_field( 'demo_video_url' );
$shopify_button_text         = get_field( 'shopify_button_text' );
$shopify_url                 = get_field( 'shopify_url' );
$rating_value                = get_field( 'rating_value' );
$trusted_text                = get_field( 'trusted_text' );
$statistics_less_fake_orders = get_field( 'statistics_less_fake_orders' );
$statistics_setup_time       = get_field( 'statistics_setup_time' );
$statistics_active_stores    = get_field( 'statistics_active_stores' );

// Unique modal ID per block instance for multiple blocks on a page.
$modal_id = 'hero-video-modal-' . uniqid();
?>

<section class="hero-section">

    <!-- Background decorations -->
    <div class="hero-section__bg-gradient"></div>
    <div class="hero-section__bg-blob hero-section__bg-blob--top"></div>
    <div class="hero-section__bg-blob hero-section__bg-blob--bottom"></div>

    <div class="cs-container relative z-10">
        <div class="hero-section__grid">

            <!-- ── LEFT COLUMN ───────────────────────────────── -->
            <div class="hero-section__content">

                <!-- Badge -->
                <?php if ( $hero_badge_text ) : ?>
                    <div class="badge badge-success hero-section__badge">
                        <span class="font-bold"><?php echo esc_html( $hero_badge_text ); ?></span>
                        <span>• Expanding to all platforms</span>
                    </div>
                <?php endif; ?>

                <!-- Heading -->
                <?php if ( $hero_title || $hero_highlight_text ) : ?>
                    <h1 class="hero-section__title">
                        <?php echo wp_kses_post( $hero_title ); ?>

                    </h1>
                <?php endif; ?>


                <!-- Description -->
                <?php if ( $hero_description ) : ?>
                    <p class="hero-section__description">
                        <?php echo wp_kses_post( $hero_description ); ?>
                    </p>
                <?php endif; ?>

                <!-- Quick stats row -->
                <?php if ( $statistics_less_fake_orders || $statistics_setup_time || $statistics_active_stores ) : ?>
                    <div class="hero-section__stats">

                        <?php if ( $statistics_less_fake_orders ) : ?>
                            <div class="hero-section__stat">
                                <svg class="hero-section__stat-icon" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                                     aria-hidden="true">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <span><?php echo esc_html( $statistics_less_fake_orders ); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if ( $statistics_setup_time ) : ?>
                            <div class="hero-section__stat">
                                <svg class="hero-section__stat-icon" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                                     aria-hidden="true">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                <span><?php echo esc_html( $statistics_setup_time ); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if ( $statistics_active_stores ) : ?>
                            <div class="hero-section__stat">
                                <svg class="hero-section__stat-icon hero-section__stat-icon--filled" fill="currentColor"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true">
                                    <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <span><?php echo esc_html( $statistics_active_stores ); ?></span>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

                <!-- CTA Buttons -->
                <div class="hero-section__actions">

                    <?php if ( $demo_button_text && $demo_video_url ) : ?>
                        <button
                                type="button"
                                data-hero-modal-trigger="<?php echo esc_attr( $modal_id ); ?>"
                                class="btn btn-outline hero-section__btn inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 h-11 px-8 py-2 min-w-[200px] border-2 border-input bg-background hover:border-primary hover:bg-primary hover:text-white hover:[&_svg]:text-white"
                        >
                            <svg class="w-4 h-4 shrink-0 pointer-events-none" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 aria-hidden="true">
                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                            </svg>
                            <?php echo esc_html( $demo_button_text ); ?>
                        </button>
                    <?php endif; ?>

                    <?php if ( $shopify_button_text && $shopify_url ) : ?>
                        <a
                                href="<?php echo esc_url( $shopify_url ); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="btn btn-outline hero-section__btn inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 h-11 px-8 py-2 min-w-[200px] hover:bg-primary hover:text-accent-foreground"
                        >
                            <?php echo esc_html( $shopify_button_text ); ?>
                        </a>
                    <?php endif; ?>

                </div>

                <!-- Video Modal -->
                <?php if ( $demo_video_url ) : ?>
                    <div
                            id="<?php echo esc_attr( $modal_id ); ?>"
                            class="hero-modal hidden"
                            aria-hidden="true"
                            role="dialog"
                            aria-modal="true"
                            aria-labelledby="<?php echo esc_attr( $modal_id ); ?>-title"
                    >
                        <div class="hero-modal-overlay"></div>
                        <div class="hero-modal-content">
                            <div class="hero-modal-inner">
                                <iframe
                                        class="hero-modal-iframe"
                                        data-src="<?php echo esc_url( $demo_video_url ); ?>"
                                        title="CartSaver Demo"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        loading="lazy"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Rating & Trust -->
                <div class="hero-section__rating">

                    <?php if ( $rating_value ) : ?>
                        <div class="hero-section__stars">
                            <?php for ( $i = 0; $i < 5; $i ++ ) : ?>
                                <svg class="hero-section__star" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                            <?php endfor; ?>
                            <span class="hero-section__rating-value"><?php echo esc_html( $rating_value ); ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if ( $trusted_text ) : ?>
                        <span class="hero-section__rating-dot" aria-hidden="true">•</span>
                        <p class="hero-section__trusted"><?php echo esc_html( $trusted_text ); ?></p>
                    <?php endif; ?>

                </div>

            </div>
            <!-- ── END LEFT COLUMN ──────────────────────────── -->


            <!-- ── RIGHT COLUMN — Mock UI Card ──────────────── -->
            <div class="hero-section__visual">
                <div class="relative">

                    <div class="card-glow hero-section__card">
                        <div class="hero-section__card-inner">

                            <!-- Card header -->
                            <div class="hero-section__card-header">
                                <div class="hero-section__card-icon">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                         aria-hidden="true">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                        <polyline points="9 12 11 14 15 10"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-foreground">OTP Verification</div>
                                    <div class="text-sm text-muted-foreground">Instant &amp; Secure</div>
                                </div>
                            </div>

                            <!-- Order status block -->
                            <div class="hero-section__card-order">
                                <div class="hero-section__card-order-header">
                                    <span class="text-sm text-muted-foreground">Order #12345</span>
                                    <span class="badge badge-primary">Pending</span>
                                </div>
                                <div class="hero-section__card-steps">
                                    <div class="hero-section__card-step">
                                        <div class="hero-section__step-dot hero-section__step-dot--active"></div>
                                        <span class="text-sm">WhatsApp OTP sent</span>
                                    </div>
                                    <div class="hero-section__card-step">
                                        <div class="hero-section__step-dot hero-section__step-dot--active"
                                             style="animation-delay: 0.5s;"></div>
                                        <span class="text-sm">Customer verification</span>
                                    </div>
                                    <div class="hero-section__card-step">
                                        <div class="hero-section__step-dot"></div>
                                        <span class="text-sm text-muted-foreground">Order confirmed</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card stats -->
                            <div class="hero-section__card-stats">
                                <div class="hero-section__card-stat">
                                    <div class="hero-section__card-stat-value">95%</div>
                                    <div class="hero-section__card-stat-label">Less Fake Orders</div>
                                </div>
                                <div class="hero-section__card-stat">
                                    <div class="hero-section__card-stat-value">3min</div>
                                    <div class="hero-section__card-stat-label">Setup Time</div>
                                </div>
                                <div class="hero-section__card-stat">
                                    <div class="hero-section__card-stat-value">500+</div>
                                    <div class="hero-section__card-stat-label">Active Stores</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Live badge -->
                    <div class="hero-section__live-badge">
                        <span>Live</span>
                    </div>

                </div>

                <!-- Shopify partner badge -->
                <div class="hero-section__shopify-badge">
                    <span class="hero-section__shopify-label">Official Partner</span>
                    <img
                            decoding="async"
                            src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/shopify-wordmark.svg' ); ?>"
                            alt="<?php esc_attr_e( 'Shopify', 'cartsaver' ); ?>"
                            class="h-6"
                    />
                </div>

            </div>
            <!-- ── END RIGHT COLUMN ─────────────────────────── -->

        </div>
    </div>

</section>