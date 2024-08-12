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
$url = urlencode(get_the_permalink());
$title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
?>

<main>

    <section class="mini-course">
        <div class="container-fluid">
            <div class="row justify-content-center reverse">
                <div class="col-lg-9 col-md-12 col-sm-12">
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

                    <div class="detail-box mobile">
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

                    <div class="share mobile">
                        <div class="title">
                            این دوره را معرفی کنید:
                        </div>

                        <div class="share-item">
                            <a href="#" onclick="copyToClipboard('<?php echo $url; ?>'); return false;">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/copy.svg" alt="Copy">
                            </a>

                            <a href="https://telegram.me/share/url?url=<?php echo $url; ?>" target="_blank">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/telegram.svg"
                                     alt="Telegram">
                            </a>

                            <a href="https://api.whatsapp.com/send?text=<?php echo $url; ?>" target="_blank">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/whatsapp.svg"
                                     alt="WhatsApp">
                            </a>

                            <a href="https://linkedin.com/shareArticle?url=<?php echo $url; ?>" target="_blank">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/linkedin.svg"
                                     alt="LinkedIn">
                            </a>
                        </div>

                        <script>
                            // Function to copy text to clipboard
                            function copyToClipboard(text) {
                                const tempInput = document.createElement("input");
                                tempInput.style.position = "absolute";
                                tempInput.style.left = "-9999px";
                                tempInput.value = decodeURIComponent(text);
                                document.body.appendChild(tempInput);
                                tempInput.select();
                                document.execCommand("copy");
                                document.body.removeChild(tempInput);
                            }
                        </script>
                    </div>
                    <div class="third-section">
                        <h3>
                            سر فصل های دوره
                        </h3>
                        <?php if (have_rows('repeater')): ?>
                            <?php while (have_rows('repeater')): the_row();
                                $number = get_sub_field('number');
                                $title = get_sub_field('title');
                                $link = get_sub_field('link');
                                ?>
                                <div class="video">
                                    <div>
                                         <span class="number">
                                               <?php echo $number ?>
                                         </span>
                                        <span class="title">
                                                <?php echo $title ?>
                                         </span>
                                    </div>

                                    <?php if (is_user_logged_in()) { ?>
                                        <a href="<?php echo $link ?>">
                                            <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/button.svg">
                                        </a>
                                    <?php } else { ?>
                                        <a href="<?php echo $login_url; ?>">
                                            <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/lock-btn.svg">
                                        </a>
                                    <?php } ?>


                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="fourth-section">

                        <div class="row align-items-center">
                            <div class="col-lg-7 col-sm-12 col-12">
                                <h3>این دوره به شما...</h3>
                                <div class="text">
                                    <?php echo the_field("result_text"); ?>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12 col-12">
                                <div class="image">
                                    <img src="<?php echo the_field("result_img"); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fifth-section">
                        <h3>از چه کسانی یاد میگیرید؟</h3>
                        <div class="swiper swiper-seven">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('teachers')): ?>
                                    <?php while (have_rows('teachers')): the_row();
                                        $name = get_sub_field('name');
                                        $img = get_sub_field('img');
                                        $link = get_sub_field('link');
                                        $desc = get_sub_field('desc');
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="teacher">
                                                <a target="_blank">
                                                    <img src="<?php echo $img ?>">
                                                    <div class="name">
                                                        <?php echo $name ?>
                                                    </div>
                                                    <div class="desc">
                                                        <?php echo $desc ?>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="swiper-button-next seven"></div>
                        <div class="swiper-button-prev seven"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="sixth-section">
                        <h3>سوالات متداول</h3>

                        <div class="accordion">
                            <?php if (have_rows('faq')): ?>
                                <?php while (have_rows('faq')): the_row();
                                    $question = get_sub_field('question');
                                    $answer = get_sub_field('answer');
                                    ?>
                                    <div class="acc-btn">
                                            <span class="accordion-item__title">
                                                  <?php echo $question ?>
                                             </span>
                                    </div>
                                    <div class="acc-content">
                                        <p>
                                            <?php echo $answer ?>
                                        </p>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="seventh-section">
                        <?php comments_template(); ?>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="detail-box desktop">
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

                    <div class="share desktop">
                        <div class="title">
                            این دوره را معرفی کنید:
                        </div>
                        <div class="share-item">
                            <a href="#" onclick="copyToClipboard('<?php echo $url; ?>'); return false;">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/copy.svg" alt="Copy">
                            </a>

                            <a href="https://telegram.me/share/url?url=<?php echo $url; ?>" target="_blank">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/telegram.svg"
                                     alt="Telegram">
                            </a>

                            <a href="https://api.whatsapp.com/send?text=<?php echo $url; ?>" target="_blank">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/whatsapp.svg"
                                     alt="WhatsApp">
                            </a>

                            <a href="https://linkedin.com/shareArticle?url=<?php echo $url; ?>" target="_blank">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mini-course/linkedin.svg"
                                     alt="LinkedIn">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <?php get_footer(); ?>
