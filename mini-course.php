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
        <section class="home intro">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="box">
                            <h2>ما مصمم هستیم مهارت فروش را در ایران ارتقا دهیم!</h2>
                            <div class="img">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/banner.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <a href="https://didarsalesdemy.com/courses/form/">شرکت در دوره‌ها</a>
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
