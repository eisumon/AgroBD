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
                                    <li class="active"><a href="">Create Seasons</a></li>
                                    <li><a href="tasks.php">Tasks</a></li>
                                    <li><a href="pest.php">Pest</a></li>
                                </ul>
                            </nav>
                            <!-- navigation bar end -->
                        </div>
                    </div>
                    <!-- Nav bar end -->
                </div>
                <div class="col-lg-9 col-md-9 production_box">
                    <!-- Essential button -->
                    <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Create
                        Season</button>
                    <!-- The Modal box start -->
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <!-- Modal header -->
                            <div class="modal-header">
                                <h4>Season</h4>
                                <span class="close">&times;</span>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form action="action_page.php">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 style="color: green; border-bottom:1px solid green">Season Name</h5>
                                                <div>
                                                    <label for="fname">Season Name:</label><br>
                                                    <input type="text" id="note" name="firstname"
                                                        placeholder="Your name..">
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
                                                        <option value="">-</option>
                                                        <option value="canada">Pending</option>
                                                        <option value="usa">In progress</option>
                                                        <option value="usa">Finished</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h5 style="color: green; border-bottom:1px solid green">Production Type
                                                </h5>
                                                <div>
                                                    <label for="country"> Planting Unit:</label><br>
                                                    <select id="country" name="country">
                                                        <option value="">-</option>
                                                        <option value="canada">Weight</option>
                                                        <option value="usa">Pieces</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="country">Harvest Unit::</label><br>
                                                    <select id="country" name="country">
                                                        <option value="">-</option>
                                                        <option value="canada">Weight</option>
                                                        <option value="usa">Pieces</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="country">Expected Yield:</label><br>
                                                    <input type="text" id="fname" name="firstname"
                                                        placeholder="Your name.." style="width:auto; float: left;">

                                                    <select id="country" name="country"
                                                        style="width:auto;background-color: silver;">
                                                        <option value="">Kg</option>
                                                        <option value="mg">-</option>
                                                        <option value="usa">-</option>
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
                                <th>Season Name:</th>
                                <th>Start Date:</th>
                                <th>End Date: </th>
                                <th>Status: </th>
                                <th></th>
                            </tr>
                            <tr>
                                <td><i class="fa fa-tag fil_search"></i><select id="country" name="country">
                                        <option value="">-</option>
                                        <option value="canada">Canada</option>
                                        <option value="usa">USA</option>
                                    </select></td>
                                <td>
                                    <i class="fa fa-calendar fil_search"></i><input type="date" id="linkdate"
                                        name="linkdate" style="width: 160px;">
                                </td>
                                <td>
                                    <i class="fa fa-calendar fil_search"></i><input type="date" id="linkdate"
                                        name="linkdate" style="width: 160px;">
                                </td>
                                <td><i class="fa fa-check fil_search"></i><select id="country" name="country">
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
                                <th>Season Name:</th>
                                <th>Start Date:</th>
                                <th>End Date:</th>
                                <th>Expected Yield:</th>
                                <th>Status: </th>
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