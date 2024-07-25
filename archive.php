<?php
/**
 * Template Name: آرشیو اساتید
 *
 * @author Hadiseh Bagherian
 */
?>

<?php get_header(); ?>
<section class="home mentors p-archive">
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-lg-10 col-md-10 col-sm-10">

                <h2> مدیر فروش: </h2>
                <?php
                $postType = get_query_var('post_type');

                $args = array(
                    'post_status' => 'publish',
                    'post_type' => $postType ? $postType : array('professors'),
                    'tax_query' => array(),
                    'paged' => get_query_var('paged'),
                    'orderby' => 'rand',
                    'category_name' => 'sales-manager',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) : ?>
                    <div class="row mt-20">

                        <?php while ($query->have_posts()) : $query->the_post(); ?>


                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">

                                <div class="prof-box">
                                    <a <?php echo has_post_thumbnail() ? 'href="' . esc_url(get_permalink()) . '"' : ''; ?> target="_blank">
                                    <div class="image">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php else: ?>
                                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/avatar.jpg" alt="">
                                            <?php endif; ?>
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

                <h2> کارشناس فروش: </h2>
                <?php
                $postType = get_query_var('post_type');

                $args = array(
                    'post_status' => 'publish',
                    'post_type' => $postType ? $postType : array('professors'),
                    'tax_query' => array(),
                    'paged' => get_query_var('paged'),
                    'orderby' => 'rand',
                    'category_name' => 'sales-representative',
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
