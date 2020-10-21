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
                                    <li class="active"><a href="">Tasks</a></li>
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
                    <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Create new
                        tasks</button>
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
                                <th>Season:</th>
                                <th>Categories:</th>
                                <th>Fields: </th>
                                <th>Status: </th>
                                <th></th>
                            </tr>
                            <tr>
                                <td><i class="fa fa-calendar fil_search"></i><select id="country" name="country">
                                        <option value="">-</option>
                                        <option value="canada">Canada</option>
                                        <option value="usa">USA</option>
                                    </select></td>
                                <td><i class="fa fa-tag fil_search"></i><select id="country" name="country">
                                        <option value="">-</option>
                                        <option value="canada">Canada</option>
                                        <option value="usa">USA</option>
                                    </select></td>
                                <td><i class="fa fa-map-marker fil_search"></i><select id="country" name="country">
                                        <option value="">-</option>
                                        <option value="canada">Canada</option>
                                        <option value="usa">USA</option>
                                    </select></td>
                                <td><i class="fa fa-map-marker fil_search"></i><select id="country" name="country">
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
                                <th>Status:</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Search result</td>
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