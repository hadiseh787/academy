<?php
/**
 * Template Name: آرشیو منتورها
 *
 * @author Hadiseh Bagherian
 */
?>

<?php get_header(); ?>
<section class="home mentors p-archive">
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-lg-10 col-md-10 col-sm-10">

                <h2>
                    منتورهای آکادمی فروش دیدار
                </h2>
                <?php
                $postType = get_query_var('post_type');

                $args = array(
                    'post_status' => 'publish',
                    'post_type' => $postType ? $postType : array('mentors'),
                    'tax_query' => array(),
                    'paged' => get_query_var('paged'),
                    'orderby' => 'rand',
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) : ?>

                    <div class="row mt-20">

                        <?php while ($query->have_posts()) : $query->the_post(); ?>


                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">

                                <div class="prof-box">
                                    <a href="<?php the_permalink(); ?>" target="_blank">
                                        <div class="image">
                                            <?php the_post_thumbnail(); ?>
                                        </div>

                                        <div class="name">
                                            <?php the_title(); ?>
                                        </div>
                                    </a>
                                    <div class="position">
                                        <?php echo get_field('position') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php
                    wp_reset_query();

                endif; ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
