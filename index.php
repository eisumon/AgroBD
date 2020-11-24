<?php include'includes/head.php';
include'includes/navbar.php';
?>
</head>

<body data-spy="scroll" data-target=".nav-menu">
    <?php if(isset($_SESSION['isLoggedIn'])){?>

    <!-- Hero Section Begin if logged in -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
                <div class="container">
                    <div class="">
                        <h1>AgroBD Farm</h1>
                        <p>Plan your season or create your plant production which you want.</p>
                        <a style="margin-right: 10px;" href="cropplant.php" class="primary-btn"><i
                                class="fa fa-plus"></i> Create Production</a>
                        <a href="seasonplan.php" class="primary-btn">Plan Your Season</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Finance overview -->
    <div class="fin_oview">
        <div class="container">
            <div class="fin_oview_box">
                <div class="fin_oview_head">
                    <span>Finance overview</span>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 fin_oview_body">
                            <div class="fin_body_box">
                                <img src="img/sales.png" alt="">
                                <h5><i class="fa fa-signal" aria-hidden="true"></i> Sales</h5>
                                <a href="sales"><i class="fa fa-plus" aria-hidden="true"></i> Register Sales</a>
                            </div>
                        </div>
                        <div class="col-md-4 fin_oview_body">
                            <div class="fin_body_box">
                                <img src="img/sales.png" alt="">
                                <h5><i class="fa fa-money" aria-hidden="true"></i> Expences</h5>
                                <a href="expences"><i class="fa fa-plus" aria-hidden="true"></i> Register Expences</a>
                            </div>
                        </div>
                        <div class="col-md-4 fin_oview_body">
                            <div class="fin_body_box">
                                <img src="img/sales.png" alt="">
                                <h5><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</h5>
                                <a href="dashboard.php"><i class="fa fa-search" aria-hidden="true"></i> Explore
                                    Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resources overview -->
    <div class="fin_oview">
        <div class="container">
            <div class="fin_oview_box">
                <div class="fin_oview_head">
                    <span>Resources overview</span>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 fin_oview_body">
                            <div class="fin_body_box">
                                <img src="img/sales.png" alt="">
                                <h5><i class="fa fa-user" aria-hidden="true"></i> People</h5>
                                <a href="workers"><i class="fa fa-plus" aria-hidden="true"></i> Register Workers</a>
                            </div>
                        </div>
                        <div class="col-md-4 fin_oview_body">
                            <div class="fin_body_box">
                                <img src="img/sales.png" alt="">
                                <h5><i class="fa fa-industry" aria-hidden="true"></i> Machinery</h5>
                                <a href="machinery"><i class="fa fa-plus" aria-hidden="true"></i> Register Machinery</a>
                            </div>
                        </div>
                        <div class="col-md-4 fin_oview_body">
                            <div class="fin_body_box">
                                <img src="img/sales.png" alt="">
                                <h5><i class="fa fa-home" aria-hidden="true"></i> Inventory</h5>
                                <a href="inventory"><i class="fa fa-plus" aria-hidden="true"></i> Register Inventory</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php }else{ ?>
    <!-- Hero Section Begin if logged out -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
                <div class="container">
                    <div class="">
                        <h1>AgroBD Farm</h1>
                        <p>Plan your season or create your plant production which you want.</p>
                        <a href="register.php" class="primary-btn">Get Started</a>
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
                    <p>AgroBD farm management software lets you plan, monitor and analyze all activities on your farm
                        easily. Tillage, planting, spraying, fertilization, irrigation, harvesting and all other
                        activities
                        are managed with a few clicks.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works Section End -->

    <!-- Core Feature Section Begin-->
    <section id="feature" class="spad deal_bg">
        <div class="container">
            <div class="text-center core_fea">
                <div class="section-title">
                    <h2>Our Features</h2>
                    <p>Whether you are a small or large farmer, looking for a tailor-made solution, we have one for you.
                        Powerful farm analytics let you make the right decisions at the right time. Say no to
                        gut-feeling
                        decisions and welcome data-driven farm management.</p>
                    <img style="width: 100%;" src="img/farm.jpg" alt="">
                </div><br>
                <div class="section-title">
                    <h2>Core Features</h2>
                    <p>Complete support for all crops: fruit, vegetables, grains and other.</p>
                </div>
                <div class="row">
                    <div class="col-md-12 core_feature">
                        <h4>Farm Management</h4>
                        <p>Manage all your farming data including field activities, farm finances, and inventory In one
                            single
                            place.</p>
                    </div>
                    <div class="col-md-12 core_feature">
                        <h4>Pest Details</h4>
                        <p>Get pest details and solution to protect your
                            crops
                            timely.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 core_feature">
                        <h4>Powerful Analytics</h4>
                        <p>Real-time overview of your farm performance helps you make the right decisions based on
                            facts.</p>
                    </div>
                    <div class="col-md-12 core_feature">
                        <h4>Best Practice Knowledge</h4>
                        <p>Plan your season with the help of our agricultural knowledge base and ensure higher yield.
                        </p>
                    </div>
                </div>
                <a href="#" class="primary-btn">Sign Up Now</a>
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
                    <div class="tesimonial">
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

    <!-- Need More Help Section Begin-->
    <section class="deal-of-week spad deal_bg">
        <div class="container">
            <div class="text-center">
                <div class="section-title">
                    <h2>Need More Help?</h2>
                    <p>Get in touch with our team and let them find the right solution for you.</p>
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

</body>

</html>