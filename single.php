<?php get_header(); ?>

<div class="article-detail">
    <div class=" container-fluid">
        <div class="row">
            <section>
                <div class="fixed-signup">
                    <a href="https://didarsalesdemy.com/courses/form/">فرم مشاوره رایگان</a>
                </div>
            </section>
            <div class="col-lg-2 col-md-2 col-sm-12 sidebar">
                <span class="l-separator"></span>
                <div class="back-to-blog">
                    <a href="<?php echo home_url(); ?>/blog">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/back-article.svg" alt=""> برگشت
                        به
                        وبلاگ
                    </a>
                </div>
                <div class="clearfix"></div>
                <div class="share-box">
                    <?php $url = urlencode(get_the_permalink());
                    $title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>
                    <ul>

                        <li>
                            <a target="_blank"
                               href="mailto:?subject=<?php echo $title; ?>&amp;body=<?php echo $url; ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mail.svg">
                                <div class="share-text">Email</div>
                            </a>
                        </li>
                        <li>
                            <a target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/twitter1.svg">
                                <div class="share-text">Twitter</div>
                            </a>
                        </li>
                        <li>
                            <a target="_blank"
                               href="https://linkedin.com/shareArticle?url=<?php echo $url; ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/linkedin.svg">
                                <div class="share-text">Linkedin</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="article">

                    <?php if (have_posts()):while (have_posts()):
                    the_post(); ?>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <div class="reading-time">
                        <p>زمان خواندن <?php the_field('reading_time') ?> دقیقه</p>
                    </div>
                    <div class="img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="article-summary">
                        <div class="author">
                            <div class="author-text">
                                <p class="update-time-p">به روز شده در <?php the_modified_date('j F Y'); ?>  </p>
                                <p class="author-name-p">توسط <?php the_field('author'); ?></p>
                                <span class="v-separator"></span>
                                <p class="time">زمان خواندن <?php the_field('reading_time') ?> دقیقه</p>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                        <div class="h-separator  separator"></div>
                        <div class="excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="h-separator separator"></div>
                    <?php dynamic_sidebar('dl_widget'); ?>
                    <?php echo do_shortcode('[custom_toc]') ?>

                    <div class="text-article">
                        <div class="article-content">


                            <?php the_content(); ?>
                        </div>
                    </div>

                    <div class="related-post">
                        <?php
                        $featured_posts = get_field('related_posts');
                        if ($featured_posts): ?>
                            <div class="title">احتمالا این مقالات هم برای شما جذاب باشد</div>
                            <div class="h-separator related"></div>
                            <div class="row">
                                <?php foreach ($featured_posts as $post):
                                    setup_postdata($post); ?>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="article-box">
                                            <a href="<?php the_permalink(); ?>" target="_blank">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                            <h3>
                                                <a href="<?php the_permalink(); ?>" target="_blank">
                                                    <?php the_title(); ?> </a>
                                            </h3>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php
                            wp_reset_postdata(); ?>
                        <?php endif; ?>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
