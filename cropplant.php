<?php include'includes/head.php';
include'includes/navbar.php';
?>

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