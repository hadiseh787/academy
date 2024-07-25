
<?php get_header(); ?>


<div class="no-overflow margin-top--20">

    <main>
        <section class="prof">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="img text-center">
                            <img src="<?php echo get_field('main-img') ?>" alt="<?php echo get_the_title(); ?>">
                        </div>

                            <a class="view-all" href="<?php echo get_field('professors-link', 'option') ?>">
                                مشاهده همه اساتید <img src="<?php echo SALES_ACADEMY; ?>/assets/img/arrow-left.svg"
                                                       alt="">
                            </a>

                        <div class="social">
                            <?php if (get_field('has_linkedin') == true) { ?>
                                <a href="<?php echo get_field('linkedin') ?>" rel="nofollow">
                                    <img class="first" src="<?php echo SALES_ACADEMY; ?>/assets/img/linkedin.svg" alt="linkedin">
                                    <img class="second" src="<?php echo SALES_ACADEMY; ?>/assets/img/linkedin-b.svg" alt="linkedin">
                                </a>
                            <?php } ?>
                            <?php if (get_field('has_instagram') == true) { ?>
                                <a href="<?php echo get_field('instagram') ?>" rel="nofollow">
                                    <img class="first" src="<?php echo SALES_ACADEMY; ?>/assets/img/instagram.svg" alt="instagram">
                                    <img class="second" src="<?php echo SALES_ACADEMY; ?>/assets/img/instagram-b.svg" alt="instagram">
                                </a>
                            <?php } ?>
                            <?php if (get_field('has_website') == true) { ?>
                                <a href="<?php echo get_field('website') ?>" rel="nofollow">
                                    <img class="first" src="<?php echo SALES_ACADEMY; ?>/assets/img/web.svg" alt="website">
                                    <img class="second" src="<?php echo SALES_ACADEMY; ?>/assets/img/web-b.svg" alt="website">
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="content">
                            <div class="name-img">
                              <?php the_title(); ?>
                            </div>
                            <div class="position">
                                <?php echo get_field('position') ?>
                            </div>
                            <?php if (have_rows('fields')): ?>
                                <ul class="fields">
                                    <?php while (have_rows('fields')): the_row();
                                        $field = get_sub_field('field');
                                        ?>
                                        <li>
                                            <?php echo $field ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                            <div class="excerpt">
                                <?php echo the_content() ?>
                            </div>
                             <h3>
                                دوره‌های آموزشی:
                            </h3>
                            <?php if (have_rows('courses')): ?>
                                <ul class="fields course">
                                    <?php while (have_rows('courses')): the_row();
                                        $course = get_sub_field('course');
                                        ?>
                                        <li>
                                            <?php echo $course ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
