<?php
/**
 * Template Name: موفقیت آمیز
 * @package WordPress
 */

//if (!isset($_GET['id']) || empty($_GET['id'])  ) {
//    wp_redirect(home_url());
//    exit;
//}

get_header();
?>

<main>
    <section class="form success">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2></h2>
                    <div class="desc success">اطلاعات شما با موفقیت ثبت شد. <br> به زودی با شما تماس خواهیم گرفت.</div>
                    <div id="return-button-container"></div>

                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var returnUrl = localStorage.getItem("return_url");
            if (returnUrl) {
                var buttonContainer = document.getElementById("return-button-container");
                var button = document.createElement("a");
                button.href = returnUrl;
                button.innerHTML = '<button class="back-to-blog">بازگشت به مقاله</button>';
                button.addEventListener("click", function() {
                    localStorage.removeItem("return_url");
                });
                buttonContainer.appendChild(button);
            }
        });
    </script>
</main>

<?php get_footer(); ?>
