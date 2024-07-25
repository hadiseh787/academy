<?php
/**
 * Template Name: آرشیو مقالات
 *
 * @author Hadiseh Bagherian
 */
?>

<?php get_header(); ?>
<section class="home blog-sec article-archive">
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-lg-10 col-md-10 col-sm-10">

                <h2>
                    مقالاتی در مورد فروش
                </h2>

                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>

                <?php
                $args = array(
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'paged' => get_query_var('paged'),
                    'posts_per_page' => 9,
                );
                $result = new WP_Query($args);
                if ($result->have_posts()) : ?>
                    <div class="row mt-20">
                        <?php while ($result->have_posts()) : $result->the_post(); ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="mag-box">
                                    <a href="<?php the_permalink($result->ID); ?>">
                                        <div class="img">
                                            <img src="<?php echo get_the_post_thumbnail_url($result->ID); ?>"
                                                 alt="">

                                        </div>
                                        <div class="mag-title"><?php the_title($result->ID) ?></div>
                                    </a>
                                    <div class="mag-desc">
                                        <div><?php echo get_field('desc') ?></div>

                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif;
                wp_reset_postdata(); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination">
                            <?php

                            echo paginate_links(array(
                                'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                'total' => $result->max_num_pages,
                                'current' => max(1, get_query_var('paged')),
                                'format' => '?paged=%#%',
                                'show_all' => false,
                                'type' => 'list',
                                'end_size' => 2,
                                'mid_size' => 1,
                                'prev_next' => true,
                                'prev_text' => sprintf('<i></i> %1$s', __('<i class="fas fa-chevron-right"></i>', 'text-domain')),
                                'next_text' => sprintf('%1$s <i></i>', __('<i class="fas fa-chevron-left"></i>', 'text-domain')),
                                'add_args' => false,
                                'add_fragment' => '',
                            ));

                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
