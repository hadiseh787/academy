<?php
/**
 * Template Name: کارشناس فروش حرفه‌ای
 * Template Post Type: courses
 * @package WordPress
 *
 */

?>

<?php get_header('courses'); ?>


<main>
    <section class="courses intro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="box">
                        <div class="left-section">
                            <h3>
                                <?php echo the_title() ?><img src="<?php echo get_field("title-image") ?>">
                            </h3>
                            <?php if (have_rows('course_features')): ?>
                                <?php while (have_rows('course_features')): the_row();
                                    $icon = get_sub_field('icon');
                                    $feature = get_sub_field('feature');
                                    ?>

                                    <div class="part">
                                        <img src="<?php echo $icon ?>"
                                             alt="">
                                        <div class="features">
                                            <?php echo $feature ?>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>
                            =
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="courses section-menu">
        <div id="sticky-anchor"></div>

        <nav class="navigation" id="sticky">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">


                        <ul class="menu">
                            <li>
                                <a href="#introduction">
                                    معرفی
                                </a>
                            </li>
                            <li>
                                <a href="#modules">
                                    ‌سرفصل‌ها
                                </a>
                            </li>
                            <li>
                                <a href="#signup">
                                    روند ثبت‌نام
                                </a>
                            </li>
                            <li>
                                <a href="#tuition">
                                    شهریه
                                </a>
                            </li>

                            <li>
                                <a href="#curriculum">
                                    برنامه آموزشی
                                </a>
                            </li>
                            <li>
                                <a href="#professors">
                                    اساتید
                                </a>
                            </li>
                            <li>
                                <a href="#mentorship">
                                    منتورشیپ
                                </a>
                            </li>
                            <li>
                                <a href="#companies">
                                    معرفی به شرکت‌ها
                                </a>
                            </li>

                            <li>
                                <a href="#faq">
                                    پرسش‌های متداول
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section class="courses parts" id="introduction">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>
                        معرفی
                    </h2>

                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="img">
                        <img src="<?php echo SALES_ACADEMY; ?>/assets/img/introduction.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">

                    <div class="text">
                        ما در آکادمی فروش دیدار برگزار کننده دوره‌های تخصصی فروش هستیم. در دوره کارشناس فروش الفبای فروش
                        را به صورت تکنیک محور به همراه مفاهیم کاربردی آموزش می‌دهیم و پس از پایان دوره شما به عنوان یک
                        کارشناس فروش حرفه‌ای، نه تنها آماده فروش و ارائه انواع محصول و خدمات هستید، بلکه از به روزترین
                        مهارت‌های ارتباطی برای پیشبرد فعالیت‌های حرفه‌ای خود برخوردار می‌شوید.

                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="accordion">


                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                    شرکت در این دوره چه کمکی به شما می‌کند؟
                                     </span>
                        </div>
                        <div class="acc-content">
                            <p>
                            <ul class="no-bullet">
                                <li>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n1.png">
                                    <strong>افزایش فروش:</strong>
                                    <div>
                                        قطعا هدف اولیه شما برای شرکت در این دوره افزایش فروش است. با یادگیری تکنیک‌های
                                        کاربردی و به روز، ما به شما آموزش می‌دهیم چگونه <b>میزان فروش</b> خود را افزایش
                                        دهید.
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n2.png">
                                    <strong>منتورینگ در راستای آموزش: </strong>
                                    <div>
                                        یکی از جذاب‌ترین بخش‌های آموزش فروش در آکادمی دیدار، <b>منتورینگ</b> است. جلسات
                                        آنلاین
                                        منتورینگ به شما کمک می‌کند نقاط قوت و ضعف خود را شناسایی کنید! همچنین باعث
                                        افزایش تعامل شما و شبکه سازی در طول دوره می‌شود.

                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n3.png">
                                    <strong>تولید فرصت‌:</strong>
                                    <div>
                                        ما در طول دوره به شما آموزش می‌دهیم که با توجه به زمینه کاری‌ مختلف چگونه
                                        فرصت‌های جدید برای فروش به وجود آورده و با چه تکنیکی فرصت‌های قبلی را به چرخه
                                        فروش‌تان برگردانید.

                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n4.png">
                                    <strong>افزایش مهارت‌های ارتباطی و توسعه فردی: </strong>
                                    <div>
                                        خاصیت کار فروش ایجاب می‌کند که با افراد دارای روحیات مختلف در ارتباط باشیم و چه
                                        مهارتی مهم‌تر از این که ما بتوانیم شخصیت افراد را بشناسیم و ارتباط درستی در
                                        راستای فروش با آنها برقرار کنیم؟
                                    </div>
                                </li>
                            </ul>
                            </p>
                        </div>

                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                        دوره مناسب چه افرادی است؟
                                     </span>
                        </div>

                        <div class="acc-content">
                            <ul>
                                <li>کارشناسان فروش</li>
                                <li>علاقه‌مندان به منتورینگ و تاثیرگذاری در حوزه فروش</li>
                            </ul>
                        </div>
                        <div class="left free-counseling mt-5">
                            <div>مشاوره رایگان</div>
                            <a href="tel:+982143000114">
                                <span class="phone">02143000114</span>
                                <span class="border">داخلی 3</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses parts" id="modules">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>
                        ماژول‌ها و سرفصل‌ها
                    </h2>

                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="img">
                        <img src="<?php echo SALES_ACADEMY; ?>/assets/img/majul.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">

                    <div class="text">
                        ما در سرفصل‌های آموزشی کارشناس فروش حرفه‌ای، همه آن‌چه را که یک فرد برای حرفه‌ای شدن در حوزه
                        فروش نیاز دارد به شما آموزش می‌دهیم. شما در این دوره علاوه‌ بر اینکه یاد می‌گیرید فروش نیازمند
                        چه نوع نگرش و توانمندی‌های فردی است، کار با ابزارهای مورد نیاز کارشناس فروش، فرآیند فروش، دانش
                        علمی فروشندگی و تحلیل و بررسی فروش را هم می‌ آموزید. نتیجه سرفصل‌های آموزشی ما، تبدیل‌کردن شما
                        به یک کارشناس فروش حرفه‌ای و کاربلد است.
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="accordion">
                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                    نگرش فروش
                                     </span>
                        </div>
                        <div class="acc-content">
                            <p>
                                همه‌چیز در یک فروش موفق به نگرش شما برمی‌گردد. بدون نگرش درست هیچ‌ فروشنده‌ای نتوانسته
                                در مسیر حرفه‌ای‌ شدن قدم بگذارد و به نتیجه واقعی برسد.

                            </p>
                            <div class="flex">
                                <ul class="w-50">
                                    <li>توسعه فردی</li>
                                    <li>نگرش ساخت رابطه</li>
                                    <li>مدیریت زمان و انرژی</li>
                                </ul>
                                <ul class="w-50">
                                    <li>مهارت‌های ارتباطی</li>
                                    <li>رفتار شناسی مشتری</li>
                                    <li>ساخت ذهن قوی با یوگا</li>
                                </ul>
                            </div>
                        </div>

                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                        روش و فرآیند فروش
                                     </span>
                        </div>

                        <div class="acc-content">
                            <p>روش‌ها و فرآیندهای فروش مثل نقشه راه رسیدن به مقصد است. در این سرفصل آموزشی ما یک دید
                                کامل از مسیر را به‌ شما می‌دهیم.
                            </p>
                            <ul>
                                <li>کارخانه فروش</li>
                            </ul>
                        </div>

                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                     مهارت فروش
                                     </span>
                        </div>

                        <div class="acc-content">
                            <p>این روزها رقابت آنقدر سخت و مشتری آنقدر هوشمند و سخت پسند شده که شما نمی‌توانید فقط با
                                تکیه بر نیازهایش به او بفروشید. داشتن دانش لازم و مهارت‌های نرم و سخت است که مشتری
                                بالقوه شما را به مشتری خوشحال و وفادار تبدیل می‌کند.
                            </p>
                            <div class="flex">
                                <ul class="w-50">
                                    <li>مشتری یابی در فضای دیجیتال</li>
                                    <li>پرسشگری و کشف مسئله</li>
                                    <li>ارائه و داستان سرایی</li>
                                    <li>جلسات فروش موثر</li>
                                    <li>تکنیک‌های مذاکره</li>
                                </ul>
                                <ul class="w-50">
                                    <li>مدیریت ایرادات و اعتراضات مشتری</li>
                                    <li>متقاعد سازی</li>
                                    <li>نهایی سازی فروش</li>
                                    <li>تکنیک‌های فروش تلفنی</li>
                                    <li>شبکه سازی</li>
                                </ul>
                            </div>

                        </div>
                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                    جعبه ابزار فروش
                                     </span>
                        </div>

                        <div class="acc-content">
                            <p>
                                در دنیای امروز بدون ابزارهای دیجیتال هیچ کاری از پیش نمی‌رود. حوزه فروش هم در این امر نه
                                تنها استثنا نیست، بلکه یک فروشنده به دلیل رقابت شدید به ابزارهای به روز نیاز جدی وجود
                                دارد.
                            </p>
                            <ul>
                                <li>مدیریت ارتباط با مشتری (CRM)
                                </li>
                            </ul>
                        </div>
                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                    انتقال تجربه واقعی در زمینه فروش
                                     </span>
                        </div>

                        <div class="acc-content">
                            <p>
                                برای درک بهتر از مفاهیم تئوری پکیجی تدارک دیده ایم تا بتوانید در کنار آموزش،
                                از تجربیات واقعی مدیران و فعالان در زمینه فروش نیز برخوردار شوید.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses parts" id="signup">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>
                        روند ثبت نام
                    </h2>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-sm-12">

                    <div class="text">
                        <div>
                            <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n1.png">
                            در ابتدا باید فرم مخصوص ثبت نام را با وارد کردن اطلاعات اولیه تکمیل کنید. همکاران ما با شما
                            تماس میگیرند و اطلاعات لازم را دریافت می‌کنید.

                        </div>

                        <div>
                            <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n2.png">
                            بعد از نهایی شدن ثبت نام، دسترسی ویدئوهای ضبط شده‌ی کلاس‌های آموزشی در اسپات پلیر به صورت
                            هفتگی برای شما باز می‌شود.
                        </div>

                        <div class="home intro">
                            <a href="https://didarsalesdemy.com/courses/form/"> فرم ثبت‌نام</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses parts" id="tuition">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>
                        شهریه و مدت زمان
                    </h2>

                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="img">
                        <img src="<?php echo SALES_ACADEMY; ?>/assets/img/sale-price.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">

                    <div class="text">
                        مدت زمان دوره: 13 هفته (شامل 40 ساعت آموزش، 20 ساعت منتورینگ و جلسات انتقال تجربیات
                        واقعی)
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses parts" id="curriculum">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>
                        برنامه آموزشی
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-10 col-md-3 col-sm-12">
                    <div class="text">
                        در دوره کارشناس فروش که توسط برترین اساتید فعال در حوزه فروش تدریس می‌شود، جلسات آموزشی ضبط شده
                        به صورت هفتگی در اختیار شما قرار می‌گیرد. در کنار آموزش‌ها، در جلسات آنلاین منتورینگ تمرین‌های
                        کلاس را با کمک و مشاوره منتور انجام می‌دهید و به صورت تعاملی با مباحث آموزشی آشنایی بیشتری پیدا
                        می‌کنید. در نهایت بعد از گذراندن دوره و طبق نتیجه گزارش منتور شما مدرک آموزشی برایتان صادر
                        می‌شود.
                        <br>
                        <br>
                        <div class="mt-3">
                            <img src="<?php echo SALES_ACADEMY; ?>/assets/img/meeting.png">
                            جلسات آموزشی هفتگی: مدت زمان این دوره 70 ساعت در نظر گرفته شده است. با ثبت نام در این دوره
                            اموزشی دسترسی ویدئوهای آموزشی برای شما باز می‌شود که می‌توانید در صورت نیاز چندین بار آنها
                            را در اسپات پلیر مشاهده کنید. برای مشاهده ویدیوها می‌توانید از لپ تاپ یا موبایل استفاده کنید
                            اما برای استفاده بهتر، لپتاپ را پیشنهاد می‌کنیم.
                        </div>

                        <div class="mt-3">
                            <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mentoring.png">جلسات منتورینگ هفتگی: با
                            شروع دوره شما در تیم منتورینگ عضو می‌شوید و به صورت هفتگی و هم راستا با کلاس، جلسات منتورینگ
                            شما به صورت آنلاین برگزار می‌شود. در این جلسات هر سوال یا مشکلی که در جلسات آموزشی دارید
                            توسط منتور برطرف می‌شود. این جلسات برای حل مسائل و چالش‌های فروشی شما بسیار کمک کننده هستند.
                        </div>

                        <div class="mt-3">
                            <img src="<?php echo SALES_ACADEMY; ?>/assets/img/questions.png">
                            گروه‌های پرسش و پاسخ: بعد از ثبت نام، شما به گروه تلگرامی دانشجوهای آکادمی فروش دیدار اضافه
                            می‌شوید. در این گروه‌ها شما می‌توانید با هم دوره‌های خود در تعامل باشید. این گروه ها برای
                            اطلاع رسانی و شبکه سازی بسیار کمک کننده هستند.
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="home mentors courses parts" id="professors">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>
                        اساتید
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php
                    $postType = get_query_var('post_type');

                    $args = array(
                        'post_status' => 'publish',
                        'post_type' => 'professors',
                        'tax_query' => array(),
                        'paged' => get_query_var('paged'),
                        'orderby' => 'rand',
                        'category_name' => 'sales-representative',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) : ?>
                        <div class="swiper swiper-four">
                            <div class="swiper-wrapper">
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <div class="prof-box">
                                            <a <?php echo has_post_thumbnail() ? 'href="' . esc_url(get_permalink()) . '"' : ''; ?>
                                                    target="_blank">
                                                <div class="image">
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <?php the_post_thumbnail(); ?>
                                                    <?php else: ?>
                                                        <img src="<?php echo SALES_ACADEMY; ?>/assets/img/avatar.jpg"
                                                             alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="name">
                                                    <?php the_title(); ?>
                                                </div>
                                            </a>
                                            <div class="position">
                                                <?php echo get_field('position') ?>
                                            </div>
                                            <a class="more" <?php echo has_post_thumbnail() ? 'href="' . esc_url(get_permalink()) . '"' : ''; ?> target="_blank">
                                                بیشتر...
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="swiper-button-next four"></div>
                        <div class="swiper-button-prev four"></div>
                        <div class="swiper-pagination"></div>
                        <div class="row justify-content-end">
                            <a class="blog-link" href="<?php echo get_field('professors-link', 'option') ?>">
                                مشاهده لیست کامل اساتید <img src="<?php echo SALES_ACADEMY; ?>/assets/img/arrow-left.svg"
                                                             alt="">
                            </a>
                        </div>
                    <?php endif;

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="courses parts" id="mentorship">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>
                        منتورشیپ
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="img">
                        <img src="<?php echo SALES_ACADEMY; ?>/assets/img/mentorship.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="text">
                        یکی از حرفه‌ای‌ترین بخش‌ها یعنی منتورشیپ در این دوره به صورت کاربردی برگزار می‌شود. در منتورشیپ
                        آکادمی دیدار، هر کدام از منتورهای حرفه‌ای، گروهی از شرکت‌کننده‌ها را هدایت می‌کنند. کار منتورها
                        دقیقا چیست؟ منتورها از طرفی تمارین اساتید را پیگیری می‌کنند و از طرف دیگر تمرین‌های دیگری را با
                        شرکت‌کننده‌ها برای یادگیری و تقویت بیش‌تر پیش می‌برند. شرکت‌کننده‌ها با منتور مخصوص به‌ خودشان
                        جلسات آنلاین خواهند داشت.

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses parts" id="companies">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>
                        معرفی به شرکت‌ها
                    </h2>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="img">
                        <img src="<?php echo SALES_ACADEMY; ?>/assets/img/companies.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">

                    <div class="text">
                        آکادمی دیدار در این بخش، امتیاز ویژه‌ای برای شرکت‌کنندگان دوره دارد. اگر شما یکی از دانشجویانی
                        باشید که دوره‌ را به‌ خوبی به اتمام رسانده و در ارزیابی تمرین‌ها، امتیاز بالایی بگیرید، ما شما
                        را برای همکاری به شرکت‌های متقاضی جذب نیروی فروش معرفی می‌کنیم.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses parts" id="faq">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>
                        سوالات متداول
                    </h2>
                    <div class="accordion">


                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                    شرکت در دوره کارشناس فروش نیازمند پیش‌نیاز است؟
                                     </span>
                        </div>
                        <div class="acc-content">
                            <p>
                                خیر. حتی اگر تازه به حوزه فروش علاقه‌مند شده باشید، الفبای فروش را به شما آموزش خواهیم
                                داد. طراحی این دوره به این صورت است که از صفر تا صد تکنیک‌های علمی به روز فروش را به شما
                                آموزش می‌دهد؛ پس بعد از شرکت در این دوره می‌توانید وارد بازار کار شوید.

                            </p>
                        </div>

                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                      من چند سال سابقه فروش دارم، این دوره برای من مناسب است؟
                                     </span>
                        </div>

                        <div class="acc-content">
                            <p>اگر احساس نیاز دارید که تکنیک‌های خود را به روز کنید و دانش خود را ارتقا دهید، قطعا شرکت
                                در این دوره برای شما مفید خواهد بود.
                            </p>
                        </div>

                        <div class="acc-btn">
                                    <span class="accordion-item__title">
برای شرکت در دوره به چه سیستمی نیاز دارم؟
                                     </span>
                        </div>

                        <div class="acc-content">

                            <p>
                                برای شرکت در دوره می‌توانید از طریق موبایل یا لپتاپ به ویدیوهای آموزشی دوره دسترسی داشته
                                باشید. لایسنس اسپات پلیر (این لایسنس فقط روی یک دستگاه قابل استفاده است) برای شما ارسال
                                خواهد شد.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="courses parts comment">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php comments_template(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="courses seo">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="seo-box">
                        <div class="detailBlk">
                            <div class="heading"> همین امروز اولین قدم را برای تبدیل‌ شدن به یک کارشناس فروش حرفه‌ای
                                بردارید!
                            </div>

                            <p> احتمالا این سوال شما هم باشد: کارشناس فروش کیست و چطور می‌توانم یک کارشناس فروش حرفه‌ای،
                                با درآمد بالا و مفید باشم؟ همین‌ ابتدا بگوییم که این‌جا بهترین جایی است که برای گرفتنِ
                                پاسخ‌‌تان آمده‌اید. چرا که قرار است نقشه راه تبدیل شدن به یک متخصص حرفه‌ای فروش را با هم
                                قدم‌به‌قدم پیش برویم. چه در نقطه صفر ایستاده باشید و چه در جایگاه یک کارشناس فروش یا
                                فروشنده‌ای که تا امروز نتوانسته آن‌طور که باید موفق باشد، این نقشه راه درست شماست.
                                <br>
                                قبل از هر چیز بیایید به یکی-دو سوال بنیادی جواب دهیم. کارشناس فروش و از آن‌مهم‌تر
                                کارشناس
                                فروش حرفه‌ای کیست و چطور باید آن‌را تعریف کرد.
                            </p>
                            <div class="heading"> کارشناس فروش کیست؟</div>
                            <p>
                                اگر بخواهیم در یک تعریف کلی پاسخ این سوال را بدهیم، کارشناس فروش یا متخصص فروش کسی است
                                که یک
                                محصول را به مشتریان بالقوه می‌فروشد. او برای این‌کار به دانش فروش، مهارت‌های زیادی مثل
                                تحلیل‌گری، برقراری ارتباط و حل مسئله نیاز دارد. همچنین باید ابزارهای متنوعی را برای
                                رسیدن به
                                هدف اصلی که افزایش فروش است به کار ‌گیرد.
                                <br>
                                احتمالا وقتی وظایف کارشناس فروش را جست‌وجو می‌کنید به مواردی مثل مذاکره، فروش تلفنی،
                                مدیریت
                                ارتباط با مشتری، شناخت محصول و غیره برسید. بدون شک این موارد مهم هستند اما اگر به‌دنبال
                                این
                                باشید که یک کارشناس فروش حرفه‌ای یا فروشنده‌ای حرفه‌ای باشید، باید قدم‌های بلندتری
                                بردارید!
                            </p>
                            <div class="heading"> کارشناس فروش حرفه‌ای کیست؟</div>
                            <p>
                                کارشناس فروش حرفه‌ای کسی است که فراتر از فروش یک کالا یا محصول عمل می‌کند. چنین فردی
                                باید به
                                عنوان یک اصل اولیه، همیشه به دنبال کشف بهترین راه‌حل برای رفع نیاز یا درد مشتری باشد.
                                <br>
                                فروشنده حرفه‌ای علاوه‌بر درک ارزش کمک و تعامل با مشتری‌ها، می‌داند که باید مهارت‌های
                                جدی‌تری
                                را یاد بگیرد. او باید اول از همه علم فروش بداند. از فناوری و ابزارهای فروش، برای افرایش
                                فرصت‌ها در برابر مشتری‌های بالقوه و بهینه‌کردن زمان استفاده کند. متخصص فروش
                                حرفه‌ای
                                هم‌چنین مهارت‌های نرم را در کنار مهارت‌های سخت یاد می‌گیرد و به‌خوبی به‌کار می‌بندد.
                            </p>
                            <div class="heading">چطور می‌توانید تبدیل به یک کارشناس فروش حرفه‌ای شوید؟</div>
                            <p>
                                طی کردن مسیر برای رسیدن به نقطه حرفه‌ای شدن در فروش کار سختی است. سخت نه به این معنا که
                                نمی‌شود، سخت به این معنا که می‌شود اما نیاز به تلاش مستمر و یادگیری صحیح دارد. بعد از
                                اینکه
                                خودتان را در جایگاه یک حرفه‌ای ببینید، سختیِ مسیر برای‌تان تبدیل به لذت‌ می‌شود.
                                حالا بیایید در ادامه با هم 8 گام در مسیر حرفه‌ای شدن را بخوانیم تا متوجه شویم این راه چه
                                توشه‌هایی لازم دارد.
                            </p>
                            <ul>
                                <li>1. نگرش درست فروش را در خودتان پرورش دهید</li>
                                <li>2. دانش فروش داشته باشید</li>
                                <li>3. طراحی فرآیند فروش را یاد بگیرید</li>
                                <li>4. روش های مختلف فروشندگی را به کار ببندید</li>
                                <li>5. مهارت‌های لازم فروش را در خودتان تقویت کنید</li>
                                <li>6. ابزارهای مفید برای حرفه‌ای بودن را به کار بگیرید</li>
                                <li>7. در مسیر کارشناس فروش حرفه‌ای تمرین و آزمون و خطا کنید</li>
                                <li>8. مسیر حرفه‌ای شدن را تنها طی نکنید</li>
                            </ul>
                            <div class="heading">چرا باید آموزش فروش ببینید؟</div>
                            <p>
                                در محیط رقابتی فروش امروز، به دست آوردن مزیت رقابتی و حفظ آن چالش‌برانگیز است. خواسته‌ها
                                و
                                اولویت‌های مشتریان همیشه در حال تغییر هستند و رقبا دائماً به دنبال راه‌های جدیدی برای
                                ساده‌سازی تجربه خرید و افزایش رضایت مشتری می‌گردند.
                                <br>
                                همان طور که می‌دانید تک‌تک اعضای تیم فروش می‌توانند برای حل این چالش بسیار تاثیرگذار
                                باشند.
                                یک تیم فروش قدرتمند مایه حیات شرکت و پل ارتباطی با مشتریان آن است.
                                <br>
                                یکی از راه‌هایی که می‌توان برای رشد فروش از آن استفاده کرد، اطمینان از آموزش صحیح
                                کارشناسان
                                است. در زیر دلایل اهمیت آموزش فروش و فروشندگی را بخوانید:
                            </p>
                            <div class="heading"> آموزش بیشتر = فروش بیشتر</div>
                            <p>
                                فروش بیشتر به معنای سود بیشتر است. به گفته بیش از 60% از کارشناسان فروش، امروز فروش سخت
                                تر از پنج سال پیش است.
                                <br>
                                پس آموزش نقش بسیار مهمی دارد. یک کارشناس فروش آموزش دیده با دانستن اینکه چگونه به بهترین
                                شکل
                                به مشتریان بالقوه و فعلی نزدیک شود، در مورد نیازهای آنها بحث کند و راه حل‌های مناسب
                                ارائه
                                دهد، بهتر می‌تواند روی مشتریان بالقوه و فعلی تأثیر بگذارد؛ به زبان ساده، عملکرد بهتری
                                خواهد
                                داشت. همچنین به مهارت‌ها و استراتژی‌های فروش خود اطمینان بیشتری پیدا می‌کند.
                            </p>
                            <div class="heading">آموزش فروش و جذب استعدادها در تیم</div>
                            <p>
                                همانطور که می‌دانید افراد همیشه می‌خواهند در شرکت‌هایی کار کنند که کارکنان خلاق و متعهد
                                دارند. در واقع، 54% از کارفرمایان آموزش و توسعه را به عنوان روشی برای غلبه بر کمبود
                                استعداد ارائه می‌دهند.<br>
                                وقتی شرکتی برای کارشناسان فروش آموزش‌های پایه و منسجمی را در نظر می‌گیرد، افراد با
                                استعداد را هنگام استخدام نیروهای جدید جذب خواهد کرد.
                            </p>
                            <div class="heading">آموزش فروش و بهبود استراتژی‌های آینده</div>
                            <p>آموزش فروش به شما کمک می‌کند تا هزینه برخی خدمات را کاهش دهید که این موضوع باعث می‌شود
                                مشتریان شما برای کسب اطلاعات بیشتر باز هم به سراغ شما بیایند. شما نه تنها به طور مداوم
                                دانش و مهارت‌ خود را بهبود می‌بخشید، بلکه کیفیت فرآیند فروش و محیط فروش را ارتقا
                                می‌دهید. هنگامی که مشتریان از خدمات اضافی و مفید استقبال می‌کنند، شما می‌توانید ارزش
                                بالاتری را برای راه حل‌های خود در نظر بگیرید.
                            </p>
                            <div class="heading">آموزش فروش و انگیزه بیش‌تر</div>
                            <p>فرصت‌هایی برای آموزش و یادگیری مهارت‌های جدید راهی هوشمندانه برای ایجاد انگیزه، ایجاد
                                مشارکت و توانمندسازی شماست. همچنین فراهم کردن چنین آموزش‌هایی از سوی سازمان‌ها نشان
                                می‌دهد که برای موفقیت کارشناسان به عنوان افراد حرفه‌ای و همچنین اعضای ارزشمند تیم
                                سرمایه‌گذاری کرده‌اند و این پتانسیل را دارند که به طور منظم به موفقیت سازمان خود کمک
                                کنند.
                            </p>
                            <div class="heading">آموزش فروش و چالش‌گرا و قابل اعتماد بودن</div>
                            <p>آیا آموزش فروش واقعاً تعامل با مشتریان را بهبود می‌بخشد، روابط بهتری با مشتری ایجاد
                                می‌کند و تأثیر مثبت بیشتری بر خدمات مشتری خواهد داشت؟ ما معتقدیم که تفاوت چشمگیری را
                                مشاهده خواهید کرد. اگر به ویژگی‌های فروشندگان حرفه‌ای نگاه کنید، 39٪ آنها چالش‌گرا
                                هستند. چالش‌گران تمایل دارند روی آموزش و به چالش کشیدن مشتریان خود تمرکز کنند.
                                <br>
                                آموزش فروش راهی را برای بهبود مجموعه مهارت‌ها، یادگیری استراتژی‌ها و فن‌آوری‌های جدید
                                فراهم می‌کند. همچنین شما را قادر می‌سازد که به مشاوران فروش قابل اعتماد مشتریان تبدیل
                                شوید.
                            </p>
                            <div class="heading">آموزش فروش و ایجاد ارزش
                            </div>
                            <p>
                                آموزش یکی از مهمترین مزیت‌های رقابتی است و سرمایه‌گذاری مداوم در آن تضمین می‌کند که
                                کارشناسان فروش می‌توانند به‌ عنوان متخصصان ماهر و مطمئن بدرخشند و معاملات موفق داشته
                                باشند. همچنین به آنها کمک می‌کند تا روابط کلیدی خود با مشتری را ایجاد و تقویت کنند.
                            </p>
                        </div>
                        <button class="clk"> بیشتر ...</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="fixed-signup">
            <a href="https://wa.me/+989960936053">
                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/whatsapp-icon.png">
                مشاوره رایگان در واتساپ</a>
        </div>
    </section>
</main>

</div>

<?php get_footer(); ?>

<script>
    $(".clk").click(function () {
        if ($(this).prev('.detailBlk').hasClass("active")) {
            $(this)
                .prev()
                .removeClass("active");
            $(this).text(" بیشتر...");
        } else {

            $(this)
                .prev()
                .addClass("active");
            $(this).text("کمتر");

        }
    });
    var t = $(".detailBlk");
    if (window.innerWidth >= 133)
        if (t.height() > 133) {
            $('.clk').addClass("show");
        } else {
            $('.clk').addClass("hide");

        }
</script>
