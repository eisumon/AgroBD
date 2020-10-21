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