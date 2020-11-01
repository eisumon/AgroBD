<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_POST['submit'])){
    $crop_name = $_POST['crop_name'];
    $cropProduction_name = $_POST['cropProduction_name'];
    $location = $_POST['location'];

        $sql ="INSERT INTO crop_productions(crop_name, cropProduction_name, location) VALUES('$crop_name', '$cropProduction_name', '$location')";
        // echo $sql;
        // exit;
        if($conn->query($sql)){

            echo "<script>myAlert('Crop Production is create successfully','success','fields');</script>";
            } else{
            echo "<script>myAlert('Crop Production is not create successfully','error','cropplant');</script>";
            }
    }
?>
</head>

<body>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Crop Production</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section end -->


    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="contact-title" style="text-align: center; margin-bottom: 50px;">
                <h2>My crop productions</h2><br>
                <h5>Which crops do you grow?</h5>
                <p>Select your crop which you want to plant.</p>
            </div>
            <hr><br>
            <form method="POST" onsubmit="return nullcheck();">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-widget">
                            <div class="cw-item">
                                <div class="ci-text">
                                    <span class="cp_txt">Crop name:</span>
                                    <input type="text" class="form-control cp_if" name="crop_name"
                                        placeholder="Enter Crop name" autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="contact-widget">
                            <div class="cw-item">
                                <div class="ci-text">
                                    <span class="cp_txt">Crop Production name:</span>
                                    <input type="text" class="form-control cp_if" name="cropProduction_name"
                                        placeholder="Enter production name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="contact-widget">
                            <div class="cw-item">
                                <div class="ci-text">
                                    <span class="cp_txt">Location:</span>
                                    <input type="text" class="form-control cp_if" name="location"
                                        placeholder="Enter Your Location">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-title" style="text-align: center; margin-top: 30px;">
                    <button type="submit" name="submit" class="site-btn login-btn">Save</button>
                </div>
            </form>
            <hr>
        </div>

        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <?php include'includes/footer.php';?>
    <!-- Footer Section End -->

    <script>
        function nullcheck() {

            $(".error").remove();

            $('#submit').removeAttr('disabled', true);

            if ($('#crop_name').val() == '') {
                $('#crop_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#cropProduction_name').val() == '') {
                $('#cropProduction_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#location').val() == '') {
                $('#location').after('<span class="error">* This field is required</span>');
                return false;
            }
        }
    </script>

</body>

</html>