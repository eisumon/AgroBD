<?php session_start();?>
<?php include'includes/head.php';?>

<!-- Alert script start -->
<script type="text/javascript">
    function myAlert() {

        swal({
            title: "Comment submit Successfully",
            type: "success",
            timer: 2000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "blog-details";
        });
    }

    function erAlert() {
        swal({
            title: "Comment is not submit successfully",
            type: "error",
            timer: 2000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "blog-details";
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

        $sql ="INSERT INTO blog(name, email, message) VALUES('$name', '$email', '$message')";
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
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="./blog.html">Features</a></li>
                                    <li><a href="./blog.php">Blog</a></li>
                                    <li><a href="./contact.php">Contact Us</a></li>
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
                    <a href="index"><i class="fa fa-home"></i> Home</a>
                    <a href="blog">Blog</a>
                    <span>Blog Details</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2>The Personality Trait That Makes People Happier</h2>
                        <p>travel <span>- May 19, 2019</span></p>
                    </div>
                    <div class="blog-large-pic">
                        <img src="img/blog/blog-detail.jpg" alt="">
                    </div>
                    <div class="blog-detail-desc">
                        <p>psum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                        </p>
                    </div>
                    <div class="blog-quote">
                        <p>“ Technology is nothing. What's important is that you have a faith in people, that
                            they're basically good and smart, and if you give them tools, they'll do wonderful
                            things with them.” <span>- Steven Jobs</span></p>
                    </div>
                    <div class="blog-more">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="img/blog/blog-detail-1.jpg" alt="">
                            </div>
                            <div class="col-sm-4">
                                <img src="img/blog/blog-detail-2.jpg" alt="">
                            </div>
                            <div class="col-sm-4">
                                <img src="img/blog/blog-detail-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <p>Sum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                    <div class="tag-share">
                        <div class="details-tag">
                            <ul>
                                <li><i class="fa fa-tags"></i></li>
                                <li>Travel</li>
                                <li>Beauty</li>
                                <li>Fashion</li>
                            </ul>
                        </div>
                        <div class="blog-share">
                            <span>Share:</span>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <a href="#" class="prev-blog">
                                    <div class="pb-pic">
                                        <i class="ti-arrow-left"></i>
                                        <img src="img/blog/prev-blog.png" alt="">
                                    </div>
                                    <div class="pb-text">
                                        <span>Previous Post:</span>
                                        <h5>The Personality Trait That Makes People Happier</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-5 offset-lg-2 col-md-6">
                                <a href="#" class="next-blog">
                                    <div class="nb-pic">
                                        <img src="img/blog/next-blog.png" alt="">
                                        <i class="ti-arrow-right"></i>
                                    </div>
                                    <div class="nb-text">
                                        <span>Next Post:</span>
                                        <h5>The Personality Trait That Makes People Happier</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="posted-by">
                        <div class="pb-pic">
                            <img src="img/blog/post-by.png" alt="">
                        </div>
                        <div class="pb-text">
                            <a href="#">
                                <h5>Shane Lynch</h5>
                            </a>
                            <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                amodo</p>
                        </div>
                    </div>
                    <div class="leave-comment">
                        <h4>Leave A Comment</h4>
                        <form method="POST" class="comment-form" onsubmit="return nullcheck();">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Name" oninput="ontype();">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name="email" oninput="ontype();">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Messages" oninput="ontype();"></textarea>
                                    <button type="submit" name="submit" class="site-btn">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
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
                $('#name').after('<span class="error">*Your name can not be numeric!!</span>');
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