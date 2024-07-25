<?php
/**
 * Template Name:  موفقیت آمیز تماس
 * @package WordPress
 */

if (!isset($_GET['id']) || empty($_GET['id'])) {
    wp_redirect(home_url());
    exit;
}

get_header();
?>

<main>
    <section class="form success">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2></h2>
                    <div class="desc success">اطلاعات شما با موفقیت ثبت شد. <br> به زودی با شما تماس خواهیم گرفت.</div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
