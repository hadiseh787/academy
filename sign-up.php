<?php
/**
 * Template Name: فرم کارشناس فروش حرفه‌ای
 * Template Post Type: courses
 * @package WordPress
 *
 */
?>

<?php get_header(); ?>
<main>
    <section class="form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>دوره‌های تخصصی آموزش فروش
                    </h2>
                    <div class="desc">آکادمی فروش دیدار دوره‌های آموزشی کارشناس فروش و مدیر فروش را برگزار می‌کند. لطفاً جهت ثبت نام فرم زیر را پر کنید.
                    </div>
                    <form id="signup-form" method="post" action="">
                        <?php
                        if ($_POST['name']) {
                            $dbConnection = new mysqli("localhost", "didarsal_hadise", "H22031376b", "didarsal_wp");
                            $dbConnection->set_charset("utf8mb4");

                            if ($dbConnection->connect_error) {
                                die("Connection failed: " . $dbConnection->connect_error);
                            }
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $mobile = $_POST['mobile'];
                            $description = $_POST['description'];

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
                                            "OwnerId" => "de0b42a6-dfbb-4570-9136-51bdc4a2f482",
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
                                                "Title" => ' معامله با ' . $name ,
                                                "PipelineStageId" => "f88f8f5f-7ec6-4613-8b32-ce6da62a9403",
                                                "OwnerId" => "de0b42a6-dfbb-4570-9136-51bdc4a2f482",
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
                                                    "OwnerId" => "de0b42a6-dfbb-4570-9136-51bdc4a2f482",
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

                        }

                        ?>
                        <input type="hidden" name="_method" value="POST" >
                        <label for="name" >نام و نام خانوادگی</label>
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

                        <input type="submit" name="submit" value="ثبت نام" class="submit contact">

                    </form>


                </div>
            </div>
        </div>
    </section>


</main>

</div>

<?php get_footer(); ?>

<script>
    $("#signup-form").submit(function (e) {
        e.preventDefault();

        // Serialize form data
        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "",
            data: formData,
            success: function (data) {

                var randomId = Date.now() + Math.floor(Math.random() * 1000);

                var redirectUrl = "https://didarsalesdemy.com/success?id=" + randomId;

                window.location.href = redirectUrl;
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
</script>