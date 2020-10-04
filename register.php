<?php session_start(); ?>
<?php include'includes/head.php'; ?>

<!-- Alert script start -->
<script type="text/javascript">
    function myAlert() {

        swal({
            title: "Registered Successfully",
            type: "success",
            timer: 3000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "login";
        });
    }

    function erAlert() {
        swal({
            title: "Registration not Successfull",
            type: "error",
            timer: 3000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "register";
        });
    }

    function mailAlert() {
        swal({
            title: "This email has already registered. Try with another email.",
            text: "Try Agian!",
            type: "error",
            timer: 3000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "register";
        });
    }
</script>
<!-- Alert script end -->

</head>

<body>
    <?php include_once("dbCon.php");

$conn =connect();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $company_name = $_POST['company_name'];
    $phone = $_POST['phone'];

    $sql="SELECT email FROM user_login WHERE email='$email'";
    $result = $conn->query($sql);
                    //  print_r($result);
    if($result->num_rows>0){

        echo "<script>mailAlert();</script>";

    }else{
    $sql="INSERT INTO user_login(name, email, password,company_name, phone) VALUES('$name', '$email', '$password', '$company_name', '$phone')";
    //echo $sql;exit;
        if($conn->query($sql)){

    echo "<script>myAlert();</script>";
    } else{
    echo "<script>erAlert();</script>";
    }
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
                    <a href="login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
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
                                <li class="active"><a href="register.php">Register</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2><hr>
                        <form class="form-horizontal" onsubmit="return nullcheck();" action="" method="POST">
                            <div class="group-input">
                                <label for="name"><i class="fa fa-user icon"></i>Your Name*</label>
                                <input type="text" id="name" oninput="ontype();" name="name"
                                    placeholder="Enter your full name" autofocus="">
                            </div>
                            <div class="group-input">
                                <label for="email"> <i class="fa fa-envelope icon"></i> E-mail*</label>
                                <input type="email" id="email" oninput="ontype();" name="email"
                                    placeholder="Enter your email address">
                            </div>
                            <div class="group-input">
                                <label for="password"><i class="fa fa-key icon"></i> Password*</label>
                                <input type="password" id="password" oninput="ontype();" name="password"
                                    placeholder="Enter a new password">
                            </div>
                            <div class="group-input">
                                <label for="company_name"><i class="fa fa-building icon"></i> Company Name*</label>
                                <input type="text" id="company_name" oninput="ontype();" name="company_name"
                                    placeholder="Enter your company name">
                            </div>
                            <div class="group-input">
                                <label for="phone"><i class="fa fa-phone icon"></i> Phone Number*</label>
                                <input type="text" id="phone" oninput="ontype();" name="phone"
                                    placeholder="Enter your phone number">
                            </div>
                            <button type="submit" id="submit" class="site-btn login-btn" name="submit">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="login.php" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

        if ($('#password').val() == '') {
            $('#password').after('<span class="error">* This field is required</span>');
            return false;
        }

        if ($('#company_name').val() == '') {
            $('#company_name').after('<span class="error">* This field is required</span>');
            return false;
        }

        if ($('#phone').val() == '') {
            $('#phone').after('<span class="error">* This field is required</span>');
            return false;
        }


    }

    function ontype() {
        $(".error").remove();

        if (!/^[a-z ]+$/i.test($("#name").val())) {

            $('#name').after('<span class="error">*Your name can not be numeric!!</span>');
            return false;

        } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val())) {
            $('#email').after('<span class="error">* Type a valid email!!</span>');
            return false;

        } else if (isNaN($("#phone").val())) {
            $('#phone').after('<span class="error">* Phone Number is numeric!!</span>');
            return false;

        } else if (!/^[0-9]{11}$/.test($("#phone").val())) {
            $('#phone').after('<span class="error">* Input 11 digit phone number!!</span>');
            return false;

        }
    }
</script>

<!-- Register Form Section End -->


<!-- Footer -->
<?php include'includes/footer.php';?>
<!-- Footer End -->