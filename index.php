<?php session_start();?>
<?php include'includes/head.php';?>

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
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                    <?php if(isset($_SESSION['isLoggedIn'])){?>
                                    <li><a href="seasonplan">Season Plan</a></li>
                                    <li><a href="cropplant">Create Production</a></li>
                                    <?php }else{ ?>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="./faq.html">Faq</a></li>
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




<?php if(isset($_SESSION['isLoggedIn'])){?>

<!-- Hero Section Begin if logged in -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h1>AgroBD Farm</h1>
                        <p>Plan your season or create your plant production which you want.</p>
                        <a href="cropplant.php" class="primary-btn"><i class="fa fa-plus"></i> Create Production</a>
                        <a href="seasonplan.php" class="primary-btn">Season Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<?php }else{ ?>
<!-- Hero Section Begin if logged out -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h1>AgroBD Farm</h1>
                        <p>Plan your season or create your plant production which you want.</p>
                        <a href="cropplant.php" class="primary-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- How It Works Section Begin-->
<section class="deal-of-week spad">
    <div class="container">
        <div class="text-center">
            <div class="section-title">
                <h2>How It Works?</h2>
                <p>Agrivi farm management software lets you plan, monitor and analyze all activities on your farm
                    easily. Tillage, planting, spraying, fertilization, irrigation, harvesting and all other activities
                    are managed with a few clicks.</p>
            </div>
        </div>
    </div>
</section>
<!-- How It Works Section End -->

<!-- Core Feature Section Begin-->
<section class="spad deal_bg">
    <div class="container">
        <div class="text-center core_fea">
            <div class="section-title">
                <h2>Who Are You?</h2>
                <p>Whether you are a small or large farmer, looking for a tailor-made solution, we have one for you.
                    Powerful farm analytics let you make the right decisions at the right time. Say no to gut-feeling
                    decisions and welcome data-driven farm management.</p>
            </div>
            <div class="section-title">
                <h2>Core Features</h2>
                <p>Complete support for all crops: fruit, vegetables, grains and other.</p>
            </div>
            <div class="row">
                <div class="col-md-6 core_feature">
                    Farm Management
                    Manage all your farming data including field activities, farm finances, and inventory In one single
                    place.
                </div>
                <div class="col-md-6 core_feature">
                    Advanced Pest Detection Algorithms
                    Get alerts if there is a risk of insect pests or diseases on your fields and protect your crops
                    timely.
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 core_feature">
                    Powerful Analytics
                    Real-time overview of your farm performance helps you make the right decisions based on facts.
                </div>
                <div class="col-md-6 core_feature">
                    Best Practice Knowledge
                    Plan your season with the help of our agricultural knowledge base and ensure higher yield.
                </div>
            </div>
            <a href="#" class="primary-btn">Sign Up Free Trail</a>
        </div>
    </div>
</section>
<!-- Core Feature Section End -->

<!-- Testimonial section begain -->
<section class="hero-section testimonial" style="text-align: center;">
    <div class="section-title">
        <h2>What Our Customers Say</h2>
    </div>
    <div class="hero-items1 owl-carousel">
        <div class="single-hero-items">
            <div class="container">
                <div>
                    <span><i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i></span>
                    <h1>Riad Hasan</h1>
                    <p>Seriously such a useful service, If someone asks for a better option, none
                        other than service will be my opinion. It's such a great
                        service that helps the patients in an emergency.</p>
                </div>
            </div>
        </div>
        <div class="single-hero-items">
            <div class="container">
                <div>
                    <span><i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i>
                        <i style="color: gold" class="fa fa-star" aria-hidden="true"></i></span>
                    <h1>Md Fazlul Haque</h1>
                    <p>They are providing very effective service in all kinds of situations. The
                        website interface is very clean and provides all the necessary information.
                        Highly recommended</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section End -->



<!-- Deal Of The Week Section Begin-->
<!-- <section class="deal-of-week spad">
    <div class="container">
        <div class="text-center">
            <div class="section-title">
                <h2>Deal Of The Week</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
                    consectetur adipisicing elit </p>
                <div class="product-price">
                    $35.00
                    <span>/ HanBag</span>
                </div>
            </div>
            <a href="#" class="primary-btn">Shop Now</a>
        </div>
    </div>
</section> -->
<!-- Deal Of The Week Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog spad deal_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="img/latest-1.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 4,2019
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>The Best Street Style From London Fashion Week</h4>
                        </a>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="img/latest-2.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 4,2019
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Vogue's Ultimate Guide To Autumn/Winter 2019 Shoes</h4>
                        </a>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="img/latest-3.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 4,2019
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>How To Brighten Your Wardrobe With A Dash</h4>
                        </a>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->

<!-- Need More Help Section Begin-->
<section class="deal-of-week spad">
    <div class="container">
        <div class="text-center">
            <div class="section-title">
                <h2>Need More Help?</h2>
                <p>Get in touch with our Sales team and let them find the right solution for you.</p>
            </div>
            <a href="#" class="primary-btn">Contact Us</a>
        </div>
    </div>
</section>
<!-- Need More Help Section End -->
<?php } ?>

<!-- Footer Section Begin -->
<?php include'includes/footer.php';?>
<!-- Footer Section End -->
<!-- The Modal box start -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h4>User Profile</h4>
            <span class="close">&times;</span>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container">
                <form action="action_page.php">
                    <div>
                        <label for="fname">First Name:</label><br>
                        <input type="text" id="fname" name="firstname" placeholder="Your name.." disabled>
                    </div>
                    <div>
                        <label for="fname">Last Name:</label><br>
                        <input type="text" id="fname" name="firstname" placeholder="Your name.." disabled>
                    </div>
                    <div>
                        <label for="fname">Email Address:</label><br>
                        <input type="text" id="fname" name="firstname" placeholder="Your email.." disabled>
                    </div>
                    <div>
                        <label for="fname">Phone Number:</label><br>
                        <input type="text" id="fname" name="firstname" placeholder="Your Number.." disabled>
                    </div>
                    <br>
                    <div class="sub"><input type="submit" value="Edit"></div>

                </form>
            </div>
        </div>
        <!-- Modal body end -->
        <!-- Modal footer -->
        <div class="modal-footer">
            <!-- <h3>Modal Footer</h3> -->
        </div>
        <!-- Modal footer end -->
    </div>
    <!-- Modal content end -->
</div>
<!-- The Modal box end -->
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("mBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>