<?php
/**
 * Template Name: تماس با ما
 * @package WordPress
 */
get_header(); ?>


<main>
    <section class="contact">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <h2>
                        <?php echo the_title() ?>
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center reverse">
                <div class="col-lg-3 col-md-5 col-sm-12 mt-5">
                    <div class="part">
                        <img class="icon" src="<?php echo SALES_ACADEMY; ?>/assets/img/contact/location.png" alt="">
                        <span>
                            تهران،شهرک غرب،خیابان زرافشان،خیابان درخشان،پلاک 41،طبقه چهارم
                        </span>
                    </div>
                    <div class="part">
                        <img class="icon" src="<?php echo SALES_ACADEMY; ?>/assets/img/contact/call.png" alt="">
                        <a href="tel:02143000114">
                            <span>
                                02143000114 داخلی 3
                            </span>
                        </a>
                    </div>
                    <div class="part">
                        <img class="icon" src="<?php echo SALES_ACADEMY; ?>/assets/img/contact/mail.png" alt="">
                        <a href="mailto:info@didarsalesdemy.com">
                            <span>
                                info@didarsalesdemy.com
                            </span>
                        </a>
                    </div>
                    <div class="part">
                        <img class="icon" src="<?php echo SALES_ACADEMY; ?>/assets/img/contact/telegram.png" alt="">
                        <a href="https://t.me/didarsalesdemy">
                            <span>
                                https://t.me/didarsalesdemy
                            </span>
                        </a>
                    </div>

                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 ">
                    <div class="form">
                        <form id="contactForm" method="POST" action="">

                            <h3>مشاوره رایگان</h3>
                            <label for="name">نام و نام خانوادگی</label>
                            <input type="text" id="name" name="name" placeholder="" required>
                            <label for="mobile">تلفن همراه</label>
                            <input type="text" name="mobile" id="mobile" placeholder="" required>
                            <label for="email">ایمیل</label>
                            <input type="email" name="email" id="email" placeholder="" required>
                            <label for="description">دوره موردنظر خود را انتخاب کنید</label><br>
                            <select name="description" id="description">
                                <option value="">انتخاب کنید</option>
                                <option value="کارشناس فروش">کارشناس فروش</option>
                                <option value="مدیر فروش">مدیر فروش</option>
                            </select>
                            <input type="submit" name="submit" value="درخواست مشاوره" class="submit">
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="img">
            <img src="<?php echo SALES_ACADEMY; ?>/assets/img/contact/map.png" alt="">
        </div>
    </section>
</main>


<?php get_footer(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#contactForm").submit(function (e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {
                    action: "handle_contact_form",
                    formData: formData
                },
                success: function (response) {
                    var randomId = Date.now() + Math.floor(Math.random() * 1000);
                    var redirectUrl = "https://didarsalesdemy.com/success?id=" + randomId;

                    window.location.href = redirectUrl;
                },

                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

