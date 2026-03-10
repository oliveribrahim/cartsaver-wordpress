<?php
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<?php if (have_posts()) : ?>
    <div class="space-y-8">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('bg-white rounded-xl shadow-sm border border-slate-200 p-6'); ?>>
                <header class="mb-4">
                    <h2 class="text-xl font-semibold text-slate-900">
                        <a href="<?php the_permalink(); ?>" class="hover:text-slate-700">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <p class="mt-1 text-xs text-slate-500">
                        <?php echo esc_html(get_the_date()); ?>
                    </p>
                </header>

                <div class="prose prose-slate max-w-none">
                    <?php the_excerpt(); ?>
                </div>

                <footer class="mt-4">
                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-sm font-medium text-sky-600 hover:text-sky-700">
                        <?php esc_html_e('Read more', 'cartsaver-theme'); ?>
                    </a>
                </footer>
            </article>
        <?php endwhile; ?>

        <div class="mt-8">
            <?php the_posts_pagination([
                'mid_size'  => 2,
                'prev_text' => __('« Previous', 'cartsaver-theme'),
                'next_text' => __('Next »', 'cartsaver-theme'),
            ]); ?>
        </div>
    </div>
<?php else : ?>
    <div class="text-center py-16">
        <h2 class="text-2xl font-semibold text-slate-900">
            <?php esc_html_e('Nothing found', 'cartsaver-theme'); ?>
        </h2>
        <p class="mt-4 text-slate-600">
            <?php esc_html_e('It looks like there are no posts here yet.', 'cartsaver-theme'); ?>
        </p>
    </div>
<?php endif; ?>

<?php
get_footer();

