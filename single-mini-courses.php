
<?php get_header(); ?>


<main>
    <section class="single-mini-course">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <a href="">بازگشت به صفحه مینی دوره</a>
                    <h3>سرفصل‌های دوره</h3>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <h2>
                        <?php echo the_title() ?>
                    </h2>

                    <div class="video">
                        <?php the_field('iframe'); ?>
                    </div>

                    <div class="text">
                        <?php  the_content() ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
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

</main>

</div>

<?php get_footer(); ?>

