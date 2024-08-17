<?php
/**
 * The template for displaying the footer
 */

?>

<?php if (!is_page_template('sign-up.php') && !is_page_template('success.php')) { ?>
    <footer class="<?php if (is_singular('post') || is_singular('courses') || is_page_template('home-page.php') || is_page_template('mini-course.php'))  {
        echo 'has-padding';
    } ?>">
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <a href="<?php echo home_url(); ?>">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/academy-logo-footer.png"
                                 alt=""
                                 class="f-logo">
                        </div>
                    </a>
                    <div class="address">
                        آدرس : تهران، شهرک غرب،خیابان زرافشان،خیابان درخشان، پلاک 41، طبقه چهارم
                    </div>
                    <div class="phone">
                        شماره تماس : <a href="tel:+982143000114">021-43000114</a> داخلی 3
                    </div>
                    <div class="email">
                        ایمیل: Info@didarsalesdemy.com
                    </div>

                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <nav class="footer-menu">
                        <div class="footer-title">
                            خدمات
                        </div>
                        <?php
                        if (has_nav_menu('footer-menu_first')) {

                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer-menu_first',
                                    'menu' => '',
                                    'container' => false,
                                )
                            );
                        }
                        ?>

                    </nav>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <nav class="footer-menu">
                        <div class="footer-title">
                            دسترسی سریع
                        </div>
                        <?php
                        if (has_nav_menu('footer-menu_second')) {

                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer-menu_second',
                                    'menu' => '',
                                    'container' => false,
                                )
                            );
                        }
                        ?>
                    </nav>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 col-12 certificate">
                    <a referrerpolicy='origin' target='_blank'
                       href='https://trustseal.enamad.ir/?id=440767&Code=SU1IK1KgchiF8Zhqd5nBkmjRDH2gH4ei'><img
                                referrerpolicy='origin'
                                src='https://trustseal.enamad.ir/logo.aspx?id=440767&Code=SU1IK1KgchiF8Zhqd5nBkmjRDH2gH4ei'
                                alt='' style='cursor:pointer' Code='SU1IK1KgchiF8Zhqd5nBkmjRDH2gH4ei'></a>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/fani.png">
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="social">
                    <a href="https://www.linkedin.com/company/didar-sales-academy/" target="_blank"><img class="img"
                                                                                                         src="<?php echo get_template_directory_uri() ?>/assets/img/in.png"></a>
                    <a href="https://instagram.com/didarsalesdemy?igshid=MzRlODBiNWFlZA==" target="_blank"><img
                                class="img" src="<?php echo get_template_directory_uri() ?>/assets/img/insta.png"></a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="copy">
                        کلیه حقوق مادی و معنوی این سایت متعلق به شرکت توسعه دانش دیدار می‌باشد.
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>
