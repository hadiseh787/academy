<?php
/**
 * Template Name: مینی دوره
 *
 * @author Didar
 */
get_header();

$current_url = get_permalink();
$login_url = wc_get_page_permalink('myaccount');
$login_url = add_query_arg('redirect_to', urlencode($current_url), $login_url);
?>

<main>
    <?php if ( is_user_logged_in() ) { ?>
        <section class="mini-course">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="first-section">
                            <h2>
                                <?php echo the_title() ?>
                            </h2>
                            <div class="img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        <div class="second-section">
                            <h3>
                               این دوره چه کمکی به شما میکند؟
                            </h3>
                            <div class="text">
                                <?php echo the_field("text"); ?>
                            </div>
                        </div>
                        <div class="third-section">
                            <h3>
                             سر فصل های دوره
                            </h3>
                            <div class="text">
                                <?php if (have_rows('repeater')): ?>
                                    <?php while (have_rows('repeater')): the_row();
                                        $number = get_sub_field('number');
                                        $title = get_sub_field('title');
                                        $iframe = get_sub_field('iframe');
                                        ?>
                                        <div class="video">

                                                <?php echo $number ?>

                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="fourth-section">
                            <h3>این دوره به شما...</h3>
                        </div>
                        <div class="fifth-section">
                            <h3>از چه کسانی یاد میگیرید؟</h3>
                        </div>
                        <div class="sixth-section">
                            <h3>سوالات متداول</h3>
                        </div>
                        <div class="seventh-section">
                            <?php comments_template(); ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-12">
                        <div class="detail-box">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } else { ?>
        <section class="home intro">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="box">
                            <h2>برای دیدن این صفحه ثبت نام کن!</h2>
                            <div class="img">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/banner.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <a href="<?php echo $login_url; ?>">ثبت نام</a>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
</main>

<?php get_footer(); ?>
