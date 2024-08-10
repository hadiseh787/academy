
<?php get_header(); ?>


<main>
    <section class="single-mini-course">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a href="">بازگشت به صفحه مینی دوره</a>
                    <h2>
                        <?php echo the_title() ?>
                    </h2>

                    <div class="video">
                        <?php the_field('iframe'); ?>
                    </div>

                    <div class="text">
                        <?php  the_content() ?>
                    </div>


                </div>
            </div>
        </div>
    </section>

</main>

</div>

<?php get_footer(); ?>

