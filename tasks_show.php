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
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
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
                                    <li><a href="cropplant">Create Plant</a></li>

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
                                    <li><a href="#">Crop Management</a>
                                        <ul class="dropdown">
                                            <li style="border-bottom: 0.5px solid gray;"><a href="index2.php">Crop
                                                    Production</a></li>
                                            <li><a href="">Production Name</a></li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="">Task</a></li>
                                    <li><a href="#">Finance</a>
                                        <ul class="dropdown">
                                            <li><a href="">Sales</a></li>
                                            <li><a href="">Expences</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Resources</a>
                                        <ul class="dropdown">
                                            <li><a href="">People</a></li>
                                            <li><a href="">Machinary</a></li>
                                            <li><a href="">Fields</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Dashboard</a></li>
                                </ul>
                            </nav>
                            <!-- navigation bar end -->

                            <div id="mobile-menu-wrap"></div>
                        </div>
                    </div>
                    <!-- Nav bar end -->
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon" title="Alarm">
                            <a href="#">
                                <i class="icon_clock_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon" title="Notification"><a href="#">
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


<!-- Feature Section -->
<section class="homenav">

    <!-- Inner Header start -->
    <div class="container production_box">
        <div class="">
            <h4>Task</h4>
            <hr>
            <div class="">
                <!-- Essential button -->
                <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Create tasks</button>
                <!-- The Modal box start -->
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <!-- Modal header -->
                        <div class="modal-header">
                            <h4>Create Task</h4>
                            <span class="close">&times;</span>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <form action="action_page.php">

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div>
                                                <label for="fname">Task Name:</label><br>
                                                <input type="text" id="note" name="firstname" placeholder="Your name..">
                                            </div>
                                            <div>
                                                <label for="linkdate">Start date:</label><br>
                                                <input type="date" id="linkdate" name="linkdate">
                                            </div>
                                            <div>
                                                <label for="unlinkdate">End date:</label><br>
                                                <input type="date" id="unlinkdate" name="unlinkdate">
                                            </div>
                                            <div>
                                                <label for="country">Status:</label><br>
                                                <select id="country" name="country">
                                                    <option value="australia">-</option>
                                                    <option value="canada">Canada</option>
                                                    <option value="usa">USA</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="country">Field:</label><br>
                                                <select id="country" name="country">
                                                    <option value="australia">-</option>
                                                    <option value="canada">Canada</option>
                                                    <option value="usa">USA</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="country">Categories:</label><br>
                                                <select id="country" name="country">
                                                    <option value="australia">-</option>
                                                    <option value="canada">Canada</option>
                                                    <option value="usa">USA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5 offset-md-1">
                                            <div>
                                                <label for="country">Crop Production:</label><br>
                                                <select id="country" name="country">
                                                    <option value="australia">-</option>
                                                    <option value="canada">Canada</option>
                                                    <option value="usa">USA</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="country">Season:</label><br>
                                                <select id="country" name="country">
                                                    <option value="australia">-</option>
                                                    <option value="canada">Canada</option>
                                                    <option value="usa">USA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="sub"><input type="submit" value="Submit"></div>
                                    <div class="res"><input type="reset" value="Reset"></div>

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
                <hr>

                <!-- Filter Table -->
                <div class="tab_filter">
                    <h5>Filter Search result </h5>
                    <table class="filter">
                        <tr>
                            <th>Status:</th>
                            <th>Crop Production:</th>
                            <th>Fields: </th>
                            <th>Categories: </th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><i class="fa fa-filter fil_search"></i><select id="country" name="country">
                                    <option value="">-</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select></td>
                            <td><i class="fa fa-map-marker fil_search"></i><select id="country" name="country">
                                    <option value="">-</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select></td>
                            <td><i class="fa fa-map fil_search"></i><select id="country" name="country">
                                    <option value="">-</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select></td>
                            <td><i class="fa fa-tag fil_search"></i><select id="country" name="country">
                                    <option value="">-</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select></td>
                            <td>
                                <button class="filter_btn" title="Filter"><i class="fa fa-filter"></i></button>
                                <button class="res_btn" title="Reset"><i class="fa fa-refresh"></i></button>
                            </td>

                        </tr>
                    </table>
                </div>
                <hr><br>
                <!-- Filter Table end -->

                <!-- Result Table -->
                <div class="tab">
                    <table>
                        <tr>
                            <th>Task Name:</th>
                            <th>Categories:</th>
                            <th>Start date: </th>
                            <th>End date:</th>
                            <th>Fields:</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>Search result</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                    <div class="dropdown-content">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> View
                                            Details</a>
                                        <a href="#" style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                            Edit</a>
                                        <a href="#" style="color: red;"><i class="fa fa-trash" aria-hidden="true"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- Result Table End -->
            </div>
        </div>
    </div>
    <!-- Inner Header end -->
</section>


<!-- Footer Section Begin -->
<?php include'includes/footer.php';?>
<!-- Footer Section End -->