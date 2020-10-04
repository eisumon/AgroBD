<?php include'includes/head.php';?>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    hello.colorlib@gmail.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +65 11.188.888
                </div>
            </div>
            <div class="ht-right">
                <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt" data-title="English">
                            English</option>
                        <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu" data-title="Bangladesh">
                            German </option>
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
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <form action="#" class="input-group">
                            <input type="text" placeholder="What do you need?">
                            <button type="button"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon"><a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon"><a href="#">
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
                        <li class="cart-price">$150.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="./shop.html">Shop</a></li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li class=""><a href="./contact.html">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.html">Blog Details</a></li>
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./check-out.html">Checkout</a></li>
                                <li><a href="./faq.html">Faq</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="seasonplan">Season Plan</a></li>
                        <li class="active"><a href="cropplant">Create Productions</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

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
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-text">
                            <span class="cp_txt">Crop name:</span>
                            <select class="form-control cp_if" id="sel1">
                                <option>-</option>
                                <option>Winter</option>
                                <option>Summer</option>
                                <option>Rainy</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-text">
                            <span class="cp_txt">Crop Production name:</span>
                            <input type="text" class="form-control cp_if" name="" placeholder="Crop production name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-text">
                            <span class="cp_txt">Location:</span>
                            <input type="text" class="form-control cp_if" name="" placeholder="Your Location">
                        </div>
                    </div>
                </div>
            </div>
        </div><hr>
    </div>
    <div class="contact-title" style="text-align: center; margin-top: 30px;">
        <button type="submit" class="site-btn login-btn">+ Add crop</button>
        <button type="submit" class="site-btn login-btn">Save</button>
    </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Footer Section Begin -->
<?php include'includes/footer.php';?>
<!-- Footer Section End -->