


<?php get_header(); ?>


<div class="clearfix"></div>
<?php while(have_posts()) : the_post(); ?>
    <div class="cart">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="cart-page-section">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>