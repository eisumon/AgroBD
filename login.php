<?php session_start(); ?>
<?php include'includes/head.php';?>

<script type="text/javascript">
    function myAlert() {

        swal({
            title: "Login Successfully",
            type: "success",
            timer: 1000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "index";
        });
    }

    function erAlert() {
        swal({
            title: "Email or password does not match",
            type: "error",
            timer: 2000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "login";
        });
    }
</script>

</head>

<body>
<?php include_once("dbCon.php");
$conn =connect();
if(isset($_POST["login"])){

$email= mysqli_real_escape_string($conn,$_POST['email']);
$password= mysqli_real_escape_string($conn,md5($_POST['password']));
$sql="SELECT * FROM user_login where email ='$email' AND password='$password'";
            $result = $conn->query($sql);
                    //  print_r($result);
              if($result->num_rows>0){
                   $_SESSION['isLoggedIn']=TRUE;

                    foreach($result as $row){
                            $_SESSION['email']=$row['email'];
                            $_SESSION['name']=$row['name'];
                            
            }

             echo "<script>myAlert();</script>";
                } else{
             echo "<script>erAlert();</script>";
             }        
}

?>

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
                    <a href="register.php" class="login-panel"><i class="fa fa-user"></i>Register</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt" data-title="English">
                                English</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
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
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="./shop.html">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.html">Blog Details</a></li>
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./check-out.html">Checkout</a></li>
                                <li><a href="./faq.html">Faq</a></li>
                                <li><a href="./register.php">Register</a></li>
                                <li class="active"><a href="login.php">Login</a></li>
                            </ul>
                            <?php if(isset($_SESSION['isLoggedIn'])){?>
                        <li><a><?=$_SESSION['name']?></a></li>
                        <li><a href="logout">Log Out</a></li>

                        <?php } ?>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
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
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Login Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2><hr>
                        <form action="" onsubmit="return nullcheck();" method="POST">
                            <div class="group-input">
                                <label for="username"><i class="fa fa-envelope icon"></i> Email address</label>
                                <input type="text" id="email" name="email" placeholder="Enter your email address">
                            </div>
                            <div class="group-input">
                                <label for="pass"><i class="fa fa-key icon"></i> Password</label>
                                <input type="password" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <a href="forgotpassword" class="forget-pass">Forget your Password?</a>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn" name="login">Sign In</button>
                        </form>
                        <div class="switch-login">
                            <a href="./register.php" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
</body>

<script>
    function nullcheck() {

        $(".error").remove();

        if ($('#email').val() == '') {
            $('#email').after('<span class="error">This field is required *</span>');
            return false;
        }

        if ($('#password').val() == '') {
            $('#password').after('<span class="error">This field is required *</span>');
            return false;
        }

        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val())) {

            $('#email').after('<span class="error">Type a valid email!! *</span>');
            return false;

        }
    }
</script>

<!-- Footer-->
<?php include'includes/footer.php';?>
<!-- Footer End-->