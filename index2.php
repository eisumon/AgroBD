<?php include'includes/head.php';
include'includes/navbar.php';
?>

<!-- My crop productions -->
<div class="mcp">
    <div class="container">
        <div class="mcp-box">
            <div class="box-head">
                <span>My crop productions</span>
                <a href="cropplant.php"><i class="fa fa-plus" aria-hidden="true"></i> Add crop production</a>
            </div>
            <hr>
            <a href="">
                <div class="crp-name">
                    <h4>Dragon</h4>
                    <p>Tomato</p>
                </div>
            </a>

            <div class="crp-sug">
                <a href=""><h4>Dragon</h4></a>
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
                            <a href="sales"><i class="fa fa-plus" aria-hidden="true"></i> Register Sales</a>
                        </div>
                    </div>
                    <div class="col-md-4 fin_oview_body">
                        <div class="fin_body_box">
                            <img src="img/sales.png" alt="">
                            <h5><i class="fa fa-money" aria-hidden="true"></i> Expences</h5>
                            <p>No expences record</p>
                            <a href="expences"><i class="fa fa-plus" aria-hidden="true"></i> Register Expences</a>
                        </div>
                    </div>
                    <div class="col-md-4 fin_oview_body">
                        <div class="fin_body_box">
                            <img src="img/sales.png" alt="">
                            <h5><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</h5>
                            <p>Explore Your Dashboard</p>
                            <a href=""><i class="fa fa-search" aria-hidden="true"></i> Explore Dashboard</a>
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
                            <a href="workers"><i class="fa fa-plus" aria-hidden="true"></i> Register Workers</a>
                        </div>
                    </div>
                    <div class="col-md-4 fin_oview_body">
                        <div class="fin_body_box">
                            <img src="img/sales.png" alt="">
                            <h5><i class="fa fa-industry" aria-hidden="true"></i> Machinery</h5>
                            <p>No expences record</p>
                            <a href="machinery"><i class="fa fa-plus" aria-hidden="true"></i> Register Machinery</a>
                        </div>
                    </div>
                    <div class="col-md-4 fin_oview_body">
                        <div class="fin_body_box">
                            <img src="img/sales.png" alt="">
                            <h5><i class="fa fa-home" aria-hidden="true"></i> Inventory</h5>
                            <p>No inventory Record</p>
                            <a href="inventory"><i class="fa fa-plus" aria-hidden="true"></i> Register Inventory</a>
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