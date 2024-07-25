<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="author" content="salesacademy"/>
    <meta name="keywords" content="salesacademy"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MQV9RZZP');</script>
    <!-- End Google Tag Manager -->
<script>
    !function (t, e, n) {
        t.yektanetAnalyticsObject = n, t[n] = t[n] || function () {
            t[n].q.push(arguments)
        }, t[n].q = t[n].q || [];
        var a = new Date, r = a.getFullYear().toString() + "0" + a.getMonth() + "0" + a.getDate() + "0" + a.getHours(),
            c = e.getElementsByTagName("script")[0], s = e.createElement("script");
        s.id = "ua-script-8v1EiXMD"; s.dataset.analyticsobject = n;
        s.async = 1; s.type = "text/javascript";
        s.src = "https://cdn.yektanet.com/rg_woebegone/scripts_v3/8v1EiXMD/rg.complete.js?v=" + r, c.parentNode.insertBefore(s, c)
    }(window, document, "yektanet");
</script>
</head>

<body <?php body_class();
$custom_logo_id = get_theme_mod('fe');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
?> >

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQV9RZZP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<header class="course-head">
    <div class="container-fluid">
<!--        <div class="right">-->
<!--            <div class="back-to-home">-->
<!--                <a href="--><?php //echo home_url(); ?><!--">-->
<!--                    <img src="--><?php //echo SALES_ACADEMY; ?><!--/assets/img/back.svg" alt="">-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->


        <div class="main-menu">
            <div class="right">
                <nav role='navigation'>
                    <div id="menuToggle" class="accordianNav">

                        <input type="checkbox"/>
                        <span></span>
                        <span></span>
                        <span></span>
                        <ul id="menu">
                            <li>
                                <h3><a href="<?php echo home_url(); ?>">آکادمی فروش دیدار</a></h3>
                            </li>
                            <li>
                                <h3 class="dropArrow">دوره‌های آموزشی</h3>
                                <ul>
                                    <li><a href="https://didarsalesdemy.com/courses/Sales-Representative/">کارشناس فروش</a></li>
                                    <li><a href="https://didarsalesdemy.com/courses/sales-manager/">مدیر فروش</a></li>
                                </ul>
                            </li>

                            <li>
                                <h3 class="dropArrow">ارتباط با آکادمی</h3>
                                <ul>
                                    <li><a href="https://didarsalesdemy.com/about-us/">درباره ما</a></li>
                                    <li><a href="https://didarsalesdemy.com/contact-us/">تماس با ما</a></li>
                                </ul>
                            </li>

                            <li>
                                <h3 class="dropArrow">بیشتر</h3>
                                <ul class="more">
                                    <li><a href="https://didarsalesdemy.com/professors/">اساتید</a></li>
                                    <li><a href="https://didarsalesdemy.com/mentors/">منتورها</a></li>
                                    <li><a href="https://didarsalesdemy.com/blog/">بلاگ</a></li>
                                    <!--                                    <li><a>آموزش‌های رایگان</a></li>-->
                                    <!--                                    <li><a>رویداد در مسیر فروش</a></li>-->
                                    <!--                                    <li><a>مسیر ویژه(بورسیه و استخدام)</a></li>-->
                                    <!--                                    <li><a>استعلام مدرک</a></li>-->
                                </ul>
                            </li>

                            <div class="bottom-menu">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/y-logo.svg" alt="" class="logo">
                                </a>

                                <div class="text">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/phone.png">
                                    <a href="tel:+982143000114">021-43000114</a> داخلی 3<br>
                                    در آکادمی فروش دیدار حرفه‌ای آموزش ببینید.
                                </div>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>


        <div class="left">
            <a href="https://didarsalesdemy.com/courses/form/">ثبت نام در این دوره</a>
        </div>

        <div class="clearfix"></div>
    </div>
</header>
