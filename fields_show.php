<?php include'includes/head.php';
include'includes/navbar.php';
?>


<!-- Feature Section -->
<section class="homenav">

    <!-- Inner Header start -->
    <div class="container production_box">
        <div class="">
            <h4>Fields</h4>
            <hr>
            <div class="">
                <!-- Essential button -->
                <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Add New
                    Field</button>
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
                            <th>Soil type:</th>
                            <th>Ownership type:</th>
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