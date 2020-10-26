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
                                    <li class="active"><a href="">Fields</a></li>
                                    <li><a href="create_season.php">Create Seasons</a></li>
                                    <li><a href="tasks.php">Tasks</a></li>
                                    <li><a href="pest.php">Pest</a></li>
                                </ul>
                            </nav>
                            <!-- navigation bar end -->
                        </div>
                    </div>
                    <!-- Nav bar end -->
                </div>
                <!-- production box -->
                <div class="col-lg-9 col-md-9 production_box">
                    <!-- Essential button -->
                    <button id="linkBtn"><i class="fa fa-link" aria-hidden="true"></i> Link field</button>
                    <!-- The Modal box start -->
                    <div id="linkModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <!-- Modal header -->
                            <div class="modal-header">
                                <h4>Link Field</h4>
                                <span class="close1">&times;</span>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form action="action_page.php">
                                        <div>
                                            <label for="country">Field:</label><br>
                                            <select id="country" name="country">
                                                <option value="australia">Select Field</option>
                                                <option value="canada">Canada</option>
                                                <option value="usa">USA</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="country">Useable area:</label>
                                            <span>--</span>
                                        </div>
                                        <div>
                                            <label for="country">Available area:</label>
                                            <span>--</span>
                                        </div>
                                        <div>
                                            <label for="country">Linked area:</label><br>
                                            <input type="text" id="fname" name="firstname" placeholder="Your name.."
                                                style="width:735px; float: left;">

                                            <select id="country" name="country"
                                                style="width:150px; background-color: silver;">
                                                <option value="australia">ha</option>
                                                <option value="canada">Canada</option>
                                                <option value="usa">USA</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="linkdate">Link date:</label><br>
                                            <input type="date" id="linkdate" name="linkdate">
                                        </div>
                                        <br>
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

                    <button id="myBtn"><i class="fa fa-plus" aria-hidden="true"></i> Create new field</button>
                    <!-- The Modal box start -->
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <!-- Modal header -->
                            <div class="modal-header">
                                <h4>Create Field</h4>
                                <span class="close">&times;</span>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form action="action_page.php">
                                        <div>
                                            <label for="fname">Field Name:</label><br>
                                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                        </div>
                                        <div>
                                            <label for="fname">Location:</label><br>
                                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                        </div>
                                        <div>
                                            <label for="country">Usable area:</label><br>
                                            <input type="text" id="fname" name="firstname" placeholder="Your name.."
                                                style="width:735px; float: left;">

                                            <select id="country" name="country"
                                                style="width:150px; background-color: silver;">
                                                <option value="australia">ha</option>
                                                <option value="canada">Canada</option>
                                                <option value="usa">USA</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="country">Soil type:</label><br>
                                            <select id="country" name="country">
                                                <option value="australia">Australia</option>
                                                <option value="canada">Canada</option>
                                                <option value="usa">USA</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="country">Ownership type:</label><br>
                                            <select id="country" name="country">
                                                <option value="australia">Australia</option>
                                                <option value="canada">Canada</option>
                                                <option value="usa">USA</option>
                                            </select>
                                        </div>
                                        <br>
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
                                <th>Field Name:</th>
                                <th>Location:</th>
                                <th>Usable area:</th>
                                <th>Soil type:</th>
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
                                <td><i class="fa fa-map fil_search"></i><select id="country" name="country">
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
                                <th>Field Name:</th>
                                <th>Location:</th>
                                <th>Usable area: </th>
                                <th>Soil type:</th>
                                <th>Ownership type:</th>
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