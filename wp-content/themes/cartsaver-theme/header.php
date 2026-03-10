<?php
if (! defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-slate-50 text-slate-900'); ?>>
<?php wp_body_open(); ?>

<div class="min-h-screen flex flex-col">
    <header class="border-b border-slate-200 bg-white">
        <div class="mx-auto max-w-5xl px-4 py-4 flex items-center justify-between">
            <?php get_template_part('parts/header', 'site-branding'); ?>
            <nav class="flex items-center gap-4 text-sm font-medium">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-slate-700 hover:text-slate-900">
                    <?php esc_html_e('Home', 'cartsaver-theme'); ?>
                </a>
            </nav>
        </div>
    </header>

    <main class="flex-1">
        <div class="mx-auto max-w-5xl px-4 py-8">
