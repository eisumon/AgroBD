<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

        $sql ="INSERT INTO contact_us(name, email, message) VALUES('$name', '$email', '$message')";
        // echo $sql;
        // exit;
        if($conn->query($sql)){

            echo "<script>myAlert('Message is send successfully','success','contact');</script>";
            } else{
            echo "<script>myAlert('Message is not send successfully','error','contact');</script>";
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
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section end -->

    <!-- Map Section Begin -->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                    height="610" style="border:0" allowfullscreen="">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section end -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Contacts Us</h4>
                        <p>If you have any quires or any opinion, feel free to share with us. Thank you.</p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Address:</span>
                                <p>43/R/1, Panthapath, Dhaka</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Phone:</span>
                                <p>+880 1910203040</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>agrobd@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <p>Our staff will call back later and answer your questions.</p>
                            <form class="comment-form" method="POST" onsubmit="return nullcheck();">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" id="name" name="name" placeholder="Your name"
                                            oninput="ontype();">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" id="email" name="email" placeholder="Your email"
                                            oninput="ontype();">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea id="message" name="message" placeholder="Your message"
                                            oninput="ontype();"></textarea>
                                        <div>
                                            <button type="submit" class="site-btn" name="submit">Send message</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
</body>

<script>
    function nullcheck() {

        $(".error").remove();

        $('#submit').removeAttr('disabled', true);

        if ($('#name').val() == '') {
            $('#name').after('<span class="error">* This field is required</span>');
            return false;
        }

        if ($('#email').val() == '') {
            $('#email').after('<span class="error">* This field is required</span>');
            return false;
        }

        if ($('#message').val() == '') {
            $('#message').after('<span class="error">* This field is required</span>');
            return false;
        }
    }

    function ontype() {
        $(".error").remove();

        if ($('#name').val() !== '') {
            if (!/^[a-z ]+$/i.test($("#name").val())) {
                $('#name').after('<span class="error">*Your first name can not be numeric!!</span>');
                return false;
            }
        }
        if ($('#email').val() !== '') {
            if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val())) {
                $('#email').after('<span class="error">* Type a valid email!!</span>');
                return false;
            }
        }
    }
</script>

<!-- Footer Section Begin -->
<?php include'includes/footer.php';?>
<!-- Footer Section End -->