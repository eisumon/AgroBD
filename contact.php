<?php session_start();?>
<?php include'includes/head.php';?>

<!-- Alert script start -->
<script type="text/javascript">
    function myAlert() {

        swal({
            title: "Message send Successfully",
            type: "success",
            timer: 2000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "contact";
        });
    }

    function erAlert() {
        swal({
            title: "Message is not send successfully",
            type: "error",
            timer: 2000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "contact";
        });
    }
</script>
<!-- Alert script end -->
</head>

<body>
<?php include_once("dbCon.php");
$conn = connect();

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

        $sql ="INSERT INTO contact_us(name, email, message) VALUES('$name', '$email', '$message')";
        // echo $sql;
        // exit;
        if($conn->query($sql)){

            echo "<script>myAlert();</script>";
            } else{
            echo "<script>erAlert();</script>";
            }
    }

?>

<!-- Header Section Begin -->
<header class="header-section">
    <!-- Header top start -->
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    agrobd@gmail.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +880 1954149655
                </div>
            </div>
            <div class="ht-right">
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='ys' data-image="img/flag-3.jpg" data-imagecss="flag ys" data-title="English">
                            Bengali</option>
                        <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt" data-title="English">
                            English</option>
                    </select>
                </div>
                <?php if(isset($_SESSION['isLoggedIn'])){?>
                <a href="logout" class="login-panel"><i class="fa fa-sign-out"></i>Logout</a>
                <a href="index" class="login-panel"><i class="fa fa-user"></i><?=$_SESSION['name']?></a>
                <?php }else{ ?>
                <a href="login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                <a href="register" class="reg-panel"><i class="fa fa-user"></i>Register</a>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Header top end -->

    <!-- Inner Header start -->
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <!-- Nav bar start -->
                    <div class="nav-item">
                        <div class="container">
                            <!-- navigation bar start -->
                            <nav class="nav-menu mobile-menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="">Features</a></li>
                                    <li><a href="./blog.php">Blog</a></li>
                                    <li class="active"><a href="">Contact Us</a></li>
                                    <?php if(isset($_SESSION['isLoggedIn'])){?>
                                    <li><a href="seasonplan">Season Plan</a></li>
                                    <li><a href="cropplant">Create Production</a></li>
                                    <?php }else{ ?>
                                    <li><a href="./faq.html">Faq</a></li>
                                    <a href="register.php" class="nav-primary-btn">Get Started</a>
                                    <?php } ?>
                                </ul>
                            </nav>
                            <!-- navigation bar end -->
                            <div id="mobile-menu-wrap"></div>
                        </div>
                    </div>
                    <!-- Nav bar end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Header end -->

    <!-- Last Header start -->
    <?php if(isset($_SESSION['isLoggedIn'])){?>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <!-- Nav bar start -->
                    <div class="nav-item1">
                        <div class="container">
                            <!-- navigation bar start -->
                            <nav class="nav-menu mobile-menu">
                                <ul>
                                    <li><a href="#" style="padding-left: 0px;">Crop Management</a>
                                        <ul class="dropdown">
                                            <li style="border-bottom: 0.5px solid white;">
                                                <a href="crop_production_list">Crop
                                                    Productions</a>
                                            </li>
                                            <li><a href="index2.php">Dragon</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="tasks_show.php">Task</a></li>
                                    <li><a href="#">Finance</a>
                                        <ul class="dropdown">
                                            <li><a href="sales.php">Sales</a></li>
                                            <li><a href="expences.php">Expences</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Resources</a>
                                        <ul class="dropdown">
                                            <li><a href="people.php">People</a></li>
                                            <li><a href="machinary.php">Machinary</a></li>
                                            <li><a href="fields_show.php">Fields</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="fields">Dashboard</a></li>
                                </ul>
                            </nav>
                            <!-- navigation bar end -->
                            <div id="mobile-menu-wrap"></div>
                        </div>
                    </div>
                    <!-- Nav bar end -->
                </div>
                <div class="col-lg-2 text-right col-md-2">
                    <ul class="nav-right">
                        <li class="cart-icon">
                            <a href="#" title="Notification">
                                <i class="fa fa-bell-o"></i>
                                <span>2</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><br>
                                <div class="select-button">
                                    <a href="#" class="primary-btn checkout-btn">Clear all Notification</a>
                                </div>
                            </div>
                        </li>

                        <li class="cart-icon">
                            <a href="#" title="Task">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-pin"></i>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-pin"></i>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-pin" title="pin task"></i>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><br>
                                <div class="select-button">
                                    <a href="#" class="primary-btn view-card">VIEW Task</a>
                                    <a href="#" class="primary-btn checkout-btn">Clear all Task</a>
                                </div>
                            </div>
                        </li>
                        <li id="mBtn" class="cart-icon" title="Notification">
                            <a href="#" title="User Profile">
                                <i class=" icon_profile"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php }else{ ?>
    <?php } ?>
    <!-- Last Header end -->
</header>
<!-- Header End -->

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
                                        <input type="text" name="name" placeholder="Your name" oninput="ontype();">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="email" placeholder="Your email" oninput="ontype();">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Your message" oninput="ontype();"></textarea>
                                        <button type="submit" class="site-btn" name="submit">Send message</button>
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
        } if ($('#email').val() !== '') {
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