<?php
if (!is_user_logged_in()) {
    wp_redirect('https://didarsalesdemy.com/mini-course/');
    exit;
}
?>
<?php get_header(); ?>
<?php
$current_url = get_permalink();
$login_url = wc_get_page_permalink('myaccount');
$login_url = add_query_arg('redirect_to', urlencode($current_url), $login_url);
$url = urlencode(get_the_permalink());
$title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
?>
<main>
    <section class="single-mini-course desktop">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="mini-course">
                        <a class="back" href="<?php echo home_url(); ?>/mini-course">بازگشت به صفحه مینی دوره</a>
                        <h3>سرفصل‌های دوره</h3>
                        <div class="third-section">
                            <?php if (have_rows('repeater')): ?>
                                <?php
                                $current_url = $_SERVER['REQUEST_URI'];

                                while (have_rows('repeater')): the_row();
                                    $number = get_sub_field('number');
                                    $title = get_sub_field('title');
                                    $link = get_sub_field('link');

                                    $is_active = strpos($current_url, '/' . $number) !== false ? 'active' : '';
                                    ?>
                                    <div class="video <?php echo $is_active; ?>">
                                        <div>
                                            <a href="<?php echo $link; ?>">
                                                <span class="number">
                                                    <?php echo $number; ?>
                                                </span>
                                                <span class="title">
                                                    <?php echo $title; ?>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <h2>
                        <?php echo the_title() ?>
                    </h2>

                    <div class="video">
                        <?php the_field('iframe'); ?>
                    </div>

                    <div class="text">
                        <?php the_content() ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">
                    <div class="share ">
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
                </div>
            </div>
        </div>
    </section>

    <section class="single-mini-course mobile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <a class="back" href="<?php echo home_url(); ?>/mini-course">بازگشت به صفحه مینی دوره</a>
                    <h2>
                        <?php echo the_title() ?>
                    </h2>

                    <div class="video">
                        <?php the_field('iframe'); ?>
                    </div>

                    <div class="text">
                        <?php the_content() ?>
                    </div>


                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="share ">
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
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="mini-course">
                        <h3>سرفصل‌های دوره</h3>
                        <div class="third-section">
                            <?php if (have_rows('repeater')): ?>
                                <?php
                                $current_url = $_SERVER['REQUEST_URI'];

                                while (have_rows('repeater')): the_row();
                                    $number = get_sub_field('number');
                                    $title = get_sub_field('title');
                                    $link = get_sub_field('link');

                                    $is_active = strpos($current_url, '/' . $number) !== false ? 'active' : '';
                                    ?>
                                    <div class="video <?php echo $is_active; ?>">
                                        <div>
                                            <a href="<?php echo $link; ?>">
                                                <span class="number">
                                                    <?php echo $number; ?>
                                                </span>
                                                <span class="title">
                                                    <?php echo $title; ?>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>

<?php get_footer(); ?>

