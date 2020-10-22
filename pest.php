<?php include'includes/head.php';
include'includes/navbar.php';
?>

<!-- Feature Section -->
<section class="homenav">

    <!-- Inner Header start -->
    <div class="container">
        <div class="">
            <h4 style="padding-bottom: 20px;">Production Name</h4>
            <hr><br>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <!-- Nav bar start -->
                    <div class="nav-item2">
                        <div class="container">
                            <!-- navigation bar start -->
                            <nav class="nav-menu mobile-menu">
                                <ul>
                                    <li><a href="fields.php">Fields</a></li>
                                    <li><a href="create_season.php">Create Seasons</a></li>
                                    <li><a href="tasks.php">Tasks</a></li>
                                    <li class="active"><a href="">Pest</a></li>
                                </ul>
                            </nav>
                            <!-- navigation bar end -->
                        </div>
                    </div>
                    <!-- Nav bar end -->
                </div>
                <div class="col-lg-9 col-md-9 production_box">
                    <!-- Essential button -->
                    <button id="myBtn" style="float: none;">Start live chat</button>
                    <hr>

                    <!-- Filter Table -->
                    <div class="tab_filter">
                        <h5>Filter Search result </h5>
                        <table class="filter">
                            <tr>
                                <th>Pest Category:</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td><i class="fa fa-tag fil_search"></i><select id="country" name="country">
                                        <option value="">All</option>
                                        <option value="canada">Canada</option>
                                        <option value="usa">USA</option>
                                    </select></td>
                                <td style="float: right;"><button class="filter_btn" title="Filter"><i class="fa fa-filter"></i></button>
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
                                <th>Pests name:</th>
                                <th>Type:</th>
                                <th>Desciption:</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Search result</td>
                                <td>Search result</td>
                                <td>Search result</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                        <div class="dropdown-content">
                                            <a href="#" style="color: green;"><i class="fa fa-edit"
                                                    aria-hidden="true"></i> Edit</a>
                                            <a href="#" style="color: red;"><i class="fa fa-trash"
                                                    aria-hidden="true"></i> Delete</a>
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
    </div>
    <!-- Inner Header end -->
</section>


<!-- Footer Section Begin -->
<?php include'includes/footer.php';?>
<!-- Footer Section End -->