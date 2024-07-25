<?php
define('SALES_ACADEMY', get_template_directory_uri());

require_once 'inc/menu.php';
require_once 'inc/cpt.php';
require get_template_directory() . '/inc/comments.php';
require get_template_directory() . '/inc/customizer.php';
require_once(TEMPLATEPATH . '/inc/acf/setup.php');

/**
 * Add theme support for various WordPress features.
 *
 * @return void
 */



function wp_blank_setup() {
	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'post-thumbnails' );

    add_theme_support('woocommerce');

	load_theme_textdomain( 'wp-blank', get_template_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'wp_blank_setup' );


function create_my_account_page() {
    // Check if the page already exists
    $account_page = get_page_by_title('My Account');

    // If the page doesn't exist, create it
    if (!$account_page) {
        $page_id = wp_insert_post(array(
            'post_title'     => 'My Account',
            'post_content'   => '[woocommerce_my_account]',
            'post_status'    => 'publish',
            'post_type'      => 'page',
        ));

        // Set the newly created page as the WooCommerce My Account page
        if ($page_id && !is_wp_error($page_id)) {
            update_option('woocommerce_myaccount_page_id', $page_id);
        }
    }
}
add_action('init', 'create_my_account_page');


/**
 * Specify JS bundle path.
 *
 * @return void
 */
function wp_blank_load_scripts() {
	wp_enqueue_script('jquery-min', SALES_ACADEMY . '/assets/js/jquery.min.js',array('jquery'), null, true );
	wp_enqueue_script('main', SALES_ACADEMY . '/assets/js/main.js',array('jquery'), null, true );
	wp_enqueue_script('swiper', SALES_ACADEMY . '/assets/js/swiper.min.js',array('jquery'), null, true );

}
add_action( 'wp_enqueue_scripts', 'wp_blank_load_scripts' );

/**
 * Specify CSS bundle path.
 *
 * @return void
 */
function wp_blank_load_styles() {
	wp_enqueue_style('bootstrap-grid', SALES_ACADEMY . '/assets/styles/bootstrap-grid.min.css',false,'1.1','all');
	wp_enqueue_style('main-style', SALES_ACADEMY . '/assets/styles/style.css',false,'1.1','all');
	wp_enqueue_style('swiper', SALES_ACADEMY . '/assets/styles/swiper.min.css',false,'1.1','all');
}
add_action( 'wp_enqueue_scripts', 'wp_blank_load_styles' );
/**
 * Register widget area.
 *
 * @return void
 */
function wp_blank_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wp-blank' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'wp-blank' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_blank_widgets_init' );

add_filter( 'wp_unique_post_slug', 'mg_unique_post_slug', 10, 6 );

/**
 * Allow numeric slug
 *
 * @param string $slug          The slug returned by wp_unique_post_slug().
 * @param int    $post_ID       The post ID that the slug belongs to.
 * @param string $post_status   The status of post that the slug belongs to.
 * @param string $post_type     The post_type of the post.
 * @param int    $post_parent   Post parent ID.
 * @param string $original_slug The requested slug, may or may not be unique.
 */
function mg_unique_post_slug( $slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug ) {
    global $wpdb;
    if ( ! is_numeric( $original_slug ) || $slug === $original_slug ) {
        return $slug;
    }

    $post_name_check = $wpdb->get_var( $wpdb->prepare(
        "SELECT post_name FROM $wpdb->posts WHERE post_name = %s AND post_type IN ( %s, 'attachment' ) AND ID != %d AND post_parent = %d LIMIT 1",
        $original_slug, $post_type, $post_ID, $post_parent
    ) );

    if ( $post_name_check ) {
        return $slug;
    }

    return $original_slug;
}

add_action('wp_ajax_handle_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_handle_contact_form', 'handle_contact_form');

function handle_contact_form() {

    if (isset($_POST['formData'])) {
        parse_str($_POST['formData'], $formData);
        $dbConnection = new mysqli("localhost", "didarsal_hadise", "H22031376b", "didarsal_wp");
        $dbConnection->set_charset("utf8mb4");

        if ($dbConnection->connect_error) {
            die("Connection failed: " . $dbConnection->connect_error);
        }
        $name = isset($formData['name']) ? sanitize_text_field($formData['name']) : '';
        $mobile = isset($formData['mobile']) ? sanitize_text_field($formData['mobile']) : '';
        $email = isset($formData['email']) ? sanitize_email($formData['email']) : '';
        $description = isset($formData['description']) ? sanitize_text_field($formData['description']) : '';
        $sql = "INSERT INTO signup_form (name, mobile, email, description)
VALUES ('$name', '$mobile', '$email', '$description');
";


        if (mysqli_query($dbConnection, $sql)) {
            if (mysqli_affected_rows($dbConnection) > 0) {

                $apiUrl = "https://app.didar.me/api/contact/save?ApiKey=xhir6muqm6jb4b1kqsimg3u1akj05zu0";
                $data = array(
                    "Contact" => array(
                        "VisibilityType" => "All",
                        "LastName" => $name,
                        "WorkPhone" => $mobile,
                        "OwnerId" => "0bdc5d93-22ef-4c51-b1b6-7f8bf9c1f028",
                        "Email" => $email,
                        "Type" => "Person"
                    )
                );
                $ch_contact = curl_init($apiUrl);
                curl_setopt($ch_contact, CURLOPT_POST, 1);
                curl_setopt($ch_contact, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch_contact, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                curl_setopt($ch_contact, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch_contact);

                if ($response === false) {
                    echo "Contact API error: " . curl_error($ch_contact);
                } else {
                    $contactData = json_decode($response, true);
                    $contactId = $contactData['Response']['Id'];
                    // DEAL
                    $dealData = array(
                        "Deal" => array(
                            "Title" => ' معامله با ' . $name,
                            "PipelineStageId" => "f88f8f5f-7ec6-4613-8b32-ce6da62a9403",
                            "OwnerId" => "0bdc5d93-22ef-4c51-b1b6-7f8bf9c1f028",
                            "PersonId" => $contactId,
                            "VisibilityType" => "OwnerGroup"
                        )
                    );
                    $ch_deal = curl_init("https://app.didar.me/api/deal/Save?apikey=xhir6muqm6jb4b1kqsimg3u1akj05zu0");
                    curl_setopt($ch_deal, CURLOPT_POST, 1);
                    curl_setopt($ch_deal, CURLOPT_POSTFIELDS, json_encode($dealData));
                    curl_setopt($ch_deal, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                    curl_setopt($ch_deal, CURLOPT_RETURNTRANSFER, true);
                    $response2 = curl_exec($ch_deal);

                    if ($response2 === false) {
                        echo "Deal API error: " . curl_error($ch_deal);
                    } else {
                        $dealResponse = json_decode($response2, true);
                        $dealId = $dealResponse['Response']['Id'];

                        $noteData = array(
                            "Activity" => array(
                                "ActivityTypeId" => "00000000-0000-0000-0000-000000000000",
                                "Title" => "گوگل",
                                "Duration" => 0,
                                "OwnerId" => "0bdc5d93-22ef-4c51-b1b6-7f8bf9c1f028",
                                "ResultNote" => "توضیحات : " . $description,
                                "Note" => "",
                                "IsDone" => true,
                                "DueDateType" => "NoTime",
                                "DoneDateType" => "Notime",
                                "RecurrenceEndDate" => "2023-03-14T07:30:00.000Z",
                                "DealId" => $dealId,
                                "RecurrenceType" => "OneTime",
                                "RecurrenceData" => 1,
                                "ContactIds" => [$contactId]
                            ),
                            "NewAttachments" => [],
                            "SetDone" => false
                        );
                        $ch_note = curl_init("https://app.didar.me/api/activity/save?apikey=xhir6muqm6jb4b1kqsimg3u1akj05zu0");
                        curl_setopt($ch_note, CURLOPT_POST, 1);
                        curl_setopt($ch_note, CURLOPT_POSTFIELDS, json_encode($noteData));
                        curl_setopt($ch_note, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                        curl_setopt($ch_note, CURLOPT_RETURNTRANSFER, true);
                        $response3 = curl_exec($ch_note);
                        curl_close($ch_note);
                    }
                    curl_close($ch_contact);
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($dbConnection);
            }
        }
        mysqli_close($dbConnection);
    } else {
        echo "Error: Data not received!";
    }
    wp_die();
}

// Define the shortcode function
function blog_form_shortcode() {
    $image_url = 'https://didarsalesdemy.com/wp-content/uploads/2024/05/sales-more-scaled.jpg';

    $html = '<div class="img mt-3 mb-3 blog-banner">';
    $html .= '<a href="https://didarsalesdemy.com/courses/form/" id="contact-us-link">';
    $html .= '<img src="' . esc_url($image_url) . '" alt="Catalogue Mockup">';
    $html .= '</a></div>';

    $html .= '<script type="text/javascript">
        document.getElementById("contact-us-link").addEventListener("click", function() {
            localStorage.setItem("return_url", window.location.href);
        });
    </script>';

    return $html;
}
add_shortcode('contact_us', 'blog_form_shortcode');
function insert_shortcode_after_third_paragraph($content) {
    if (is_single() && in_the_loop() && is_main_query()) {
        $shortcode = do_shortcode('[contact_us]');
        $paragraphs = explode('</p>', $content);
        if (count($paragraphs) > 3) {
            for ($i = 0; $i < count($paragraphs); $i++) {
                if ($i == 3) {
                    $paragraphs[$i] .= '</p>' . $shortcode;
                }
                $paragraphs[$i] .= '</p>';
            }
            $content = implode('', $paragraphs);
        }
    }
    return $content;
}
add_filter('the_content', 'insert_shortcode_after_third_paragraph');


function new_theme_comment_count()
{
    $comment_count = get_comment_count();
    if (isset($comment_count['approved'])) {
        echo $comment_count['approved'];
    } else {
        echo 0;
    }
    esc_html_e('comment', 'new-theme');
}

add_filter('comment_reply_link', 'wpb_comment_reply_text');
function wpsites_change_comment_form_submit_label($arg)
{
    $arg['label_submit'] = 'ارسال';
    return $arg;
}

add_filter('comment_form_defaults', 'wpsites_change_comment_form_submit_label');

function wpb_comment_reply_text($link)
{
    $link = str_replace('پاسخ', 'پاسخ به این نظر', $link);
    return $link;
}


function custom_toc_shortcode($atts) {
    ob_start();
    ?>
    <div class="toc-container">
        <h2>فهرست مطالب</h2>
        <div class="toc-border"></div>
        <div class="toc" id="toc">

        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_toc', 'custom_toc_shortcode');