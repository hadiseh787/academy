<?php
/**
 * Template Name: صفحه اصلی
 *
 * @author Didar
 */
get_header();

?>
<main>
    <section class="home intro">
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="box">
                        <h2>
                            ما مصمم هستیم مهارت فروش را در ایران ارتقا دهیم!
                        </h2>
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

    <section class="home courses-list">
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-lg-10 col-md-10 col-sm-10">
                    <h2>
                        لیست دوره ها
                    </h2>
                    <?php
                    $excluded_post_id = 1158;

                    $the_query = new WP_Query(array(
                        'post_type' => 'courses',
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'order' => 'ASC',
                        'post__not_in' => array($excluded_post_id),
                    ));

                    if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) :
                            $the_query->the_post(); ?>

                            <div class="box">
                                <div class="right-section">
                                    <div class="img">
                                        <?php
                                        $images = array();
                                        if (have_rows('images')) {
                                            while (have_rows('images')) {
                                                the_row();
                                                $icon = get_sub_field('image');
                                                $images[] = $icon;
                                            }
                                        }

                                        shuffle($images);
                                        if (!empty($images)) {
                                            echo '<img src="' . $images[1] . '" alt="">';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="left-section">
                                    <h3>
                                        <?php echo the_title() ?><img src="<?php echo get_field("title-image") ?>">
                                    </h3>
                                    <div class="desc">
                                        <?php echo the_excerpt() ?>
                                    </div>
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

                                    <a href="<?php the_permalink(); ?>">اطلاعات بیشتر</a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="home roadmap">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <h2>
                        به برخی مسیرهای شغلی که با فروش شروع می‌شوند نگاه کنید
                    </h2>
                    <div class="desc">
                        یک سوم مدیران عامل شرکت‌ها پیشینه‌ی شغلی در زمینه فروش دارند. فروش به معنای همدلی، متقاعد کننده
                        بودن، انعطاف پذیری و برقراری ارتباط موثر با دیگران است. شما می‌توانید این مهارت‌ها را در
                        حوزه‌های متفاوتی به کار بگیرید. قدرت فروش را دست کم نگیرید. یادگیری فروش به صورت علمی شما را در
                        مسیری قرار می‎‌دهد که هیچگاه تصورش را هم نمی‌کردید!

                    </div>
                    <div class="img">
                        <img src="<?php echo SALES_ACADEMY; ?>/assets/img/chart.png" class="desktop" alt="roadmap">
                        <img src="<?php echo SALES_ACADEMY; ?>/assets/img/chart-mob.png" class="mobile" alt="roadmap">
                        <div class="btn">
                            <a href="https://didarsalesdemy.com/courses/form/">ثبت‌نام در دوره‌ها</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home video">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <h2>
                        چرا آکادمی فروش دیدار؟
                    </h2>
                    <div class="swiper swiper-three">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('video')): ?>
                                <?php while (have_rows('video')): the_row();
                                    $video = get_sub_field('video');
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="video">
                                            <?php echo $video ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="swiper-button-next three"></div>
                    <div class="swiper-button-prev three"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="home academy">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <h2>
                        در آکادمی فروش دیدار چه میگذرد؟
                    </h2>
                    <div class="swiper swiper-one">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('academy')): ?>
                                <?php while (have_rows('academy')): the_row();
                                    $image = get_sub_field('img');
                                    $text = get_sub_field('text');
                                    ?>
                                    <div class="swiper-slide img">
                                        <div class="academy-box">
                                            <div class="img">
                                                <img src="<?php echo $image ?>"
                                                     alt="">
                                            </div>

                                            <!--                                            <div class="text">-->
                                            <!--                                                --><?php //echo $text ?>
                                            <!--                                            </div>-->
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="swiper-button-next one"></div>
                    <div class="swiper-button-prev one"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="home mentors">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <h2>
                        ستاره‌های آموزش فروش ایران در آکادمی دیدار
                    </h2>
                    <div class="row justify-content-center">
                        <?php
                        $postType = get_query_var('post_type');

                        $args = array(
                            'post_status' => 'publish',
                            'post_type' => $postType ? $postType : array('professors'),
                            'tax_query' => array(),
                            'paged' => get_query_var('paged'),
                            'orderby' => 'rand',
                        );
                        $query = new WP_Query($args);
                        ?>
                        <div class="swiper swiper-four">
                            <div class="swiper-wrapper">
                                <?php
                                if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <div class="swiper-slide ">
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
                                            <a class="more" <?php echo has_post_thumbnail() ? 'href="' . esc_url(get_permalink()) . '"' : ''; ?>
                                               target="_blank">
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
                    </div>
                    <div class="row justify-content-end">
                        <a class="blog-link" href="<?php echo get_field('professors-link', 'option') ?>">
                            مشاهده لیست کامل اساتید <img src="<?php echo SALES_ACADEMY; ?>/assets/img/arrow-left.svg"
                                                         alt="">
                        </a>
                    </div>
                    <?php
                    wp_reset_query();

                    endif; ?>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-10 col-md-10 col-sm-12">
                    <h2>
                        منتورها
                    </h2>
                    <div class="row justify-content-center">

                        <?php
                        $postType = get_query_var('post_type') ? get_query_var('post_type') : 'mentors';
                        $args = array(
                            'post_status' => 'publish',
                            'post_type' => $postType,
                            'paged' => get_query_var('paged'),
                            'orderby' => 'rand',
                        );

                        $query = new WP_Query($args);
                        ?>

                        <div class="swiper swiper-four">
                            <div class="swiper-wrapper">
                                <?php if ($query->have_posts()) : ?>
                                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                                        <div class="swiper-slide">
                                            <div class="prof-box">
                                                <a <?php echo has_post_thumbnail() ? 'href="' . esc_url(get_permalink()) . '"' : ''; ?>
                                                        target="_blank">
                                                    <div class="image">
                                                        <?php if (has_post_thumbnail()): ?>
                                                            <?php the_post_thumbnail(); ?>
                                                        <?php else: ?>
                                                            <img src="<?php echo esc_url(SALES_ACADEMY); ?>/assets/img/avatar.jpg"
                                                                 alt="Default Avatar">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="name">
                                                        <?php the_title(); ?>
                                                    </div>
                                                </a>
                                                <div class="position">
                                                    <?php echo esc_html(get_field('position'));?>
                                                </div>
                                                <a class="more" <?php echo has_post_thumbnail() ? 'href="' . esc_url(get_permalink()) . '"' : ''; ?>
                                                   target="_blank">
                                                    بیشتر...
                                                </a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                            <div class="swiper-button-next four"></div>
                            <div class="swiper-button-prev four"></div>
                            <div class="swiper-pagination"></div>


                        <?php
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="row justify-content-end">
                        <a class="blog-link" href="https://didarsalesdemy.com/mentors/">
                            مشاهده لیست کامل منتورها <img
                                    src="<?php echo SALES_ACADEMY; ?>/assets/img/arrow-left.svg"
                                    alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home details">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-10">
                            <div class="box">
                                <div class="number">
                                    <?php echo get_field('courses') ?>
                                </div>
                                <div class="desc">تعداد دوره‌های برگزار شده</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-10">
                            <div class="box">
                                <div class="number">
                                    <?php echo get_field('hours') ?>
                                </div>
                                <div class="desc">ساعت آموزشی برگزار شده</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-10">
                            <div class="box">
                                <div class="number">
                                    <?php echo get_field('students') ?>
                                </div>
                                <div class="desc">دانش‌آموختگان آکادمی</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home students">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <h2>
                        مشتریان ما:
                    </h2>
                    <div class="swiper swiper-five">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('student')): ?>
                                <?php while (have_rows('student')): the_row();
                                    $image = get_sub_field('img');
                                    ?>
                                    <div class="swiper-slide ">
                                        <img src="<?php echo $image ?>"
                                             alt="">
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="swiper-button-next five"></div>
                    <div class="swiper-button-prev five"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="home blog-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <h2>
                        مقالاتی در مورد فروش
                    </h2>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'order' => 'DESC',
                        'posts_per_page' => 3,
                    );
                    $result = new WP_Query($args);
                    if ($result->have_posts()) : ?>
                        <div class="row justify-content-center">
                            <?php while ($result->have_posts()) : $result->the_post(); ?>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="mag-box">
                                        <a href="<?php the_permalink($result->ID); ?>">
                                            <div class="img">
                                                <img src="<?php echo get_the_post_thumbnail_url($result->ID); ?>"
                                                     alt="">

                                            </div>
                                            <div class="mag-title"><?php the_title($result->ID) ?></div>
                                        </a>
                                        <div class="mag-desc">
                                            <div><?php echo get_field('desc') ?></div>

                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif;
                    wp_reset_postdata(); ?>
                    <div class="row justify-content-end">
                        <a class="blog-link" href="<?php echo get_field('blog', 'option') ?>">
                            بیشتر بخوانیم <img src="<?php echo SALES_ACADEMY; ?>/assets/img/arrow-left.svg"
                                               alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<section>
    <div class="fixed-signup">
        <a href="https://didarsalesdemy.com/courses/form/">ثبت نام در دوره</a>
    </div>
</section>
<?php get_footer(); ?>
