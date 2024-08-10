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
    <?php if (is_user_logged_in()) { ?>
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
                                            <div>
                                                <span class="number">
                                                      <?php echo $number ?>
                                                </span>
                                                <?php echo $title ?>
                                            </div>

                                            <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/button.svg">

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

                            <div class="accordion">
                                <div class="acc-btn">
                                    <span class="accordion-item__title">
                                   آیا این دوره نیاز به تجربه‌ی پیشین در زمینه فروش دارد؟
                                     </span>
                                </div>
                                <div class="acc-content">
                                    <p>
                                        بله، شرکت در دوره مدیر فروش حرفه‌ای حداقل سه سال فعالیت در زمینه فروش یا مدرک
                                        کارشناس
                                        فروش حرفه‌ای آکادمی دیدار نیاز دارد.

                                    </p>
                                </div>

                                <div class="acc-btn">
                                    <span class="accordion-item__title">
                                       آیا نحوه برگزاری دوره مدیر فروش به صورت حضوری است؟
                                     </span>
                                </div>

                                <div class="acc-content">
                                    <p>
                                        بله، دوره مدیر فروش به صورت حضوری برنامه‌ریزی شده تا اساتید و شرکت‌کنندگان تعامل
                                        سازنده
                                        با یکدیگر داشته باشند و بهره‌وری به بالاترین میزان ممکن برسد.
                                    </p>
                                </div>

                                <div class="acc-btn">
                            <span class="accordion-item__title">
                                آیا پس از پایان دوره گواهی صادر می‌شود؟
                            </span>
                                </div>

                                <div class="acc-content">
                                    <p>
                                        بله، آکادمی فروش دیدار به عنوان یک آموزشگاه فنی حرفه‌ای و موسسه تخصصی در زمینه
                                        فروش برای
                                        شرکت‌کنندگان مدرک صادر می‌کند.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="seventh-section">
                            <?php comments_template(); ?>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-9 col-sm-12">
                        <div class="detail-box">
                            <div class="line">
                                <div>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/play.svg"><span>نوع دوره</span>
                                </div>
                                <?php echo the_field('course_type'); ?>
                            </div>

                            <div class="line">
                                <div>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/document.svg"><span>پیش‌نیاز</span>
                                </div>
                                <?php echo the_field('prerequisite'); ?>
                            </div>

                            <div class="line">
                                <div>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/time.svg"><span>مدت زمان</span>
                                </div>
                                <?php echo the_field('time'); ?>
                            </div>

                            <div class="line">
                                <div>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/video.svg"
                                         class="vid"><span>تعداد ویدیو</span>
                                </div>
                                <?php echo the_field('count'); ?>
                            </div>

                            <div class="line">
                                <div>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/price.svg"><span>قیمت</span>
                                </div>
                                <?php echo the_field('price'); ?>
                            </div>

                            <div class="signup">
                                <a href="https://didarsalesdemy.com/courses/form/">ثبت‌نام در دوره</a>
                            </div>
                        </div>

                        <div class="share">
                            <div class="title">
                                این دوره را معرفی کنید:
                            </div>
                            <div class="share-item">
                                <a href="">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/copy.svg">
                                </a>
                                <a href="">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/telegram.svg">
                                </a>
                                <a href="">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/whatsapp.svg">
                                </a>
                                <a href="">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/linkedin.svg">
                                </a>
                                <a href="">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/twitter.svg">
                                </a>
                            </div>

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
