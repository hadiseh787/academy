<?php
/**
 * Template Name: مدیر فروش حرفه‌ای
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
                                    سرفصل ها
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
                                <a href="#calendar">
                                    تقویم آموزشی
                                </a>
                            </li>
                            <li>
                                <a href="#professors">
                                    اساتید
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
                        مدیریت فروش یکی از سخت‌ترین موقعیت‌های شغلی هر سازمان است. در دوره مدیر فروش حرفه‌ای شما آموزش
                        می‌بینید چگونه افراد با استعداد را استخدام کنید، سازمان خود را در مسیر فروش بیشتر هدایت کنید و
                        کارشناسان فروش را در جهت موفقیت روز افزون به عنوان رهبر هدایت کنید.
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
                                    <div>قطعا مهمترین ماموریت مدیر فروش در سازمان افزایش فروش است. این دوره به شما
                                        روش‌ها و تکنیک‌های موثر برای <b>افزایش فروش</b> را آموزش می‌دهد، از جمله طراحی
                                        کاریز
                                        فروش، ارتقای مهارت‌های فروش و برگزاری کمپین‌های فروش موفق.
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n2.png">
                                    <strong>مهارت یادگیری رهبری تیم فروش:</strong>
                                    <div>
                                        <b>رهبری تیم فروش</b> دغدغه اکثر مدیران فروش دنیا است. چگونگی کشف و پرورش
                                        استعدادها،
                                        چگونگی انگیزه‌بخشی و ارتباط موثر با تیم و آموزش تیم فروش بخشی از مطالبی است که
                                        در این دوره فرا می‌گیرید.

                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n3.png">
                                    <strong>ابزار مدیر فروش:</strong>
                                    <div>
                                        <b>ابزارهای مدیریتی</b> از جمله نرم‌افزارهای مدیریت ارتباط با مشتری و ابزارهای
                                        تحلیل
                                        داده باید در اختیار شما باشند تا نظارت بهتری بر فرآیند پیگیری تیم خود داشته
                                        باشید همچنین مسیر پیش‌روی تیم‌تان را پیش‌بینی کنید.
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n4.png">
                                    <strong>شبکه سازی:</strong>
                                    <div>
                                        در این دوره شما فرصت پیدا می‌کنید تا با همکاران و فعالان حوزه فروش آشنا شوید،
                                        این موضوع به شما برای <b>ایجاد شبکه حرفه‌ای</b> و دسترسی به فرصت‌های جدید کمک
                                        شایانی
                                        خواهد کرد.
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
                                <li>مدیران فروش</li>
                            </ul>
                        </div>

                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                    محل برگزاری
                                     </span>
                        </div>

                        <div class="acc-content">
                            <div class="location">
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/location.svg" alt="location">
                                <span>تهران، شهرک غرب، زرافشان، درخشان، پلاک 41، طبقه چهارم</span>
                            </div>
                            <div class="grid-container">
                                <div class="item1">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/a.png"
                                         alt="academy">

                                </div>
                                <div class="item2">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/c.png"
                                         alt="academy">

                                </div>
                                <div class="item3">
                                    <img
                                            src="<?php echo SALES_ACADEMY; ?>/assets/img/b.png"
                                            alt="academy">

                                </div>
                                <div class="item4">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/d.png"
                                         alt="academy">
                                </div>
                                <div class="item5">
                                    <img src="<?php echo SALES_ACADEMY; ?>/assets/img/e.png"
                                         alt="academy">
                                </div>

                            </div>
                            <div class="left free-counseling">
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
                        ما در سرفصل‌های آموزشی مدیر فروش حرفه‌ای، الفبای مورد نیاز برای تبدیل شدن به یک مدیر فروش
                        حرفه‌ای را به شما آموزش می‌دهیم. شما در این دوره علاوه‌ بر اینکه یاد می‌گیرید مدیریت فروش
                        نیازمند چه نوع نگرش و توانمندی‌های فردی است، رهبری و کوچینگ، هدف گذاری، پیش بینی و مهارت مذاکره
                        و… را هم می‌آموزید. نتیجه سرفصل‌های آموزشی ما، تبدیل‌کردن شما به یک مدیر فروش حرفه‌ای و کاربلد
                        است.

                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="accordion">
                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                    ماژول نگرش
                                     </span>
                        </div>
                        <div class="acc-content">
                            <p>
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <th>واحد</th>
                                    <th>زمان(دقیقه)</th>
                                    <th>استاد</th>
                                </tr>
                                <tr>
                                    <td>رهبری و کوچینگ</td>
                                    <td class="no-lr-border text-center">360</td>
                                    <td class="no-r-border text-center">محمد صبور</td>
                                </tr>
                            </table>
                            </p>
                        </div>

                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                       ماژول روش
                                     </span>
                        </div>

                        <div class="acc-content">
                            <p>

                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <th>واحد</th>
                                    <th>زمان(دقیقه)</th>
                                    <th>استاد</th>
                                </tr>
                                <tr>
                                    <td>طراحی مدل کسب و کار</td>
                                    <td class="no-lr-border text-center">300</td>
                                    <td class="no-r-border text-center">علی عبداللهی</td>
                                </tr>
                                <tr>
                                    <td>سفر مشتری</td>
                                    <td class="no-lr-border text-center">300</td>
                                    <td class="no-r-border text-center">مجید مجیدی
                                    </td>
                                </tr>
                                <tr>
                                    <td>طراحی و تحلیل کاریز فروش</td>
                                    <td class="no-lr-border text-center">150</td>
                                    <td class="no-r-border text-center">حمید محمودزاده</td>
                                </tr>
                            </table>
                            </p>

                        </div>

                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                    ماژول مهارت

                                     </span>
                        </div>

                        <div class="acc-content">
                            <p>
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <th>واحد</th>
                                    <th>زمان(دقیقه)</th>
                                    <th>استاد</th>
                                </tr>
                                <tr>
                                    <td>مدیریت منابع انسانی</td>
                                    <td class="no-lr-border text-center">240</td>
                                    <td class="no-r-border text-center">داریوش سنقری</td>
                                </tr>
                                <tr>
                                    <td>شناخت بازار، محصول و رقبا</td>
                                    <td class="no-lr-border text-center">240</td>
                                    <td class="no-r-border text-center">جواد شکری
                                    </td>
                                </tr>
                                <tr>
                                    <td>افزایش بهره وری</td>
                                    <td class="no-lr-border text-center">150</td>
                                    <td class="no-r-border text-center">سروش صفدریان</td>
                                </tr>
                                <tr>
                                    <td>توانمندسازی فروش</td>
                                    <td class="no-lr-border text-center">240</td>
                                    <td class="no-r-border text-center">سروش صفدریان</td>
                                </tr>
                                <tr>
                                    <td>هدف گذاری و پیش بینی فروش</td>
                                    <td class="no-lr-border text-center">360</td>
                                    <td class="no-r-border text-center">نوید نادری</td>
                                </tr>
                                <tr>
                                    <td>قیمت گذاری</td>
                                    <td class="no-lr-border text-center">240</td>
                                    <td class="no-r-border text-center">مسعود انصاری
                                    </td>
                                </tr>
                                <tr>
                                    <td>مهارت مذاکره</td>
                                    <td class="no-lr-border text-center">360</td>
                                    <td class="no-r-border text-center">امیر بختایی</td>
                                </tr>
                                <tr>
                                    <td>طراحی کمپین فروش و پروموشن</td>
                                    <td class="no-lr-border text-center">120</td>
                                    <td class="no-r-border text-center">جواد کریمی</td>
                                </tr>
                                <tr>
                                    <td>گیمیفیکیشن</td>
                                    <td class="no-lr-border text-center">240</td>
                                    <td class="no-r-border text-center">مسعود انصاری</td>
                                </tr>
                            </table>
                            </p>

                        </div>
                        <div class="acc-btn">
                                    <span class="accordion-item__title">
                                    جعبه ابزار
                                     </span>
                        </div>

                        <div class="acc-content">
                            <p>
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <th>واحد</th>
                                    <th>زمان(دقیقه)</th>
                                    <th>استاد</th>
                                </tr>
                                <tr>
                                    <td>مدیریت ارتباط با مشتری CRM و اسناد فروش</td>
                                    <td class="no-lr-border text-center">300</td>
                                    <td class="no-r-border text-center">سهند هاشمی</td>
                                </tr>
                                <tr>
                                    <td>لینکدین</td>
                                    <td class="no-lr-border text-center">330</td>
                                    <td class="no-r-border text-center">آتوسا آهنگ</td>
                                </tr>
                            </table>
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
                        روند ثبت‌نام:
                    </h2>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="text">
                        <ul>
                            <li>
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n1.png">
                                پس از کلیک روی دکمه ثبت‌نام اطلاعات شما دریافت خواهد شد.
                            </li>
                            <li>
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n2.png">
                                مشاوران ما برای راهنمایی و کمک بیشتر با شما ارتباط می‌گیرند.
                            </li>
                            <li>
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n3.png">
                                هدف ما برگزاری دوره‌ای کاربردی و موثر برای شماست، یکپارچگی تجربه و دانش شرکت‌کنندگان در
                                یک دوره اهمیت زیادی دارد، بدین منظور با شما مصاحبه‌ای انجام خواهد شد تا اطلاعات بیشتری
                                از شما کسب کنیم.
                            </li>
                            <li>
                                <img src="<?php echo SALES_ACADEMY; ?>/assets/img/n4.png">
                                تبریک! شما تصمیم گرفته‌اید به یک مدیر فروش حرفه‌ای تبدیل شوید و در این مسیر ما در
                                کنارتان هستیم.
                            </li>
                        </ul>
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
                        شهریه
                    </h2>

                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="img">
                        <img src="<?php echo SALES_ACADEMY; ?>/assets/img/price-manager.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">

                    <div class="text">
                        شما این هزینه را به ازایِ 80 ساعت آموزش، اساتید متخصص در حوزه فروش ایران
                        و دریافت مدرک آموزشی معتبر پرداخت می‌کنید
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses parts" id="calendar">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>
                        تقویم
                    </h2>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <table cellpadding="0" cellspacing="0" class="desktop-table">
                        <tr>
                            <th class="no-l-border"></th>
                            <th class="no-lr-border">خرداد</th>
                            <th class="no-lr-border">تیر</th>
                            <th class="no-r-border">مرداد</th>

                        </tr>
                        <tr>
                            <td>شنبه</td>
                            <td class="no-lr-border ">
                                <div class="date">
                                    <span></span>
                                    <span>5</span>
                                    <span>12</span>
                                    <span>19</span>
                                    <span>26</span>
                                </div>
                            </td>
                            <td>
                                <div class="date">
                                    <span></span>
                                    <span>2</span>
                                    <span>9</span>
                                    <span>16</span>
                                    <span>23</span>
                                    <span>30</span>
                                </div>
                            </td>
                            <td class="no-r-border text-center">
                                <div class="date">
                                    <span></span>
                                    <span>6</span>
                                    <span>13</span>
                                    <span>20</span>
                                    <span>27</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">یکشنبه</td>
                            <td class="no-lrt-border ">
                                <div class="date">
                                    <span></span>
                                    <span>6</span>
                                    <span>13</span>
                                    <span>20</span>
                                    <span>27</span>
                                </div>
                            </td>
                            <td class="no-t-border">
                                <div class="date">
                                    <span></span>
                                    <span>3</span>
                                    <span>10</span>
                                    <span>17</span>
                                    <span>24</span>
                                    <span>31</span>
                                </div>
                            </td>
                            <td class="no-rt-border text-center">
                                <div class="date">
                                    <span></span>
                                    <span>7</span>
                                    <span>14</span>
                                    <span>21</span>
                                    <span>28</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">دوشنبه</td>
                            <td class="no-lrt-border">
                                <div class="date">
                                    <span></span>
                                    <span>7</span>
                                    <span class="holiday">14</span>
                                    <span>21</span>
                                    <span class="holiday">28</span>

                                </div>
                            </td>
                            <td class="no-t-border">
                                <div class="date">
                                    <span></span>
                                    <span>4</span>
                                    <span>11</span>
                                    <span>18</span>
                                    <span class="holiday">25</span>
                                    <span></span>
                                </div>
                            </td>
                            <td class="no-rt-border text-center">
                                <div class="date">
                                    <span>1</span>
                                    <span>8</span>
                                    <span>15</span>
                                    <span>22</span>
                                    <span>29</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">سه شنبه</td>
                            <td class="no-lrt-border">
                                <div class="date">
                                    <span>1</span>
                                    <span>8</span>
                                    <span class="holiday">15</span>
                                    <span>22</span>
                                    <span>29</span>
                                </div>
                            </td>
                            <td class="no-t-border">
                                <div class="date">
                                    <span></span>
                                    <span class="holiday">5</span>
                                    <span>12</span>
                                    <span>19</span>
                                    <span class="holiday">26</span>
                                    <span></span>
                                </div>
                            </td>
                            <td class="no-rt-border text-center">
                                <div class="date">
                                    <span>2</span>
                                    <span>9</span>
                                    <span>16</span>
                                    <span>23</span>
                                    <span>30</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">چهارشنبه</td>
                            <td class="no-lrt-border">
                                <div class="date">
                                    <span>2</span>
                                    <span>9</span>
                                    <span>16</span>
                                    <span class="highlight">23</span>
                                    <span>30</span>
                                </div>
                            </td>
                            <td class="no-t-border">
                                <div class="date">
                                    <span></span>
                                    <span>6</span>
                                    <span>13</span>
                                    <span class="highlight">20</span>
                                    <span>27</span>
                                    <span></span>
                                </div>
                            </td>
                            <td class="no-rt-border text-center">
                                <div class="date">
                                    <span>3</span>
                                    <span>10</span>
                                    <span class="highlight">17</span>
                                    <span>24</span>
                                    <span>31</span>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">پنج‌شنبه</td>
                            <td class="no-lrt-border">
                                <div class="date">
                                    <span>3</span>
                                    <span class="highlight">10</span>
                                    <span class="highlight">17</span>
                                    <span class="highlight">24</span>
                                    <span class="highlight">31</span>
                                </div>
                            </td>
                            <td class="no-t-border">
                                <div class="date">
                                    <span></span>
                                    <span class="highlight">7</span>
                                    <span class="highlight">14</span>
                                    <span class="highlight">21</span>
                                    <span class="highlight">28</span>
                                    <span></span>
                                </div>
                            </td>
                            <td class="no-rt-border text-center">
                                <div class="date">
                                    <span class="highlight">4</span>
                                    <span class="highlight">11</span>
                                    <span class="highlight">18</span>
                                    <span class="highlight">25</span>
                                    <span></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">جمعه</td>
                            <td class="no-lrt-border">
                                <div class="date">
                                    <span class="holiday">4</span>
                                    <span class="holiday">11</span>
                                    <span class="holiday">18</span>
                                    <span class="holiday">25</span>
                                    <span class="holiday"></span>

                                </div>
                            </td>
                            <td class="no-t-border">
                                <div class="date">
                                    <span class="holiday">1</span>
                                    <span class="holiday">8</span>
                                    <span class="holiday">15</span>
                                    <span class="holiday">22</span>
                                    <span class="holiday">29</span>
                                    <span></span>

                                </div>
                            </td>
                            <td class="no-rt-border text-center">
                                <div class="date">
                                    <span class="holiday">5</span>
                                    <span class="holiday">12</span>
                                    <span class="holiday">19</span>
                                    <span class="holiday">26</span>
                                    <span></span>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <table cellpadding="0" cellspacing="0" class="mobile-table">



                        <tr>
                            <th colspan="4">خرداد</th>
                        </tr>
                        <tr>
                            <td>شنبه</td>
                            <td class="no-r-border ">
                                <div class="date">
                                    <span></span>
                                    <span>5</span>
                                    <span>12</span>
                                    <span>19</span>
                                    <span>26</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">یکشنبه</td>
                            <td class="no-rt-border ">
                                <div class="date">
                                    <span></span>
                                    <span>6</span>
                                    <span>13</span>
                                    <span>20</span>
                                    <span>27</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">دوشنبه</td>
                            <td class="no-rt-border ">
                                <div class="date">
                                    <span></span>
                                    <span>7</span>
                                    <span class="holiday">14</span>
                                    <span>21</span>
                                    <span class="holiday">28</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">سه شنبه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span>1</span>
                                    <span>8</span>
                                    <span class="holiday">15</span>
                                    <span>22</span>
                                    <span>29</span>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">چهارشنبه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span>2</span>
                                    <span>9</span>
                                    <span>16</span>
                                    <span class="highlight">23</span>
                                    <span>30</span>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">پنج‌شنبه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span>3</span>
                                    <span class="highlight">10</span>
                                    <span class="highlight">17</span>
                                    <span class="highlight">24</span>
                                    <span class="highlight">31</span>

                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">جمعه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span class="holiday">4</span>
                                    <span class="holiday">11</span>
                                    <span class="holiday">18</span>
                                    <span class="holiday">25</span>
                                    <span> </span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="4">تیر</th>
                        </tr>
                        <tr>
                            <td>شنبه</td>
                            <td class="no-r-border">
                                <div class="date">
                                    <span></span>
                                    <span>2</span>
                                    <span>9</span>
                                    <span>16</span>
                                    <span>23</span>
                                    <span>30</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">یکشنبه</td>
                            <td class="no-rt-border ">
                                <div class="date">
                                    <span></span>
                                    <span>3</span>
                                    <span>10</span>
                                    <span>17</span>
                                    <span>24</span>
                                    <span>31</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">دوشنبه</td>
                            <td class="no-rt-border ">
                                <div class="date">
                                    <span></span>
                                    <span>4</span>
                                    <span>11</span>
                                    <span>18</span>
                                    <span class="holiday">25</span>
                                    <span></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">سه شنبه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span></span>
                                    <span class="holiday">5</span>
                                    <span>12</span>
                                    <span>19</span>
                                    <span class="holiday">26</span>
                                    <span></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">چهارشنبه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span></span>
                                    <span>6</span>
                                    <span>13</span>
                                    <span class="highlight">20</span>
                                    <span>27</span>
                                    <span></span>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">پنج‌شنبه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span></span>
                                    <span class="highlight">7</span>
                                    <span class="highlight">14</span>
                                    <span class="highlight">21</span>
                                    <span class="highlight">28</span>
                                    <span></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">جمعه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span class="holiday">1</span>
                                    <span class="holiday">8</span>
                                    <span class="holiday">15</span>
                                    <span class="holiday">22</span>
                                    <span>29</span>
                                    <span></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="4">مرداد</th>
                        </tr>
                        <tr>
                            <td>شنبه</td>
                            <td class="no-r-border ">
                                <div class="date">
                                    <span></span>
                                    <span>6</span>
                                    <span>13</span>
                                    <span>20</span>
                                    <span>27</span>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">یکشنبه</td>
                            <td class="no-rt-border ">
                                <div class="date">
                                    <span></span>
                                    <span>7</span>
                                    <span>14</span>
                                    <span>21</span>
                                    <span>28</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">دوشنبه</td>
                            <td class="no-rt-border ">
                                <div class="date">
                                    <span>1</span>
                                    <span>8</span>
                                    <span>15</span>
                                    <span>22</span>
                                    <span>29</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">سه شنبه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span>2</span>
                                    <span>9</span>
                                    <span>16</span>
                                    <span>23</span>
                                    <span>30</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">چهارشنبه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span>3</span>
                                    <span>10</span>
                                    <span class="highlight">17</span>
                                    <span>24</span>
                                    <span>31</span>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">پنج‌شنبه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span class="highlight">4</span>
                                    <span class="highlight">11</span>
                                    <span class="highlight">18</span>
                                    <span class="highlight">25</span>
                                    <span></span>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="no-t-border">جمعه</td>
                            <td class="no-rt-border">
                                <div class="date">
                                    <span class="holiday">5</span>
                                    <span class="holiday">12</span>
                                    <span class="holiday">19</span>
                                    <span class="holiday">26</span>
                                    <span></span>
                                </div>
                            </td>
                        </tr>
                    </table>
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
                        'category_name' => 'sales-manager	',
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
                                   آیا این دوره نیاز به تجربه‌ی پیشین در زمینه فروش دارد؟
                                     </span>
                        </div>
                        <div class="acc-content">
                            <p>
                                بله، شرکت در دوره مدیر فروش حرفه‌ای حداقل سه سال فعالیت در زمینه فروش یا مدرک کارشناس
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
                                بله، دوره مدیر فروش به صورت حضوری برنامه‌ریزی شده تا اساتید و شرکت‌کنندگان تعامل سازنده
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
                                بله، آکادمی فروش دیدار به عنوان یک آموزشگاه فنی حرفه‌ای و موسسه تخصصی در زمینه فروش برای
                                شرکت‌کنندگان مدرک صادر می‌کند.
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


                            <p>
                                همین امروز اولین قدم را برای تبدیل شدن به یک مدیر فروش حرفه ای بردارید!
                                شما به عنوان یک مدیر فروش قطعا با دغدغه‌های زیادی در رابطه با سازمان، افزایش بهره وری و
                                بازدهی کارشناسان فروش تیم خود، به صورت روزانه دست و پنجه نرم می‌کنید.
                                <br>
                                اگر پیش از این کارمندان یا آشنایان شما در دوره‌های کارشناس فروش حرفه‌ای ما شرکت کرده
                                اند، و یا از طرق مختلف با آکادمی فروش دیدار آشنا شده اید، میدانید که اینجا می‌تواند
                                بهترین گزینه برای حل دغدغه‌ها و پاسخ به چالش‌های شما در مسیر مدیریت فروش باشد.
                                <br>
                                ما برای رسیدن شما به پیشرفت در حوزه فروش نقشه راهی ترسیم کردیم، تا به یک مدیر فروش
                                حرفه‌ای و متخصص تبدیل شوید. چه در ابتدای مسیر مدیریت فروش هستید و تا به حال صرفا پلن‌های
                                پیشنهادی را پیاده سازی می‌کردید و چه سازمانی بزرگ دارید و به دنبال ارتقاء سبک مدیریت خود
                                هستید، تا انتهای رسیدن شما به مقصدتان همراه شما خواهیم بود.
                                <br>
                                بیایید در ابتدا به دو سوال مدیر فروش کیست؟ و مدیر فروش حرفه‌ای کیست؟ پاسخ بدهیم :
                            </p>
                            <div class="heading">مدیر فروش کیست؟</div>
                            <p>اگر بخواهیم در یک تعریف کلی به این سوال پاسخ دهیم، مدیر فروش کسی است که مسئولیت هدایت تیم
                                را بر عهده دارد. به طور معمول، وظایف او شامل استعدادیابی، آموزش، مربی‌گری کارشناسان
                                فروش، تنظیم استراتژی و تحلیل و بهبود گزارش فعالیت‌های فروش است. البته بسته به نوع
                                سازمان، ممکن است نحوه‌ی اجرایی متفاوتی داشته باشند.

                            </p>
                            <div class="heading">مدیر فروش حرفه ای کیست؟</div>
                            <p>
                                مدیر فروش حرفه ای باید با تحلیل درست مسیر موفقیت سازمان را برنامه ریزی کند. مدیر فروش
                                حرفه‌ای می‌داند چگونه مثل یک کوچ با تیم رفتار کند، طراحی مناسبی برای مدل کسب و کار و
                                توسعه محصول ارائه دهد، بهره وری را بالا ببرد، با تحلیل درست اطلاعات و همینطور قیمت گذاری
                                مناسب پیش بینی صحیح انجام دهد.

                            </p>
                            <div class="heading">حالا بیایید در ادامه با هم 8 گام در مسیر حرفه‌ای شدن را بخوانیم تا
                                متوجه شویم این راه چه توشه‌هایی لازم دارد.
                            </div>

                            <ul>
                                <li>1. نگرش درست فروش را در خودتان و سازمانتان پرورش دهید.</li>
                                <li>2. دانش تحلیل اطلاعات را داشته باشید.</li>
                                <li>3. طراحی فرآیند فروش را یاد بگیرید.</li>
                                <li>4. روش های مختلف مذاکره را به کار ببندید.</li>
                                <li>5. مهارت‌های لازم رهبری و کوچینگ را در خودتان تقویت کنید.</li>
                                <li>6. ابزارهای مفید برای حرفه‌ای بودن در فروش را به کار بگیرید.</li>
                                <li>7. در مسیر مدیر فروش حرفه‌ای تمرین و آزمون و خطا کنید.</li>
                                <li>8. مسیر حرفه‌ای شدن را تنها طی نکنید.</li>
                            </ul>
                            <div class="heading">چرا یک مدیر فروش باید آموزش ببینید؟</div>
                            <p>
                                در کسب و کارهای موفق ، مدیر فروش یکی از کلیدی ترین سمت‌ها به حساب می آید و آموزش این شخص
                                میتواند موجب ساختن معامله‌های برد برد برای سازمان و مشتریان شود.
                                <br>
                                آموزش مدیر فروش حرفه‌ای بیشتر از یک دوره‌ی آموزشی سطح پایه است و به مدیران فروش توانایی
                                مدیریت تیم‌های متوسط و بزرگ، استراتژی‌های فروش پیشرفته، و ارتباطات سازنده را آموزش
                                می‌دهد. این دوره‌ها عموماً برای افرادی طراحی شده‌اند که در سطح مدیریتی بالا یا میانی در
                                بخش فروش و بازاریابی فعالیت می‌کنند یا به دنبال پیشرفت و صعود حرفه‌ای هستند.

                            </p>
                            <div class="heading">آموزش مدیر فروش و جذب استعدادها در تیم
                                <br>
                                آموزش بیشتر = فروش بیشتر
                            </div>
                            <p>استخدام نه فقط به معنای جذب بهترین فروشندگان، بلکه به معنی حفظ آ‌ن‌هاست. یک مدیر فروش
                                حرفه ای شرح وظایف کارمندان مورد نیاز خود را با جزئیات بررسی میکند و متناسب با نیاز
                                سازمان و با استفاده از تکنیک‌های روانشناسی و مصاحبه‌های تخصصی بهترین‌ها را ارزیابی،
                                تجزیه و تحلیل و انتخاب میکند و در نگهداشت ستاره‌های تیم خود برنامه‌های متنوعی را پیداه
                                سازی می‌کند.
                            </p>
                            <div class="heading">آموزش مدیر فروش و بهبود استراتژی‌های آینده</div>
                            <p>با توجه به تغییرات سریع در بازار و فناوری‌های نوین نیازمند رهبرانی هستیم که به روز و
                                آماده برای تغییر باشند. برخی از موارد کلیدی که در این زمینه آموزش داده می‌شوند شامل
                                :<br>

                            <ul>
                                <li>1. تحلیل بازار</li>
                                <li>2. استراتژی‌های دیجیتال</li>
                                <li>3. مدیریت تغییر و نوآوری</li>
                                <li>4. مدیریت ریسک و امنیت در اجرای استراتژی‌های جدید</li>
                            </ul>
                            </p>


                            <div class="heading">آموزش مدیر فروش و کوچینگ</div>
                            <p>مدیر فروش یک سازمان، شبیه قلب آن سازمان است.مدیر فروش حرفه‌ای هم یک رهبر و هم یک کوچ
                                حرفه‌ایست. تفاوت‌هایی بین رهبر و کوچ وجود دارد. در ابتدا هرکدام را تعریف میکنیم:
                                <br>
                                - کوچینگ (Coaching): هدف اصلی کوچینگ کمک به افراد برای رسیدن به اهداف و توسعه شخصی و
                                حرفه‌ای است. کوچینگ بر اساس یافتن راهکارها و روش‌هایی برای بهبود عملکرد و کارایی فرد
                                است.
                                <br>
                                در کوچینگ، تمرکز اصلی بر روابط فردی بین کوچ و فرد است. کوچ باید یک گوش‌کننده فعال باشد و
                                با استفاده از سوالات، تمرکز خود را بر توسعه مهارت‌ها و بهبود نقاط ضعف فردی قرار دهد. این
                                فرآیند بیشتر بر مشاوره، پرسش و پاسخ، و تشویق به تفکر و کشف راه‌حل‌های جدید تمرکز دارد.
                                کوچ بیشتر از افراد خود برای یافتن راه‌حل‌ها و تصمیم‌گیری استفاده می‌کند. معمولاً کوچینگ
                                یک فرآیند زمان‌بر و پایدار است که براساس توسعه مهارت‌ها و تغییرات اصولی انجام میشود.
                                <br>
                                - رهبری (Leadership): در مقابل، رهبری بیشتر مرتبط با هدایت یک گروه یا تیم است. هدف اصلی
                                رهبری تشویق و الهام‌بخشی به اعضای تیم، هدایت آنها به سمت اهداف مشترک و بهبود عملکرد کل
                                تیم است.
                                <br>
                                در رهبری، تمرکز اصلی بر روابط گروهی و توانایی‌های مدیریتی برای هدایت تیم است. رهبر باید
                                بتواند اعضای تیم را موظف به همکاری و هماهنگی در راستای اهداف مشترک کند. در رهبری، فرآیند
                                معمولاً بر مبنای دستورات و هدایت از بالا به پایین است. رهبران به عنوان افرادی که الگوی
                                عمل و راهنمایی برای تیم خود هستند، شناخته می‌شوند.
                                <br>
                                به طور کلی، یک مدیر فروش حرفه‌ای با درک موقعیت، تبدیل به رهبر و یا کوچ سازمان خود میشود.

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
            <a href="https://wa.me/+98960936053">
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
