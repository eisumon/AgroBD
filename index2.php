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
                <?php if(isset($_SESSION['isLoggedIn'])){?>
                <a href="logout" class="login-panel"><i class="fa fa-sign-out"></i>Logout</a>
                <a href="index" class="login-panel"><i class="fa fa-user"></i><?=$_SESSION['name']?></a>
                <?php }else{ ?>
                <a href="register" class="reg-panel"><i class="fa fa-user"></i>Register</a>
                <a href="login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                <?php } ?>
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='ys' data-image="img/flag-3.jpg" data-imagecss="flag ys" data-title="English">
                            Bengali</option>
                        <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt" data-title="English">
                            English</option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
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
                                    <li><a href="./blog.html">Features</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                    <?php if(isset($_SESSION['isLoggedIn'])){?>
                                    <li><a href="seasonplan">Season Plan</a></li>
                                    <li><a href="crop.php">Create Plant</a></li>

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
                <div class="col-lg-9 col-md-9">
                    <!-- Nav bar start -->
                    <div class="nav-item1">
                        <div class="container">
                            <!-- navigation bar start -->
                            <nav class="nav-menu mobile-menu">
                                <ul>
                                    <li class="active"><a href="index2.php" style="padding-left: 0px;">Crop
                                            Production</a></li>
                                    <li><a href="">Task</a></li>
                                    <li><a href="">Finance</a></li>
                                    <li><a href="">Resources</a></li>
                                    <li><a href="">Dashboard</a></li>
                            </nav>
                            <!-- navigation bar end -->

                            <div id="mobile-menu-wrap"></div>
                        </div>
                    </div>
                    <!-- Nav bar end -->
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon" title="Wish List">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon" title="Cart"><a href="#">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>$120.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">$0.00</li>
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

<!-- My crop productions -->
<div class="mcp">
    <div class="container">
        <div class="mcp-box">
            <div class="box-head">
                <span>My crop productions</span>
                <a href="cropplant.php"><i class="fa fa-plus" aria-hidden="true"></i> Add crop production</a>
            </div>
            <hr>
            <div class="crp-name">
                <h4>Dragon</h4>
                <p>Tomato</p>
            </div>
            <div class="crp-sug">
                <h4>Dragon</h4>
                <hr>
                <div class="row sug_box">
                    <div class="col-md-6 sug_btn">
                        <a href="fields.php"><i class="fa fa-link" aria-hidden="true"></i> Link field</a>
                    </div>
                    <div class="col-md-6 sug_btn">
                        <a href="fields.php"><i class="fa fa-plus" aria-hidden="true"></i> Create Field</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                            <p>No sales record</p>
                            <a><i class="fa fa-plus" aria-hidden="true"></i> Register Sales</a>
                        </div>
                    </div>
                    <div class="col-md-4 fin_oview_body">
                        <div class="fin_body_box">
                            <img src="img/sales.png" alt="">
                            <h5><i class="fa fa-money" aria-hidden="true"></i> Expences</h5>
                            <p>No expences record</p>
                            <a><i class="fa fa-plus" aria-hidden="true"></i> Register Sales</a>
                        </div>
                    </div>
                    <div class="col-md-4 fin_oview_body">
                        <div class="fin_body_box">
                            <img src="img/sales.png" alt="">
                            <h5><i class="fa fa-signal" aria-hidden="true"></i> Upcoming Payments</h5>
                            <p>No Upcoming Payments</p>
                            <a><i class="fa fa-search" aria-hidden="true"></i> Explore Dashboard</a>
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
                            <p>No sales record</p>
                            <a><i class="fa fa-plus" aria-hidden="true"></i> Register Sales</a>
                        </div>
                    </div>
                    <div class="col-md-4 fin_oview_body">
                        <div class="fin_body_box">
                            <img src="img/sales.png" alt="">
                            <h5><i class="fa fa-industry" aria-hidden="true"></i> Machinery</h5>
                            <p>No expences record</p>
                            <a><i class="fa fa-plus" aria-hidden="true"></i> Register Sales</a>
                        </div>
                    </div>
                    <div class="col-md-4 fin_oview_body">
                        <div class="fin_body_box">
                            <img src="img/sales.png" alt="">
                            <h5><i class="fa fa-home" aria-hidden="true"></i> Inventory</h5>
                            <p>No Upcoming Payments</p>
                            <a><i class="fa fa-search" aria-hidden="true"></i> Explore Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer Section Begin -->
<?php include'includes/footer.php';?>
<!-- Footer Section End -->